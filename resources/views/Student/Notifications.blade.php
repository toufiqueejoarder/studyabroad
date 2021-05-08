@extends('layouts.app',array($student))

@section('content')

    <div class="sidebar-container">
        <ul class="sidebar-navigation">
            <li class="header">Navigation</li>
            <li>
                <a href="/student">
                    <i class="fa fa-home" aria-hidden="true"></i> Homepage
                </a>
            </li>
            <li>
                <?php $id= Auth::user()->id;?>
                <a href="{{URL::to('/Edit-Profile/'.$id)}}">
                    <i class="fa fa-users" aria-hidden="true"></i> Edit Profile
                </a>
            </li>
            <li>
                <?php $id= Auth::user()->id;?>
                <a href="{{URL::to('/wish-List/')}}">
                    <i class="fa fa-users" aria-hidden="true"></i> Wish List
                </a>
            </li>
            <li>
                <a href="/applied-program">
                    <i class="fa fa-list" aria-hidden="true"></i> Applied Programs
                </a>
            </li>
            <li>
                <a href="/student-notifications">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Notifications
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid" style="width: 95%">
            <div class="row ">
                <div class="col-md-8">
                    @foreach($accepted as $row)
                        <div class="p-2"># <strong>{{$row->uni_name}}</strong> Has Accepted Your Application for the <strong>{{$row->program}}</strong> on <strong>{{$row->course}}</strong>.</div>
                    @endforeach
                </div>

                <div class="col-md-3 float-md-right">
                </div>
            </div>
        </div>


    </div>
@endsection
