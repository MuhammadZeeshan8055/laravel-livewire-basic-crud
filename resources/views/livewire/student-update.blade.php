<div>
    
    @if($check==true)
    
        <h1>Update Student</h1>

        <form wire:submit.prevent="updateStudent">
            <input type="text" placeholder="Name" wire:model.live="name">
            @error('name')<span>{{ $message }}</span> @enderror
            <br><br>
            
            <input type="number" placeholder="Roll No" wire:model.live="rollno">
            @error('rollno')<span>{{ $message }}</span> @enderror
            <br><br>

            <input type="email" placeholder="Email" wire:model.live="email">
            @error('email')<span>{{ $message }}</span> @enderror
            <br><br>

            <button type="submit">Update</button>
        </form>

    @else

        <livewire:student-list/>

    @endif

</div>
