@extends('layouts.paperkit',['navTheme' => 'transparent'])
@section('content')
    <div class="cd-section" id="headers">

        <!--     *********     Team Header      *********      -->
        <div class="header-1">
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="iframe-container">
                                    <iframe src="https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6  ml-auto">
                                <h2 class="title">Travel with us</h2>
                                <h5 class="description">There's no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?</h5>
                                <br />
                                <a href="https://www.youtube.com/watch?v=RcmrbNRK-jY" target="_blank" class="btn btn-danger">
                                    <i class="nc-icon nc-cart-simple"></i> Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Team Lead --}}
        <div class="team-2 section-image" style="background-image: url({{ asset('images/jan-sendereks.jpg') }}) ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Team Lead</h2>
                        <h5 class="description">Team lead tag line</h5>
                    </div>
                </div>

                <div class="row">
                    @foreach($agents->where('type', 'team_lead')->chunk(3) as $chunk)
                        @foreach($chunk as $tkey => $team_lead)
                            <div class="col-md-4">
                                <div class="card card-profile card-plain">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="{{ $team_lead->getMedia('agent_image')->first()->getUrl()  }}" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $team_lead->name }}</h4>
                                        <h6 class="card-category">{{ $team_lead->position }}</h6>
                                        <div class="card-footer">
                                            <a href="{{ $team_lead->facebook_url }}" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="{{ $team_lead->instagram_url }}" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
{{--End of Team Lead--}}

    <div class="team-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Our Stunning Team Member</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                </div>
            </div>
            <div class="row">
                @foreach($agents->where('type', 'agent')->chunk(4) as $chunk)
                    @foreach($chunk as $akey => $agent)
                        <div class="col-md-3">
                            <div class="card card-profile card-plain">
                                <div class="card-avatar">
                                    <a href="#avatar">
                                        <img src="{{ $agent->getMedia('agent_image')->first()->getUrl()  }}" alt="...">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="#paper-kit">
                                        <div class="author">
                                            <h4 class="card-title">{{ $agent->name }}</h4>
                                            <h6 class="card-category text-muted">{{ $agent->position }}</h6>
                                        </div>
                                    </a>
                                    <p class="card-description text-center">
                                        {{ $agent->excerpt }}
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ $agent->facebook_url }}" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ $agent->instagram_url }}" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection