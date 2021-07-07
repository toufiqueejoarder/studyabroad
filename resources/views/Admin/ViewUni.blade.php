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
            <h4>University Name: {{$user->organization}}</h4>
            <h5>Email: {{$user->email}}</h5>
            <h5>Address: {{$uni->address}},{{$uni->address2}},{{$uni->state}},{{$uni->provience}},{{$uni->country}}</h5>
            <h5>Website: {{$uni->website}}</h5>
            <h4>No. of Programs: {{$x}}</h4>
            <h5>Programs:</h5>
            <table class="table table-striped css-serial">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Program</th>
                    <th scope="col">Course</th>
                    <th scope="col">Discipline</th>
                </tr>
                </thead>
                <tbody>
                @foreach($program as $row)
                <tr>
                    <td scope="row"></td>
                    <td>{{$row->program}}</td>
                    <td>{{$row->course}}</td>
                    <td>{{$row->discipline}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>
@endsection
