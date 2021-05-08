@extends('app')

@section('content')

    <div class="container">
        <h1>Browse WorldWide</h1>
        <div class="row p-4">
            @foreach($country as $col)
                <div class="col-md-4 text-center">
                    <a href="{{URL::to('/search-country/'.$col->country)}}">{{$col->country}}</a>

                </div>
            @endforeach
        </div>
    </div>

@endsection
