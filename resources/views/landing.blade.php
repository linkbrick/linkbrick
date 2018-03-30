@extends('layouts.paperkit',['navTheme' => 'transparent'])
@section('content')

    {{--Begin: Banner--}}
    <div class="header-3">
        <div class="page-carousel">
            <div class="filter"></div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1498063401574-13cbee350467?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=');">
                            <div class="filter"></div>
                            <div class="content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <h1 class="title">Proptech</h1>
                                            <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                            <br />
                                            <div class="buttons">
                                                <a href="#pablo" class="btn btn-danger btn-round  btn-lg">
                                                    Read More
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-get-pocket"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1482690205767-61deebe15ef7?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=')">
                            <div class="filter"></div>
                            <div class="content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Awesome Experiences</h1>
                                            <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                            <br />
                                            <h6>Connect with us:</h6>
                                            <div class="buttons">
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1498063669468-89723a87123d?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=')">
                            <div class="filter"></div>
                            <div class="content-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 ml-auto text-right">
                                            <h2 class="title">Premium Offers for Venice</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br />
                                                <div class="buttons">

                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-lg">
                                                        <i class="fa fa-share-alt"></i> Share Offer
                                                    </a>
                                                    <a href="#pablo" class="btn btn-success btn-round btn-lg">
                                                        <i class="fa fa-shopping-cart"></i> Shop Now
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    {{--End:Banner--}}

    <div class="wrapper">
        <!--     *********     Latest Project     *********      -->
        <div class="blog-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title text-center">Latest Projects</h2>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="{{ url('/project/millerz') }}">
                                    <img class="img img-raised" src="{{ asset('images/landing/property1.jpg') }}" data-type="image" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-warning">Millerz Square</h6>
                                <h3 class="card-title">
                                    <a href="{{ url('/project/millerz') }}">The New Landmark of Mixed-Development</a>
                                </h3>
                                <p class="card-description">
                                    The latest mixed-development of Old Klang Road consisting of service apartments, offices, an F&B portion and even a college, this is a place to bask in life's wonderful glow.
                                </p>
                                <br/>
                                <a href="{{ url('/project/millerz') }}" class="btn btn-warning btn-round">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{ asset('images/landing/property2.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Novum</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">THE NEW BANGSAR</a>
                                </h3>
                                <p class="card-description">
                                    Located in the fast growing satellite town of South Bangsar, NOVUM offers the pinnacle of holistic living in a modern freehold residential development.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-primary btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="" alt="Millez Square"
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{ asset('images/landing/property3.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-danger">Ceylonz Suite</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">PREMIUM SERVICE RESIDENCE</a>
                                </h3>
                                <p class="card-description">
                                    Perfectly positioned within in the heart of Kuala Lumpur,  presents an inviting opportunity to indulge in the best of both worlds, Embrace the two sides of line where you enjoy a sanctuary of greenery, while being only minutes away from KLCC and Pavilion Kuala Lumpur. Revel in the privacy of your lofty abode, where a haven of leisurely facilities await; relishing the thought that the pulse of a vibrant city is merely footsteps away.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-danger btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{ asset('images/landing/property4.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-success">Southlink</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">Be Close To It All</a>
                                </h3>
                                <p class="card-description">
                                    A 2.2-acre freehold residential and commercial nexus that links you to a myriad of lifestyle conveniences including major shopping malls, office landmarks and educational hubs with Federal Highway just a stone’s throw away.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-success btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********     Latest Project     *********      -->

        <!--     *********    MEET OUR TEAM      *********      -->
        <div class="team-2 section-image" style="background-image: url({{ asset('images/landing/jan-sendereks.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">The Executive Team</h2>
                        <h5 class="description">Write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('images/faces/kaci-baum-1.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Ashley Tan</h4>
                                <h6 class="card-category">Managing Partner</h6>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('images/faces/clem-onojeghuo-1.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Edwin Chang</h4>
                                <h6 class="card-category">Sales Lead</h6>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('images/faces/joe-gardner-1.jpg') }}" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Jane Ong</h4>
                                <h6 class="card-category">Photographer & Content Writter</h6>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********    MEET OUR TEAM      *********      -->

        <!--     *********     Our Strength     *********      -->
        <div class="features-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="container">
                                <h2 class="title">Your life will be much easier</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-success">
                                        <i class="nc-icon nc-layout-11"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Components</h4>
                                        <p>The kit comes with a huge number of components designed to look perfect together.</p>
                                        <a href="#paper-kit" class="btn btn-link">See more</a>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-warning">
                                        <i class="nc-icon nc-palette"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Beautiful Gallery</h4>
                                        <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                                        <a href="#paper-kit" class="btn btn-link">See more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info info-horizontal">
                                    <div class="icon icon-danger">
                                        <i class="nc-icon nc-touch-id"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Secured</h4>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power is efficient.</p>
                                        <a href="#paper-kit" class="btn btn-link">See more</a>
                                    </div>
                                </div>
                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="nc-icon nc-delivery-fast"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Fast Prototyping</h4>
                                        <p>Medium has a new head of product, while the startup behind the defunct texting app...</p>
                                        <a href="#paper-kit" class="btn btn-link">See more</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="iphone-container">
                            <img src="{{ asset('images/landing/iphone.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********     Our Strength     *********      -->

        <!--     *********    TESTIMONIALS      *********      -->
        <div class="testimonials-1 section-image" style="background-image: url({{ asset('images/landing/uriel-soberanes.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title">Our Clients Love Us</h2>
                        <h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
                    </div>
                </div>
                <div class="space-top"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-testimonial">
                            <div class="card-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-description">
                                    Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!
                                </p>
                                <div class="card-footer">
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <h6 class="card-category">@alecthompson</h6>
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="{{ asset('images/faces/ayo-ogunseinde-2.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-testimonial">
                            <div class="card-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-description">
                                    "Don't be scared of the truth because we need to restart the human foundation in truth. That's why I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"
                                </p>
                                <div class="card-footer">
                                    <h4 class="card-title">Gina Andrew</h4>
                                    <h6 class="card-category">@ginaandrew</h6>
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="{{ asset('images/faces/erik-lucatero-2.jpg') }} " />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-testimonial">
                            <div class="card-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-description">
                                    "Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"
                                </p>
                                <div class="card-footer">
                                    <h4 class="card-title">Joe West</h4>
                                    <h6 class="card-category">@georgewest</h6>
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="{{ asset('images/faces/clem-onojeghuo-3.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********    TESTIMONIALS      *********      -->

        <!--     *********    CONTACT US      *********      -->
        <div class="contactus-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-contact no-transition">
                            <h3 class="card-title text-center">Contact Us</h3>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="card-body">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Find us at the office</h4>
                                                <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                                    7652 Bucharest,<br>
                                                    Romania
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-danger">
                                                <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Give us a ring</h4>
                                                <p> Jane Ong<br>
                                                    +6011 2412 8870<br>
                                                    Mon - Sun, 0:00-23:59
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <form role="form" id="contact-form" method="post">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email"/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your Contact Number</label>
                                                <input type="text" name="contact" class="form-control" placeholder="Contact Number"/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your message</label>
                                                <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">
                                                            I'm not a robot !
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary pull-right">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--     *********    CONTACT US      *********      -->

    </div>
@endsection

