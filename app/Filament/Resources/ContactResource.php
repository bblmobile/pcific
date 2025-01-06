<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Iletisim;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource {
	protected static ?string $model = Iletisim::class;
	protected static ?string $navigationIcon = 'heroicon-o-envelope';
	protected static ?string $navigationLabel = 'İletişim Formları';
	protected static ?string $modelLabel = 'İletişim Formu';
	protected static ?string $pluralModelLabel = 'İletişim Formları';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Section::make('İletişim Formu Detayları')
					->schema([
						Forms\Components\TextInput::make('first_name')
							->label('Ad')
							->disabled(),
						Forms\Components\TextInput::make('last_name')
							->label('Soyad')
							->disabled(),
						Forms\Components\TextInput::make('email')
							->label('E-posta')
							->disabled(),
						Forms\Components\TextInput::make('phone')
							->label('Telefon')
							->disabled(),
						Forms\Components\Textarea::make('message')
							->label('Mesaj')
							->disabled()
							->columnSpan('full'),
						Forms\Components\TextInput::make('created_at')
							->label('Gönderim Tarihi')
							->disabled(),
					])
					->columns(2)
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
				Tables\Columns\TextColumn::make('email')
					->label('E-posta')
					->searchable()
					->sortable(),
				Tables\Columns\TextColumn::make('phone')
					->label('Telefon'),
				Tables\Columns\TextColumn::make('created_at')
					->label('Gönderim Tarihi')
					->dateTime('d.m.Y H:i')
					->sortable(),
			])
			->defaultSort('created_at', 'desc')
			->actions([
				Tables\Actions\ViewAction::make(),
			]);
	}

	public static function getRelations(): array {
		return [
			//
		];
	}

	public static function getPages(): array {
		return [
			'index' => Pages\ListContacts::route('/'),
			'view' => Pages\ViewContact::route('/{record}'),
		];
	}
}
