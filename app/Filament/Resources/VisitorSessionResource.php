<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorSessionResource\Pages;
use App\Models\VisitorSession;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Schemas\Components\Section;

class VisitorSessionResource extends Resource
{
    protected static ?string $model = VisitorSession::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-users';
    protected static string|\UnitEnum|null $navigationGroup = 'Tracking';
    protected static ?string $navigationLabel = 'Visitor Sessions';
    protected static ?string $modelLabel = 'Visitor Session';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }

    public static function form(Schema $form): Schema
    {
        return $form->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ip_address')
                    ->label('IP Address')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('browser')
                    ->searchable(),
                Tables\Columns\TextColumn::make('platform')
                    ->searchable(),
                Tables\Columns\TextColumn::make('device')
                    ->badge()
                    ->color('info')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('last_activity')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->boolean()
                    ->trueLabel('Active Sessions')
                    ->falseLabel('Inactive Sessions'),
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Kept empty to avoid namespace issues with bulk actions, delete individually via action or customize later
            ])
            ->defaultSort('last_activity', 'desc');
    }

    public static function infolist(Schema $infolist): Schema
    {
        return $infolist
            ->schema([
                \Filament\Schemas\Components\Group::make()->schema([
                    Section::make('Session Information')
                        ->icon('heroicon-o-identification')
                        ->schema([
                            Infolists\Components\TextEntry::make('session_token')
                                ->copyable()
                                ->tooltip('Click to copy')
                                ->weight('bold')
                                ->color('primary'),
                            Infolists\Components\TextEntry::make('ip_address')
                                ->label('IP Address')
                                ->icon('heroicon-m-globe-alt'),
                        ])->columns(2),

                    Section::make('Device & Browser')
                        ->icon('heroicon-o-computer-desktop')
                        ->schema([
                            Infolists\Components\TextEntry::make('device')
                                ->badge()
                                ->color('info'),
                            Infolists\Components\TextEntry::make('browser')
                                ->icon('heroicon-m-window'),
                            Infolists\Components\TextEntry::make('platform')
                                ->icon('heroicon-m-server'),
                            Infolists\Components\TextEntry::make('user_agent')
                                ->label('Raw User Agent')
                                ->columnSpanFull()
                                ->color('gray'),
                        ])->columns(3),
                ])->columnSpan(['lg' => 2]),

                \Filament\Schemas\Components\Group::make()->schema([
                    Section::make('Status')
                        ->icon('heroicon-o-signal')
                        ->schema([
                            Infolists\Components\IconEntry::make('is_active')
                                ->boolean()
                                ->label('Active Session'),
                        ]),

                    Section::make('Tracking History')
                        ->icon('heroicon-o-clock')
                        ->schema([
                            Infolists\Components\TextEntry::make('created_at')
                                ->dateTime()
                                ->label('First Seen')
                                ->since(),
                            Infolists\Components\TextEntry::make('last_activity')
                                ->dateTime()
                                ->label('Last Activity')
                                ->since(),
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
            'index' => Pages\ListVisitorSessions::route('/'),
            'view' => Pages\ViewVisitorSession::route('/{record}'),
        ];
    }
}
