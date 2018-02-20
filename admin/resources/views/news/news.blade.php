@extends('layouts.app')
@section('title','news')

@section('style',asset("css/news/news.css"))

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
                <li><a href="#addNews"><i class="fa fa-plus" aria-hidden="true"></i> <span>ADD NEWS</span></a>
                </li>
                <li><a href="#updateNews"><i class="fa fa-refresh" aria-hidden="true"></i>
                        <span>UPDATE NEWS</span></a>
                </li>
                <li><a href="#deleteNews"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        <span>DELETE NEWS</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="addNews">
                {!! Form::open(['url' => 'addNews','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('title', 'News Title') !!}
                    {!! Form::text('title','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('category', 'News Category') !!}
                    {!! Form::select('category',App\News\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('subtitle', 'News Subtitle') !!}
                    {!! Form::text('subtitle','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('content', 'News Content') !!}
                    {!! Form::textarea('content','',array('class' => 'form-control widgEditor','id' => 'widgEditor')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('names_concerned','Names Concerned') !!}
                    {!! Form::text('names_concerned','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture','Upload Related Picture') !!}
                    {!! Form::file('picture',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="updateNews">

                {!! Form::open(['url' => 'updateNews','method' => 'post','class' => 'form','files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('id', 'News Title') !!}
                    {!! Form::select('id',App\News\News::all()->pluck('title','id'),null,['placeholder' => 'Select News ID','class' => 'form-control']) !!}
                </div>

                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked/></td>
                            <td>{!! Form::label('category', 'News Category',['style' => 'display: inline']) !!}
                            <td><input style="float: right;" type="checkbox" name="cat_check[]" id="cat_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::select('category',App\News\Category::all()->pluck('category','id'),null,['placeholder' => 'Change Category To','class' => 'form-control','disabled']) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked/></td>
                            <td>{!! Form::label('title', 'News Title',['style' => 'display: inline']) !!}</td>
                            <td><input style="float: right;" type="checkbox" name="t_check[]" id="t_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('title','',array('class' => 'form-control','disabled','cols' => '20')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('subtitle', 'News Subtitle') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="st_check[]" id="st_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('subtitle','',array('class' => 'form-control','disabled')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('content', 'News Content') !!}</td>
                            <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                            <td><input style="float: right;" type="checkbox" name="c_check[]" id="c_check" checked>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::textarea('content','',array('class' => 'form-control widgEditor','disabled')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('names_concerned','Names Concerned') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="nc_check[]" id="nc_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('names_concerned','',array('class' => 'form-control','disabled')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture','Upload Related Picture') !!}
                    <input style="float: right;" type="checkbox" name="p_check[]" id="p_check" checked> <span
                            style="float: right;padding-right: 5px"> Keep Unchanged </span>
                    {!! Form::file('picture',null,array('class' => 'form-control','disabled')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>

            <section id="deleteNews">

                @php

                    $totalNews =  \App\News\News::all()->count();

                    if ($totalNews % 4 == 0) {
                    if ($totalNews < 4) {
                    $pages = 1;
                    } else {
                    $pages = floor($totalNews / 4);
                    }
                    } else {
                    $pages = floor($totalNews / 4) + 1;




                    }


                @endphp


                @if($pages > 1)
                    <div class="container">
                        <div class="col-md-4">
                            <button class="btn btn-danger" class="bg-danger" disabled id="prev"
                                    onclick="javascript: newsPager(this.id)"><i
                                        class="fa fa-chevron-left"></i> Prev
                            </button>
                        </div>
                        <div class="col-md-4 bg-success">
                            <ol class="list-inline list-unStyled newsPager">
                                @for($i = 0; $i< $pages ; $i++)
                                    @if($i == 0)
                                        @php echo '<li class="active"><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: newsPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @else
                                        @php echo '<li><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: newsPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @endif
                                @endfor
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger" id="next"
                                    onclick="javascript: newsPager(this.id)">Next <i
                                        class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>

                @endif



                {!! Form::open(['url' => 'news', 'method' => 'delete', 'class' => 'form']) !!}
                {!! Form::submit('Delete By Bulk',['class' => 'btn btn-neutral', 'disabled' => true,'id' => 'checkBulk','style' => 'float: left;border-radius: 0 !important']) !!}
                <table class="table table-hover" frame="box" rules="all">
                    <thead style="background-color: aliceBlue;color: black">
                    <th>Check</th>
                    <th>Id</th>
                    <th>Title</th>
                    <th colspan="2">Date Posted</th>
                    </thead>
                    <tbody id="deletable">
                    @if(\App\News\News::all()->count() == 0)
                        <tr>
                            <td colspan="7">
                        <span>
                            <center>
                                No Content to display
                            </center>
                        </span>
                            </td>
                        </tr>

                    @endif
                    @foreach(\Illuminate\Support\Facades\DB::table('news')->skip(0)->take(4)->get() as $news)

                        <tr>
                            <td>{!! Form::checkbox('newsId'.$news->id,'true', false,['class' => 'checkBulk','onclick' => 'checkIfBulk()']) !!}</td>
                            <td>{{$news->id}}</td>
                            <td>{{$news->title}}</td>
                            <td>{{date('D M/d/Y',$news->posted_on)}}</td>
                            <td>
                                <a href="{{url('news/delete/'.$news->id)}}" class="btn">Delete</a>
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
@section('addNewsCategoryButton')
    <ol class="list-unStyled list-inline roundButtonContainer">
        <li>
            <div id="openAddNewsCategoryDialog" class="btn btn-primary roundButton"
                 title="Click to Add News Category">
                <p>+</p>
            </div>
        </li>
    </ol>
@stop

@section('addNewsCategoryDialog')
    <div id="dialog-form-category" title="Add News Category">
        {!! Form::open(['url' => 'news/addCategory','method' => 'post','class' => 'form','id' => 'addCategory']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('category', 'Category',['style' => 'display: inline']) !!}
            {!! Form::text('category','',array('class' => 'form-control','placeholder' => 'Insert a one word category')) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Category',array('class'=>'btn-block btn btn-success','id' => 'submit','style' =>'color: white')) !!}
        </div>
        {!! Form::close() !!}

        <div class="well well-sm">
            <h6>RENAME A CATEGORY</h6>
            {!! Form::open(['url' => 'news/renameCategory','method' => 'post', 'id' => 'renameCategory', 'class' => 'form']) !!}
            {!! Form::select('categoryToRename',\App\News\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
            {!! Form::text('newCategoryName','',array('class' => 'form-control','placeholder' => 'Enter A New Name For Category')) !!}
            {!! Form::submit('Rename Category',array('class'=>'btn-block btn btn-info','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>

        <div class="well well-sm">
            <h6>DELETE A CATEGORY</h6>
            {!! Form::open(['url' => 'news/deleteCategory','method' => 'post', 'id' => 'deleteCategory', 'class' => 'form']) !!}
            {!! Form::select('categoryToDelete',\App\News\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
            {!! Form::submit('Delete Category',array('class'=>'btn-block btn btn-danger ','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('script',asset("js/news/news.js"))
