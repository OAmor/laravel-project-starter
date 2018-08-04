@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="buttons-content">
                <a class="accueil-btn full">Produits</a>
                <a href="{{Route('product.create')}}" class="accueil-btn half">Nouveau Produit</a>
                <a class="accueil-btn half"></a>
                <a class="accueil-btn half"></a>
                <a class="accueil-btn half"></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="buttons-content">

            </div>
        </div>
        <div class="col-md-3">
            <div class="buttons-content">

            </div>
        </div>
        <div class="col-md-3">
            <div class="buttons-content">

            </div>
        </div>

    </div>
</div>
@endsection
