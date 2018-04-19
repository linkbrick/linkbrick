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
                        <h4 class="card-title">Create New Project</h4>
                        <form id="newProject" method="post" action="{{ route('projects.store') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['name'] }}
                                        </label>
                                        <input type="text" name="name" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['project_tag_line'] }}
                                        </label>
                                        <input type="text" name="project_tag_line"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['tenure'] }}
                                        </label>
                                        <input type="text" name="tenure" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['launched_date'] }}
                                        </label>
                                        <input type="text" name="launched_date"
                                               class="form-control" value="{{ \Carbon\Carbon::now() }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['unit_per_floor'] }}
                                        </label>
                                        <input type="text" name="unit_per_floor" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['completion_date'] }}
                                        </label>
                                        <input type="text" name="completion_date"
                                               class="form-control" value="{{ \Carbon\Carbon::now() }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['title'] }}
                                        </label>
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['property_size'] }}
                                        </label>
                                        <input type="text" name="property_size"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['mixed_development'] }}
                                        </label>
                                        <input type="text" name="mixed_development" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['price_range'] }}
                                        </label>
                                        <input type="text" name="price_range"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['density'] }}
                                        </label>
                                        <input type="text" name="density" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['price_per_sqft'] }}
                                        </label>
                                        <input type="text" name="price_per_sqft"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['security_level'] }}
                                        </label>
                                        <input type="text" name="security_level" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['location'] }}
                                        </label>
                                        <input type="text" name="location"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['booking_fee'] }}
                                        </label>
                                        <input type="text" name="booking_fee" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['land_area'] }}
                                        </label>
                                        <input type="text" name="land_area"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['down_payment'] }}
                                        </label>
                                        <input type="text" name="down_payment" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_block'] }}
                                        </label>
                                        <input type="text" name="number_of_block"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['maintenance_fee'] }}
                                        </label>
                                        <input type="text" name="maintenance_fee" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_unit'] }}
                                        </label>
                                        <input type="text" name="number_of_unit"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['value_for_money'] }}
                                        </label>
                                        <input type="text" name="value_for_money" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['number_of_floor'] }}
                                        </label>
                                        <input type="text" name="number_of_floor"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['potential_capital_gain'] }}
                                        </label>
                                        <input type="text" name="potential_capital_gain" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['value_for_rental_yield'] }}
                                        </label>
                                        <input type="text" name="value_for_rental_yield"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['family_investment'] }}
                                        </label>
                                        <input type="text" name="family_investment" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['suitability_for_expatriates'] }}
                                        </label>
                                        <input type="text" name="suitability_for_expatriates"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['students'] }}
                                        </label>
                                        <input type="text" name="students" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['developer'] }}
                                        </label>
                                        <input type="text" name="developer" class="form-control" >
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['excerpt'] }}
                                        </label>
                                        <textarea class="form-control" name="excerpt" rows="3">

                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <section>
                                <h5>Images</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <legend></legend>
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

                                    </div>
                                    <div class="col-md-4">
                                        <legend></legend>
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

                                    </div>
                                    <div class="col-md-4">
                                        <legend></legend>
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

                                    </div>
                                </div>
                            </section>


                            <button class="btn btn-fill btn-primary" id="btnNewProject">Create</button>
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
    </script>

@endpush