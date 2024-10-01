<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentUpdate extends Component
{

    public $s_id,$name,$rollno,$email;

    public $check=true;


    public function render()
    {
        return view('livewire.student-update');
    }

    public function updated ($field){

        $this->validateOnly($field,[
            'name'=>'required',
            'rollno'=>'required | min:3 | max:6',
            'email'=>'required | email'
        ]);

    }

    public function updateStudent(){
        $this->validate([
            'name'=>'required',
            'rollno'=>'required | min:3 | max:6',
            'email'=>'required | email'
        ]);

       $student=Student::find($this->s_id);
       $student->name=$this->name;
       $student->email=$this->email;
       $student->roll_no=$this->rollno;
       $student->update();

       session()->flash('success','Student Updated Successfully');

       $this->check=false;
    }
}
