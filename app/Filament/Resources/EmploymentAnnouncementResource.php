<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmploymentAnnouncementResource\Pages;
use App\Filament\Resources\EmploymentAnnouncementResource\RelationManagers;
use App\Models\EmploymentAnnouncement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmploymentAnnouncementResource extends Resource
{
    protected static ?string $model = EmploymentAnnouncement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\DatePicker::make('date')->required(),
                Forms\Components\FileUpload::make('file_name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('date'),
                Tables\Columns\TextColumn::make('file_name'),
                Tables\Columns\TextColumn::make('user_id'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEmploymentAnnouncements::route('/'),
            'create' => Pages\CreateEmploymentAnnouncement::route('/create'),
            'edit' => Pages\EditEmploymentAnnouncement::route('/{record}/edit'),
        ];
    }    
}
