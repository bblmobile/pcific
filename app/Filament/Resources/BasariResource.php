<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BasariResource\Pages;
use App\Filament\Resources\BasariResource\RelationManagers;
use App\Models\Basari;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BasariResource extends Resource {
	protected static ?string $model = Basari::class;

	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
	protected static ?string $navigationLabel = 'Başarılar';
	protected static ?string $modelLabel = 'Başarı';
	protected static ?string $pluralModelLabel = 'Başarılar';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Forms\Components\Select::make('oyun')
					->options([
						'Valorant' => 'Valorant',
						'CS' => 'CS',
						'FC' => 'FC',
						'LOL' => 'LOL',
						'DOTA 2' => 'DOTA 2',
						'PB' => 'PB',
						'R6' => 'R6'
					])
					->required()
					->searchable(), // Arama yapılabilir olması için

				Forms\Components\TextInput::make('turnuva')
					->required()
					->maxLength(255),

				Forms\Components\TextInput::make('derece')
					->required()
					->maxLength(255),

				Forms\Components\DatePicker::make('tarih')
					->required(),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				Tables\Columns\TextColumn::make('oyun')
					->sortable()
					->searchable(),
				Tables\Columns\TextColumn::make('turnuva')
					->sortable()
					->searchable(),
				Tables\Columns\TextColumn::make('derece')
					->sortable(),
				Tables\Columns\TextColumn::make('tarih')
					->date()
					->sortable(),
				Tables\Columns\TextColumn::make('created_at')
					->dateTime()
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
			])
			->filters([
				Tables\Filters\SelectFilter::make('oyun')
					->options([
						'Valorant' => 'Valorant',
						'CS' => 'CS',
						'FC' => 'FC',
						'LOL' => 'LOL',
						'DOTA 2' => 'DOTA 2',
						'PB' => 'PB',
						'R6' => 'R6'
					])
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
			'index' => Pages\ListBasaris::route('/'),
			'create' => Pages\CreateBasari::route('/create'),
			'edit' => Pages\EditBasari::route('/{record}/edit'),
		];
	}
}
