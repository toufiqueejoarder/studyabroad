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
                <a href="/wish-List">
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
            Applied Programs
            <div class="row">
                <div class="col-md-8">
                    @foreach($wishes as $row)
                        <div class="col-md-12">
                            <div class="card p-4">
                                <div class="d-flex">
                                    <div class="px-2 mr-auto"><strong>{{$row->university_name}}</strong></div>
                                    <div class="ml-auto">
                                    @foreach($accepted as $have)
                                        @if($row->id == $have->wishL_id)
                                            <h5 style="color: green;">Accepted</h5>
                                        @endif
                                     @endforeach
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="p-2"><strong>{{$row->course}}</strong></div>
                                    <div class="p-2" >{{$row->program}}</div>
                                </div>
                                <div class="px-2"> Discipline: {{$row->discipline}}</div>
                                <div class="d-flex">
                                    <div class="p-2">{{$row->delivery}}</div>
                                    <div class="p-2" >{{$row->duration}}</div>
                                    <div class="p-2" >{{$row->fees}}</div>
                                </div>
                                <div class="px-2">{{$row->about}}</div>

                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </div>


    </div>
@endsection
