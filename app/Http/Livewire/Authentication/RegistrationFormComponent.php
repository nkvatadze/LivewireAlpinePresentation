<?php

namespace App\Http\Livewire\Authentication;

use App\Enums\Roles;
use App\Http\Livewire\Traits\FlashMessages\EmitsMessages;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

class RegistrationFormComponent extends Component
{
    use EmitsMessages;

    public Collection $roles;
    public string $role = '';
    public string $email = '';
    public string $name = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $identification_number = '';

    protected function rules()
    {
        return [
            'role' => 'required|in:' . Roles::implodedValues(),
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string',
            'password' => 'required|confirmed|min:6',
            'identification_number' => 'required_if:roles,' . Roles::Company->value
        ];
    }

    public function mount(User $user)
    {
        $this->roles = Roles::options();
        $this->role = Roles::Customer->value;
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        $validated = $this->validate();

        User::create($validated);

        $this->sendSuccessMessage('User created successfully');

        $this->resetExcept('roles');
    }

    public function render()
    {
        return view('livewire.authentication.registration-form-component');
    }
}
