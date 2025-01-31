<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SummaryReportResource\Pages;
use App\Filament\Admin\Resources\SummaryReportResource\RelationManagers;
use App\Models\SummaryReport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SummaryReportResource extends Resource
{
    protected static ?string $model = SummaryReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('weekly')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('monthly')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('weekly')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monthly')
                    ->searchable(),
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
            'index' => Pages\ListSummaryReports::route('/'),
            'create' => Pages\CreateSummaryReport::route('/create'),
            'edit' => Pages\EditSummaryReport::route('/{record}/edit'),
        ];
    }
}
