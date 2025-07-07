<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangSekolahResource\Pages;
use App\Filament\Resources\TentangSekolahResource\RelationManagers;
use App\Filament\Traits\HasDynamicNavigation;
use App\Models\TentangSekolah;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangSekolahResource extends Resource
{
    protected static ?string $model = TentangSekolah::class;
    use HasDynamicNavigation;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?string $navigationLabel = 'Tentang Sekolah';
    protected static ?string $pluralModelLabel = 'Tentang Sekolah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kepala_sekolah')->required(),
                TextInput::make('gelar')->nullable(),
                TextInput::make('jabatan')->default('Kepala Sekolah'),
                FileUpload::make('foto')
                    ->label('Foto Kepala Sekolah')
                    ->image()
                    ->directory('tentang-sekolah')
                    ->maxSize(2048),
                TextInput::make('twitter')->label('Link Twitter')->nullable(),
                TextInput::make('facebook')->label('Link Facebook')->nullable(),
                TextInput::make('instagram')->label('Link Instagram')->nullable(),
                RichEditor::make('sambutan')->required()->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->label('Foto')->circular(),
                TextColumn::make('nama_kepala_sekolah')->label('Nama'),
                TextColumn::make('jabatan')->label('Jabatan'),
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
            'index' => Pages\ListTentangSekolahs::route('/'),
            'create' => Pages\CreateTentangSekolah::route('/create'),
            'edit' => Pages\EditTentangSekolah::route('/{record}/edit'),
        ];
    }
}
