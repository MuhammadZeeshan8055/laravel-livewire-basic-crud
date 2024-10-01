<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class RegisterStudent extends Component
{
    public $name;
    public $rollno;
    public $email;

    public $check=true;


    public function render()
    {
        return view('livewire.register-student');
    }

    public function updated ($field){

        $this->validateOnly($field,[
            'name'=>'required',
            'rollno'=>'required | min:3 | max:6',
            'email'=>'required | email'
        ]);

    }

    public function submit()
    {
       $this->validate([
            'name'=>'required',
            'rollno'=>'required | min:3 | max:6',
            'email'=>'required | email'
       ]);

       $student=new Student();
       $student->name=$this->name;
       $student->roll_no=$this->rollno;
       $student->email=$this->email;

       $student->save();
       session()->flash('success','Student Added Successfully');

       $this->check=false;

       $this->resetFilters();
    }

    public function resetFilters(){
        $this->reset(['name','rollno','email']);
    }
}
