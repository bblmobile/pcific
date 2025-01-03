<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TakimResource\Pages;
use App\Filament\Resources\TakimResource\RelationManagers;
use App\Models\Takim;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TakimResource extends Resource {
	protected static ?string $model = Takim::class;
	protected static ?string $navigationIcon = 'heroicon-o-users'; // Takım için uygun bir ikon
	protected static ?string $navigationLabel = 'Takımlar';
	protected static ?string $modelLabel = 'Takım';
	protected static ?string $pluralModelLabel = 'Takımlar';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Forms\Components\TextInput::make('name')
					->required()
					->label('Takım Adı')
					->maxLength(255)
					->placeholder('Takım adını giriniz'),
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				Tables\Columns\TextColumn::make('name')
					->label('Takım Adı')
					->searchable()
					->sortable(),

				Tables\Columns\TextColumn::make('created_at')
					->label('Oluşturulma Tarihi')
					->dateTime('d/m/Y H:i')
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),

				Tables\Columns\TextColumn::make('updated_at')
					->label('Güncellenme Tarihi')
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
			'index' => Pages\ListTakims::route('/'),
			'create' => Pages\CreateTakim::route('/create'),
			'edit' => Pages\EditTakim::route('/{record}/edit'),
		];
	}
}
