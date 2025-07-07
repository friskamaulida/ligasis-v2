<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Traits\HasDynamicNavigation;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MenuResource extends Resource
{
    use HasDynamicNavigation;

    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Administrator';
    protected static ?string $navigationLabel = 'Menu';
    protected static ?string $pluralModelLabel = 'Menu';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('label')->required(),
            Forms\Components\TextInput::make('url')->required(),
            Forms\Components\TextInput::make('icon')->default('heroicon-o-link'),
            Forms\Components\Select::make('roles')
                ->multiple()
                ->options([
                    'admin' => 'Admin',
                    'guru' => 'Guru',
                    'siswa' => 'Siswa',
                ])
                ->required(),
            Forms\Components\TextInput::make('group')->label('Navigation Group')->nullable(),
            Forms\Components\TextInput::make('plural_label')->label('Plural Label')->nullable(),
            Forms\Components\TextInput::make('order')->numeric()->default(0),
            Forms\Components\Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('label'),
            Tables\Columns\TextColumn::make('url'),
            Tables\Columns\TextColumn::make('roles')
                ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state),
            Tables\Columns\TextColumn::make('group'),
            Tables\Columns\TextColumn::make('plural_label'),
            Tables\Columns\TextColumn::make('order'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
