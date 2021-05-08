@extends('layouts.app', array($student))

@section('content')

    <div class="sidebar-container">
        <ul class="sidebar-navigation">
            <li class="header">Navigation</li>
            <li>
                <a href="/student">
                    <i class="fa fa-home" aria-hidden="true"></i> Homepage
                </a>
            </li>
            <li>
                <?php $id= Auth::user()->id;?>
                <a href="{{URL::to('/Edit-Profile/'.$id)}}">
                    <i class="fa fa-users" aria-hidden="true"></i> Edit Profile
                </a>
            </li>
            <li>

                <a href="/wish-List">
                    <i class="fa fa-users" aria-hidden="true"></i> Wish List
                </a>
            </li>
            <li>
                <a href="/applied-program">
                    <i class="fa fa-list" aria-hidden="true"></i> Applied Programs
                </a>
            </li>
            <li>
                <a href="/student-notifications">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Notifications
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid" style="width: 95%">
            <div class="row justify-content-lg-end">
                <div class="col-md-8 pb-lg-5">
                    <form method="post" enctype="multipart/form-data" action="{{route('update.Sprofile')}}">
                        @csrf
                        <input type="hidden" name="email" value="{{$profile->email}}">
                        <div class="form-group">
                            <label for="product model">Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="" value="{{$profile->email}}" disabled>
                        </div>
                        <div class="text-center">
                            <label for="exampleFormControlFile1">Image</label>
                            <div class="text-center">
                                <h6>Old Image: </h6>
                                <img src="{{URL::to($profile->p_image)}}" style="width: 100px; height: 75px; align-items: center; border: 1px solid black">
                                <input type="hidden" name="old_image" value="{{$profile->p_image}}">
                                <div style="background-color: #2b82ad" class="text-center">
                                    <p style="background-color: #2b82ad;"><input type="file"  accept="image/*" name="pImage" id="file" style=" width:100%; display: none;"></p>
                                    <p><label for="file" style="width: 100%; cursor: pointer;">Upload Image</label></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product model">Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Name" name="name" value="{{$profile->name}}" >
                        </div>
                        <div class="form-group">
                            <label for="product model">Phone</label>
                            <input type="text" class="form-control" aria-describedby="phone" placeholder="Phone" name="phone" value="{{$profile->phone}}" >
                        </div>
                        <div class="form-group">
                            <label for="product model">Mailing Address</label>
                            <input type="text" class="form-control" aria-describedby="MailingAddress" placeholder="mailingAddress" name="mailingAddress" value="{{$profile->mailingAddress}}" >
                        </div>

                        <div class="text-center"><strong> Add Education Qualification </strong></div>
                        <p>
                            <button class="btn btn-primary px-3" type="button" data-toggle="collapse" data-target="#collapseMasters" aria-expanded="false" aria-controls="collapseExample">
                                Add Masters
                            </button>
                        </p>
                        <div class="collapse" id="collapseMasters">
                            <div class="card card-body">
                                <div class="form-group">
                                    <label for="product model">Masters</label>
                                    <input type="text" class="form-control" aria-describedby="phone" placeholder="Masters" name="Masters" value="{{$profile->Masters}}" >
                                </div>
                                <div class="form-group">
                                    <label for="product id">Organization of Masters</label>
                                    <input type="text" class="form-control" aria-describedby="MastersOrganization" placeholder="Organization of Masters" name="MOrganization" value="{{$profile->MOrganization}}">
                                </div>
                                <div class="form-group">
                                    <label for="Department">Major in Masters</label>
                                    <input type="text" class="form-control" aria-describedby="Department" placeholder="Major in Masters" name="Mdepartment" value="{{$profile->Mdepartment}}">
                                </div>
                                <div class="form-group">
                                    <label for="Passing Year">Passing Year</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masters Passing Year" name="MpassYear" value="{{$profile->MpassYear}}">
                                </div>
                                <div class="form-group">
                                    <label for="MCGPA">Result</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masters Result" name="MCGPA" value="{{$profile->MCGPA}}">
                                </div>
                            </div>
                        </div>

                        <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseBachelor" aria-expanded="false" aria-controls="collapseExample">
                                Add Bachelor
                            </button>
                        </p>
                        <div class="collapse" id="collapseBachelor">
                            <div class="card card-body">
                                <div class="form-group">
                                    <label for="selling price">Bachelor</label>
                                    <input type="text" class="form-control" aria-describedby="Bachelor" placeholder="Bachelor" name="Bachelor" value="{{$profile->Bachelor}}">
                                </div>
                                <div class="form-group">
                                    <label for="Organization of Bachelor">Organization</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Organization of Bachelor" name="BOrganization" value="{{$profile->BOrganization}}">
                                </div>
                                <div class="form-group">
                                    <label for="selling price">Major in Bachelor</label>
                                    <input type="text" class="form-control" aria-describedby="bachelorDepartment" placeholder="Major in Bachelor" name="BDepartment" value="{{$profile->BOrganization}}">
                                </div>
                                <div class="form-group">
                                    <label for="passing year">Passing Year</label>
                                    <input type="text" class="form-control" aria-describedby="passyear" placeholder="Passing Year" name="BpassYear" value="{{$profile->BpassYear}}">
                                </div>
                                <div class="form-group">
                                    <label for="BachelorCGPA">Bachelor Result</label>
                                    <input type="text" class="form-control" aria-describedby="BachelorCGPA" placeholder="Bachelor Result" name="BachelorCGPA" value="{{$profile->BachelorCGPA}}">
                                </div>
                            </div>
                        </div>
                        <p>
                            <button class="btn btn-primary" type="button" style="padding-left:27px; padding-right:27px;" data-toggle="collapse" data-target="#collapseHSC" aria-expanded="false" aria-controls="collapseExample">
                                Add HSC
                            </button>
                        </p>
                        <div class="collapse" id="collapseHSC">
                            <div class="card card-body">
                                <div class="form-group">
                                    <label for="hsc">HSC</label>
                                    <input type="text" class="form-control" aria-describedby="HSC" placeholder="HSC" name="HSC" value="{{$profile->HSC}}">
                                </div>
                                <div class="form-group">
                                    <label for="Organization of Bachelor">Organization</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Organization of HSC" name="HSCOrg" value="{{$profile->HSCOrg}}">
                                </div>
                                <div class="form-group">
                                    <label for="MAjor">Group In HSC</label>
                                    <input type="text" class="form-control" aria-describedby="Major" placeholder="Major in HSC" name="MajorHSC" value="{{$profile->MajorHSC}}">
                                </div>
                                <div class="form-group">
                                    <label for="passing year">Passing Year</label>
                                    <input type="text" class="form-control" aria-describedby="HSCPass" placeholder="Passing Year" name="HSCPass" value="{{$profile->HSCPass}}">
                                </div>
                                <div class="form-group">
                                    <label for="BachelorCGPA">HSC Result</label>
                                    <input type="text" class="form-control" aria-describedby="HSCResult" placeholder="HSC Result" name="HSCresult" value="{{$profile->HSCresult}}">
                                </div>
                            </div>
                        </div>
                        <p>
                            <button class="btn btn-primary" style="padding-left:28px; padding-right:28px;" type="button" data-toggle="collapse" data-target="#collapseSSC" aria-expanded="false" aria-controls="collapseExample">
                                Add SSC
                            </button>
                        </p>
                        <div class="collapse" id="collapseSSC">
                            <div class="card card-body">
                                <div class="form-group">
                                    <label for="hsc">SSC</label>
                                    <input type="text" class="form-control" aria-describedby="SSC" placeholder="SSC" name="SSC" value="{{$profile->SSC}}">
                                </div>
                                <div class="form-group">
                                    <label for="Organization of SSC">Organization</label>
                                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Organization of SSC" name="SSCOrg" value="{{$profile->SSCOrg}}">
                                </div>
                                <div class="form-group">
                                    <label for="MAjor">Group In SSC</label>
                                    <input type="text" class="form-control" aria-describedby="group" placeholder="Group in SSC" name="SSCGroup" value="{{$profile->SSCGroup}}">
                                </div>
                                <div class="form-group">
                                    <label for="passing year">Passing Year</label>
                                    <input type="text" class="form-control" aria-describedby="SSCPass" placeholder="Passing Year" name="SSCPass" value="{{$profile->SSCPass}}">
                                </div>
                                <div class="form-group">
                                    <label for="BachelorCGPA">SSC Result</label>
                                    <input type="text" class="form-control" aria-describedby="SSCResult" placeholder="SSC Result" name="SSCResult" value="{{$profile->SSCResult}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="IELTS">IELTS/TOEFL</label>
                            <input type="file" class="form-control-file" name="IELTS">
                            @if($profile->ielts)
                                <div class="col-md-6">
                                    <div class='embed-responsive' style='padding-bottom:100%'>
                                        <object data='{{URL::to($profile->ielts)}}' type='application/pdf' width='100%' height='100%'></object>
                                    </div>
                                </div>
                            @endif
                            <input type="hidden" class="form-control-file" name="old_ielts" value="{{$profile->ielts}}">
                        </div>
                        <div class="form-group">
                            <label for="IELTS">GRE/SAT</label>
                            <input type="file" class="form-control-file" name="GRE">
                            @if($profile->gre)
                                <div class="col-md-6">
                                    <div class='embed-responsive' style='padding-bottom:100%'>
                                        <object data='{{URL::to($profile->gre)}}' type='application/pdf' width='100%' height='100%'></object>
                                    </div>
                                </div>
                            @endif
                            <input type="hidden" class="form-control-file" name="old_gre" value="{{$profile->gre}}">
                        </div>

                        <button type="submit" class="btn btn-primary" value="Upload">Save</button>
                        <a href="/university" class="btn btn-danger">Back</a>
                    </form>
                </div>

                <div class="col-md-3 float-md-right">
                    <div class="card">
                        <div class="card-header">{{ __('Profile') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                        </div>
                    </div>
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
