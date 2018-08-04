@extends('layouts.template')

@section('content')
    <h1>Hello There</h1>
@endsection

@section('propre-script')
    <script>
        toastr.success("Hello there");
    </script>
@endsection