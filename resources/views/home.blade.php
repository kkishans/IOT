@extends('layouts.app')

@section('content')

        @foreach($rooms as $r)
        <div class="card col-lg-8">
            <div class="card-header">
                   <h1 class="lead" id="room"> {{ $r->room }}</h1>
            </div>
            <div class="card-body">
            <canvas id="chart-{{  $r->room}}" height="100" width="150"></canvas>
            </div>
            
        </div>
        @endforeach
        <script src="{{ asset('js/create-charts.js')}}"></script>
@endsection
<script src="{{ asset('js/Chart.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
