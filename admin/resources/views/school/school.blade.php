@extends('layouts.app')
@section('title','school')

@section('style',asset("css/school/school.css"))

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
                <li><a href="#background"><i class="fa fa-plus" aria-hidden="true"></i> <span>BACKGROUND</span></a>
                </li>
                <li><a href="#profile"><i class="fa fa-plus" aria-hidden="true"></i> <span>SCHOOL PROFILE</span></a>
                </li>
                <li><a href="#anthem"><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>ANTHEM</span></a>
                </li>
                <li><a href="#houses"><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>HOUSES</span></a>
                </li>
                <li><a href="#crest"><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>CREST</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="background">
                {!! Form::open(['route' => 'background','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}<hr/>
                <div class="form-group">
                    {!! Form::label('background','Background Picture') !!}
                    {!! Form::file('background',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>
            <section id="profile">
                {!! Form::open(['route' => 'profile','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('subtitle', 'Sub Title') !!}
                    {!! Form::text('subtitle','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('information', 'Profile Information') !!}
                    {!! Form::textarea('information','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture1','Picture (1)') !!}
                    {!! Form::file('picture1',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('picture2','Picture (2)') !!}
                    {!! Form::file('picture2',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('picture3','Picture (3)') !!}
                    {!! Form::file('picture3',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('picture4','Picture (4)') !!}
                    {!! Form::file('picture4',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('picture5','Picture (5)') !!}
                    {!! Form::file('picture5',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('picture6','Picture (6)') !!}
                    {!! Form::file('picture6',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="anthem">

                {!! Form::open(['route' => 'anthem','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('audio','Audio MP3') !!}
                    {!! Form::file('audio',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('text', 'Anthem Text Form') !!}
                    {!! Form::textarea('text','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>

            <section id="houses">
                {!! Form::open(['route' => 'houses','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture','Picture') !!}
                    {!! Form::file('picture',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('information', 'Information') !!}
                    {!! Form::textarea('information','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>
            <section id="crest">
                {!! Form::open(['route' => 'crest','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture','Picture') !!}
                    {!! Form::file('picture',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('information', 'Information') !!}
                    {!! Form::textarea('information','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>
        </div>
    </div>
@endsection

@section('script',asset("js/gallery/gallery.js"))