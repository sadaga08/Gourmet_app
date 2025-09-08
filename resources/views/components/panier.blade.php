<div>
@foreach ($plats as $plat)
    <div>{{ $plat->nom }} - {{ $plat->prix }} FCFA</div>
@endforeach
</div>