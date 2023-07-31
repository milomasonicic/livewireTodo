<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $name;
    public $complete;
    public $message1;

    protected $rules = [ 
        'name'=>'required',
        'complete'=>'required'
    ];
    
    public function render()
    {
        return view('livewire.todo-list', ["todos"=>Todo::all()]);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function submit()
    {
        $this->validate();

        Todo::create([
            'name'=>$this->name,
            'complete'=>$this->complete
        ]);

        $this->resetForm();
        $this->message1 = "new post added";
    }


    public function delete($id)
    {
        Todo::find($id)->delete();
        
       
    }
}
