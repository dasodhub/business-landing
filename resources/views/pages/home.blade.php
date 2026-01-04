@extends('layouts.master')
@section('title', 'Home')

@section('content')
<div>
    @include('partials.hero')
    @include('partials.features')
</div>

@endsection
