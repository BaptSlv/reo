<?php

namespace App\Http\Livewire\Organizer\Property;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProperty extends Component
{

    use WithFileUploads;

    public $property;
    public $label;
    public $purchase_price;
    public $currency;
    public $area;
    public $measurement_unit;
    public $address_1;
    public $address_2;
    public $city;
    public $zipcode;
    public $country;
    public $image;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    protected $rules = [
        'label' => ['required', 'string', 'max:255'],
        'image' => ['nullable', 'image', 'max:2000'],
        'address_1' => ['required', 'string', 'max:500'],
        'address_2' => ['nullable', 'string', 'max:500'],
        'purchase_price' => ['required', 'numeric'],
        'currency' => ['required', 'string', 'max:10'],
        'area' => ['required', 'numeric'],
        'measurement_unit' => ['required', 'string', 'max:10'],
        'city' => ['required', 'string', 'max:255'],
        'country' => ['required', 'string', 'max:255'],
        'zipcode' => ['required', 'integer'],
    ];

    public function edit()
    {
        $validatedData = $this->validate();

        if($this->property->purchase_price !== $validatedData['purchase_price']){
            dd($this->property->purchase_price, $validatedData['purchase_price']);
            $validatedData['total_price'] = $this->property->total_price - $this->property->purchase_price + $validatedData['purchase_price'];
        }

        if((is_null($validatedData['image']) || !array_key_exists('image', $validatedData)) && is_null($this->property->image)){
            $validatedData['image'] = Property::IMAGE_LINK;
        } elseif($validatedData['image'] !== null) {
            // Delete current image in the user folder.
            $image = str_replace('storage/', 'public/', $this->property->image);
            Storage::delete($image);
            // Set the new image in the user folder.
            $path = $this->image->store('public/' . Auth::user()->id . '_files');
            $validatedData['image'] = str_replace('public/', 'storage/', $path);
        } else {
            $validatedData['image'] = $this->property->image;
        }

        $this->property->update(
            $validatedData
        );

        return redirect()->route('organizer');
    }

    public function mount()
    {
        $this->property = Property::query()->where('id', '=', Route::current()->parameter('id'))->first();
        $this->label = $this->property->label;
        $this->purchase_price = $this->property->purchase_price;
        $this->currency = $this->property->currency;
        $this->area = $this->property->area;
        $this->measurement_unit = $this->property->measurement_unit;
        $this->address_1 = $this->property->address_1;
        $this->address_2 = $this->property->address_2;
        $this->city = $this->property->city;
        $this->zipcode = $this->property->zipcode;
        $this->country = $this->property->country;
    }

    public function render()
    {
        return view('livewire.organizer.property.edit-property');
    }
}
