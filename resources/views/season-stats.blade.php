@extends('layouts.main')

@section('title', 'Player profiles')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/stats.css') }}" type="text/css">
@endsection

@section('content')

<a class="season" href="/stats/all-time">All time</a>
@foreach($seasons as $season)
    <a class="season" href="/stats/{{$season->season}}">Season {{ $season->season }}</a>
@endforeach

@endsection

@section('scripts')
    @parent
@endsection
