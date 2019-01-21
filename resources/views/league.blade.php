@extends('layouts.main')

@section('title', 'GSE | League Table')

@section('styles')
    @parent
@endsection

@section('content')

<h1 class="tac pt1 fz40">Season 2</h1>
<div class="w100p tac pt1">
    <div style="display:inline-block">
        <div id="lrep483443307" style="width: 600px;">Data loading....<a href="http://cardiffimg7as.leaguerepublic.com/l/fg/1_613026780.html">click here for Premier League</a><br/><br/><a href="http://www.leaguerepublic.com">LeagueRepublic</a></div>
        <script language="javascript" type="text/javascript">
        var lrcode = '483443307'
        </script>
        <script language="Javascript" type="text/javascript" src="https://api.leaguerepublic.com/l/client/api/cs1.js"></script>
    </div>
</div>

<h1 class="tac pt1 fz40">Season 1</h1>
<div class="w100p tac pt1">
    <div style="display:inline-block">
        <div id="lrep966865384" style="width: 600px;">Data loading....<a href="http://cardiffimg7as.leaguerepublic.com/l/fg/1_806284702.html">click here for Group B</a><br/><br/><a href="http://www.leaguerepublic.com">LeagueRepublic</a></div>
        <script language="javascript" type="text/javascript">
        var lrcode = '966865384'
        </script>
        <script language="Javascript" type="text/javascript" src="https://api.leaguerepublic.com/l/client/api/cs1.js"></script>
    </div>
</div>
@endsection

@section('scripts')
    @parent
@endsection
