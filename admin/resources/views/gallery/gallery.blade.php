@extends('layouts.app')
@section('title','gallery')

@section('style',asset("css/gallery/gallery.css"))

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
                <li><a href="#addGallery"><i class="fa fa-plus" aria-hidden="true"></i> <span>ADD GALLERY</span></a>
                </li>
                <li><a href="#updateGallery"><i class="fa fa-refresh" aria-hidden="true"></i>
                        <span>UPDATE GALLERY</span></a>
                </li>
                <li><a href="#deleteGallery"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        <span>DELETE GALLERY</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="addGallery">
                {!! Form::open(['url' => 'addGallery','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('category', 'Image Category') !!}
                    {!! Form::select('category',App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::text('description','',array('class' => 'form-control','autocomplete' => 'off')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('alt', 'Image Alternative Content') !!}
                    {!! Form::text('alt','',array('class' => 'form-control','autocomplete' => 'off')) !!}
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

            <section id="updateGallery">

                {!! Form::open(['url' => 'updateGallery','method' => 'post','class' => 'form','files' => true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('id', 'Gallery Id') !!}
                    {!! Form::select('id',App\Gallery\Gallery::all()->pluck('id','id'),null,['placeholder' => 'Select Gallery ID','class' => 'form-control']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked/></td>
                            <td>{!! Form::label('category', 'Image Category',['style' => 'display: inline']) !!}
                            <td><input style="float: right;" type="checkbox" name="cat_check[]" id="cat_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::select('category',App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Change Category To','class' => 'form-control','disabled']) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('description', 'Description') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="desc_check[]" id="desc_check"
                                       checked> <span style="float: right;padding-right: 5px"> Keep Unchanged </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::text('description','',['class' => 'form-control','autocomplete' => 'off','disabled']) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('alt', 'Alternative Text') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="alt_check[]" id="alt_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">{!! Form::text('alt','',array('class' => 'form-control','autocomplete' => 'off','disabled')) !!}</td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('picture','Upload Related Picture') !!}
                    <input style="float: right;" type="checkbox" name="pic_check[]" id="pic_check" checked> <span
                            style="float: right;padding-right: 5px"> Keep Unchanged </span>
                    {!! Form::file('picture',null,array('class' => 'form-control','disabled')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightSlateGrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>

            <section id="deleteGallery">
                @php

                    $totalGalleries =  \App\Gallery\Gallery::all()->count();

                    if ($totalGalleries % 4 == 0) {
                    if ($totalGalleries < 4) {
                    $pages = 1;
                    } else {
                    $pages = floor($totalGalleries / 4);
                    }
                    } else {
                    $pages = floor($totalGalleries / 4) + 1;




                    }

                @endphp

                @if($pages > 1)
                    <div class="container">
                        <div class="col-md-4">
                            <button class="btn btn-danger" class="bg-danger" disabled id="prev"
                                    onclick="javascript: galleryPager(this.id)"><i
                                        class="fa fa-chevron-left"></i> Prev
                            </button>
                        </div>
                        <div class="col-md-4 bg-success">
                            <ol class="list-inline list-unStyled galleryPager">
                                @for($i = 0; $i< $pages ; $i++)
                                    @if($i == 0)
                                        @php echo '<li class="active"><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: galleryPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @else
                                        @php echo '<li><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: galleryPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @endif
                                @endfor
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger" id="next"
                                    onclick="javascript: galleryPager(this.id)">Next <i
                                        class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>

                @endif

                {!! Form::open(['url' => 'gallery', 'method' => 'delete', 'class' => 'form']) !!}
                {!! Form::submit('Delete By Bulk',['class' => 'btn btn-neutral', 'disabled' => true,'id' => 'checkBulk','style' => 'float:left;border-radius: 0 !important']) !!}
                <table class="table table-hover" frame="box" rules="all">
                    <thead style="color: black;background-color: aliceBlue;">
                    <th>Check</th>
                    <th>Id</th>
                    <th>Category</th>
                    <th colspan="2">Description</th>
                    </thead>
                    <tbody id="deletable">
                    @if(\App\Gallery\Gallery::all()->count() == 0)
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
                    @foreach(\Illuminate\Support\Facades\DB::table('gallery')->skip(0)->take(4)->get() as $gallery)

                        <tr>
                            <td>{!! Form::checkbox('galleryId'.$gallery->id,'true', false,['class' => 'checkBulk','onclick' => 'checkIfBulk()']) !!}</td>
                            <td>{{$gallery->id}}</td>
                            <td>{{$gallery->category}}</td>
                            <td>{{$gallery->description}}</td>
                            <td>
                                <a href="{{url('gallery/delete/'.$gallery->id)}}" class="btn"
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
@section('addCategoryGroupButtons')
    <ol class="list-unStyled list-inline roundButtonContainer">
        <li>
            <div id="openAddCategoryDialog" class="btn btn-primary roundButton"
                 title="Click to Add Category">
                <p>+</p>
            </div>
        </li>
        <li>
            <div id="openAddGroupDialog" class="btn btn-danger roundButton"
                 title="Click to Add Category Group">
                <p>+</p>
            </div>
        </li>
    </ol>
@stop


@section('addCategoryDialog')
    <div id="dialog-form-category" title="Add Gallery Category">
        {!! Form::open(['url' => 'gallery/addCategory','method' => 'post','class' => 'form','id' => 'addCategory']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('category', 'Category',['style' => 'display: inline']) !!}
            {!! Form::text('category','',array('class' => 'form-control','placeholder' => 'Insert a one word category')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('group', 'Group Belong To',[]) !!}
            {!! Form::select('group',App\Gallery\Group::all()->pluck('groupName','id'),null,['placeholder' => 'Select Group Of','class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Category',array('class'=>'btn-block btn btn-success','id' => 'submit','style' =>'color: white')) !!}
        </div>
        {!! Form::close() !!}

        <div class="well well-sm">
            <h6>RENAME A CATEGORY</h6>
            {!! Form::open(['url' => 'gallery/renameCategory','method' => 'post', 'id' => 'renameCategory', 'class' => 'form']) !!}
            {!! Form::select('categoryToRename',\App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
            {!! Form::text('newCategoryName','',array('class' => 'form-control','placeholder' => 'Enter A New Name For Category')) !!}
            {!! Form::submit('Rename Category',array('class'=>'btn-block btn btn-info','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>

        <div class="well well-sm">
            <h6>DELETE A CATEGORY</h6>
            {!! Form::open(['url' => 'gallery/deleteCategory','method' => 'post', 'id' => 'deleteCategory', 'class' => 'form']) !!}
            {!! Form::select('categoryToDelete',\App\Gallery\Category::all()->pluck('category','id'),null,['placeholder' => 'Select Category','class' => 'form-control']) !!}
            {!! Form::submit('Delete Category',array('class'=>'btn-block btn btn-danger ','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>

        <div class="panel-body">
            <div class="bg-info">
                <ol>
                    <li>FOR ADDING GALLERY ON PROJECT FOLDER - USE PREFIX <strong>PROJECT_</strong></li>
                </ol>
            </div>
        </div>
    </div>

@stop

@section('addGroupDialog')
    <div id="dialog-form-group" title="Add Category Group">
        {!! Form::open(['url' => 'gallery/addGroup','method' => 'post','class' => 'form','id' => 'addGroup']) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('group', 'Group',['style' => 'display: inline']) !!}
            {!! Form::text('group','',array('class' => 'form-control','placeholder' => 'Insert a one word Group')) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Group',array('class'=>'btn-block btn btn-success ','id' => 'submit','style' =>'color: white')) !!}
        </div>
        {!! Form::close() !!}

        <div class="well well-sm">
            <h6>RENAME A GROUP</h6>
            {!! Form::open(['url' => 'gallery/renameGroup','method' => 'post', 'id' => 'deleteCategory', 'class' => 'form']) !!}
            {!! Form::select('groupToRename',\App\Gallery\Group::all()->pluck('groupName','id'),null,['placeholder' => 'Select Group','class' => 'form-control']) !!}
            {!! Form::text('newGroupName','',array('class' => 'form-control','placeholder' => 'Enter A New Name For Group')) !!}
            {!! Form::submit('Rename Group',array('class'=>'btn-block btn btn-info','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>

        <div class="well well-sm">
            <h6>DELETE A GROUP</h6>
            {!! Form::open(['url' => 'gallery/deleteGroup','method' => 'post', 'id' => 'deleteCategory', 'class' => 'form']) !!}
            {!! Form::select('groupToDelete',\App\Gallery\Group::all()->pluck('groupName','id'),null,['placeholder' => 'Select Group','class' => 'form-control']) !!}
            {!! Form::submit('Delete Group',array('class'=>'btn-block btn btn-danger ','id' => 'submit','style' =>'color: white')) !!}
            {!! Form::close() !!}
        </div>

    </div>

@stop


@section('script',asset("js/gallery/gallery.js"))