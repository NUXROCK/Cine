@foreach($directores as $dir)
<div>
    {{$dir->nombre }}:<br>
    {{$dir->biografia }}:<br>
    {{$dir->fecha_nac }}:<br>
    <hr>
</div>
@endforeach