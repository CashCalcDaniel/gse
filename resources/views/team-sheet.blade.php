@extends('layouts.main')

@section('title', 'Team Sheets')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ mix('/css/team-sheet.css') }}" type="text/css">
@endsection

@section('content')
<div class="page-container">
    <div class="team-title fz30">
        Gameweek {{ $gameweek }}
    </div>
    @foreach($teams as $team)
        <div class="team-title fz30">
            {{ $team_names[$loop->index] }}
        </div>
        <div class="team-container non-mobile">
            <div class="player-container GK">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[0]->lastname }}</span>
            </div>
            <div class="player-container LB">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[1]->lastname }}</span>
            </div>
            <div class="player-container RB">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[2]->lastname }}</span>
            </div>
            <div class="player-container CM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[3]->lastname }}</span>
            </div>
            <div class="player-container RM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[4]->lastname }}</span>
            </div>
            <div class="player-container LM">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[5]->lastname }}</span>
            </div>
            <div class="player-container ST">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="player-name">{{ $team[6]->lastname }}</span>
            </div>
            @if(isset($team[7]->lastname))
            <div class="subs col-md-2 non-mobile">
                <h3 class="text-yellow">Substitutes</h3>
                @if(isset($team[7]->lastname))
                    <span>{{ $team[7]->lastname }}</span><br>
                @endif
                @if(isset($team[8]->lastname))
                    <span>{{ $team[8]->lastname }}</span><br>
                @endif
                @if(isset($team[9]->lastname))
                    <span>{{ $team[9]->lastname }}</span><br>
                @endif
            </div>
            @endif
        </div>
        <div class="mobile">
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[0]->lastname }}</span>
                <span class="mobile-position">GK</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[1]->lastname }}</span>
                <span class="mobile-position">LB</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[2]->lastname }}</span>
                <span class="mobile-position">RB</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[3]->lastname }}</span>
                <span class="mobile-position">CM</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[4]->lastname }}</span>
                <span class="mobile-position">RM</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[5]->lastname }}</span>
                <span class="mobile-position">LM</span>
            </div>
            <div class="mobile-player-container">
                <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                <span class="mobile-name">{{ $team[6]->lastname }}</span>
                <span class="mobile-position">ST</span>
            </div>
            @if(isset($team[7]->lastname))
            <h3 class="team-title fz30">Substitutes</h3>
            @endif
            <div class="mobile-name tac">
                @if(isset($team[7]->lastname))
                    <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                    <span>{{ $team[7]->lastname }}</span>
                @endif
                @if(isset($team[8]->lastname))
                    <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                    <span>{{ $team[8]->lastname }}</span>
                @endif
                @if(isset($team[9]->lastname))
                    <img src="{{ asset('images/gseshirt.jpg') }}" alt="GSE Shirt" class="player-shirt">
                    <span>{{ $team[9]->lastname }}</span>
                @endif
            </div>

        </div>
    @endforeach
</div>
@endsection

@section('scripts')
    @parent
@endsection
