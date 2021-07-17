@extends('Layout.master-layout')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th >ID</th>
                                        <th >Event Name</th>
                                        <th >Band Names</th>
                                        <th >Start Date</th>
                                        <th>End Date</th>
                                        <th >Port Folio</th>
                                        <th >Ticket Price</th>
                                        <th >Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $event)
                                    <tr>
                                        <td>{{$event->id}}</td>
                                        <td>{{$event->eventName}}</td>
                                        <td>{{$event->bandNames}}</td>
                                        <td>{{$event->startDate}}</td>
                                        <td>{{$event->endDate}}</td>
                                        <td>{{$event->portfolio}}</td>
                                        <td>{{$event->ticketPrice}}$</td>
                                        <td>{{$event->status}}</td>
                                        <td>
                                            <a href="/Events/edit/{{$event->id}}"><button class="btn btn-primary"><i class="fas fa-edit"> Edit</i></button></a>
                                            <form action="/Events/delete/{{$event->id}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure delete event?')"><i class="fas fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

