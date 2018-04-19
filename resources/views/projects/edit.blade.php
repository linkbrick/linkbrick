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
                        <form id="updateProject" method="post" action="{{ route('projects.update',['project' => $project->slug]) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['name'] }}
                                        </label>
                                        <input type="text" name="name" class="form-control" v-model="project_name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['project_tag_line'] }}
                                        </label>
                                        <input type="text" name="project_tag_line"
                                               class="form-control" value="{{ $project->project_tag_line }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['tenure'] }}
                                        </label>
                                        <input type="text" name="tenure" class="form-control" value=" {{ $project->tenure }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['launched_date'] }}
                                        </label>
                                        <input type="text" name="launched_date"
                                               class="form-control" value="{{ $project->launched_date }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['unit_per_floor'] }}
                                        </label>
                                        <input type="text" name="unit_per_floor" class="form-control" value="{{ $project->unit_per_floor }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['completion_date'] }}
                                        </label>
                                        <input type="text" name="completion_date"
                                               class="form-control" value="{{ $project->completion_date }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['title'] }}
                                        </label>
                                        <input type="text" name="title" class="form-control" value="{{ $project->title }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['property_size'] }}
                                        </label>
                                        <input type="text" name="property_size"
                                               class="form-control" value="{{ $project->property_size }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['mixed_development'] }}
                                        </label>
                                        <input type="text" name="mixed_development" class="form-control" value="{{ $project->mixed_development }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['price_range'] }}
                                        </label>
                                        <input type="text" name="price_range"
                                               class="form-control" value="{{ $project->price_range }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['density'] }}
                                        </label>
                                        <input type="text" name="density" class="form-control" value="{{ $project->density }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['price_per_sqft'] }}
                                        </label>
                                        <input type="text" name="price_per_sqft"
                                               class="form-control" value="{{ $project->price_per_sqft }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['security_level'] }}
                                        </label>
                                        <input type="text" name="security_level" class="form-control" value="{{ $project->security_level }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['location'] }}
                                        </label>
                                        <input type="text" name="location"
                                               class="form-control" value="{{ $project->location }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['booking_fee'] }}
                                        </label>
                                        <input type="text" name="booking_fee" class="form-control" value="{{ $project->booking_fee }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['land_area'] }}
                                        </label>
                                        <input type="text" name="land_area"
                                               class="form-control" value="{{ $project->land_area }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['down_payment'] }}
                                        </label>
                                        <input type="text" name="down_payment" class="form-control" value="{{ $project->down_payment }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_block'] }}
                                        </label>
                                        <input type="text" name="number_of_block"
                                               class="form-control" value="{{ $project->number_of_block }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['maintenance_fee'] }}
                                        </label>
                                        <input type="text" name="maintenance_fee" class="form-control" value="{{ $project->maintenance_fee }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_unit'] }}
                                        </label>
                                        <input type="text" name="number_of_unit"
                                               class="form-control" value="{{ $project->number_of_unit }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['value_for_money'] }}
                                        </label>
                                        <input type="text" name="value_for_money" class="form-control" value="{{ $project->value_for_money }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_floor'] }}
                                        </label>
                                        <input type="text" name="number_of_floor"
                                               class="form-control" value="{{ $project->number_of_floor }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['potential_capital_gain'] }}
                                        </label>
                                        <input type="text" name="potential_capital_gain" class="form-control" value="{{ $project->potential_capital_gain }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['value_for_rental_yield'] }}
                                        </label>
                                        <input type="text" name="value_for_rental_yield"
                                               class="form-control" value="{{ $project->value_for_rental_yield }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['family_investment'] }}
                                        </label>
                                        <input type="text" name="family_investment" class="form-control" value="{{ $project->family_investment }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['suitability_for_expatriates'] }}
                                        </label>
                                        <input type="text" name="suitability_for_expatriates"
                                               class="form-control" value="{{ $project->suitability_for_expatriates }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['students'] }}
                                        </label>
                                        <input type="text" name="students" class="form-control" value="{{ $project->students }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['developer'] }}
                                        </label>
                                        <input type="text" name="developer" class="form-control" value="{{ $project->developer }}">
                                    </div>
                                </div>
                            </div>


                            <section>
                                <h5>Images</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <legend></legend>
                                        @if($project->getMedia('banner')->count() > 0)
                                            <div class="fileinput fileinput-exists " data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                         alt="Document Upload Place Holder">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px; line-height: 20px;text-align:center;-webkit-box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                                                    {{ $project->getMedia('banner')->first()->file_name }}
                                                </div>
                                                <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="banner_image"/>

                                                    </span>

                                                    <a href="#" class="btn btn-danger fileinput-exists" @click.prevent="removeBannerImage"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i>Remove</a>
                                                    <input type="hidden" name="remove_banner_image" v-model="remove_banner_image"/>
                                                </div>
                                            </div>
                                        @else
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                         alt="Document Upload Place Holder">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                        <span class="btn btn-info btn-simple btn-file">
                                                            <span class="fileinput-new">Select banner</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="banner_image"/>
                                                        </span>
                                                    <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="col-md-4">
                                        <legend></legend>
                                        @if($project->getMedia('main')->count() > 0)
                                            <div class="fileinput fileinput-exists " data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                         alt="Document Upload Place Holder">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px; line-height: 20px;text-align:center;-webkit-box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                                                    {{ $project->getMedia('main')->first()->file_name }}
                                                </div>
                                                <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="main_image"/>

                                                    </span>

                                                    <a href="#" class="btn btn-danger fileinput-exists" @click.prevent="removeMainImage"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i>Remove</a>
                                                    <input type="hidden" name="remove_main_image" v-model="remove_main_image"/>
                                                </div>
                                            </div>
                                        @else
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                     alt="Document Upload Place Holder">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select Main Image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="main_image"/>
                                                    </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    <div class="col-md-4">
                                        <legend></legend>
                                        @if($project->getMedia('facility')->count() > 0)
                                            <div class="fileinput fileinput-exists " data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                         alt="Document Upload Place Holder">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px; line-height: 20px;text-align:center;-webkit-box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                                                    {{ $project->getMedia('facility')->first()->file_name }}
                                                </div>
                                                <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select file</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="faciity_image"/>

                                                    </span>

                                                    <a href="#" class="btn btn-danger fileinput-exists" @click.prevent="removeFacilityImage"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i>Remove</a>
                                                    <input type="hidden" name="remove_facility_image" v-model="remove_facility_image"/>
                                                </div>
                                            </div>
                                        @else
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ asset('images/document_upload_placeholder.png') }}"
                                                     alt="Document Upload Place Holder">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select Facility Image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="facility_image"/>
                                                    </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </section>


                            <button class="btn btn-fill btn-primary" id="btnUpdateProject">Update</button>
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