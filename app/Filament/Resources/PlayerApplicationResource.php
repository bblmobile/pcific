<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayerApplicationResource\Pages;
use App\Filament\Resources\PlayerApplicationResource\RelationManagers;
use App\Models\PlayerApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class PlayerApplicationResource extends Resource {
	protected static ?string $model = PlayerApplication::class;

	protected static ?string $navigationIcon = 'heroicon-o-user-group';

	protected static ?string $navigationLabel = 'Oyuncu Başvuruları';

	protected static ?string $modelLabel = 'Oyuncu Başvurusu';

	protected static ?string $pluralModelLabel = 'Oyuncu Başvuruları';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Forms\Components\Section::make('Başvuru Bilgileri')
					->schema([
						Forms\Components\TextInput::make('first_name')
							->label('Ad')
							->required()
							->maxLength(255),

						Forms\Components\TextInput::make('last_name')
							->label('Soyad')
							->required()
							->maxLength(255),

						Forms\Components\DatePicker::make('birth_date')
							->label('Doğum Tarihi')
							->required(),

						Forms\Components\TextInput::make('email')
							->label('E-posta')
							->email()
							->required()
							->maxLength(255),

						Forms\Components\TextInput::make('phone')
							->label('Telefon')
							->tel()
							->required()
							->maxLength(20),
					])->columns(2),

				Forms\Components\Section::make('Veli Bilgileri')
					->schema([
						Forms\Components\TextInput::make('parent_full_name')
							->label('Veli Adı Soyadı')
							->maxLength(255),

						Forms\Components\TextInput::make('parent_phone')
							->label('Veli Telefon')
							->tel()
							->maxLength(20),
					])->columns(2),

				Forms\Components\Section::make('Oyun ve İletişim Durumu')
					->schema([
						Forms\Components\Select::make('selected_game')
							->label('Seçilen Oyun')
							->options([
								'Valorant' => 'Valorant',
								'CS' => 'CS',
								'FC' => 'FC',
								'LOL' => 'LOL',
								'DOTA 2' => 'DOTA 2',
								'PB' => 'PB',
								'R6' => 'R6',
							])
							->required(),

						Forms\Components\Toggle::make('is_mail_sent')
							->label('Mail Gönderildi mi?')
							->default(false),
					])->columns(2),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				Tables\Columns\TextColumn::make('first_name')
					->label('Ad')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('last_name')
					->label('Soyad')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('birth_date')
					->label('Doğum Tarihi')
					->date('d.m.Y')
					->sortable(),

				Tables\Columns\TextColumn::make('email')
					->label('E-posta')
					->searchable(),

				Tables\Columns\TextColumn::make('phone')
					->label('Telefon'),

				Tables\Columns\TextColumn::make('selected_game')
					->label('Oyun')
					->sortable(),

				Tables\Columns\IconColumn::make('is_mail_sent')
					->label('Mail Durumu')
					->boolean()
					->trueIcon('heroicon-o-check-circle')
					->falseIcon('heroicon-o-x-circle'),

				Tables\Columns\TextColumn::make('created_at')
					->label('Başvuru Tarihi')
					->dateTime('d.m.Y H:i')
					->sortable(),
			])
			->filters([
				SelectFilter::make('selected_game')
					->label('Oyun')
					->options([
						'Valorant' => 'Valorant',
						'CS' => 'CS',
						'FC' => 'FC',
						'LOL' => 'LOL',
						'DOTA 2' => 'DOTA 2',
						'PB' => 'PB',
						'R6' => 'R6',
					]),

				Filter::make('is_mail_sent')
					->label('Mail Durumu')
					->query(fn(Builder $query): Builder => $query->where('is_mail_sent', true))
					->toggle(),

				Filter::make('age_under_18')
					->label('18 Yaş Altı')
					->query(
						fn(Builder $query): Builder =>
						$query->whereRaw('TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) < 18')
					)
					->toggle(),
			])
			->actions([
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make(),
			])
			->bulkActions([
				Tables\Actions\DeleteBulkAction::make(),
			]);
	}

	public static function getRelations(): array {
		return [
			//
		];
	}

	public static function getPages(): array {
		return [
			'index' => Pages\ListPlayerApplications::route('/'),
			'create' => Pages\CreatePlayerApplication::route('/create'),
			'edit' => Pages\EditPlayerApplication::route('/{record}/edit'),
		];
	}
}
