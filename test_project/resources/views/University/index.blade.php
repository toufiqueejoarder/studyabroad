@extends('layouts.app')

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
                <a href="#">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid" style="width: 95%">
            <div class="row justify-content-lg-end">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Post an Opportunity') }}</div>

                        <div class="card-body">
                            <form action="{{route('add.programs')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label for="exampleInputEmail1" class="pr-3">Select Program: </label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="program">
                                            <div class="dropdown-menu">
                                                <option value="">--Please choose an option--</option>
                                                @foreach($category as $row)
                                                    <option class="dropdown-item" value="{{$row->program_category}}">{{$row->program_category}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter Course Name Here" aria-label="Course Name" aria-describedby="basic-addon2" name="course">
                                </div>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="discipline" class="pr-3">Select Discipline :</label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="discipline">
                                            <div class="dropdown-menu">
                                                <option value="">Choose an option</option>
                                                @foreach($disciplines as $row)
                                                    <option class="dropdown-item" value="{{$row->discipline}}">{{$row->discipline}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="discipline" class="pr-3">Online/On Campus :</label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="delivery">
                                            <div class="dropdown-menu">
                                                <option value=""><h6>Choose an option</h6></option>
                                                <option class="dropdown-item" value="Online">Online</option>
                                                <option class="dropdown-item" value="On Campus">On Campus</option>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Duration</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Course Duration in Year" name="duration">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Type: </label>
                                    <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="status">
                                        <div class="dropdown-menu">
                                            <option value="">Choose an option</option>
                                            <option class="dropdown-item" value="Full Time">Full Time</option>
                                            <option class="dropdown-item" value="Part Time">Part Time</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About The Course</label>
                                    <br>
                                    <textarea name="about" cols="50" rows="5" placeholder="Write Something About The Course" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Fees</label>
                                    <input type="text" class="form-control" aria-describedby="fees" placeholder="Course Fees" name="fees">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <label for="exampleInputEmail1">Application Date Starts: </label>
                                            <input type="text" class="form-control" aria-describedby="Apply Start" placeholder="Application Date Starts" name="apply_start">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <label for="exampleInputEmail1">Application Date ends: </label>
                                            <input type="text" class="form-control" aria-describedby="Apply Start" placeholder="Application Date Starts" name="apply_end">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Language</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Course Language" name="language">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Overview</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="overview" placeholder="Write Something About Course Overview" name="overview" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Program Structure</label>
                                    <textarea class="form-control" aria-describedby="program structure" col="50" row="5" placeholder="Write Your Program Structure Here" name="program_structure" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="Academic Requirements" placeholder="Academic Requirements for this program" name="academic_requirement">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">English Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="englishRequirements" placeholder="English Requirements for this program" name="english_requirement">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Other Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="otherRequirement" placeholder="Other Requirements for this Post" name="other_requirement">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Funding</label>
                                    <input type="text" class="form-control" aria-describedby="funding" placeholder="Funding" name="funding">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Visa</label>
                                    <input type="text" class="form-control" aria-describedby="visa" placeholder="Visa" name="visa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Work Permit</label>
                                    <input type="text" class="form-control" aria-describedby="workPermit" placeholder="Work Permit" name="work_permit">
                                </div>

                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
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
                            <a class="btn btn-block btn-primary" href="{{URL::to('/edit-profile/'.$id)}}">Edit Profile</a>
                        </div>
                    </div>
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
