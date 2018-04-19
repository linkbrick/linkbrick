@extends('layouts.material')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">{{ $agent->name }}'s information</h4>
                        <form id="showAgent" method="post" action="#"
                              enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['name'] }}</h6>
                                        <p class="description">
                                            {{ $agent->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['position'] }}</h6>
                                        <p class="description">
                                            {{ $agent->position }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['email'] }}</h6>
                                        <p class="description">
                                            {{ $agent->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['contact_no'] }}</h6>
                                        <p class="description">
                                            {{ $agent->contact_no }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['email'] }}</h6>
                                        <p class="description">
                                            {{ $agent->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['contact_no'] }}</h6>
                                        <p class="description">
                                            {{ $agent->contact_no }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <section>
                                <h5>Images</h5>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="description">
                                            <h6 class="info-title">Profile Image</h6>
                                            <p class="description">
                                                <img class="img" src="{{ $agent->getMedia('agent_image')->first()->getUrl()  }}" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <a href="{{ route('agents.index') }}" class="btn btn-simple btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

