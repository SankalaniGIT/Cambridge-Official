@extends('layouts.app')
@section('title','comments news')

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
                <li><a href="#manageComments"><i class="fa fa-plus" aria-hidden="true"></i> <span>MANAGE COMMENTS</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">

            <section id="manageComments">

                {!! Form::open() !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('id', 'News Title') !!}
                    {!! Form::select('id',App\News\News::all()->pluck('title','id'),null,['placeholder' => 'Select News ID','class' => 'form-control','onChange' => 'javascript: syncComment($(this).val())']) !!}
                </div>

                <hr/>
                <div class="form-group">
                    <table id="comment-view" class="table table-hover table-responsive" style="width: 100%">
                        <thead>
                        <tr style="background-color: grey;color: white">
                            <th>Full Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Commented On</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="6">
                                Select a news category over
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr/>
                <div style="float: left"><span id="noOfComments"></span> Comments</div>
                {!! Form::close() !!}

            </section>

        </div>
    </div>

@endsection
@section('script',asset("js/news/comment.js"))
           