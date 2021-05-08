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
                <a href="/discipline">
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

        <div class="container-fluid" style="width: 95%">
            <div class="row">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add a Scholarship
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('store.scholarship')}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Scholarship Title</label>
                                        <input type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Scholarship Amount</label>
                                        <input type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Scholarship Description</label>
                                        <textarea type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Scholarship Eligibility</label>
                                        <textarea type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="eligibility"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apply Date Start</label>
                                        <input type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="applyStart">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apply Date End</label>
                                        <input type="text" class="form-control" aria-describedby="titleHelp" placeholder="" name="applyEnd">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row py-5">
                @foreach($scholarships as $row)
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex"><div class="mr-auto"><h5><strong>Scholarship Title: {{$row->title}}</strong></h5></div><div class="ml-auto"><a class="btn btn-danger" href="{{URL::to('/delete/scholarship/'.$row->id)}}">Delete</a> </div> </div>
                                <div><h6>Scholarship Amount: {{$row->amount}}</h6></div>
                                <div><h6>Scholarship Description: {{$row->description}}</h6></div>
                                <div><h6>Scholarship Eligibility: {{$row->eligibility}}</h6></div>
                                <div><h6><span>Apply Date Start: <strong>{{$row->applyStart}}</strong></span> <span style="margin-left: 20px;">Apply Date End: <strong>{{$row->applyEnd}}</strong></span></h6></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
