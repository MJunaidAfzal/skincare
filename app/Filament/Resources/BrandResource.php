<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Models\Brand;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;    
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-bookmark-square';
    protected static string|\UnitEnum|null $navigationGroup = 'Shop';

    public static function form(Schema $form): Schema
    {
        return $form
            ->components([
                Group::make()->schema([
                    Section::make('Brand Information')
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
                            TextInput::make('website')
                                ->url()
                                ->maxLength(255)
                                ->columnSpanFull(),
                            Textarea::make('description')
                                ->maxLength(65535)
                                ->rows(4)
                                ->columnSpanFull(),
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
                    Section::make('Brand Logo')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            FileUpload::make('logo')
                                ->image()
                                ->directory('brands')
                                ->imageEditor()
                                ->hiddenLabel(),
                        ]),

                    Section::make('Status')
                        ->icon('heroicon-o-check-circle')
                        ->schema([
                            Toggle::make('is_active')
                                ->label('Visible to public')
                                ->default(true)
                                ->helperText('This brand will be hidden from all sales channels if unchecked.'),
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
                Tables\Columns\ImageColumn::make('logo')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('website')
                    ->searchable()
                    ->limit(30)
                    ->url(fn ($record) => $record->website)
                    ->openUrlInNewTab()
                    ->color('primary'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
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
                    Section::make('Brand Details')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            Infolists\Components\TextEntry::make('name')
                                ->weight('bold'),
                            Infolists\Components\TextEntry::make('slug')
                                ->color('gray')
                                ->copyable(),
                            Infolists\Components\TextEntry::make('website')
                                ->url(fn ($record) => $record->website)
                                ->openUrlInNewTab()
                                ->color('primary'),
                            Infolists\Components\IconEntry::make('is_active')
                                ->boolean()
                                ->label('Status'),
                            Infolists\Components\TextEntry::make('sort_order')
                                ->badge()
                                ->color('info'),
                            Infolists\Components\TextEntry::make('description')
                                ->columnSpanFull(),
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
                    Section::make('Brand Logo')
                        ->icon('heroicon-o-photo')
                        ->schema([
                            Infolists\Components\ImageEntry::make('logo')
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'view' => Pages\ViewBrand::route('/{record}'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
