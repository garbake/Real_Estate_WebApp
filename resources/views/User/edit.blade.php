<x-dashboard-layout>

<section >
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
      
      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-4 lg:p-12">

<form method="POST" action="{{ route('user.update' , $user->id) }}">
        @csrf
        @method('PATCH')
  <div class="mx-auto max-w-lg">
    <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">
      Get started today
    </h1>

    <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt
      dolores deleniti inventore quaerat mollitia?
    </p>

    <div class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
    >
      <p class="text-center text-lg font-medium">Sign in to your account</p>

      <!-- Name -->
      <div class="mt-4">
        <x-input-label for="name" :value="__('Name')" />

        <div class="mt-2 relative">
        <x-text-input id="name" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
        </div>

        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />

        <div class="mt-2 relative">
        <x-text-input id="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" type="email" name="email" value="{{$user->email}}" required autofocus autocomplete="email" />
        </div>

        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

<div class="mt-4">


<x-input-label for="role_id" :value="__('Role')" />

<div class="grid grid-cols-1 gap-4">
  <select class="w-full rounded-lg border-gray-200 p-3 mt-1 text-sm "  name="role_id" required autofocus autocomplete=""> 
      <option value="">Select Type</option>
      @foreach($role as $id => $RoleName)
            <option value="{{ $id }}" {{ $user->role_id == $id ? 'selected' : '' }} > {{ $RoleName }} </option>
        @endforeach
    
  </select>

</div>   

</div>

      <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <div class="mt-2 relative">
        <x-text-input id="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" type="password" name="password" :value="old('password')"  autofocus autocomplete="new-password" />
        </div>

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <div class="mt-2 relative">
        <x-text-input id="password_confirmation" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" type="password" name="password_confirmation"  autocomplete="new-password" />
        </div>

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>
      
      

      

      <button type="submit" class=" mt-4 block w-full rounded-lg bg-teal-600 hover:bg-teal-700 px-5 py-3 text-sm font-medium text-white">
        Edit User
      </button>

      
    </div>
  </div>
</div>
</div>

    </form>
  </div>

</section>
    
</x-dashboard-layout>