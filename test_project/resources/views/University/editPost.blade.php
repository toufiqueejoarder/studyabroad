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
                <a href="/discipline-list">
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
            <div class="row justify-content-lg-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Post an Opportunity') }}</div>

                        <div class="card-body">
                            <form action="{{url('/program/update/'.$post->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label for="exampleInputEmail1" class="pr-3">Select Program: </label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="program">
                                            <div class="dropdown-menu">
                                                <option value="">--Please choose an option--</option>
                                                @foreach($category as $row)
                                                    <option class="dropdown-item" value="{{$row->program_category}}" <?php if($row->program_category == $post->program) echo "selected"; ?>>{{$row->program_category}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter Course Name Here" aria-label="Course Name" aria-describedby="basic-addon2" name="course" value="{{$post->course}}">
                                </div>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="discipline" class="pr-3">Select Discipline :</label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="discipline" >
                                            <div class="dropdown-menu">
                                                <option value="">Choose an option</option>
                                                @foreach($disciplines as $row)
                                                    <option class="dropdown-item" value="{{$row->discipline}}" <?php if($row->discipline == $post->discipline) echo "selected"; ?>>{{$row->discipline}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="discipline" class="pr-3">Online/On Campus :</label>
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="delivery" >
                                            <div class="dropdown-menu">
                                                <option value=""><h6>Choose an option</h6></option>
                                                <option class="dropdown-item" value="Online" <?php if( $post->delivery == 'Online') echo "selected"; ?>>Online</option>
                                                <option class="dropdown-item" value="On Campus" <?php if( $post->delivery == 'On Campus') echo "selected"; ?>>On Campus</option>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Duration</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Course Duration in Year" name="duration" value="{{$post->duration}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Type: </label>
                                    <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="status">
                                        <div class="dropdown-menu">
                                            <option value="">Choose an option</option>
                                            <option class="dropdown-item" value="Full Time" <?php if( $post->study_status == 'Full Time') echo "selected"; ?>>Full Time</option>
                                            <option class="dropdown-item" value="Part Time" <?php if( $post->study_status == 'Part Time') echo "selected"; ?>>Part Time</option>
                                        </div>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">About The Course</label>
                                    <br>
                                    <textarea name="about" cols="50" rows="5" placeholder="Write Something About The Course" style="min-width: 100%;" >{{$post->about}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Fees</label>
                                    <input type="text" class="form-control" aria-describedby="fees" placeholder="Course Fees" name="fees" value="{{$post->fees}}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <label for="exampleInputEmail1">Application Date Starts: </label>
                                            <input type="text" class="form-control" aria-describedby="Apply Start" placeholder="Application Date Starts" name="apply_start" value="{{$post->apply_start}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <label for="exampleInputEmail1">Application Date ends: </label>
                                            <input type="text" class="form-control" aria-describedby="Apply Start" placeholder="Application Date Starts" name="apply_end" value="{{$post->apply_end}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Language</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Course Language" name="language" value="{{$post->language}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Overview</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="overview" placeholder="Write Something About Course Overview" name="overview" style="min-width: 100%;">{{$post->Overview}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Program Structure</label>
                                    <textarea class="form-control" aria-describedby="program structure" col="50" row="5" placeholder="Write Your Program Structure Here" name="program_structure" style="min-width: 100%;">{{$post->program_structure}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="Academic Requirements" placeholder="Academic Requirements for this program" name="academic_requirement" value="{{$post->academic_requirement}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">English Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="englishRequirements" placeholder="English Requirements for this program" name="english_requirement" value="{{$post->english_requirement}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Other Requirements</label>
                                    <input type="text" class="form-control" aria-describedby="otherRequirement" placeholder="Other Requirements for this Post" name="other_requirement" value="{{$post->other_requirement}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Funding</label>
                                    <input type="text" class="form-control" aria-describedby="funding" placeholder="Funding" name="funding" value="{{$post->funding}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Visa</label>
                                    <input type="text" class="form-control" aria-describedby="visa" placeholder="Visa" name="visa" value="{{$post->visa}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Work Permit</label>
                                    <input type="text" class="form-control" aria-describedby="workPermit" placeholder="Work Permit" name="work_permit" value="{{$post->work_permit}}">
                                </div>

                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                                <a <?php $id= Auth::user()->id;?> href="{{URL::to('/program-posts/'.$id)}}" class="btn btn-danger" value="Upload">Back</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
