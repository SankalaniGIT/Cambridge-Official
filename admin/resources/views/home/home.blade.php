@extends('layouts.app')
@section('title','Admin Account')

@section('style',asset("css/home/home.css"))

@section('content')

    @parent
    <div id="menuBlock" class="owl-carousel owl-theme">
        <div class="item">
            <div class="row">
                <div class="col-lg-2 col-sm-2"></div>
                <div class="col-lg-4 col-sm-10">
                    <a href="{{ url('news') }}">
                        <div class="panel">
                            <div class="panel-body linkBlock">
                                <center>
                                    <strong class="text-info">NEWS</strong>
                                    <div>
                                        <img src="{{ asset('images/news/news-icon.png') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-10">
                    <a href="{{ url('gallery') }}">
                        <div class="panel">
                            <div class="panel-body linkBlock">
                                <center>
                                    <strong class="text-info">GALLERY</strong>
                                    <div>
                                        <img src="{{ asset('images/gallery/newsicons_gallery.png') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-2"></div>
                <div class="col-lg-4 col-sm-10">
                    <a href="{{ url('contact') }}">
                        <div class="panel">
                            <div class="panel-body  linkBlock">
                                <center>
                                    <strong class="text-info">CONTACT</strong>
                                    <div>
                                        <img src="{{ asset('images/contact/contact-us-icon.png') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-10">
                    <a href="{{ url('messages') }}">
                        <div class="panel">
                            @php
                                $newMsg = App\Messages\Messages::where('read',0)->count();

                            @endphp
                            @if($newMsg > 0)
                                <span class="badge notification">new {{ $newMsg }}</span>
                            @endif
                            <div class="panel-body linkBlock">
                                <center>
                                    <strong class="text-info">MESSAGES</strong>
                                    <div>
                                        <img src="{{ asset('images/messages/mail.svg') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2"></div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-lg-2 col-sm-2"></div>
                <div class="col-lg-4 col-sm-12">
                    <a href="{{ url('highlights') }}">
                        <div class="panel">
                            <div class="panel-body  linkBlock">
                                <center>
                                    <strong class="text-info">BANNERS/ADVERTISEMENTS</strong>
                                    <div>
                                        <img src="{{ asset('images/highlights/highlights.svg') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <a href="{{ url('career') }}">
                        <div class="panel">
                            <div class="panel-body  linkBlock">
                                <center>
                                    <strong class="text-info">CAREERS</strong>
                                    <div>
                                        <img src="{{ asset('images/careers/career.png') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-2"></div>
                <div class="col-lg-4 col-sm-12">
                    <a href="{{ url('school') }}">
                        <div class="panel">
                            <div class="panel-body  linkBlock">
                                <center>
                                    <strong class="text-info">SCHOOL PROFILE</strong>
                                    <div>
                                        <img src="{{ asset('images/highlights/highlights.svg') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <a href="{{ url('comments') }}">
                        <div class="panel">
                            <div class="panel-body  linkBlock">
                                <center>
                                    <strong class="text-info">NEWS COMMENTS</strong>
                                    <div>
                                        <img src="{{ asset('images/highlights/highlights.svg') }}" width="100"/>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-2"></div>
            </div>
        </div>
    </div>
@endsection