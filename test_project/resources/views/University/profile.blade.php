@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="width: 95%">
        <div class="row justify-content-lg-center">
            <div class="col-md-8">
                <form action="{{url('/profile/update/'.$profile->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="email" value="{{$profile->email}}">
                    <div class="form-group">
                        <label for="product model">Email</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="" value="{{$profile->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">University Logo</label>
                        <div class="d-flex">
                            <input type="file" class="form-control-file" name="uLogo">
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
                    <button type="submit" class="btn btn-primary" value="Upload">Save</button>
                    <a href="/university" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
