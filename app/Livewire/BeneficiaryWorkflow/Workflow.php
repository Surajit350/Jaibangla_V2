<?php

namespace App\Livewire\BeneficiaryWorkflow;

use Livewire\Component;
use App\Models\GP;
class Workflow extends Component
{
    public $schemeId; // Property to hold scheme_id
    public $selectedGp;
    public $gp;
  
    public function mount($scheme_id = null)
    {
        $this->schemeId = $scheme_id;
         $this->loadGPData(); // Load GP data
    }
    protected function loadGPData()
    {
        $this->gp = GP::where('district_code', 303)
        ->get(['gram_panchyat_code', 'gram_panchyat_name']); // Assuming you want to fetch all GP data
    }
    public function search()
    {
        //   dd('ok');
        $this->emit('refreshTable', $this->selectedGp);
    }

    public function render()
    {
        return view('livewire.beneficiary-workflow.workflow');
    }
}
