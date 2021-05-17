<?php

namespace App\Http\Livewire\Financial\Spendings;

use Livewire\Component;
use App\Models\Spending;
use Livewire\WithFileUploads;

class SpendingAdd extends Component
{
    use WithFileUploads;
    public $amount , $type , $date , $time , $description , $bill;
    public $updateMode = false;

    //this function to reset all inputs after the insert
    private function resetInput()
    {
        $this->amount = null;
        $this->type = null;
        $this->date = null;
        $this->time = null;
        $this->description = null;
        $this->bill = null;
    }

    //this function to insert an spending
    public function insert(){
        $this->validate([
            'bill' => 'image|max:1024',
        ]);

        $photoName = md5($this->bill . microtime()).'.'.$this->bill->extension();
        $this->bill->storeAs('photos', $photoName);
        Spending::insert([
            'amount' => $this->amount,
            'type' => $this->type,
            'date' => $this->date,
            'time' => $this->time,
            'description' => $this->description,
            'bill' => $photoName,
        ]);

        $this->resetInput();
        $this->updateMode = false;

        $this->emitTo('financial.spendings.spendings-table', '$refresh');

        $this->alert('success', 'تم إضافة الصرفية بنجاح', [
            'position' =>  'top',
            'timer' =>  '3000',
            'toast' =>  true,
        ]);
    }
    public function render()
    {
        return view('livewire.financial.spendings.spending-add');
    }
}
