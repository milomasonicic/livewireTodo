<div>

    
    <table>
        
            <th>name</th>
            <th>complete</th>
        @foreach ($todos as $todo)
        
            <tr>
                <td>
                    {{$todo->name}}    
                </td>

                <td>
                    {{$todo->complete}}  
                </td>

                <td>
                    <button wire:click="delete({{$todo->id}})">Delete</button>
                </td>
            </tr>

        
        @endforeach

    </table>

    
    <form wire:submit.prevent='submit' method="post">
        @error('name')
        <p>{{'name must be added'}}</p>
        @enderror
        <input wire:model='name' type="text" placeholder="name">
        <select wire:model='complete'  id="">
            <option value=1>Complete</option>
            <option value=0>Not complete</option>
        </select>

        <button type="submit">Submit</button>

        @if($message1)

        {{$message1}}
        @endif
    
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>

