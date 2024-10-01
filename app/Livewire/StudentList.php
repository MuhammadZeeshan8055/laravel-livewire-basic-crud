<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public $students;
    public $s_id;
    public $name;
    public $rollno;
    public $email;
    
    public $check=true;

    public function mount()
    {
        $this->students = Student::all();
    }

    public function render()
    {
        return view('livewire.student-list');
    }

    public function deleteStudent($id){
        Student::find($id)->delete();
        $this->mount();
    }

    public function editStudent($id){
        $this->s_id=$id;
        $student=Student::find($id);
        $this->name=$student->name;
        $this->rollno=$student->roll_no;
        $this->name=$student->name;
        $this->email=$student->email;

        $this->check=false;

    }
}
