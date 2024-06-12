<?php

namespace App\Livewire\Pengerjaan;

use Livewire\Component;

class Sidebar extends Component
{
    public $currentIndex = 0;
    public $instrumens;
    public $results = [];
    protected $listeners = ['current_index_question', 'current_result'];

    public function current_index_question($data)
    {
        $this->currentIndex = $data;
    }

    public function current_result($data)
    {
        $this->results = array_keys($data);
    }

    public function changeQuestion($index)
    {
        $this->dispatch("changeQuestion", $index);
    }

    public function render()
    {
        return view('livewire.pengerjaan.sidebar', [
            "currentIndex" => $this->currentIndex + 1,
            "questions" => $this->instrumens->statements,
            "results" => $this->results
        ]);
    }
}
