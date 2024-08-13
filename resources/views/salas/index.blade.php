@foreach($salas as $sal)
<div>
    {{$sal->nombre }}:<br>
    {{$sal->capacidad }}:<br>
    <hr>
</div>
@endforeach