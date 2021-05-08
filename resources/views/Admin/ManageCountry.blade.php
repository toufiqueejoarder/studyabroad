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
                <a href="/students-list">
                    <i class="fa fa-users" aria-hidden="true"></i> Students
                </a>
            </li>
            <li>
                <a href="/university-list">
                    <i class="fa fa-users" aria-hidden="true"></i> Universities
                </a>
            </li>
            <li>
                <a href="/discipline-list">
                    <i class="fa fa-list" aria-hidden="true"></i> Disciplines
                </a>
            </li>
            <li>
                <a href="/manage-country">
                    <i class="fa fa-flag" aria-hidden="true"></i> Manage Country
                </a>
            </li>
            <li>
                <a href="/Ranked-University">
                    <i class="fa fa-list" aria-hidden="true"></i> University Ranking
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid">
            <h3>Manage Country</h3>
            <div class="container-fluid">
                <div class="row">
            <div class="col-md-10">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-study-tab" data-toggle="tab" href="#nav-study" role="tab" aria-controls="nav-study" aria-selected="true">Study</a>
                        <a class="nav-item nav-link" id="nav-living-tab" data-toggle="tab" href="#nav-living" role="tab" aria-controls="nav-living" aria-selected="false">Living</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                        <a class="nav-item nav-link" id="nav-uni-tab" data-toggle="tab" href="#nav-uni" role="tab" aria-controls="nav-uni" aria-selected="false">University</a>
                        <a class="nav-item nav-link" id="nav-visa-tab" data-toggle="tab" href="#nav-visa" role="tab" aria-controls="nav-visa" aria-selected="false">Student Visa</a>
                        <a class="nav-item nav-link" id="nav-WP-tab" data-toggle="tab" href="#nav-WP" role="tab" aria-controls="nav-WP" aria-selected="false">Work Permit</a>
                        <a class="nav-item nav-link" id="nav-HTA-tab" data-toggle="tab" href="#nav-HTA" role="tab" aria-controls="nav-HTA" aria-selected="false">How To Apply</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-study" role="tabpanel" aria-labelledby="nav-study-tab">
                        <div class="">
                            <form method="post" action="{{route('store.study')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="notes" placeholder="Write a short note on study in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Why Study Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="whyStudyHere" placeholder="Write Something About Why Should One Study in This Country" required name="wysh" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">What is It Like to Study in Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="ltSH" placeholder="Write Something About What is It Like to Study in Here" name="LtSH" required style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">What to Study in Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="WtSH" placeholder="Write Something About What is It Like to Study in Here" name="wtSH" required style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Major Cities Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="MajorCity" placeholder="Major Cities Here" name="MajorCities" required style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Universities to attend in this country</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="UniToAttend" placeholder="Universities to attend here" name="UniToAttend" required style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Practical Information</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="PracticalInformation" placeholder="Practical Information" name="pracInfo" required style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Helpful Ways To Make Sure You Qualify for Universities in this country</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="helpfulWay" placeholder="Helpful Ways To Make Sure You Qualify for Universities in this country" name="waytoqualify" required style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-living" role="tabpanel" aria-labelledby="nav-living-tab">
                        <div class="">
                            <form method="post" action="{{route('store.living')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="notes" placeholder="Write a short note on study in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tution Fees Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="whyStudyHere" placeholder="Write Something About Tuition Fees in This Country" required name="TFH" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Living Cost Here</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="LivingCost" placeholder="Write Something About Living Cost In This Country" name="LivingCost" required style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="">
                            <form method="post" action="{{route('store.about')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="10" aria-describedby="notes" placeholder="Write a short note on study in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Anything Else? (optional)</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="whyStudyHere" placeholder="Write Something About Tuition Fees in This Country"  name="others" style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-uni" role="tabpanel" aria-labelledby="nav-uni-tab">
                        <div class="">
                            <form method="post" action="{{route('store.university')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Academic Year </label>
                                    <input type="text" class="form-control" aria-describedby="notes" placeholder="Write the name of the months of Academic year " required name="AcYrS" style="min-width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number of Ranked University</label>
                                    <input type="text" class="form-control" aria-describedby="rankedUniversity" placeholder="Write the number of Ranked university " required name="nruh" style="min-width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number of International Student in this country</label>
                                    <input type="text" class="form-control" aria-describedby="noOfIntStd" placeholder="Number of International Student in this country" required name="noist" style="min-width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number of Total Student in this Country</label>
                                    <input type="text" class="form-control" aria-describedby="noOfTotalStd" placeholder="Number of Total Student in This Country " required name="notstd" style="min-width: 100%;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number of Population in this Country</label>
                                    <input type="text" class="form-control" aria-describedby="noOfPopulation" placeholder="Number of Population in This Country " required name="nopop" style="min-width: 100%;">
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-visa" role="tabpanel" aria-labelledby="nav-visa-tab">
                        <div class="">
                            <form method="post" action="{{route('store.visa')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="10" aria-describedby="notes" placeholder="Write a short note on Student Visa in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Procedure (optional)</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="visaProcedure" placeholder="Write Something About Visa Procedure in This Country"  name="visap" style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-WP" role="tabpanel" aria-labelledby="nav-WP-tab">
                        <div class="">
                            <form method="post" action="{{route('store.wpermit')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="10" aria-describedby="notes" placeholder="Write a short note on work permit in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Work permits (optional)</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="workPermit" placeholder="Write Something About Work Permit in This Country"  name="workpt" style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-HTA" role="tabpanel" aria-labelledby="nav-HTA-tab">
                        <div class="">
                            <form method="post" action="{{route('store.hTApply')}}">
                                @csrf
                                <div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Note</label>
                                    <textarea class="form-control" col="50" row="10" aria-describedby="notes" placeholder="Write a short note on Documents need to Apply in this country" required name="notes" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">What Documents Need To Apply in This Country</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="whyStudyHere" placeholder="Write About The Documents Need To Apply in This Country"  name="dnta" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Notes on Proving English Skills</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="whyStudyHere" placeholder="Write Something About Proving English Skills in This Country"  name="espi" style="min-width: 100%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Application Deadline</label>
                                    <textarea class="form-control" col="50" row="5" aria-describedby="applicationDeadline" placeholder="Write Something About Application Deadlines in This Country"  name="appdl" style="min-width: 100%;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        Country:
                        <div class="list">
                            <ul>
                                @foreach($country as $row)
                                    <li>{{$row->country}}</li>
                                 @endforeach
                            </ul>
                        </div>
                        <div>
                        <form method="post" action="{{route('store.country')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Add New Country</label>
                            <input type="text" class="form-group form-control" name="country" required>
                            <button type="submit" class="btn btn-primary" value="Upload">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
