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
                <div class="col-md-4">
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



                </div>
                <div class="col-md-4">
                    <div class="card">
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
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add Departments
                        </div>
                        <div class="card-body">
                            <div>
                                <ul>
                                    @foreach($disciplines as $row)
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
                            <div class="card-deck justify-content-lg-center">
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapsefaculty" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Add New Department
                                    </a>
                                </p>
                                <div class="collapse" id="collapsefaculty">
                                    <div class="card card-body">
                                        <form action="{{route('add.departments')}}" method="post">
                                            @csrf
                                            <div class="input-group-prepend">
                                                <label for="discipline" class="pr-3">Select Discipline :</label>
                                                <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="discipline">
                                                    <div class="dropdown-menu">
                                                        <option value="">Choose an option</option>
                                                        @foreach($disciplines as $row)
                                                            <option class="dropdown-item" value="{{$row->discipline}}">{{$row->discipline}}</option>
                                                        @endforeach
                                                    </div>
                                                </select>
                                            </div>
                                            <div class="control-group">
                                                <div class="form-group floating-label-form-group controls">
                                                    <label>Department Name</label>
                                                    <input type="text" class="form-control" placeholder="Faculty Name" name="facultyName" required>
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
