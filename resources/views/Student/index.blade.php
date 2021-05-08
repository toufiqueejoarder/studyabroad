@extends('layouts.app', array($student))

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
                <a href="{{URL::to('/wish-List')}}">
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
            <div class="row justify-content-lg-end">
                <div class="col-md-8">
                </div>

                <div class="col-md-3 float-md-right">
                    <div class="card">
                        <div class="card-header">{{ __('Profile') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h5> {{Auth::user()->organization}} </h5>
                            <h6>email: {{ Auth::user()->email }}</h6>
                            <?php $id= Auth::user()->id;?>
                            <a class="btn btn-block btn-primary" href="{{URL::to('/Edit-Profile/'.$id)}}">Edit Profile</a>
                        </div>
                    </div>
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
