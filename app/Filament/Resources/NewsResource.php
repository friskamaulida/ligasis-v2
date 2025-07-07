<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Filament\Traits\HasDynamicNavigation;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    use HasDynamicNavigation;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $pluralModelLabel = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated(),

                FileUpload::make('thumbnail')
                    ->label('Gambar Thumbnail')
                    ->image()
                    ->directory('news')
                    ->imageEditor(),

                TextInput::make('category')
                    ->label('Kategori')
                    ->placeholder('Misal: Education,Health'),

                TextInput::make('tags')
                    ->label('Tags')
                    ->placeholder('Misal: anak, air bersih'),

                Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->maxLength(255)
                    ->rows(2),

                RichEditor::make('body')
                    ->label('Isi Berita')
                    ->required(),

                TextInput::make('author')
                    ->label('Penulis')
                    ->default('Admin'),

                Toggle::make('is_active')
                    ->label('Aktif?')
                    ->default(true),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Gambar')
                    ->size(60)
                    ->circular(),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(30)
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori'),

                TextColumn::make('author')
                    ->label('Penulis'),

                ToggleColumn::make('is_active')
                    ->label('Aktif'),

                TextColumn::make('published_at')
                    ->label('Dipublikasikan')
                    ->dateTime('d M Y H:i'),
            ])
            ->defaultSort('published_at', 'desc')
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
