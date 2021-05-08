@extends('app')
<style>
    .pagination ul li:first-child {
        margin-bottom: 0;
        margin-top: .5rem;
    }
</style>
@section('content')
    <div class="container">
        <div class="SearchHeader">
            <div class="SearchHeaderContainer"></div>
            <h1 class="text-center">
                <i class="Icon lnr-cli"></i>
                {{$discipline}}
            </h1>
        </div>
        <div class="SearchBody" style="margin-top: 2rem;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filterBody">

                        <div class="panel-group" id="accordion">

                            <!-- First Panel -->
                            <div class="card p-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne" style="color: #247BA0;">Discipline</h4>
                                    </div>

                                    <div id="collapseOne" class="panel-collapse collapse show">
                                        <div id="diFilter" class="panel-body RefineModule">
                                            <div class="RefineContent">
                                                <ul class="RefineContentDiscipline">
                                                    <li>
                                                        <button class="HelperButton BackMainDisciplines DesktopOnlyBlock" data-toggle="collapse" data-target="#collapseD">
                                                            &lt;&lt; All Disciplines
                                                        </button>
                                                        <div id="collapseD" class="panel-collapse collapse">
                                                    <ul>
                                                    @foreach($disciplines as $data)

                                                            <li class="DisciplineGroup">
                                                        <span data-cy="di-54" class="RefineSectionHeading Discipline MainDiscipline">
                                                            <span class="DisciplineLabel"><a href="{{URL::to('/search-master-degree/'.$data->discipline)}}">{{$data->discipline}}</a></span>
                                                            <span data-v-cbe2de7a="" class="Facet"></span>
                                                        </span>
                                                            </li>
                                                @endforeach
                                                    </ul>
                                                        </div>
                                                    </li>
                                                    <li class="Discipline AllDisciplines MobileOnlyBlock">
                                                        All Disciplines
                                                    </li>

                                                    @foreach($disciplines as $data)
                                                        @if($data->discipline ==$disdata->disciplines)
                                                    <li class="DisciplineGroup">
                                                        <span data-cy="di-54" class="RefineSectionHeading Discipline MainDiscipline">
                                                            <span class="DisciplineLabel"><a href="{{URL::to('/search-master-degree/'.$data->discipline)}}">{{$data->discipline}}</a></span>
                                                            <span data-v-cbe2de7a="" class="Facet"></span>
                                                        </span>
                                                        @if($data->discipline ==$disdata->disciplines)
                                                        <ul class="SubDisciplineList">
                                                            @foreach($faculty as $faculty)
                                                            <li class="Discipline SubDiscipline">
                                                                <span>
                                                                    <span class="DisciplineLabel"><a href="{{URL::to('/search-master-degree/'.$faculty->departments)}}">{{$faculty->departments}}</a></span>
                                                                    </span>
                                                            </li>
                                                                @endforeach
                                                        </ul>
                                                            @endif
                                                    </li>
                                                        @endif
                                                        @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Panel -->
                            <div class="card p-3 mt-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">Location</h4>
                                    </div>

                                    <div id="collapseTwo" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <section id="loFilter" data-cy="loFilter" class="RefineModule">
                                                <h3 class="RefineSectionHeading"></h3>
                                                <div class="RefineContent">
                                                    <div>
                                                        <div class="LocationScreens">
                                                            <div class="Screen">
                                                                <div class="FormWrapper">
                                                                    <form method="get" action="{{ url('/search-master-degree/'.$discipline.'/locations') }}">
                                                                        <p><input type="checkbox" name="id" value="Canada" onchange="this.form.submit()"  ><em> Canada</em></p>
                                                                        <p><input type="checkbox" name="id2" value="United States" onchange="this.form.submit()" ><em> United states</em></p>
                                                                        <p><input type="checkbox" name="id3" value="Finland" onchange="this.form.submit()"><em> Finland</em></p>
                                                                        <p><input type="checkbox" name="id4" value="Australia" onchange="this.form.submit()"><em> Australia</em></p>
                                                                        <p><input type="checkbox" name="id5" value="Germany" onchange="this.form.submit()"><em> Germany</em></p>
                                                                        <p><span>+</span><input type="text" name="id6" onchange="this.form.submit()" placeholder="Add a Country"></p>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                            <button class="HelperButton"><span> Filter by continent </span></button></section>
                                        </div>
                                    </div>
                                </div>

                            <!-- Third Panel -->
                                <div class="panel panel-default mt-4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">Tuition Fees</h4>
                                    </div>

                                    <div id="collapseThree" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <section id="trFilter" data-cy="trFilter" class="RefineModule"><h3 class="RefineSectionHeading"></h3>
                                                <div class="RefineContent">
                                                    <form method="get" action="{{ url('/search-master-degree/'.$discipline.'/locations') }}">
                                                        <p><input type="checkbox" name="fee1" value="1,500" onchange="this.form.submit()"  ><em> 0-500</em></p>
                                                        <p><input type="checkbox" name="fee1" value="500,1000" onchange="this.form.submit()" ><em> 500-1000</em></p>
                                                        <p><input type="checkbox" name="fee1" value="1000,5000" onchange="this.form.submit()"><em> 1000-5,000</em></p>
                                                        <p><input type="checkbox" name="fee1" value="5000,10000" onchange="this.form.submit()"><em> 5,000-10,000</em></p>
                                                        <p><input type="checkbox" name="fee1" value="10000,20000" onchange="this.form.submit()"><em> 10,000-20,000</em></p>
                                                        <p><input type="checkbox" name="fee1" value="20000,1000000" onchange="this.form.submit()"><em> More Than 20,000</em></p>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <section class=" ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center ">
                                    <div class="row">
                                    <div class="col-md-6 text-left"><strong>{{$count}} Programs</strong></div>
                                    <div class="col-md-6">
                                        <nav class="nav-justified">
                                            <div class="nav nav-tabs " id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Our Picks</a>
                                                <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Lowest Tuition Fees</a>

                                            </div>
                                        </nav>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                                            <div class="pt-3"></div>
                                            @if (session('error'))
                                                <script>
                                                    alert("This Program is already added to your wish list.");
                                                </script>
                                            @endif

                                            @foreach($program as $row)
                                            <div data-id="298860" style="text-decoration: none;"  class="Result master ClickThrough premium js-Study  StudyCard" data-premium-type="sp" data-position="4" data-proxy-url="https://1cna6fszvk.execute-api.eu-west-1.amazonaws.com/prod?position=4&amp;listing=sp&amp;id=298860&amp;enhanced=true&amp;total=5890&amp;title=Electrical+and+Computer+Engineering&amp;duid=&amp;sid=&amp;redirectURL=https%3A%2F%2Fwww.mastersportal.com%3A%2Fstudies%2F298860%2F&amp;ip=null&amp;url=https%3A%2F%2Fwww.mastersportal.com%2Fsearch%2Fmasters-degrees%2Fcomputer-science-it%2F%23q%3Ddi-24%7Clv-master%3F&amp;page=Search%2520Master%27s%2520Programmes%2520Worldwide%2520-%2520Mastersportal.com&amp;refr=https%3A%2F%2Fwww.mastersportal.com%2Fsearch%2F&amp;res=1536x864&amp;uid=null&amp;ua=Mozilla%252F5.0%2520%28Windows%2520NT%252010.0%253B%2520Win64%253B%2520x64%29%2520AppleWebKit%252F537.36%2520%28KHTML%252C%2520like%2520Gecko%29%2520Chrome%252F88.0.4324.190%2520Safari%252F537.36&amp;favourites=">
                                                <div style="display:none" class="TrackingEvent TrackingRetrigger" data-action="impr" data-type="study" data-id="298860" data-description="" data-label="premium"> </div>
                                                <div class="LogoContainer">
                                                    <figure>
                                                        <img src="{{URL::to($row->university_logo)}}" alt="{{$row->course}}" width="112" height="112" loading="lazy">
                                                    </figure>
                                                </div>
                                                <section class="InformationContainer">
                                                    <div class="CardHeader" style="width: calc(100% - 64px + 1.6rem);">
                                                        <div class="IncentivesWrapper">
                                                            @guest
                                                                <btn ><a onclick="myFunction()" style="color:red; text-decoration: none; font-size: 25px;"><i class="lnr-heart WishlistIcon HeaderIcon"></i></a></btn>
                                                                <script>
                                                                    function myFunction() {
                                                                        alert("You are Not Logged in! Please Login and try to add to your wish list.");
                                                                    }
                                                                </script>
                                                            @else
                                                                <btn ><a onMouseOver="this.style.color='#0F0'"
                                                                         onMouseOut="this.style.color='#00F'" href="{{URL::to('/add-to-wishlist/'.$row->id)}}" style="text-decoration: none; font-size: 25px;"><i class="lnr-heart WishlistIcon HeaderIcon"></i></a></btn>

                                                            @endguest

                                                            <div class="BestFitOverview" data-study-id="298860" data-widget-type="button_icon" data-widget-location="search_study_card" data-empty-text="Check match"> </div>
                                                            <div class="WishlistButton" data-study-id="298860" data-button-type="icon_only"> </div>
                                                        </div>
                                                        <header>
                                                            <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;"><h3 class="StudyTitle"> {{$row->course}} </h3></a>
                                                        </header>
                                                    </div>

                                                    <div class="InformationLeft">
                                                        <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;"><span class="Location"> <span class="Fact LocationFact">{{$row->organization}}</span> <span class="Fact LocationFact"> {{$row->delivery}} </span> </span> <p class="Description"> {{ substr($row->about, 0,  100) }}</p> </a></div>
                                                    <div class="InformationRight">
                                                        <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;">
                                                        <span class="Fact KeyFact"> {{$row->fees}} EUR/Year</span>
                                                            <span class="js-duration Fact KeyFact" data-rewrite="true" data-period="month" data-duration="12" data-days-single="day" data-days-multiple="days" data-weeks-single="week" data-weeks-multiple="weeks" data-months-single="month" data-months-multiple="months" data-years-single="year" data-years-multiple="years" title=" 12 months  ">{{$row->duration}}</span> </a> </div>
                                                    <div class="CardFooter">
                                                        <div class="ExtraFacts">  <span class="ExtraFact">{{$row->program}}</span>   <span class="ExtraFact">{{$row->study_status}}</span></div>  <div class="Promoted js-Promoted"> <span>Featured</span> <i class="InfoIcon InfoIconPromoted lnr-info" data-tooltip-text="The university partners with us for this programme to reach students like you."><span class="InfoToolTip" style="left: 1316.1px; top: 305.825px;"><span class="InfoToolTipContent">The university partners with us for this programme to reach students like you.</span></span></i> </div>  </div>

                                                </section>
                                            </div>
                                            @endforeach
                                            @if($nolink == "0")
                                                <div class="pagination" >{{$programBCost->links()}}</div>
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                                            <div class="pt-3"></div>
                                            @foreach($programBCost as $row)
                                                <div data-id="298860" style="text-decoration: none;"  class="Result master ClickThrough premium js-Study  StudyCard" data-premium-type="sp" data-position="4" data-proxy-url="https://1cna6fszvk.execute-api.eu-west-1.amazonaws.com/prod?position=4&amp;listing=sp&amp;id=298860&amp;enhanced=true&amp;total=5890&amp;title=Electrical+and+Computer+Engineering&amp;duid=&amp;sid=&amp;redirectURL=https%3A%2F%2Fwww.mastersportal.com%3A%2Fstudies%2F298860%2F&amp;ip=null&amp;url=https%3A%2F%2Fwww.mastersportal.com%2Fsearch%2Fmasters-degrees%2Fcomputer-science-it%2F%23q%3Ddi-24%7Clv-master%3F&amp;page=Search%2520Master%27s%2520Programmes%2520Worldwide%2520-%2520Mastersportal.com&amp;refr=https%3A%2F%2Fwww.mastersportal.com%2Fsearch%2F&amp;res=1536x864&amp;uid=null&amp;ua=Mozilla%252F5.0%2520%28Windows%2520NT%252010.0%253B%2520Win64%253B%2520x64%29%2520AppleWebKit%252F537.36%2520%28KHTML%252C%2520like%2520Gecko%29%2520Chrome%252F88.0.4324.190%2520Safari%252F537.36&amp;favourites=">
                                                    <div style="display:none" class="TrackingEvent TrackingRetrigger" data-action="impr" data-type="study" data-id="298860" data-description="" data-label="premium"> </div>
                                                    <div class="LogoContainer">
                                                        <figure>
                                                            <img src="{{URL::to($row->university_logo)}}" alt="{{$row->course}}" width="112" height="112" loading="lazy">
                                                        </figure>
                                                    </div>
                                                    <section class="InformationContainer">
                                                        <div class="CardHeader" style="width: calc(100% - 64px + 1.6rem);">
                                                            <div class="IncentivesWrapper">
                                                                @guest
                                                                    <btn ><a onclick="myFunction()" style="color:red; text-decoration: none; font-size: 25px;"><i class="lnr-heart WishlistIcon HeaderIcon"></i></a></btn>
                                                                    <script>
                                                                        function myFunction() {
                                                                            alert("You are Not Logged in! Please Login and try to add to your wish list.");
                                                                        }
                                                                    </script>
                                                                @else
                                                                    <btn ><a onMouseOver="this.style.color='#0F0'"
                                                                             onMouseOut="this.style.color='#00F'" href="{{URL::to('/add-to-wishlist/'.$row->id)}}" style="text-decoration: none; font-size: 25px;"><i class="lnr-heart WishlistIcon HeaderIcon"></i></a></btn>

                                                                @endguest

                                                                <div class="BestFitOverview" data-study-id="298860" data-widget-type="button_icon" data-widget-location="search_study_card" data-empty-text="Check match"> </div>
                                                                <div class="WishlistButton" data-study-id="298860" data-button-type="icon_only"> </div>
                                                            </div>
                                                            <header>
                                                                <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;"><h3 class="StudyTitle"> {{$row->course}} </h3></a>
                                                            </header>
                                                        </div>

                                                        <div class="InformationLeft">
                                                            <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;"><span class="Location"> <span class="Fact LocationFact">{{$row->organization}}</span> <span class="Fact LocationFact"> {{$row->delivery}} </span> </span> <p class="Description"> {{ substr($row->about, 0,  100) }}</p> </a></div>
                                                        <div class="InformationRight">
                                                            <a href="{{URL::to('/program-details/'.$row->id)}}" style="text-decoration: none;">
                                                                <span class="Fact KeyFact"> {{$row->fees}} EUR/Year</span>
                                                                <span class="js-duration Fact KeyFact" data-rewrite="true" data-period="month" data-duration="12" data-days-single="day" data-days-multiple="days" data-weeks-single="week" data-weeks-multiple="weeks" data-months-single="month" data-months-multiple="months" data-years-single="year" data-years-multiple="years" title=" 12 months  ">{{$row->duration}}</span> </a> </div>
                                                        <div class="CardFooter">
                                                            <div class="ExtraFacts">  <span class="ExtraFact">{{$row->program}}</span>   <span class="ExtraFact">{{$row->study_status}}</span></div>  <div class="Promoted js-Promoted"> <span>Featured</span> <i class="InfoIcon InfoIconPromoted lnr-info" data-tooltip-text="The university partners with us for this programme to reach students like you."><span class="InfoToolTip" style="left: 1316.1px; top: 305.825px;"><span class="InfoToolTipContent">The university partners with us for this programme to reach students like you.</span></span></i> </div>  </div>

                                                    </section>
                                                </div>
                                            @endforeach
                                            @if($nolink == "0")
                                            <div class="pagination" >{{$programBCost->links()}}</div>
                                                @endif
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>

@endsection
