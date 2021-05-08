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
            <form method="post" action="{{route('update.rank')}}">
                @csrf
                <input type="hidden" name="id" value="{{$uni->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Of University</label>
                        <input class="form-control" placeholder="Name of the University" name="nmuni" value="{{$uni->university}}">
                    </div>
                    <div class="input-group-prepend">
                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                            <div class="dropdown-menu">
                                <option class="dropdown-item">Select a Country</option>
                                @foreach($country as $row)
                                    <option class="dropdown-item" value="{{$row->country}}" <?php if($row->country == $uni->country) echo "selected"; ?>>{{$row->country}}</option>
                                @endforeach
                            </div>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" placeholder="Year" name="year" value="{{$uni->year}}">
                    </div>
                    <div class="control-group">
                        <label for="exampleInputEmail1">Times Higher Education Ranking (2021)</label>
                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="timesrank" value="{{$uni->timesrnk}}">
                    </div>
                    <div class="control-group">
                        <label for="exampleInputEmail1">Shanghai Jiao University Ranking</label>
                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="shanghairank" value="{{$uni->shanghairank}}">
                    </div>
                    <div class="control-group">
                        <label for="exampleInputEmail1">Top Universities Ranking (2021)</label>
                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="topuni" value="{{$uni->topuni}}">
                    </div>
                    <div class="control-group">
                        <label for="exampleInputEmail1">U.S. News and World Report Ranking (2021)</label>
                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="usrank" value="{{$uni->usrank}}">
                    </div>
                <div class="p-4">
                <button type="submit" class="btn btn-info">Save</button>
                <a href="/Ranked-University" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
