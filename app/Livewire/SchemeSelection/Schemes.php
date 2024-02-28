<?php

namespace App\Livewire\SchemeSelection;

use Livewire\Component;
use App\Models\Scheme;

class Schemes extends Component
{
    public $scheme_list = [];
    public function schemeSelection($scheme_id)
    {

        $this->redirect(route('beneficiaryDetails.list',['scheme_id'=>(int)$scheme_id]));
    }
    public function render()
    {
        $this->scheme_list = Scheme::get();
        // dd($this->scheme_list);
        return view('livewire.scheme-selection.schemes');
    }
}
