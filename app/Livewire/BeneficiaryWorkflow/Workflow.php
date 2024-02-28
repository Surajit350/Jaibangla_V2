<?php

namespace App\Livewire\BeneficiaryWorkflow;

use Livewire\Component;
use App\Models\GP;
class Workflow extends Component
{

    public $schemeId;
    public $schemeData = [];
    public $gp =[];
    protected $listeners = ['schemeSelected' => 'onSchemeSelected'];


    public function render()
    {
        $this->gp = GP::get();
        return view('livewire.beneficiary-workflow.workflow');
    }
}
