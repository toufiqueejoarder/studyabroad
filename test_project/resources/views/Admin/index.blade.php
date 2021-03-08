@extends('layouts.app')

@section('content')
    <div class="sidebar-container">
        <ul class="sidebar-navigation">
            <li class="header">Navigation</li>
            <li>
                <a href="/admin">
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
                <a href="#">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in! Admin') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Program Categories
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <ul>
                                    @foreach($categories as $row)
                                        <li>{{$row->program_category}}</li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-deck justify-content-lg-center">
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Add New Program Category
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <form action="{{route('add.category')}}" method="post">
                                            @csrf
                                            <div class="control-group">
                                                <div class="form-group floating-label-form-group controls">
                                                    <label>Category Name</label>
                                                    <input type="text" class="form-control" placeholder="Category Name" name="categoryName" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="addCategory">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header">
                            Disciplines
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <ul>
                                    @foreach($disciplines as $row)
                                        <li>{{$row->discipline}}</li>

                                    @endforeach
                                </ul>
                            </div>
                            <div class="card-deck justify-content-lg-center">
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseDiscipline" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Add New Discipline
                                    </a>
                                </p>
                                <div class="collapse" id="collapseDiscipline">
                                    <div class="card card-body">
                                        <form action="{{route('add.discipline')}}" method="post">
                                            @csrf
                                            <div class="control-group">
                                                <div class="form-group floating-label-form-group controls">
                                                    <label>Discipline Name</label>
                                                    <input type="text" class="form-control" placeholder="Discipline Name" name="disciplineName" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="addCategory">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
