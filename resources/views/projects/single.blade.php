@extends('layouts.paperkit',['navTheme' => 'transparent'])
@section('content')
    <div class="blog-page">
        <div class="page-header" data-parallax="true"
             @if( $project->getMedia('banner')->count() )
             style="background-image: url( {{ $project->getMedia('banner')->first()->getUrl() }}  )"
             @else
             style="background-image: url('https://dummyimage.com/1440x400/b8b8b8/ffffff.jpg')"
                @endif
        >
            <div class="filter"></div>
            <div class="content-center">
                <div class="motto">
                    <h1 class="title-uppercase text-center">{{ $project->name }}</h1>
                    <h3 class="text-center">{{ $project->project_tag_line }}</h3>
                    <br/>
                    <a href="#pablo" class="btn btn-warning btn-round btn-lg">
                        <i class="fa fa-share-alt" aria-hidden="true"></i> Share Article
                    </a>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="main">
                <div class="section section-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto text-center title">
                                <h2>An Affordable Home</h2>
                                <h3 class="title-uppercase">
                                    <small>Own an elegant home from only RM6XX,000 and above</small>
                                </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto">
                                <a href="javascrip: void(0);">
                                    <div class="card" data-radius="none"
                                         @if($project->getMedia('main')->count() )
                                         style="background-image: url({{ $project->getMedia('main')->first()->getUrl() }});"
                                         @else
                                         style="background-image: url('https://dummyimage.com/730x430/b8b8b8/ffffff.jpg')"
                                         @endif
                                    ></div>
                                    <p class="image-thumb text-center">Photo by Cam Adams</p>
                                </a>
                                <div class="article-content">
                                    <p>
                                        {{ $project->excerpt }}
                                    </p>

                                    <p>
                                        <strong>Built-ups offered:</strong><br/>
                                        1,994 sq ft - 2,658 sq ft (Park Villa)
                                        3,3931 sq ft (Semi-D)
                                    </p>

                                    <p>
                                        <strong>Units offered:</strong> <br/>
                                        178 units (Park Villa)
                                        40 units (Semi-D)
                                    </p>
                                    <h4 class="title">General Features</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                            @foreach($propertyInfo as $info)
                                                <tr>
                                                    <td><strong>{{ $caption[$info] }}</strong></td>
                                                    <td class="text-right">{{ $project->$info }}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    <h4 class="title">Facilities</h4>
                                    <div class="card" data-radius="none"
                                         @if($project->getMedia('facility')->count())
                                         style="background-image: url({{ $project->getMedia('facility')->first()->getUrl() }});"
                                         @else
                                         style="background-image: url('https://dummyimage.com/730x430/b8b8b8/ffffff.jpg');"
                                         @endif
                                    >

                                    </div>

                                    <div id="acordeon">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card-header card-collapse" role="tab" id="headingOne">
                                                <h5 class="mb-0 panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne" aria-expanded="false"
                                                       aria-controls="collapseOne">
                                                        Sky Facility
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" role="tabpanel"
                                                 aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <ol>
                                                        <li>Sky Gym</li>
                                                        <li>Business Center</li>
                                                        <li>Kitchen</li>
                                                        <li>Lift Lobby</li>
                                                        <li>Banquet Hall</li>
                                                        <li>Sky Deck</li>
                                                        <li>Sky Pavilion</li>
                                                        <li>Sky Garden</li>
                                                        <li>Sky Dining</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="card-header card-collapse" role="tab" id="headingTwo">
                                                <h5 class="mb-0 panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseTwo" aria-expanded="false"
                                                       aria-controls="collapseTwo">
                                                        Podium
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel"
                                                 aria-labelledby="headingTwo">
                                                <div class="card-body">
                                                    <ol>
                                                        <li>Swimming Pool (35m)</li>
                                                        <li>Landscape Deck</li>
                                                        <li>Hommock Garden</li>
                                                        <li>Lift Lobby</li>
                                                        <li>Sun Bed</li>
                                                        <li>Feature Tree</li>
                                                        <li>BBQ Area</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="card-header card-collapse" role="tab" id="headingThree">
                                                <h5 class="mb-0 panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseThree" aria-expanded="false"
                                                       aria-controls="collapseThree">
                                                        Others
                                                        <i class="nc-icon nc-minimal-down"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel"
                                                 aria-labelledby="headingThree">
                                                <div class="card-body">
                                                    <ol>
                                                        <li>Playground</li>
                                                        <li>Gourment Kitchen</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--  end acordeon -->


                                </div>
                                <br/>
                                <div class="article-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Tags:</h5>
                                                <span class="label label-primary">Condo</span>
                                                <span class="label label-danger">Mix-development</span>
                                            </div>
                                            <div class="col-md-4 ml-auto">
                                                <div class="sharing">
                                                    <h5>Spread the word</h5>
                                                    <button class="btn btn-just-icon btn-twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </button>
                                                    <button class="btn btn-just-icon btn-facebook">
                                                        <i class="fa fa-facebook"> </i>
                                                    </button>
                                                    <button class="btn btn-just-icon btn-google">
                                                        <i class="fa fa-google"> </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="media">
                                            <a class="pull-left" href="#paper-kit">
                                                <div class="avatar big-avatar">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{ asset('images/faces/kaci-baum-2.jpg') }}">
                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Sophie Banks</h4>
                                                <div class="pull-right">
                                                    <a href="#paper-kit" class="btn btn-default btn-round "> <i
                                                                class="fa fa-reply"></i> Follow</a>
                                                </div>
                                                <p>Hello guys, nice to have you on the platform! There will be a lot of
                                                    great stuff coming soon. We will keep you posted for the latest
                                                    news.</p>
                                                <p> Don't forget, You're Awesome!</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="related-articles">
                            <h3 class="title">Related development</h3>
                            <legend></legend>
                            <div class="container">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Price</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Property
                                                    Type</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Developer</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="my-tab-content" class="tab-content text-center">
                                    <div class="tab-pane active" id="home" role="tabpanel">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="#"><img
                                                            src="{{asset('images/landing/damir-bosnjak.jpg') }}"
                                                            alt="Rounded Image"
                                                            class="img-rounded img-responsive"></a>
                                                <p class="blog-title">My Review of Pitchfork’s ‘Indie 500’ Album
                                                    Review</p>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><img src="{{asset('images/landing/por7o.jpg') }}"
                                                                 alt="Rounded Image"
                                                                 class="img-rounded img-responsive"></a>
                                                <p class="blog-title">Top Events This Month</p>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#"><img
                                                            src="{{asset('images/landing/jeff-sheldon.jpg') }}"
                                                            alt="Rounded Image"
                                                            class="img-rounded img-responsive"></a>
                                                <p class="blog-title">You Should Get Excited About Virtual Reality.
                                                    Here’s
                                                    Why.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel"><p>Tabs 222.</p></div>
                                    <div class="tab-pane" id="messages" role="tabpanel"><p>Otherss.....</p></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection