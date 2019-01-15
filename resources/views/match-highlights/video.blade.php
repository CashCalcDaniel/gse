@extends('layouts.main-black')

@section('title', 'GSE | Highlights')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/match-highlights.css') }}" type="text/css">
@endsection

@section('content')

<div class="video pt1 pb1">
    <iframe width="80%" height="80%" src="https://www.youtube.com/embed/{{$video[0]}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

@endsection

@section('scripts')
    @parent
@endsection
