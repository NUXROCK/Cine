@foreach($actores as $act)
<div>
    {{$act->nombre }}:<br>
    {{$act->fecha_nac}}:<br>
    <hr>
</div>
@endforeach