<section class="bg-gray-100">
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
      
      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-4 lg:p-12">
        <form action="{{ route('property.update' , $property->id) }}"  method= "POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PATCH')
        <!-- Property Name -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <x-input-label for="property_name" :value="__('Property Name')" />
              <x-text-input id="property_name" class="block mt-1 w-full" type="text"  name="property_name" value="{{ $property->Name}}" required autofocus autocomplete="property_name" />
                <x-input-error :messages="$errors->get('property_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="property_size" :value="__('Property Size')" />
                <x-text-input id="property_size" class="block mt-1 w-full" type="text"  name="property_size" value="{{ $property->Size}}" required autofocus autocomplete="property_size" />
                <x-input-error :messages="$errors->get('property_size')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
         <!-- Price -->
            <div>
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm" type="number" name="price"  value="{{ $property->Price}}" required autofocus autocomplete="price" min="0" step="1" /> 

            </div>
        <!-- currency -->
            <div>
                <x-input-label for="currency" :value="__('Currency')" />

                <select class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm "  name="currency" value="{{ $property->Currency}}" required autofocus autocomplete="currency"> 
                    <option value="">Select Currency</option>
                    @foreach(['JMD', 'USD'] as $currency)
                        <option value="{{ $currency }}" {{ $property->Currency == $currency ? 'selected' : '' }}>{{ $currency }}</option>
                    @endforeach
                </select>
                @if ($errors->has('currency'))
                    <p class="mt-2 text-sm text-red-600" role="alert">
                        {{ $errors->first('currency') }}
                    </p>
                @endif
            </div>
          </div>
 
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
         <!-- Number of Bedroom -->
            <div>
                <x-input-label for="Num_of_Bedroom" :value="__('Number of Bedroom')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm" type="number" name="Num_of_Bedroom" value="{{$property->Number_Bedrooms}}" required autofocus autocomplete="property_name" min="0" step="1" /> 
            </div>
            <!-- Number of Bathroom -->
            <div>
                <x-input-label for="Num_of_Bathroom" :value="__('Number of Bathroom')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm" type="number" name="Num_of_Bathroom"  value="{{$property->Number_Bathrooms }}" required autofocus autocomplete="property_name" min="0" step="1" /> 
            </div>
        <!-- Number of Kitchen -->
            <div>
                <x-input-label for="number_of_kitchen" :value="__('Num_of_Kitchen')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm " type="number" name="Num_of_Kitchen" value="{{$property->Number_Kitchen }}" required autofocus autocomplete="number_of_kitchen" min="0" step="1" />
            </div>
          </div>

          <!-- property type -->
          <x-input-label for="name" :value="__('Property Type')" />

          <div class="grid grid-cols-1 gap-4">
            <select class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm "  name="type" required autofocus autocomplete="currency"> 
                <option value="">Select Type</option>
              @foreach($propertyTypes as $id => $Name)
                <option value="{{ $id }}" {{ $property->Type_Id == $id ? 'selected' : '' }} > {{ $Name }} </option>
            @endforeach
            </select>

          </div>        

         
          <!-- property Location -->
          <x-input-label for="lacation" :value="__('Location')" />
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
         <!-- Street -->
         @if ($location)
            <div>
                <x-input-label for="street" :value="__('Street')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm" type="text" name="street" value="{{$location->Street}}" required autofocus autocomplete="street" /> 
            </div>
            
            <!-- Town -->
            <div>
                <x-input-label for="town" :value="__('Town')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm" type="text" name="town" value="{{$location->Town}}" required autofocus autocomplete="town" /> 
            </div>
        <!-- Parish -->
            <div>
                <x-input-label for="parish" :value="__('Parish')" />
                <x-text-input class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm " type="text" name="parish" value="{{$location->Parish}}" required autofocus autocomplete="parish" />
            </div>
            @endif
          </div>

          <div>
            <x-input-label for="property_description" :value="__('Property Description')" />
            

            <textarea class="w-full rounded-lg border-gray-200 p-1 mt-1 text-sm" placeholder="Message" rows="8" id="description" name="description" required autofocus autocomplete="property_description">{{ $property->Description }}</textarea>
              @if ($errors->has('description'))
                  <p class="mt-2 text-sm text-red-600" role="alert">
                      {{ $errors->first('description') }}
                  </p>
              @endif
          </div>

          <!-- Property Display Image -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2"> 
            <div>
                <x-input-label for="property_dp" :value="__('Display Image')" />
                <x-text-input id="property_dp" class="block mt-1 w-full" type="file"  name="property_dp" value=""  accept="image/*">
                </x-text-input>
                <x-input-error :messages="$errors->get('property_dp')" class="mt-2" />

                <div class="w-1/2 p-1 mt-3">
                  <div class="group relative overflow-hidden">
                      <img src="{{$property->DisplayImage_Url}}">
                  </div>
                </div>
            </div>

            <div>
                <x-input-label for="property_gallary" :value="__('Property Gallary')" />
                <x-text-input id="property_gallary" class="block mt-1 w-full" type="file"  name="property_gallary[]" :value="old('property_gallary')"  multiple accept="image/*" />
                <x-input-error :messages="$errors->get('property_dp')" class="mt-2" />

                       
                <div class="flex flex-wrap">
                @foreach ($images as $image)
                  <div class="w-1/2 p-1 mt-3">
                    <div class="group relative overflow-hidden">
                      <img src="{{$image->Image_Url}}" class="w-full object-cover">
                    </div>
                  </div>
                  @if($loop->iteration % 2 == 0)
                    </div><div class="flex flex-wrap">
                  @endif
                @endforeach
              </div>
                

            </div>

        </div>

          <div class="mt-4 text-center">
            <button
              type="submit"
              class="inline-block w-full rounded-lg bg-teal-600 hover:bg-teal-700 px-5 py-3 font-medium text-white sm:w-auto"
            >
              Send Enquiry
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>