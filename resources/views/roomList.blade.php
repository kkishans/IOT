@extends('layouts.app')

@section('content')
<div class="col-lg-8">
  <div class="card">
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              ID
            </th>
            <th>
              Room 
            </th>
            @if(Auth::check())
            <th>
              Edit
            </th>
            <th>
              Delete
            </th>
            @endif
            </tr>
          </thead>
        <tbody>
          @foreach($rooms as $r)
          <tr>
          <td>
            {{ $r->roomId }}
          </td>
          <td>
            {{ $r->room }}
          </td>
          @if(Auth::check())
            <td>
              <a href="{{ route('Room.edit', ['id'=>$r->roomId]) }}" class="btn btn-primary">Edit</a>

            </td>
            <td>
              <a href="{{ route('Room.delete', ['id'=>$r->roomId]) }}" class="btn btn-danger">X</a>
            </td>
          </tr>
          @endif
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection