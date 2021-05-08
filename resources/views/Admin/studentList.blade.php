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
        @if (session('error'))
            <script>
                alert("This Student Does not Have any Complete Profile Yet.");
            </script>
        @endif
        <div class="container-fluid">
            <table class="table css-serial">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $row)
                    <tr>
                        <td scope="row"></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->organization}}</td>
                        <td>{{$row->email}}</td>
                        <td class="d-flex">
                            <div style="padding: 2px"><a href="{{URL::to('/view-student/'.$row->id)}}" class="btn btn-sm btn-success dir-btn-s">View</a></div>
                            <div style="padding: 2px"><a href="{{URL::to('/delete-student/'.$row->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a></div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
