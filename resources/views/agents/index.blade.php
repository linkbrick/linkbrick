@extends('layouts.material')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        Agents
                    </div>
                    <div class="row">
                        <a href="{{route('agents.create')}}" class="btn btn-simple btn-primary pull-right">New Agent</a>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                   cellspacing="0" width="100%" style="width:100%; word-break: break-all">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    @foreach($tableHeaders as $tableHeader)
                                        <th>{{$caption[$tableHeader]}}</th>
                                    @endforeach
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agents as $akey => $agent)
                                    <tr>
                                        <td>{{ ++$akey }}</td>
                                        @foreach($tableHeaders as $tableHeader)
                                            <td>
                                                {{ $agent->{$tableHeader} }}
                                            </td>
                                        @endforeach
                                        <td class="td-actions">
                                            <div class="row" style="width: 110px;margin:0px;">
                                                <a href="{{route('agents.edit',['agent' => $agent->id])}}"
                                                   class="col-md-3 btn btn-info"><i
                                                            class="material-icons">edit</i></a>
                                                <a href="{{route('agents.show',['agent' => $agent->slug])}}"
                                                   class="col-md-3 btn btn-warning"><i
                                                            class="material-icons">view_headline</i></a>
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