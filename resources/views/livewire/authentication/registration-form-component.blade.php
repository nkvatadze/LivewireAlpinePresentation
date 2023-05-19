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


        <x-form.input type="password" name="password" id="password" placeholder="Password"
                      wire:model="password"></x-form.input>

        <x-form.input type="password" name="password_confirmation" id="password_confirmation"
                      placeholder="Password Confirmation" wire:model="password_confirmation"></x-form.input>

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
