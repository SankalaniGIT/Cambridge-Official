@extends('layouts.app')
@section('title','messages')
@section('style',asset("css/messages/messages.css"))
@section('back')
    @include('back.back')
@endsection

@section('status')
   @include('error.error')
@stop
@section('content')
   @include('status.status')
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="panel" id="msgListBlock">
            <div class="panel-heading bg-primary">
                <div class="text-danger">Messages</div>
            </div>
            <div class="panel-body bg-success" style="height: 400px;overflow-x: hidden;overflow-y: scroll">

                <table class="table" id="messages">
                    @foreach(App\Messages\Messages::orderBy('id','desc')->take(App\Messages\Messages::all()->count())->get() as $message)
                        <tr>
                            <td style="@if($message->read == 0)
                                    background-color: blue;
                            @else
                                    background-color: white;
                            @endif
                                    "><a href="{{ url('viewMessage/'.$message->id) }}">{{ $message->name }}</a></td>
                            <td colspan="2">{{ $message->subject }}</td>
                            <td><a href="{{ url('deleteMessage/'.$message->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        </tr>


                    @endforeach
                </table>

            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-8">
        <div class="panel" id="msgViewBlock">
            <div class="panel-heading bg-warning">Message View Block</div>

            @if($requestedView == false)
                <div class="panel-body noView"></div>
            @else
            <div class="panel-body">
                <div class="from text-info"><strong>Name/Email :</strong><span style="float: right;">{{ $senderName.'/'.$senderEmail }}</span></div>
                <div class="subject text-danger"><strong>Subject :</strong><span style="float: right;">{{ $subject }}</span></div>
                <div class="content text-success">
                    <div class="panel">
                        <div class="panel-heading"><strong>Message Body</strong></div>
                        <div class="panel-body" style="height: 200px;overflow-x: hidden;overflow-y: scroll">
                        {{$content}}
                        </div>
                    </div>
                </div>
                <footer>
                    <ol class="list-inline list-unstyled">
                        <li><div class="ip"><strong>IP Client PC :</strong>{{ $ip }}</div></li>
                        <li><div class="browser"><strong>Client Browser Type :</strong>{{ $browser }}</div></li>
                    </ol>
                </footer>
            </div>

             @endif

        </div>

    </div>

</div>

@endsection
