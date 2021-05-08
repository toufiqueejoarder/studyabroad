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
                <a href="/discipline-list">
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
        <div class="container-fluid">
            <div class="container-fluid">
                <h3>Disciplines</h3>
                <ul>
                    @foreach($list as $row)
                        <li>{{$row->discipline}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
