@extends('layouts.app')

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
            Wish Lists
            <div class="row">
                <div class="col-md-8">
                    @foreach($wishes as $row)
                    <div class="col-md-12">
                        <div class="card p-4">
                            <div class="px-2"><strong>{{$row->university_name}}</strong></div>
                            <div class="d-flex">
                                <div class="p-2"><strong>{{$row->course}}</strong></div>
                                <div class="p-2" >{{$row->program}}</div>
                                <a class="p-2" href="{{URL::to('/program-details/'.$row->program_id)}}">View</a>
                                <!-- Button trigger modal -->
                                <a class="p-2" type="button" style="color:cornflowerblue; border: none; background-color: transparent;" data-toggle="modal" data-target="#ApplyModal">
                                    <i class="fas fa-paper-plane"></i><span class="">Apply</span>
                                </a>
                                <a class="p-2" style="color:red; border: none; background-color: transparent;" href="{{URL::to('/Delete-Wished-Program/'.$row->id)}}"><i class="fas fa-trash"></i><span class="">Delete</span></a>
                                <!--Apply Modal -->
                                <div class="modal fade" id="ApplyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{route('apply.program')}}">
                                                @csrf
                                            <div class="modal-body">
                                                Are You Sure To Apply Here?
                                                <input type="hidden" name="student" value="{{$row->student}}">
                                                <input type="hidden" name="program_id" value="{{$row->program_id}}">
                                                <input type="hidden" name="university_email" value="{{$row->university_email}}">
                                                <input type="hidden" name="university_name" value="{{$row->university_name}}">
                                                <input type="hidden" name="status" value="Applied">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
