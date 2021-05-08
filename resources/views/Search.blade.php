<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div id="accordion">
    @foreach($data as $product)

        <div class="card tr-search">
            <div class="card-header " id="heading-{{$product->faculty}}">
                <h5 class="mb-0 d-flex ">
                    <button class="btn btn-link no-ajax" onclick="event.preventDefault()"
                            data-toggle="collapse" data-target="#collapse-{{$product->faculty}}"
                            @if($loop->first) aria-expanded="true"
                            @endif  aria-controls="collapse-{{$product->faculty}}">
                        {{$product->faculty}}

                    </button>
                    <span class="ml-auto"> </span>
                </h5>
            </div>

            <div id="collapse-{{$product->faculty}}" class="collapse"
                 aria-labelledby="heading-{{$product->faculty}}"
                 data-parent="#accordion">
                <div class="card-body">
                    {{$product->course}}

                </div>
            </div>
        </div>


    @endforeach

</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
