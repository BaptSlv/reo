<?php

namespace App\Http\Livewire\Organizer\Property;

use App\Models\Cost;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProperty extends Component
{

    use WithFileUploads;

    public $label;
    public $image;
    public $address_1;
    public $address_2;
    public $purchase_price;
    public $currency;
    public $area;
    public $measurement_unit;
    public $city;
    public $country;
    public $zipcode;

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

    public function store()
    {
        $validatedData = $this->validate();

        $validatedData['total_price'] = $validatedData['purchase_price'];

        if(is_null($validatedData['image']) || !array_key_exists('image', $validatedData)){
            $validatedData['image'] = Property::IMAGE_LINK;
        } else {
            $path = $this->image->store('public/' . Auth::user()->id . '_files');
            $validatedData['image'] = str_replace('public/', 'storage/', $path);
        }

        $property = Property::create($validatedData);


        $property->teams()->attach(Auth::user()->currentTeam->id);

        return redirect()->route('organizer');
    }

    public function render()
    {
        return view('livewire.organizer.property.create-property', [
            'teamCosts' => Cost::query()->where('team_id', '=', Auth::user()->currentTeam->id)->get()
        ]);
    }
}
