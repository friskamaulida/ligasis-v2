<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataFEResource\Pages;
use App\Filament\Traits\HasDynamicNavigation;
use App\Filament\Resources\DataFEResource\RelationManagers;
use App\Models\DataFE;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataFEResource extends Resource
{
    use HasDynamicNavigation;
    protected static ?string $model = DataFE::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?string $navigationLabel = 'Data Tampilan';
    protected static ?string $pluralModelLabel = 'Data Tampilan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('running_text')->required(),
                TextInput::make('linkyoutobe')->required(),
                TextInput::make('linkig')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('running_text'),
                TextColumn::make('linkyoutobe'),
                TextColumn::make('linkig'),
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
            'index' => Pages\ListDataFES::route('/'),
            'create' => Pages\CreateDataFE::route('/create'),
            'edit' => Pages\EditDataFE::route('/{record}/edit'),
        ];
    }
}
