<?php

namespace App\Livewire\User\Components;

use App\Helpers\UserGroupHelper;
use Livewire\Attributes\On;
use Livewire\Component;

class GroupList extends Component
{
    #[On('joined-group')]
    public function render()
    {
        $groups = UserGroupHelper::getUserGroups();
        return view('livewire.user.components.group-list', [
            'groups' => $groups
        ]);
    }
}
