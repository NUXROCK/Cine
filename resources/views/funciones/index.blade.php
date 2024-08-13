@foreach($funciones as $fun)
<div>
    {{$fun->pelicula_id }}:<br>
    {{$fun->sala_id }}:<br>
    {{$fun->fecha }}:<br>
    {{$fun->hora }}:<br>
    <hr>
</div>
@endforeach