@extends('layouts.material')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        Projects
                    </div>
                    <div class="row">
                        <a href="{{route('projects.create')}}" class="btn btn-simple btn-primary pull-right">New Project</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                   cellspacing="0" width="100%" style="width:100%; word-break: break-all">
                                <thead>
                                <tr>
                                    @foreach($tableHeaders as $tableHeader)
                                        <th>{{$caption[$tableHeader]}}</th>
                                    @endforeach
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        @foreach($tableHeaders as $tableHeader)
                                            <td>
                                                {{ $project->{$tableHeader} }}
                                            </td>
                                        @endforeach
                                        <td class="td-actions">
                                            <div class="row" style="width: 110px;margin:0px;">
                                                <a href="{{route('projects.edit',['project' => $project->slug])}}"
                                                   class="col-md-3 btn btn-info"><i
                                                            class="material-icons">edit</i></a>
                                                <a href="{{route('projects.show',['project' => $project->slug])}}"
                                                   class="col-md-3 btn btn-warning"><i
                                                            class="material-icons">view_headline</i></a>
                                                <form action="{{route('projects.destroy',["id" => $project->id])}}"
                                                      method="POST"
                                                      onsubmit="return confirm('Are you sure to delete this project?')">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    {{--<button type="submit" class="col-md-3 btn btn-danger">--}}
                                                        {{--<i class="material-icons">close</i>--}}
                                                    {{--</button>--}}
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
            </div>
        </div>
    </div>
@endsection