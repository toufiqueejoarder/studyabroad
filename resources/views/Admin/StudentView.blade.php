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
            <div class="row">
                <div class="col-md-12">
                    <div><strong>Name: {{$std->name}}</strong></div>
                    <div class="py-2">
                        <div class="row">
                            <div class="col-md-5">
                                <strong>Contact:</strong>
                                <div>Phone: {{$student->phone}}</div>
                                <div>Email: {{$student->email}}</div>
                                <div>Mailing Address: {{$student->mailingAddress}}</div>
                            </div>
                            <div class="col-md-7">
                                <img src="{{URL::to($student->p_image)}}" style="width: 150px; height: auto;">
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
                                <th>{{$student->Masters}}</th>
                                <td>{{$student->MOrganization}}</td>
                                <td>{{$student->Mdepartment}}</td>
                                <td>{{$student->MCGPA}}</td>
                                <td>{{$student->MpassYear}}</td>
                            </tr>
                            <tr>
                                <th>{{$student->Bachelor}}</th>
                                <td>{{$student->BOrganization}}</td>
                                <td>{{$student->BDepartment}}</td>
                                <td>{{$student->BachelorCGPA}}</td>
                                <td>{{$student->BpassYear}}</td>
                            </tr>
                            <tr>
                                <th>{{$student->HSC}}</th>
                                <td>{{$student->HSCOrg}}</td>
                                <td>{{$student->HSCGroup}}</td>
                                <td>{{$student->HSCresult}}</td>
                                <td>{{$student->HSCPass}}</td>
                            </tr>
                            <tr>
                                <th>{{$student->SSC}}</th>
                                <td>{{$student->SSCOrg}}</td>
                                <td>{{$student->SSCGroup}}</td>
                                <td>{{$student->SSCResult}}</td>
                                <td>{{$student->SSCPass}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        @if($student->ielts)
                            <div class="col-md-6">
                                <div class='embed-responsive' style='padding-bottom:100%'>
                                    <object data='{{URL::to($student->ielts)}}' type='application/pdf' width='100%' height='100%'></object>
                                </div>
                            </div>
                        @endif
                        @if($student->gre)
                            <div class="col-md-6">
                                <div class='embed-responsive' style='padding-bottom:100%'>
                                    <object data='{{URL::to($student->gre)}}' type='application/pdf' width='100%' height='100%'></object>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
