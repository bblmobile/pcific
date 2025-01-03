<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SponsorResource\Pages;
use App\Models\Sponsor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SponsorResource extends Resource {
	protected static ?string $model = Sponsor::class;

	protected static ?string $navigationIcon = 'heroicon-o-star'; // İkonu değiştirebilirsiniz
	protected static ?string $navigationLabel = 'Sponsorlar'; // Menüde görünecek isim
	protected static ?string $modelLabel = 'Sponsor';
	protected static ?string $pluralModelLabel = 'Sponsorlar';

	public static function form(Form $form): Form {
		return $form
			->schema([
				Forms\Components\TextInput::make('name')
					->required()
					->label('Sponsor Adı')
					->maxLength(255),

				Forms\Components\FileUpload::make('image')
					->label('Sponsor Görseli')
					->image() // Sadece resim dosyalarını kabul eder
					->directory('sponsors') // storage/app/public/sponsors klasörüne kaydeder
					->visibility('public')
					// ->maxSize(2048) // 2MB maksimum boyut
					->acceptedFileTypes(['image/*']) // Sadece resim dosyaları
				// ->imageResizeMode('cover')
				// ->imageCropAspectRatio('16:9') // İsterseniz resim oranını sabitleyebilirsiniz
				// ->imageResizeTargetWidth('1920') // Yüklenen resmin genişliğini ayarlar
				// ->imageResizeTargetHeight('1080') // Yüklenen resmin yüksekliğini ayarlar
			]);
	}

	public static function table(Table $table): Table {
		return $table
			->columns([
				Tables\Columns\TextColumn::make('name')
					->label('Sponsor Adı')
					->searchable()
					->sortable(),

				Tables\Columns\ImageColumn::make('image')
					->label('Görsel')
					->circular() // Yuvarlak görünüm için (opsiyonel)
					->width(100), // Görsel genişliği

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
			'index' => Pages\ListSponsors::route('/'),
			'create' => Pages\CreateSponsor::route('/create'),
			'edit' => Pages\EditSponsor::route('/{record}/edit'),
		];
	}
}
