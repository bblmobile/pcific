<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OyuncuResource\Pages;
use App\Filament\Resources\OyuncuResource\RelationManagers;
use App\Models\Oyuncu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OyuncuResource extends Resource {
	protected static ?string $model = Oyuncu::class;

	protected static ?string $navigationIcon = 'heroicon-o-user-group';
	protected static ?string $navigationLabel = 'Oyuncular';
	protected static ?string $modelLabel = 'Oyuncu';
	protected static ?string $pluralModelLabel = 'Oyuncular';

	public static function form(Form $form): Form {
		return $form
			->schema([
				// Temel Bilgiler Bölümü
				Forms\Components\Section::make('Temel Bilgiler')
					->schema([
						Forms\Components\FileUpload::make('image')
							->label('Profil Fotoğrafı')
							->image()
							->directory('oyuncular')
							->visibility('public')
							->imageEditor()
							->columnSpan('full'),

						Forms\Components\TextInput::make('name')
							->label('Ad Soyad')
							->required()
							->maxLength(255),

						Forms\Components\TextInput::make('nickname')
							->label('Oyuncu Adı (Nickname)')
							->required()
							->maxLength(255),

						Forms\Components\TextInput::make('team')
							->label('Takım')
							->maxLength(255),
					])->columns(2),

				// Oyun Tercihleri Bölümü
				Forms\Components\Section::make('Oyun Tercihleri')
					->schema([
						Forms\Components\TextInput::make('favourite_weapon')
							->label('Favori Silah')
							->maxLength(255),

						Forms\Components\TextInput::make('favourite_agent')
							->label('Favori Ajan')
							->maxLength(255),
					])->columns(2),

				// Biyografi Bölümü
				Forms\Components\Section::make('Biyografi')
					->schema([
						Forms\Components\Textarea::make('bio')
							->label('Biyografi')
							->rows(4)
							->maxLength(65535)
							->columnSpan('full'),
					]),

				// Sosyal Medya Bölümü
				Forms\Components\Section::make('Sosyal Medya Hesapları')
					->schema([
						Forms\Components\TextInput::make('instagram')
							->label('Instagram')
							->prefix('@')
							->maxLength(255),

						Forms\Components\TextInput::make('x')
							->label('X (Twitter)')
							->prefix('@')
							->maxLength(255),

						Forms\Components\TextInput::make('twich')
							->label('Twitch')
							->prefix('twitch.tv/')
							->maxLength(255),

						Forms\Components\TextInput::make('youtube')
							->label('YouTube')
							->prefix('youtube.com/@')
							->maxLength(255),
					])->columns(2),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				Tables\Columns\ImageColumn::make('image')
					->label('Fotoğraf')
					->circular(),

				Tables\Columns\TextColumn::make('name')
					->label('Ad Soyad')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('nickname')
					->label('Nickname')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('team')
					->label('Takım')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('created_at')
					->label('Oluşturulma Tarihi')
					->dateTime('d/m/Y H:i')
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
			])
			->filters([
				//
			])
			->actions([
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make(),
			])
			->bulkActions([
				Tables\Actions\BulkActionGroup::make([
					Tables\Actions\DeleteBulkAction::make(),
				]),
			]);
	}

	public static function getRelations(): array {
		return [
			//
		];
	}

	public static function getPages(): array {
		return [
			'index' => Pages\ListOyuncus::route('/'),
			'create' => Pages\CreateOyuncu::route('/create'),
			'edit' => Pages\EditOyuncu::route('/{record}/edit'),
		];
	}
}
