@extends('layouts.paperkit',['navTheme' => 'primary'])
@section('content')
<div class="wrapper mt-5 pt-3">
    <div class="blog-1" id="blog-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <h2 class="title">Projects</h2>
                    <br />
                    {{--Begin:Millerz Square--}}
                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{ asset('images/landing/stephanie-krist.jpg') }}" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Millerz Square</h6>
                                    <h3 class="card-title">
                                        <a href="{{ route('millerz.square') }}">The New Landmark of Mixed-Development</a>
                                    </h3>
                                    <p class="card-description">
                                        The latest mixed-development of Old Klang Road consisting of service apartments, offices, an F&B portion and even a college, this is a place to bask in life's wonderful glow... <a href="{{ route('millerz.square') }}"> Read More </a>
                                    </p>
                                    <p class="author">
                                        by <a href="#pablo"><b>Tim Merel</b></a>, 11 hours ago
                                        </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{--End:Millerz Square--}}
                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-category text-danger">
                                        <i class="fa fa-free-code-camp" aria-hidden="true"></i> Novum @ Bangsar South
                                    </h6>
                                    <h3 class="card-title">
                                        <a href="#pablo">THE NEW BANGSAR</a>
                                    </h3>
                                    <p class="card-description">
                                        Located in the fast growing satellite town of South Bangsar, NOVUM offers the pinnacle of holistic living in a modern freehold residential development. <a href="#pablo"> Read More </a>
                                    </p>
                                    <p class="author">
                                        by <a href="#pablo"><b>John Biggs</b></a>, 3 seconds ago
                                        </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{ asset('images/landing/federico-beccari.jpg') }} " />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{ asset('images/landing/fabio-mangione.jpg') }}" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Southlink</h6>
                                    <h3 class="card-title">
                                        <a href="#pablo">Be Close To It All</a>
                                    </h3>
                                    <p class="card-description">
                                        A 2.2-acre freehold residential and commercial nexus that links you to a myriad of lifestyle conveniences including major shopping malls, office landmarks and educational hubs with Federal Highway just a stone’s throw away. <a href="#pablo"> Read More </a>
                                    </p>
                                    <p class="author">
                                        by <a href="#pablo"><b>Tim Merel</b></a>, 11 hours ago
                                        </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-category text-danger">
                                        <i class="fa fa-free-code-camp" aria-hidden="true"></i> Ceylonz Suite
                                    </h6>
                                    <h3 class="card-title">
                                        <a href="#pablo">PREMIUM SERVICE RESIDENCE</a>
                                    </h3>
                                    <p class="card-description">
                                        Perfectly positioned within in the heart of Kuala Lumpur,  presents an inviting opportunity to indulge in the best of both worlds... <a href="#pablo"> Read More </a>
                                    </p>
                                    <p class="author">
                                        by <a href="#pablo"><b>John Biggs</b></a>, 3 seconds ago
                                        </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{ asset('images/landing/daniel-olahs.jpg') }} " />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-plain card-blog">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img" src="{{ asset('images/landing/daniel-olahh.jpg') }}" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Atwater</h6>
                                    <h3 class="card-title">
                                        <a href="#pablo">Atwater Services Apartment</a>
                                    </h3>
                                    <p class="card-description">
                                        Our serviced apartments at ATWATER has been designed with you in mind. From studio sized units to units that can accommodate a growing family, the two towers of serviced apartments are complemented by a myriad of facilities which includes a swimming pool... <a href="#pablo"> Read More </a>
                                    </p>
                                    <p class="author">
                                        by <a href="#pablo"><b>Tim Merel</b></a>, 11 hours ago
                                        </a>
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