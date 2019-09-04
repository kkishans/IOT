@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Channel</div>              
                <div class="panel-body">
                    <form action="{{ route('Room.store') }}">
                        <div class="form-group row">
                            <label for="channelName" class="col-sm-3 col-form-label">Room Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="channelName" placeholder="Room name" require autofocus>
                            </div>
                        </div>
                        
                            <div class="col-sm-4">
                                <button class="btn btn-light">Generate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection