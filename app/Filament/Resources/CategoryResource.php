<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Schemas\Components\Section;    
use Filament\Schemas\Components\Group;    
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';
    protected static string|\UnitEnum|null $navigationGroup = 'Shop';

    public static function form(Schema $form): Schema
    {
        return $form
            ->components([
                Group::make()->schema([
                    Section::make('General Information')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                            TextInput::make('slug')
                                ->required()
                                ->maxLength(255)
                                ->unique(ignoreRecord: true)
                                ->helperText('Used for the URL.'),
                        ])->columns(2),

                    Section::make('SEO Settings')
                        ->icon('heroicon-o-globe-alt')
                        ->schema([
                            TextInput::make('meta_title')
                                ->maxLength(255)
                                ->columnSpanFull(),
                            Textarea::make('meta_description')
                                ->maxLength(65535)
                                ->rows(3)
                                ->columnSpanFull(),
                        ])->collapsed(),
                ])->columnSpan(['lg' => 2]),

                Group::make()->schema([
                    Section::make('Category Image')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('image')
                                ->image()
                                ->directory('categories')
                                ->imageEditor()
                                ->hiddenLabel(),
                        ]),

                    Section::make('Status')
                        ->icon('heroicon-o-check-circle')
                        ->schema([
                            Toggle::make('is_active')
                                ->label('Visible to public')
                                ->default(true)
                                ->helperText('This category will be hidden from all sales channels if unchecked.'),
                        ]),

                    Section::make('Sorting')
                        ->icon('heroicon-o-bars-3-bottom-left')
                        ->schema([
                            TextInput::make('sort_order')
                                ->numeric()
                                ->default(0)
                                ->helperText('Lower numbers appear first.'),
                        ]),
                ])->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->color('gray'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->boolean(),
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }

    public static function infolist(Schema $infolist): Schema
    {
        return $infolist
            ->schema([
                Group::make()->schema([
                    Section::make('Category Details')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            Infolists\Components\TextEntry::make('name')
                                ->weight('bold'),
                            Infolists\Components\TextEntry::make('slug')
                                ->color('gray')
                                ->copyable(),
                            Infolists\Components\IconEntry::make('is_active')
                                ->boolean()
                                ->label('Status'),
                            Infolists\Components\TextEntry::make('sort_order')
                                ->badge()
                                ->color('info'),
                        ])->columns(2),

                    Section::make('SEO Information')
                        ->icon('heroicon-o-globe-alt')
                        ->schema([
                            Infolists\Components\TextEntry::make('meta_title'),
                            Infolists\Components\TextEntry::make('meta_description')
                                ->columnSpanFull(),
                        ])->columns(2),
                ])->columnSpan(['lg' => 2]),

                Group::make()->schema([
                    Section::make('Category Image')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            Infolists\Components\ImageEntry::make('image')
                                ->hiddenLabel()
                                ->circular(),
                        ]),
                    Section::make('Meta Data')
                        ->icon('heroicon-o-calendar')
                        ->schema([
                            Infolists\Components\TextEntry::make('created_at')
                                ->dateTime(),
                            Infolists\Components\TextEntry::make('updated_at')
                                ->dateTime(),
                        ])
                ])->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'view' => Pages\ViewCategory::route('/{record}'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
