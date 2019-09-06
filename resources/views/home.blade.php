@extends('layouts.app')

@section('content')

        <div class="card col-lg-5">
            <div class="card-header" id="cardhead">Chart</div>
            <div class="card-body">
                <canvas id="mychart" height="100" width="150"></canvas>
            </div>
        </div>
    
@endsection
<script src="{{ asset('js/Chart.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/create-charts.js')}}"></script>