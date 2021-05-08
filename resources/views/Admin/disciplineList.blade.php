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
                <div class="col-md-8">
                    <h3>Disciplines</h3>
                    <ul>
                        @foreach($discipline as $row)
                            <li>{{$row->discipline}}</li>
                            @foreach($faculty as $data)
                                @if($row->discipline==$data->disciplines)
                                    <ul class="pl-5">
                                        <li>{{$data->departments}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>

    </div>
@endsection
