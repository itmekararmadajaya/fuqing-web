<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;
    
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.settings';

    public $setting_id;
    public $header_image;
    public $address;
    public $google_maps_link;
    public $contact_person;
    public $instagram;
    public $gdrive_link;

    public static function canAccess(): bool
    {
        return Auth::user()->hasRole('superadmin');
    }
    
    public function mount(){
        $setting = Setting::first();
        if(!empty($setting)){
            $this->setting_id = $setting->id;

            $this->form->fill([
                'header_image' => $setting->header_image,
                'address' => $setting->address,
                'google_maps_link' => $setting->google_maps_link,
                'contact_person' => $setting->contact_person,
                'instagram' => $setting->instagram
            ]);
        }else {
            $this->form->fill([
                'header_image' => null,
                'address' => null,
                'google_maps_link' => null,
                'contact_person' => null,
                'instagram' => null
            ]);
        }

        if(Session::has('status') == 'success'){
            Notification::make() 
            ->title('Saved successfully')
            ->success()
            ->send();
        }else if(Session::has('status') == 'failed') {
            Notification::make() 
            ->title('Saved failed')
            ->danger()
            ->send();
        }
    }

    public function form(Form $form): Form {
        return $form->schema([
            Section::make('Header')->schema([
                FileUpload::make('header_image')->disk('public')->directory('header_images')->image()->required()
            ])->columns(2),
            Section::make('Information')->schema([
                Textarea::make('address')->required(),
                TextInput::make('google_maps_link')->required(),
                TextInput::make('contact_person')->required(),
                TextInput::make('instagram')->required(),
            ])->columns(2),
            Section::make("Gallery")->schema([
                TextInput::make('gdrive_link')->label("Google Drive Link")->required()
            ])
            ]);
    }

    public function update(){
        $validated = $this->validate([
            'header_image' => 'required',
            'google_maps_link' => 'required',
            'address' => 'required',
            'contact_person' => 'required',
            'instagram' => 'required',
        ]);

        if($validated){
            $setting = Setting::updateOrCreate(
                ['id' => $this->setting_id],
                $this->form->getState()
            );

            $status = 'success';
        }else {
            
            $status = 'failed';
        }

        redirect()->route('filament.fuqing.pages.settings')->with('status', $status);
    }
}
