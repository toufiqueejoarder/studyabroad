@extends('layouts.app',array($university))

@section('content')
    <div class="container-fluid" style="width: 95%">
        <div class="row justify-content-lg-center">
            <div class="col-md-8 mb-lg-5">
                <form action="{{url('/profile/update/'.$profile->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="email" value="{{$profile->email}}">
                    <input type="hidden" name="organization" value="{{$profile->name}}">
                    <div class="form-group">
                        <label for="product model">Email</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="" value="{{$profile->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="product model">Organization</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="organization" value="{{$profile->organization}}" >
                    </div>
                    <div class="">
                        <label for="exampleFormControlFile1">University Logo</label>
                        <div class="d-flex">
                            <input type="file" class="form-control-file"  style="border-style: none;" name="uLogo">
                            <h6>Old Image: </h6>
                            <img src="{{URL::to($profile->university_logo)}}" style="width: 90px; height: 60px; float: right; border: 1px solid black">
                            <input type="hidden" name="old_photo" value="{{$profile->university_logo}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product description">Tagline</label>
                        <br>
                        <textarea name="tagline" cols="40" rows="5" placeholder="Tagline" >{{$profile->tagline}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product id">Address Line 1</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Address Line 1" name="address" value="{{$profile->address}}">
                    </div>
                    <div class="form-group">
                        <label for="product id">Address Line 2</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Address Line 2" name="address2" value="{{$profile->address2}}">
                    </div>
                    <div class="form-group">
                        <label for="buying price">State</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="State" name="state" value="{{$profile->state}}">
                    </div>
                    <div class="form-group">
                        <label for="selling price">Provience</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Provience" name="provience" value="{{$profile->provience}}">
                    </div>
                    <div class="form-group">
                        <label for="selling price">Country</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Country" name="country" value="{{$profile->country}}">
                    </div>
                    <div class="form-group">
                        <label for="selling price">Website</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Website" name="website" value="{{$profile->website}}">
                    </div>
                    <div class="form-group">
                        <label for="product description">Reason To Study Here</label>
                        <br>
                        <textarea name="ReasonToStudyH" cols="40" rows="5" class="w-100" placeholder="Reason To Study Here" >{{$profile->ReasonToStdyH}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">History</label>
                        <br>
                        <textarea name="history" cols="40" rows="5" class="w-100" placeholder="History of The University" >{{$profile->history}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Education</label>
                        <br>
                        <textarea name="education" cols="40" rows="5" class="w-100" placeholder="Education" >{{$profile->education}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Research</label>
                        <br>
                        <textarea name="research" cols="40" rows="5" class="w-100" placeholder="Research" >{{$profile->research}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Career</label>
                        <br>
                        <textarea name="career" cols="40" rows="5" class="w-100" placeholder="Career" >{{$profile->career}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Student Services</label>
                        <br>
                        <textarea name="StService" cols="40" rows="5" class="w-100" placeholder="Student Services" >{{$profile->StService}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Housing Service</label>
                        <br>
                        <textarea name="HousingService" cols="40" rows="5" class="w-100" placeholder="Housing Service" >{{$profile->HousingService}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product description">Library Service</label>
                        <br>
                        <textarea name="LibraryService" cols="40" rows="5" class="w-100" placeholder="Career" >{{$profile->LibraryService}}</textarea>
                    </div><div class="form-group">
                        <label for="product description">Campus Life</label>
                        <br>
                        <textarea name="CampusLife" cols="40" rows="5" class="w-100" placeholder="Campus Life" >{{$profile->CampusLife}}</textarea>
                    </div><div class="form-group">
                        <label for="product description">Sports Facilities</label>
                        <br>
                        <textarea name="SportsFacilities" cols="40" rows="5" class="w-100" placeholder="Career" >{{$profile->SportsFacilities}}</textarea>
                    </div><div class="form-group">
                        <label for="product description">Student Club</label>
                        <br>
                        <textarea name="StudentClub" cols="40" rows="5" class="w-100" placeholder="Student Club" >{{$profile->StudentClub}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Upload">Save</button>
                    <a href="/university" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
