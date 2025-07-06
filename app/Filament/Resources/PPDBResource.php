<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PPDBResource\Pages;
use App\Filament\Resources\PPDBResource\RelationManagers;
use App\Models\PPDB;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PPDBResource extends Resource
{
    protected static ?string $model = PPDB::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'PPDB';
    protected static ?string $pluralModelLabel = 'PPDB';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                TextInput::make('nisn')->required()->numeric()->unique(ignoreRecord: true),
                Select::make('jenis_kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                DatePicker::make('tanggal_lahir')->required(),
                TextInput::make('alamat')->required(),
                TextInput::make('nama_ayah')->required(),
                TextInput::make('nama_ibu')->required(),
                TextInput::make('asal_sekolah')->required(),
                TextInput::make('no_hp')->required(),
                FileUpload::make('foto')->image()->directory('ppdb')->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->label('Foto')->size(40),
                TextColumn::make('nama')->searchable()->sortable(),
                TextColumn::make('nisn'),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('asal_sekolah'),
                TextColumn::make('no_hp'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\Action::make('print')
                ->label('Print')
                ->icon('heroicon-o-printer')
                ->url(fn (PPDB $record) => route('ppdb.admin.print', $record->id))
                ->openUrlInNewTab(),
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
            'index' => Pages\ListPPDBS::route('/'),
            'create' => Pages\CreatePPDB::route('/create'),
            'edit' => Pages\EditPPDB::route('/{record}/edit'),
        ];
    }
}
