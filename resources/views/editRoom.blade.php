@extends('layouts.app')

@section('content')

        <div class="col-lg-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Update room</div>              
                <div class="panel-body">
                    <form action="{{ Route('Room.update',['id'=>$rooms->roomId]) }}" method='post'>
                    {{csrf_field()}}
                        <div class="form-group row">
                            <label for="roomName" class="col-sm-3 col-form-label">Room Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$rooms->room}}" placeholder="Room name" name="roomName" required  autofocus>
                            </div>
                        </div>
                        
                            <div class="col-sm-4">
                                <input type="submit" name="submit" value="Update" class="btn btn-primary" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
@endsection