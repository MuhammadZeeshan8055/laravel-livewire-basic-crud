<div>

    @if($check==true)

        @if(session()->has('success'))
            <p style="color:green">{{session('success')}}</p>
        @endif

        <h1>Student</h1>

        <a href="{{route('register')}}">Add Student</a>
        <br>
        <br>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->roll_no}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <button onclick="confirm('Are you sure you want to delete this student?') || event.stopImmediatePropagation()" wire:click="deleteStudent({{ $student->id }})">Delete</button>
                        </td>

                        <td>
                            <button wire:click="editStudent({{$student->id}})">Edit</button>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    @else

        <livewire:student-update :s_id="$s_id" :name="$name" :email="$email" :rollno="$rollno" />

    @endif 
  

</div>
