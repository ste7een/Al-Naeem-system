<?php

namespace App\Http\Livewire\Financial\Spendings;

use Livewire\Component;
use App\Models\Spending;

class SpendingsTable extends Component
{
    public $search;
    protected $listeners = ['$refresh'];

    public function render()
    {
        $search = '%'.$this->search.'%';
        $spendings = Spending::where('type' , 'LIKE' , $search)
                    ->orWhere('amount' , 'LIKE' , $search)
                    ->paginate(9);
        return view('livewire.financial.spendings.spendings-table', ['spendings' => $spendings]);
    }
}
