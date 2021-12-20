<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            <i class="fas fa-building mr-2"></i> @lang('organizer/properties/properties.create_property.title')
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-8">
                    <form wire:submit.prevent="store">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            @lang('organizer/properties/properties.create_property.property_information.information')
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_information.name')*
                                    </label>
                                    <input wire:model.defer="label" type="text" placeholder="My first property" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" required>
                                    @error('label') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_information.purchase_price')*
                                    </label>
                                    <input wire:model.defer="purchase_price" type="number" step=0.1 placeholder="250000" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('purchase_price') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_information.currency')*
                                    </label>
                                    <input wire:model.defer="currency" type="text" placeholder="€, $, etc..." class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('currency') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_information.area')*
                                    </label>
                                    <input wire:model.defer="area" type="number" step=0.1 placeholder="80" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('area') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_information.measurement_unit')*
                                    </label>
                                    <input wire:model.defer="measurement_unit" type="text" placeholder="m2, feet, etc..." class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('measurement_unit') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            @lang('organizer/properties/properties.create_property.property_location.location')
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_location.address')*
                                    </label>
                                    <input wire:model.defer="address_1" type="text" placeholder="5 Avenue Anatole France" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('address_1') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_location.address_sup')
                                    </label>
                                    <input wire:model.defer="address_2" type="text" placeholder="Box n°2" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('address_2') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_location.city')*
                                    </label>
                                    <input wire:model.defer="city" type="text" placeholder="Paris" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('city')<span class="text-red-600 error"> {{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_location.zipcode')*
                                    </label>
                                    <input wire:model.defer="zipcode" type="number" placeholder="75007" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('zipcode')<span class="text-red-600 error"> {{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                        @lang('organizer/properties/properties.create_property.property_location.country')*
                                    </label>
                                    <input wire:model.defer="country" type="text" placeholder="France" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('country') <span class="text-red-600 error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            @lang('organizer/properties/properties.create_property.property_image.title')
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            @if ($image)
                                                <div class="w-1/5 mx-auto">
                                                    <img src="{{ $image->temporaryUrl() }}">
                                                </div>
                                            @else
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            @endif
                                            <div class="text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"></label>
                                                <input wire:model.defer="image" id="file-upload" name="file-upload" type="file">
                                                @error('image') <span class="text-red-600 error">{{ $message }}</span>@enderror
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                @lang('organizer/properties/properties.create_property.property_image.format')
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end px-4 pt-6 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                            <button type="submit" class="bg-indigo-500 text-white font-bold uppercase text-xs px-5 py-3 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                @lang('organizer/properties/properties.create_property.create')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>