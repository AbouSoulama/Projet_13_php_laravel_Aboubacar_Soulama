@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}
    </div>
    @endif
    <h1>Monboncoin</h1>
    
    
    @foreach ($ads as $ad)
<div class="d-flex justify-content-center">
    <div class="card mb-3" style="width: 58%;">
    <div class="card-body">
    <h5 class="card-title">{{ $ad->title }}</h5>
    <h6 class="card-subtible mb-2 text-muted">
    {{ $ad->localisation }}</h6>
    <p class="card-text">{{ $ad->description }}</p>
    <a href="#" class="card-link">Voir l'annonce</a>
    <a href="#" class="card-link">Contater le vendeur</a>
    </div>
</div>
</div>    
@endforeach

    
    
    
    
</div>

@endsection
