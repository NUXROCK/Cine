@foreach($reservas as $res)
<div>
    {{$res->funcion_id }}:<br>
    {{$res->cliente_id }}:<br>
    {{$res->asientos }}:<br>
    <hr>
</div>
@endforeach