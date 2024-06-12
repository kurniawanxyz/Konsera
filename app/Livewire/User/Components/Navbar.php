<?php

namespace App\Livewire\User\Components;

use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $groupCode;
    public $checkGroup;
    public $text;
    public $class;

    public function updatedgroupCode()
    {
        $this->checkGroup = Group::query()
            ->whereCode($this->groupCode)
            ->exists();

        if ($this->checkGroup == true) {

            $this->text = 'Grup ditemukan!';
            $this->class = 'text-success';
        } else if ($this->groupCode == null) {

            $this->text = '';
            $this->class = '';
        } else {
            $this->text = 'Grup tidak ditemukan!';
            $this->class = 'text-danger';
        }
    }

    public function store()
    {
        if ($this->checkGroup == true && $this->groupCode != null) {
            $group = Group::query()
                ->whereCode($this->groupCode)
                ->firstOrFail();

            if ($group->isMember() == true) {
                $this->text = 'Anda adalah anggota group ini!';
                $this->resetExcept('text', 'class');

                $this->dispatch('joined-group', message: 'Berhasil bergabung dengan grup');
            } else {
                $user_id = auth()->id();
                User::findOrFail($user_id)->groups()->attach($group->id);

                $this->text = 'Berhasil bergabung dengan group';
                $this->resetExcept('text', 'class');

                $this->dispatch('joined-group', message: 'Berhasil bergabung dengan grup');
            }
        } else {
            $this->text = 'Isi kode terlebih dahulu!';
            $this->class = 'text-danger';
        }
    }

    #[On('profile-updated')]
    public function render()
    {
        return view('livewire.user.components.navbar', [
            'user' => Auth::user()
        ]);
    }
}
