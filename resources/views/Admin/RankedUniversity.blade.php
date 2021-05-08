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
            <h3>University Ranks</h3>
            <div class="py-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add New Ranked University
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add New University Rank</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('store.rankeduni')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name Of University</label>
                                        <input class="form-control" placeholder="Name of the University" name="nmuni">
                                    </div>
                                    <div class="input-group-prepend">
                                        <select class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" name="country">
                                            <div class="dropdown-menu">
                                                <option class="dropdown-item">Select a Country</option>
                                                @foreach($country as $row)
                                                    <option class="dropdown-item" value="{{$row->country}}">{{$row->country}}</option>
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input class="form-control" placeholder="Year" name="year">
                                    </div>
                                    <div class="control-group">
                                        <label for="exampleInputEmail1">Times Higher Education Ranking (2021)</label>
                                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="timesrank">
                                    </div>
                                    <div class="control-group">
                                        <label for="exampleInputEmail1">Shanghai Jiao University Ranking</label>
                                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="shanghairank">
                                    </div>
                                    <div class="control-group">
                                        <label for="exampleInputEmail1">Top Universities Ranking (2021)</label>
                                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="topuni">
                                    </div>
                                    <div class="control-group">
                                        <label for="exampleInputEmail1">U.S. News and World Report Ranking (2021)</label>
                                        <input class="form-control" placeholder="Times Higher Education Ranking (2021)" name="usrank">
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" id="addCategory">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table css-serial mt-5">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">University</th>
                    <th scope="col">Country</th>
                    <th scope="col">Year</th>
                    <th scope="col">Times Higher Education <br>Ranking</th>
                    <th scope="col">Shanghai Jiao Tong <br>University Ranking</th>
                    <th scope="col">Top Universities <br>Ranking</th>
                    <th scope="col">U.S. News and World <br>Report Ranking (2021)</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ranks as $row)
                <tr>
                    <td scope="row"></td>
                    <td>{{$row->university}}</td>
                    <td>{{$row->country}}</td>
                    <td>{{$row->year}}</td>
                    <td class="text-center">{{$row->timesrnk}}</td>
                    <td class="text-center">{{$row->shanghairank}}</td>
                    <td class="text-center">{{$row->topuni}}</td>
                    <td class="text-center">{{$row->usrank}}</td>
                    <td class="d-flex">
                        <div style="padding: 2px"><a href="{{URL::to('/edit-ranking/'.$row->id)}}" class="btn btn-sm btn-info dir-button ">Edit</a></div>
                        <div style="padding: 2px"><a href="{{URL::to('/delete-ranking/'.$row->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a></div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
