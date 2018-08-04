<!-- parcourir et afficher tous les erreurs-->
@if(count($errors) > 0)
    @foreach($errors->all() as $err)
        <div class="alert alert-danger">{{ $err }}</div>
    @endforeach
@endif