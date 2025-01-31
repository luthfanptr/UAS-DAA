<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AirQualityResource\Pages;
use App\Filament\Admin\Resources\AirQualityResource\RelationManagers;
use App\Models\AirQuality;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirQualityResource extends Resource
{
    protected static ?string $model = AirQuality::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('categories')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('temperature_celcius')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('humidity_percent')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('categories')
                    ->searchable(),
                Tables\Columns\TextColumn::make('temperature_celcius')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('humidity_percent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAirQualities::route('/'),
            'create' => Pages\CreateAirQuality::route('/create'),
            'edit' => Pages\EditAirQuality::route('/{record}/edit'),
        ];
    }
}
