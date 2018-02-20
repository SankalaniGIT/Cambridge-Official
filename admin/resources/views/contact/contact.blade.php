@extends('layouts.app')
@section('title','contact')

@section('style',asset("css/contact/contact.css"))
@section('back')
    @include('back.back')
@endsection
@section('status')
    @include('error.error')
@stop

@section('content')

    @include('status.status')


    <div class="tabs tabs-style-bar">
        <nav>
            <ul>
                <li><a href="#updateContact"><i class="fa fa-refresh" aria-hidden="true"></i>
                        <span>UPDATE CONTACT</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="updateContact">
                {!! Form::open(['url' => 'submitContact','method' => 'post']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('address', 'Add Address') !!}
                    {!! Form::text('address','',array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Add Email Of School') !!}
                    {!! Form::email('email','',array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('telephone', 'Add Tele-Phone Number') !!}
                    {!! Form::text('telephone','',array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn btn-block','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}
            </section>
        </div>
    </div>

@endsection

