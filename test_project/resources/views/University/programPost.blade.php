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
        <div class="container-fluid">
            <table class="table css-serial">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Program</th>
                    <th scope="col">Name</th>
                    <th scope="col">Discipline</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $row)
                <tr>
                    <td scope="row"></td>
                    <td>{{$row->program}}</td>
                    <td>{{$row->course}}</td>
                    <td>{{$row->discipline}}</td>
                    <td class="d-flex">
                        <div style="padding: 2px"><a href="{{URL::to('/edit-program-post/'.$row->id)}}" class="btn btn-sm btn-info dir-button ">Edit</a></div>
                        <div style="padding: 2px"><a href="" class="btn btn-sm btn-success dir-btn-s">View</a></div>
                        <div style="padding: 2px"><a href="{{URL::to('/delete-program/'.$row->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a></div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
