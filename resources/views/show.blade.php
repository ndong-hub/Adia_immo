

    
        <h3>('designation')</h3>
        <p>{{ $biens->designation }}</p>
        <h3>('prix')</h3>
        <p>{{ $biens->prix }}</p>
        <h3>('description')</h3>
        <p>{{ $biens->description }}</p>

        <p>
          @if($biens->state)
            La tâche a été accomplie !
          @else
            La tâche n'a pas encore été accomplie.
          @endif
        </p>
       