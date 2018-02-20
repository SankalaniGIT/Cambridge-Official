@extends('layouts.app')
@section('title','Highlights')

@section('style',asset("css/highlights/highlights.css"))

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
                <li><a href="#addBanner"><i class="fa fa-plus" aria-hidden="true"></i> <span>ADD BANNER</span></a>
                </li>
                <li><a href="#updateBanner"><i class="fa fa-refresh" aria-hidden="true"></i>
                        <span>UPDATE BANNER</span></a>
                </li>
                <li><a href="#deleteBanner"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        <span>DELETE BANNER</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="addBanner">
                {!! Form::open(['url' => 'addHighlight','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('titleAdd', 'Highlight Title') !!}
                    {!! Form::text('titleAdd','',['placeholder' => 'Enter a title here','class' => 'form-control','autocomplete' => 'off']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('descriptionAdd', 'Description') !!}
                    {!! Form::text('descriptionAdd','',['class' => 'form-control','placeholder' => 'Enter a brief description here','autocomplete' => 'off']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('pictureAdd','Upload A Highlights Picture') !!}
                    {!! Form::file('pictureAdd',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="updateBanner">

                {!! Form::open(['url' => 'updateHighlight','method' => 'post','class' => 'form','files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('id', 'Highlight Id') !!}
                    {!! Form::select('id',App\Highlights\Highlights::all()->pluck('id','id'),null,['placeholder' => 'Select Highlight ID','class' => 'form-control','onchange' => 'javascript: setRestColumns(this.selectedIndex)']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('titleUpdate', 'Highlight Title') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="title_check[]" id="title_check"
                                       checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::text('titleUpdate','',array('class' => 'form-control','disabled')) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('descriptionUpdate', 'Description') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="desc_check[]" id="desc_check"
                                       checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::text('descriptionUpdate','',array('class' => 'form-control','disabled')) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('pictureUpdate','Upload Related Picture') !!}
                    <input style="float: right;" type="checkbox" name="pic_check[]" id="pic_check" checked> <span
                            style="float: right;padding-right: 5px"> Keep Unchanged </span>
                    {!! Form::file('pictureUpdate',null,array('class' => 'form-control onlyOne','style' =>'display: none','disabled')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>

            <section id="deleteBanner">

                @php

                    $totalBanners =  \App\Highlights\Highlights::all()->count();

                    if ($totalBanners % 4 == 0) {
                    if ($totalBanners < 4) {
                    $pages = 1;
                    } else {
                    $pages = floor($totalBanners / 4);
                    }
                    } else {
                    $pages = floor($totalBanners / 4) + 1;




                    }

                @endphp


                @if($pages > 1)
                    <div class="container">
                        <div class="col-md-4">
                            <button class="btn btn-danger" class="bg-danger" disabled id="prev"
                                    onclick="javascript: bannerPager(this.id)"><i
                                        class="fa fa-chevron-left"></i> Prev
                            </button>
                        </div>
                        <div class="col-md-4 bg-success">
                            <ol class="list-inline list-unStyled bannerPager">
                                @for($i = 0; $i< $pages ; $i++)
                                    @if($i == 0)
                                        @php echo '<li class="active"><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: bannerPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @else
                                        @php echo '<li><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: bannerPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @endif
                                @endfor
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger" id="next"
                                    onclick="javascript: bannerPager(this.id)">Next <i
                                        class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>

                @endif






                {!! Form::open(['url' => 'banner', 'method' => 'delete', 'class' => 'form']) !!}
                {!! Form::submit('Delete By Bulk',['class' => 'btn btn-neutral', 'disabled' => true,'id' => 'checkBulk','style' => 'float:left;border-radius: 0 !important']) !!}
                <table class="table table-hover" frame="box" rules="all">
                    <thead style="background-color: aliceBlue;color: black">
                    <th>Check</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th colspan="2">Image Path</th>
                    </thead>
                    <tbody id="deletable">
                    @if(\App\Highlights\Highlights::all()->count() == 0)
                        <tr>
                            <td colspan="6">
                        <span>
                            <center>
                                No Content to display
                            </center>
                        </span>
                            </td>
                        </tr>

                    @endif
                    @foreach(\Illuminate\Support\Facades\DB::table('highlights')->skip(0)->take(4)->get() as $highlight)

                        <tr>
                            <td>{!! Form::checkbox('bannerId'.$highlight->id,'true', false,['class' => 'checkBulk','onclick' => 'checkIfBulk()']) !!}</td>
                            <td>{{$highlight->id}}</td>
                            <td>{{$highlight->title}}</td>
                            <td>{{$highlight->description}}</td>
                            <td>{{$highlight->image_path}}</td>
                            <td>
                                <a href="{{url('highlights/delete/'.$highlight->id)}}" class="btn"
                                   title="Click to Delete">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {!! Form::close() !!}
            </section>
        </div>
    </div>

@endsection

@section('script',asset("js/highlights/highlights.js"))