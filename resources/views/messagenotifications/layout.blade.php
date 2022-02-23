@extends('layouts.app')
@section('styles')
    <style>
        
        /* flash_msg */
        .flash_msg .msg {
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            position: relative;
            overflow: hidden;
        }
        .flash_msg .msg:before {
            content: "";
            display: block;
            width: 5px;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
        }
        .flash_msg .msg + .msg {
            margin-top: 24px;
        }
        .msg .text {
            flex-grow: 1;
            padding: 0 8px;
        }
        .msg .text .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .msg .text .content {
            color: #a9a9a9;
            padding-bottom: 20px;
        }
        .msg .text .time {
            font-size: x-small;
        }
        
        .msg i {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            font-size: 16px;
            border-radius: 50%;
            cursor: pointer;
        }
        .s_success i.fa-check {
            color: white;
            background: #88aa00;
        }
        .s_success:before {
            background: #88aa00;
        }
        .s_info i.fa-info {
            color: white;
            background: #0066ff;
        }
        .s_info:before {
            background: #0066ff;
        }
        .s_warning i.fa-exclamation {
            color: white;
            background: #ffbb00;
        }
        .s_warning:before {
            background: #ffbb00;
        }
            </style>
    @endsection
@section('content')
 @yield('content')
@endsection


@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection