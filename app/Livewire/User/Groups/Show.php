<?php

namespace App\Livewire\User\Groups;

use Livewire\Component;

class Show extends Component
{
    public $group;

    public function render()
    {
        $members = $this->group->user;
        $instruments = $this->group->instrumens
            ->where('isPublished', true);

        return view('livewire.user.groups.show', [
            'group' => $this->group,
            'members' => $members,
            'instruments' => $instruments
        ]);
    }
}
