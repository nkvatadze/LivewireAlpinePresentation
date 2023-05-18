<form wire:submit.prevent="submit" class="h-full flex items-center justify-center"
      autocomplete="off" autofill="false">
    <div class="flex flex-col justify-center items-center gap-5 h-full w-1/4">

        <livewire:form.flash-messages/>

        <h1 class="text-3xl text-gray-500">Registration Form</h1>

        <select class="border text-gray-500 border-gray-300 rounded-md px-2 py-1.5 w-full" wire:model="role">
            @foreach($roles as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>

        <x-form.input type="text" name="name" id="name" placeholder="Name"
                      wire:model="name"></x-form.input>

        <x-form.input type="email" name="email" id="email" placeholder="Email" wire:model="email"></x-form.input>

        <input
            class="border px-2 border-gray-300 rounded-md  py-1.5 w-full {{ $errors->has('password') ? 'border-red-600' : 'border-gray-300'}}"
            placeholder="Password" type="password"
            wire:model="password">
        @error('password') <span class="text-red-600">{{ $message }}</span> @enderror

        <input class="border px-2 border-gray-300 rounded-md  py-1.5 w-full" placeholder="Confirm Password"
               type="password" wire:model="password_confirmation">
        @error('password_confirmation') <span class="text-red-600">{{ $message }}</span> @enderror

        @if($role === \App\Enums\Roles::Company->value)
            <x-form.input type="number" name="identification_number" id="identification_number"
                          placeholder="Identification number" wire:model="identification_number"></x-form.input>
        @endif

        <button type="submit"
                class="border bg-green-600 text-white hover:bg-white hover:text-green-600 hover:border-green-600 px-3 py-1.5 rounded-md delay-50 ease-in-out transition">
            Save Contact
        </button>
    </div>

</form>
