@extends('layouts.material')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">build</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Update @{{ project_name }}</h4>
                        <form id="updateProject" method="post" action="{{ route('projects.update',['project' => $project->id]) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['name'] }}</h6>
                                        <p class="description">
                                            {{ $project->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['project_tag_line'] }}</h6>
                                        <p class="description">
                                            {{ $project->project_tag_line }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['tenure'] }}</h6>
                                        <p class="description">
                                            {{ $project->tenure }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['launched_date'] }}</h6>
                                        <p class="description">
                                            {{ $project->launched_date }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['unit_per_floor'] }}</h6>
                                        <p class="description">
                                            {{ $project->unit_per_floor }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['completion_date'] }}</h6>
                                        <p class="description">
                                            {{ $project->completion_date }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['title'] }}</h6>
                                        <p class="description">
                                            {{ $project->title }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['property_size'] }}</h6>
                                        <p class="description">
                                            {{ $project->property_size }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['mixed_development'] }}</h6>
                                        <p class="description">
                                            {{ $project->mixed_development }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['price_range'] }}</h6>
                                        <p class="description">
                                            {{ $project->price_range }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['density'] }}</h6>
                                        <p class="description">
                                            {{ $project->density }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['price_per_sqft'] }}</h6>
                                        <p class="description">
                                            {{ $project->price_per_sqft }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['security_level'] }}</h6>
                                        <p class="description">
                                            {{ $project->security_level }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['location'] }}</h6>
                                        <p class="description">
                                            {{ $project->location }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['booking_fee'] }}</h6>
                                        <p class="description">
                                            {{ $project->booking_fee }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['land_area'] }}</h6>
                                        <p class="description">
                                            {{ $project->land_area }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['down_payment'] }}</h6>
                                        <p class="description">
                                            {{ $project->down_payment }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['number_of_block'] }}</h6>
                                        <p class="description">
                                            {{ $project->number_of_block }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['maintenance_fee'] }}</h6>
                                        <p class="description">
                                            {{ $project->maintenance_fee }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['number_of_unit'] }}</h6>
                                        <p class="description">
                                            {{ $project->number_of_unit }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['value_for_money'] }}</h6>
                                        <p class="description">
                                            {{ $project->value_for_money }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['number_of_floor'] }}</h6>
                                        <p class="description">
                                            {{ $project->number_of_floor }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['potential_capital_gain'] }}</h6>
                                        <p class="description">
                                            {{ $project->potential_capital_gain }}
                                        </p>
                                    </div>


                                </div>
                                <div class="col-md-6">

                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['value_for_rental_yield'] }}</h6>
                                        <p class="description">
                                            {{ $project->value_for_rental_yield }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['family_investment'] }}</h6>
                                        <p class="description">
                                            {{ $project->family_investment }}
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['suitability_for_expatriates'] }}</h6>
                                        <p class="description">
                                            {{ $project->suitability_for_expatriates }}
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="description">
                                        <h6 class="info-title">{{ $caption['students'] }}</h6>
                                        <p class="description">
                                            {{ $project->students }}
                                        </p>
                                    </div>

                                </div>
                            </div>


                            <section>
                                <h5>Images</h5>
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="description">
                                            <h6 class="info-title">Banner Image</h6>
                                            <p class="description">
                                                @if($project->getMedia('banner')->count() > 0)
                                                <a href="{{ route('project-download',['id' => $project->id, 'type' => 'banner']) }}" class="btn btn-info btn-simple" target="_blank">
                                                    <i class="material-icons">file_download</i> {{ $project->getMedia('banner')->first()->file_name }}
                                                    <div class="ripple-container"></div></a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="description">
                                            <h6 class="info-title">Main Image</h6>
                                            <p class="description">
                                                @if($project->getMedia('main')->count() > 0)
                                                    <a href="{{ route('project-download',['id' => $project->id, 'type' => 'main']) }}" class="btn btn-info btn-simple" target="_blank">
                                                        <i class="material-icons">file_download</i> {{ $project->getMedia('main')->first()->file_name }}
                                                        <div class="ripple-container"></div></a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="description">
                                            <h6 class="info-title">Facility Image</h6>
                                            <p class="description">
                                                @if($project->getMedia('main')->count() > 0)
                                                    <a href="{{ route('project-download',['id' => $project->id, 'type' => 'facility']) }}" class="btn btn-info btn-simple" target="_blank">
                                                        <i class="material-icons">file_download</i> {{ $project->getMedia('facility')->first()->file_name }}
                                                        <div class="ripple-container"></div></a>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <a href="{{ route('projects.index') }}" class="btn btn-simple btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            Setting.initFormExtendedDatetimepickers();
        });

        window.generic.mixins.push({
            data() {
                return {
                    remove_banner_image: false,
                    remove_main_image: false,
                    remove_facility_image: false,
                    project_name: {!! json_encode($project->name) !!}
                }
            },
            methods: {
                removeBannerImage(index) {
                    this.remove_banner_image = true
                },
                removeMainImage(index) {
                    this.remove_main_image = true
                },
                removeFacilityImage(index) {
                    this.remove_facility_image = true
                },
            }
        });
    </script>



@endpush