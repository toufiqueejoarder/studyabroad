@extends('layouts.app',array($university))

@section('content')

    <div class="sidebar-container">
        <ul class="sidebar-navigation">
            <li class="header">Navigation</li>
            <li>
                <a href="/university">
                    <i class="fa fa-home" aria-hidden="true"></i> Homepage
                </a>
            </li>
            <li>
                <?php $id= Auth::user()->id;?>
                <a href="{{URL::to('/program-posts/'.$id)}}">
                    <i class="fa fa-users" aria-hidden="true"></i> Programs
                </a>
            </li>
            <li>
                <a href="/discipline">
                    <i class="fa fa-list" aria-hidden="true"></i> Disciplines
                </a>
            </li>
            <li>
                <a href="/applications">
                    <i class="fa fa-list" aria-hidden="true"></i> Applications
                </a>
            </li>
            <li>
                <a href="/accepted-applications">
                    <i class="fa fa-list" aria-hidden="true"></i> Accepted Applications
                </a>
            </li>
            <li>
                <a href="/scholarships">
                    <i class="fa fa-list" aria-hidden="true"></i> Scholarships
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid" style="width: 95%">
            <div class="p-2"><h4><strong> Accepted Applications</strong></h4></div>
            <div class="row">
                <div class="col-md-12">
                    @foreach($faculty as $row)
                        <div class="row card mb-4">
                            <div class="row_header p-3 d-flex">
                                <h4 class="mr-auto">{{$row->faculty}}</h4>
                            </div>
                            <div class="row" style="">
                                <div class="col-md-12">
                                    <table class="table css-serial">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student Email</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Student Phone</th>
                                            <th scope="col">Program</th>
                                            <th scope="col">Course Name</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list->where('faculty', $row->faculty) as $applications)
                                            <tr>
                                                <td scope="row"></td>
                                                <td>{{$applications->student_email}}</td>
                                                <td>{{$applications->name}}</td>
                                                <td>{{$applications->phone}}</td>
                                                <td>{{$applications->program}}</td>
                                                <td>{{$applications->course}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>


    </div>
@endsection
