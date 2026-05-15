<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Section;    

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $modelLabel = 'Setting';

    // Disallow creation if a setting already exists
    public static function canCreate(): bool
    {
        return Setting::count() === 0;
    }

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Tabs::make('Settings')
                    ->tabs([
                        Tab::make('General')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                Forms\Components\TextInput::make('site_name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('site_email')
                                    ->email()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('site_phone')
                                    ->tel()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('currency')
                                    ->default('PKR')
                                    ->maxLength(10),
                                Forms\Components\Toggle::make('maintenance_mode')
                                    ->label('Maintenance Mode')
                                    ->default(false),
                            ])->columns(2),

                        Tab::make('Branding')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->image()
                                    ->directory('settings/logo'),
                                Forms\Components\FileUpload::make('favicon')
                                    ->image()
                                    ->directory('settings/favicon'),
                            ])->columns(2),

                        Tab::make('Social Links')
                            ->icon('heroicon-o-share')
                            ->schema([
                                Forms\Components\TextInput::make('facebook')
                                    ->url()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('instagram')
                                    ->url()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('twitter')
                                    ->url()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('youtube')
                                    ->url()
                                    ->maxLength(255),
                            ])->columns(2),

                        Tab::make('SEO & Address')
                            ->icon('heroicon-o-globe-alt')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('meta_description')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('meta_keywords')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('address')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('favicon')
                    ->label('Favicon')
                    ->height('60px')
                    ->width('60px')
                    ->circular(),
                Tables\Columns\TextColumn::make('site_name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn (Setting $record): string => $record->site_email ?? ''),
                Tables\Columns\TextColumn::make('site_phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('currency')
                    ->badge()
                    ->color('success'),
                Tables\Columns\IconColumn::make('maintenance_mode')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
                \Filament\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Hide bulk delete since there's only one setting record
            ]);
    }

    public static function infolist(Schema $infolist): Schema
    {
        return $infolist
            ->schema([
                Section::make('General Information')
                    ->schema([
                        Infolists\Components\TextEntry::make('site_name'),
                        Infolists\Components\TextEntry::make('site_email'),
                        Infolists\Components\TextEntry::make('site_phone'),
                        Infolists\Components\TextEntry::make('currency')
                            ->badge()
                            ->color('success'),
                        Infolists\Components\IconEntry::make('maintenance_mode')
                            ->boolean(),
                    ])->columns(2),

                Section::make('Branding')
                    ->schema([
                        Infolists\Components\ImageEntry::make('logo'),
                        Infolists\Components\ImageEntry::make('favicon'),
                    ])->columns(2),

                Section::make('Social Links')
                    ->schema([
                        Infolists\Components\TextEntry::make('facebook')->url(fn ($record) => $record->facebook),
                        Infolists\Components\TextEntry::make('instagram')->url(fn ($record) => $record->instagram),
                        Infolists\Components\TextEntry::make('twitter')->url(fn ($record) => $record->twitter),
                        Infolists\Components\TextEntry::make('youtube')->url(fn ($record) => $record->youtube),
                    ])->columns(2),

                Section::make('SEO & Address')
                    ->schema([
                        Infolists\Components\TextEntry::make('meta_title'),
                        Infolists\Components\TextEntry::make('meta_description'),
                        Infolists\Components\TextEntry::make('meta_keywords'),
                        Infolists\Components\TextEntry::make('address'),
                    ])->columns(1),
            ]);
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'view' => Pages\ViewSetting::route('/{record}'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
