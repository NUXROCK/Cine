@foreach($generos as $gen)
<div>
    {{$gen->nombre }}:<br>
    {{$gen->descripcion }}:<br>
    <hr>
</div>
@endforeach