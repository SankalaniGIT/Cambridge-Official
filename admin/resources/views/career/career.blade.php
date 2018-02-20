@extends('layouts.app')
@section('title','career')

@section('style',asset("css/career/career.css"))

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
                <li><a href="#addCareer"><i class="fa fa-plus" aria-hidden="true"></i> <span>ADD CAREER</span></a>
                </li>
                <li><a href="#updateCareer"><i class="fa fa-refresh" aria-hidden="true"></i>
                        <span>UPDATE CAREER</span></a>
                </li>
                <li><a href="#deleteCareer"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        <span>DELETE CAREER</span></a>
                </li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="addCareer">
                {!! Form::open(['url' => 'career','method' => 'post','class' => 'form', 'files' => true]) !!}
                {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::text('totalQualification','1',array('class' => 'form-control hidden','id' => 'totalQualification')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('position', 'Position / Designation') !!}
                    {!! Form::text('position','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('description', 'Brief Description') !!}
                    {!! Form::text('description','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('noOfVacant', 'No Of Vacant') !!}
                    {!! Form::text('noOfVacant','1',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('duration', 'Expires In (No Of Days)') !!}
                    {!! Form::text('duration','',array('class' => 'form-control','id' => 'duration')) !!}
                </div>
                <hr/>
                <div class="form-group qualificationSet">
                    <div class="row" id="row0">
                        <div class="col-md-11">
                            {!! Form::label('qualification0', 'Qualification') !!}
                            {!! Form::text('qualification0','',array('class' => 'form-control','id' => 'qualification')) !!}
                        </div>
                        <div class="col-md-1">
                            <a style="position: relative;top: 35px;float: left;" id="addMoreQualification"
                               href="javascript: void(0)" onclick="addMoreQualification(this.id)">
                                <img src="{{ asset('images/careers/plus.svg') }}" width="30"/>
                            </a>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('priority','Priority') !!}
                    {!! Form::text('priority','',array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('banner','Upload Related Picture') !!}
                    {!! Form::file('banner',null,array('class' => 'form-control')) !!}
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}
            </section>

            <section id="updateCareer">

                {!! Form::open(['url' => 'career','method' => 'patch','class' => 'form','files' => true]) !!}
                {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::text('totalQualificationUpdate','',array('class' => 'form-control hidden','id' => 'totalQualificationUpdate')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('position', 'Vacant Position') !!}
                    {!! Form::select('position',App\Career\Career::all()->pluck('position','id'),null,['placeholder' => 'Select Vacancy ID','id' => 'careerId','class' => 'form-control', 'onchange' => 'getCareerInfo(this.id)']) !!}
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked/></td>
                            <td>{!! Form::label('description', 'Brief Description',['style' => 'display: inline']) !!}</td>
                            <td><input style="float: right;" type="checkbox" name="desc_check[]" id="desc_check"
                                       checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('description','',array('id' => 'description', 'class' => 'form-control','disabled','cols' => '20')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked/></td>
                            <td>{!! Form::label('noOfVacantUpdate', 'No Of Vacant',['style' => 'display: inline']) !!}</td>
                            <td><input style="float: right;" type="checkbox" name="noVacant_check[]" id="noVacant_check"
                                       checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('noOfVacantUpdate','',array('id' => 'noOfVacantUpdate', 'class' => 'form-control','disabled','cols' => '20')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('expiresIn', 'Expires In (No Of Days)') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="exp_check[]" id="exp_check" checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('expiresIn','',array('id' => 'expiresIn', 'class' => 'form-control','disabled')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('qualification', 'Qualification') !!}</td>
                            <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                            <td><input style="float: right;" type="checkbox" name="qualification_check[]"
                                       id="qualification_check"
                                       checked>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div id="qualificationsToBeUpdated" class="qualificationsToBeUpdated">

                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    <table class="updateAligner">
                        <tr>
                            <td><input type="radio" checked></td>
                            <td>{!! Form::label('priority','Priority') !!}</td>
                            <td><input style="float: right;" type="checkbox" name="priority_check[]" id="priority_check"
                                       checked>
                                <span style="float: right;padding-right: 5px"> Keep Unchanged </span></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                {!! Form::text('priority','',array('id' => 'priority','class' => 'form-control','disabled')) !!}
                            </td>
                        </tr>
                    </table>
                </div>
                <hr/>
                <div class="form-group">
                    {!! Form::label('banner','Upload Related Banner') !!}
                    <input style="float: right;" type="checkbox" name="banner_check[]" id="banner_check" checked> <span
                            style="float: right;padding-right: 5px"> Keep Unchanged </span>
                    {!! Form::file('banner',null,array('class' => 'form-control','disabled')) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit',array('class'=>'btn-block btn btn-primary ','id' => 'submit','style' =>'background-color: lightslategrey !important;color: white')) !!}
                </div>
                {!! Form::close() !!}

            </section>

            <section id="deleteCareer">

                @php

                    $totalCareers =  \App\Career\Career::all()->count();

                    if ($totalCareers % 4 == 0) {
                    if ($totalCareers < 4) {
                    $pages = 1;
                    } else {
                    $pages = floor($totalCareers / 4);
                    }
                    } else {
                    $pages = floor($totalCareers / 4) + 1;




                    }

                @endphp

                @if($pages > 1)
                    <div class="container">
                        <div class="col-md-4">
                            <button class="btn btn-danger" class="bg-danger" disabled id="prev"
                                    onclick="javascript: careerPager(this.id)"><i
                                        class="fa fa-chevron-left"></i> Prev
                            </button>
                        </div>
                        <div class="col-md-4 bg-success">
                            <ol class="list-inline list-unStyled careerPager">
                                @for($i = 0; $i< $pages ; $i++)
                                    @if($i == 0)
                                        @php echo '<li class="active"><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: careerPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @else
                                        @php echo '<li><a href="javascript: void(0)" id="'. $i .'" onclick="javascript: careerPager(this.id)">'. $i. '</a></li>';  @endphp
                                    @endif
                                @endfor
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-danger" id="next"
                                    onclick="javascript: careerPager(this.id)">Next <i
                                        class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>

                @endif




                {!! Form::open(['url' => 'career', 'method' => 'delete', 'class' => 'form']) !!}
                {!! Form::submit('Delete By Bulk',['class' => 'btn btn-info', 'disabled' => true,'id' => 'checkBulk','style' => 'float: left;border-radius: 0 !important']) !!}
                <table class="table table-hover" frame="box" rules="all">
                    <thead style="background-color: aliceBlue;color: black">
                    <th>Check</th>
                    <th>Id</th>
                    <th colspan="2">Position</th>
                    </thead>
                    <tbody id="deletable">
                    @if(\App\Career\Career::all()->count() == 0)
                        <tr>
                            <td colspan="9">
                        <span>
                            <center>
                                No Content to display
                            </center>
                        </span>
                            </td>
                        </tr>

                    @endif
                    @foreach(\Illuminate\Support\Facades\DB::table('career')->skip(0)->take(4)->get() as $career)

                        <tr>
                            <td>{!! Form::checkbox('careerId'.$career->id,'true', false,['class' => 'checkBulk','onclick' => 'checkIfBulk()']) !!}</td>
                            <td>{{$career->id}}</td>
                            <td>{{$career->position}}</td>
                            <td>
                                <a href="{{url('career/delete/'.$career->id)}}" class="btn"
                                   title="Delete This">Delete</a>
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


@section('script',asset("js/career/career.js"))
