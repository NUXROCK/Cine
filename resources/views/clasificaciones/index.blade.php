@foreach($clasificaciones as $cla)
<div>
    {{$cla->nombre }}:<br>
    {{$cla->descripcion }}:<br>
    <hr>
</div>
@endforeach