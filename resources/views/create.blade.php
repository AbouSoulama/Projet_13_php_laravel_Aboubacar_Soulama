@extends('layouts.app')

@section('content')
<div class="container">
<h1>Déposer une annonce</h1>

<hr>


<form action="{{ route('ad.store') }}" method="POST" >
@csrf
<div class="form-group">
<label for="title">Titre de l'annonce</label>
<input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" aria-describedby="title" name="title">
@if($errors->has('title') )
<span class="invalid-feedback">{{ $errors->first('title')  }}</span>
@endif
</div>
<div class="form-group">
<label for="description">Description de l'annonce</label>
<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control" id="localisation" name="localisation">
    </div>
<div class="form-group">
    <label for="price">Prix</label>
    <input type="text" class="form-control" id="price" name="price">
    </div>
    <button type="submit" class="btn btn-primary">Soumettre notre annonce</button>

</form>
</div>
@endsection