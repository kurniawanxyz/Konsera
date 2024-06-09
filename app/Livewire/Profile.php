<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $user;
    #[Validate('nullable|image')]
    public $avatar;
    #[Validate('required|string|max:255')]
    public $nama;
    #[Validate('required|email|max:255')]
    public $email;
    public $oldPassword;
    public $newPassword;

    public function mount($user)
    {
        $this->nama = $user->name;
        $this->email = $user->email;
    }

    public function notify($title, $message, $type)
    {
        return $this->dispatch('notify', title: $title, message: $message, type: $type);
    }

    public function updatedAvatar()
    {
        if ($this->avatar) {
            $this->validate();

            if ($this->user->avatar) {
                Storage::disk('public')->delete($this->user->avatar);
            }

            $this->user->avatar = $this->avatar->store('avatars', 'public');
            $this->user->save();

            $this->dispatch('profile-updated');
        }
    }

    public function updateProfile()
    {
        $this->validate([
            'email' => [
                Rule::unique('users', 'email')->ignore($this->user->id)
            ]
        ]);
        $this->user->update([
            'name' => $this->nama,
            'email' => $this->email,
        ]);

        $this->dispatch('profile-updated');
        $this->notify('Berhasil', 'Berhasil memperbarui profil', 'success');
    }

    public function updatePassword()
    {
        $this->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|string|min:8',
        ], [
            'oldPassword.required' => 'Kolom kata sandi lama wajib diisi.',
            'newPassword.required' => 'Kolom kata sandi baru wajib diisi.',
            'newPassword.min' => 'Kata sandi baru harus memiliki setidaknya :min karakter.',
        ]);

        if (!Hash::check($this->oldPassword, $this->user->password)) {
           return $this->notify('Gagal', 'Kata sandi lama salah', 'error');
        }

        $this->user->update(['password' => bcrypt($this->newPassword)]);
        $this->notify('Berhasil', 'Berhasil memperbarui kata sandi', 'success');
    }

    public function render()
    {
        return view('livewire.profile', [
            'user' => $this->user
        ]);
    }
}
