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
                        <form id="updateAgent" method="post" action="{{ route('agents.update',['agent' => $agent->id]) }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['name'] }}
                                        </label>
                                        <input type="text" name="name" class="form-control" v-model="agent_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['position'] }}
                                        </label>
                                        <input type="text" name="position"
                                               class="form-control" value=" {{ $agent->position }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['email'] }}
                                        </label>
                                        <input type="text" name="email" class="form-control" value="{{ $agent->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">{{ $caption['contact_no'] }}
                                        </label>
                                        <input type="text" name="contact_no"
                                               class="form-control" value="{{ $agent->contact_no }}">
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
                                                    <input type="radio" name="type" @if($agent->type=='agent') checked="true" @endif value="agent" > Agent
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="type" @if($agent->type=='team_lead') checked="true" @endif value="team_lead"> Team Lead
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
                                               class="form-control" value="{{ $agent->sequence }}">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['excerpt'] }}
                                        </label>
                                        <textarea class="form-control" name="excerpt" rows="3">{{ $agent->excerpt }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">{{ $caption['description'] }}
                                        </label>
                                        <textarea class="form-control" name="description" rows="8">{{ $agent->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <section>
                                <h5>Profile Image</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <legend></legend>
                                        @if($agent->getMedia('agent_image')->count() > 0)
                                            <div class="fileinput fileinput-exists " data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="https://dummyimage.com/350x250/b8b8b8/ffffff.jpg"
                                                         alt="Document Upload Place Holder">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 150px; line-height: 20px;text-align:center;-webkit-box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                                                    {{ $agent->getMedia('agent_image')->first()->file_name }}
                                                </div>
                                                <div>
                                                    <span class="btn btn-info btn-simple btn-file">
                                                        <span class="fileinput-new">Select Image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="agent_image"/>

                                                    </span>

                                                    <a href="#" class="btn btn-danger fileinput-exists" @click.prevent="removeAgentImage"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i>Remove</a>
                                                    <input type="hidden" name="remove_banner_image" v-model="remove_agent_image"/>
                                                </div>
                                            </div>
                                        @else
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
                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </section>


                            <button class="btn btn-fill btn-primary" id="btnUpdateAgent">Update</button>
                            <a href="{{ route('agents.index') }}" class="btn btn-simple btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">

        window.generic.mixins.push({
            data() {
                return {
                    remove_agent_image: false,
                    agent_name: {!! json_encode($agent->name) !!}
                }
            },
            methods: {
                removeAgentImage(index) {
                    this.remove_agent_image = true
                },
            }
        });
    </script>



@endpush