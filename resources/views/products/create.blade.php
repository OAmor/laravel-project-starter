@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="creation text-center">
            <ul class="nav nav-tabs">
                <li data-val="general" role="presentation" class="active"><a >General</a></li>
                <li data-val="prix" role="presentation"><a>Prix</a></li>
                <li data-val="test" role="presentation"><a>test</a></li>
            </ul>
            <form action="">
                <div>
                <div class="tab-content general">
                    <div class="form-group">
                        <input placeholder="Référence" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Désignation" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Code Bar" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Famille" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Catégorie" class="form-control">
                    </div>
                </div>
                <div class="tab-content prix" style="display: none">
                    <div class="form-group">
                        <input placeholder="Prix" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Désignation" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Code Bar" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Famille" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Catégorie" class="form-control">
                    </div>
                </div>
                <div class="tab-content test" style="display: none">
                    <div class="form-group">
                        <input placeholder="test" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Désignation" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Code Bar" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Famille" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="Catégorie" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('propre-script')
    <script rel="script" type="text/javascript">
        $('.nav li').click(function () {
            var displayDiv = $(this).data('val');
            $("."+displayDiv).css('display','block');
            $(this).addClass('active');
            $("."+displayDiv).siblings().css('display','none');
            $(this).siblings().removeClass('active');
        })
    </script>
@endsection


