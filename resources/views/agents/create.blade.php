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
                        <h4 class="card-title">Create New Agent</h4>
                        <form id="newAgent" method="post" action="{{ route('agents.store') }}"
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
                                        <label class="control-label">{{ $caption['position'] }}
                                        </label>
                                        <input type="text" name="position"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['email'] }}
                                        </label>
                                        <input type="text" name="email" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['contact_no'] }}
                                        </label>
                                        <input type="text" name="contact_no"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['facebook_url'] }}
                                        </label>
                                        <input type="text" name="facebook_url" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['instagram_url'] }}
                                        </label>
                                        <input type="text" name="instagram_url"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ $caption['type'] }}
                                        </label>
                                        <div class="checkbox-radios">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" checked="true" value="agent"> Agent
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" value="team_lead"> Team Lead
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['sequence'] }}
                                        </label>
                                        <input type="text" name="sequence"
                                               class="form-control">
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

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['description'] }}
                                        </label>
                                        <textarea class="form-control" name="description" rows="8">

                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <section>
                                <h5>Profile Image</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <legend></legend>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="https://dummyimage.com/350x250/b8b8b8/ffffff.jpg"
                                                     alt="Document Upload Place Holder">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select Image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="agent_image"/>
                                                    </span>
                                                <a href="#pablo" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>


                            <button class="btn btn-fill btn-primary" id="btnNewProject">Create</button>
                            <a href="{{ route('agents.index') }}" class="btn btn-simple btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
