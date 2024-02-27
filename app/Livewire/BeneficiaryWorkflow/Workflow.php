<?php

namespace App\Livewire\BeneficiaryWorkflow;

use Livewire\Component;
use App\Models\Scheme;
class Workflow extends Component
{
 
    public $schemeId;
    public $schemeData = [];
    protected $listeners = ['schemeSelected' => 'onSchemeSelected'];

   public function onSchemeSelected($schemeId)
    {
        $this->schemeId = $schemeId;
        // Load scheme data based on the selected ID
        $this->schemeData = Scheme::find($schemeId)->data; // Adjust this line based on how you wish to load your data
    }

    public function render()
    {
        return view('livewire.beneficiary-workflow.workflow',[
            'data' => $this->schemeData,
        ]);
    }
}
