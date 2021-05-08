@extends('layouts.app', array($university))

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
            <div class="row">
                <div class="col-md-12">
                    <div><strong>Name: {{$list->name}}</strong></div>
                    <div class="py-2">
                        <div class="row">
                            <div class="col-md-10">
                                <strong>Contact:</strong>
                                <div>Phone: {{$list->phone}}</div>
                                <div>Email: {{$list->student}}</div>
                                <div>Mailing Address: {{$list->mailingAddress}}</div>
                            </div>
                            <div class="col-md-2">
                                <form method="post" action="{{route('accept.application')}}">
                                    @csrf
                                    <input type="hidden" name="Wid" value="{{$list->id}}">
                                    <input type="hidden" name="student_email" value="{{$list->student}}">
                                    <input type="hidden" name="programs_id" value="{{$list->program_id}}">
                                    <input type="hidden" name="uni_email" value="{{$list->university_email}}">
                                    <input type="hidden" name="uni_name" value="{{$list->university_name}}">
                                    <input type="hidden" name="status" value="Accepted">
                                    <button type="submit" class="btn btn-info">Accept Application</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div>
                        <h5>Education: </h5>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Degree</th>
                                <th scope="col">Organization</th>
                                <th scope="col">Major</th>
                                <th scope="col">Result</th>
                                <th scope="col">Passing Year</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{$list->Masters}}</th>
                                <td>{{$list->MOrganization}}</td>
                                <td>{{$list->Mdepartment}}</td>
                                <td>{{$list->MCGPA}}</td>
                                <td>{{$list->MpassYear}}</td>
                            </tr>
                            <tr>
                                <th>{{$list->Bachelor}}</th>
                                <td>{{$list->BOrganization}}</td>
                                <td>{{$list->BDepartment}}</td>
                                <td>{{$list->BachelorCGPA}}</td>
                                <td>{{$list->BpassYear}}</td>
                            </tr>
                            <tr>
                                <th>{{$list->HSC}}</th>
                                <td>{{$list->HSCOrg}}</td>
                                <td>{{$list->HSCGroup}}</td>
                                <td>{{$list->HSCresult}}</td>
                                <td>{{$list->HSCPass}}</td>
                            </tr>
                            <tr>
                                <th>{{$list->SSC}}</th>
                                <td>{{$list->SSCOrg}}</td>
                                <td>{{$list->SSCGroup}}</td>
                                <td>{{$list->SSCResult}}</td>
                                <td>{{$list->SSCPass}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        @if($list->ielts)
                        <div class="col-md-6">
                            <div class='embed-responsive' style='padding-bottom:100%'>
                                <object data='{{URL::to($list->ielts)}}' type='application/pdf' width='100%' height='100%'></object>
                            </div>
                        </div>
                        @endif
                        @if($list->gre)
                        <div class="col-md-6">
                            <div class='embed-responsive' style='padding-bottom:100%'>
                                <object data='{{URL::to($list->gre)}}' type='application/pdf' width='100%' height='100%'></object>
                            </div>
                        </div>
                            @endif
                    </div>
                    <div class="py-5">
                        <strong>Program Info:</strong>
                        <div>Program: {{$list->program}}</div>
                        <div>Name: {{$list->course}}</div>
                        <div>Academic Requirements: {{$list->academic_requirement}}</div>
                        <div>English Requirements: {{$list->english_requirement}}</div>
                        <div>Other Requirements: {{$list->other_requirement}}</div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
