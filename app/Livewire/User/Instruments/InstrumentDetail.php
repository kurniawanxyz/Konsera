<?php

namespace App\Livewire\User\Instruments;

use Livewire\Component;

class InstrumentDetail extends Component
{
    public $instrument;

    public function render()
    {
        $instrument = $this->instrument;
        $criterias = $this->instrument->criteria;
        $sub_criterias = $this->instrument->sub_criterias()
            ->with('statements')
            ->get();
        $answers = $this->instrument->answer;

        return view('livewire.user.instruments.instrument-detail', compact(
            'instrument',
            'criterias',
            'sub_criterias',
            'answers'
        ));
    }
}
