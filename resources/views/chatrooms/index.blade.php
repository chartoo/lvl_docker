@extends('layouts.app')
@section('content')
    <div class="container-fluid w-100">
        <div class="row">
            <div class="col-md-3 px-0 h-100">
                <div class="border-end border-top shadow-sm border-primary p-2" data-bs-spy="scroll">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-circle-plus"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <hr>
                    <ul>
                        @foreach ($rooms as $room)
                            <li class="list"> {{$room->name?$room->name:$room->user_two->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-7 px-0 h-100 border rounded">
                <div id="message-section">
                    <sendprivatemessage-component 
                        v-bind:room-code="{{json_encode($room_code)}}" 
                        v-bind:user-code={{json_encode($user_code)}} 
                        v-bind:current-id="{{json_encode($current_id)}}" 
                        v-bind:histories="{{json_encode($histories)}}" 
                        v-bind:user-name="{{json_encode($user_name)}}">
                    </sendprivatemessage-component>
                </div>
                
            </div>
            <div class="col-md-2 px-0 h-100">
                <div class="border-end border-top shadow-sm border-success p-2 bg-dark" data-bs-spy="scroll">
                        @foreach ($users as $user)
                        @if ($user->id!=$current_id)
                            <div class="border-bottom border-info p-2 cursor-pointer text-white" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="click to chat">
                                <a href="{{url('chat-rooms').'/'.base64_encode($user->id)}}" class="text-decoration-none d-block">
                                    <i class="fa-solid fa-circle-user text-white"></i> &nbsp; {{$user->name}}
                                </a>
                            </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection