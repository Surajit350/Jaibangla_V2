<?php

namespace App\Livewire\BeneficiaryWorkflow;

use Livewire\Component;
use App\Models\District;
use Livewire\WithPagination;
class BeneficiaryList extends Component
{
    use WithPagination;

    public $searchItem;
    public $scheme_id;
    public function mount($scheme_id)
    {
        $this->scheme_id = $scheme_id;
        
    }
    public function render()
    {
        return view('livewire.beneficiary-workflow.beneficiary-list',[
            'districts' => District::search($this->searchItem)
                                    ->orderBy('name', 'asc')
                                    ->paginate(10),
                                ]);
    }
}
