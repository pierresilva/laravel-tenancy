@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <!-- Transaction Table -->
        <div class="table-responsive-md">
        <table class="table table-borderless">
            <thead>
            <tr class="text-uppercase font-size-1">
                <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                    Task
                </div>
                </th>
                <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                    Project
                </div>
                </th>
                <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                    Priority
                </div>
                </th>
                <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                    Due date
                </div>
                </th>
                <th scope="col" class="font-weight-medium">
                <div class="d-flex justify-content-between align-items-center">
                    Status
                </div>
                </th>
            </tr>
            </thead>
            <tbody class="font-size-1">
            <tr>
                <td class="align-middle font-weight-normal">Home page redesign</td>
                <td class="align-middle">Spotify</td>
                <td class="align-middle text-danger">
                <span class="fas fa-arrow-up mr-1"></span>
                Highest
                </td>
                <td class="align-middle">25 Jul</td>
                <td class="align-middle">
                <span class="fas fa-circle text-primary small mr-1"></span>
                In progress
                </td>
            </tr>
            </tbody>
        </table>
        </div>
        </div>
        <!-- End Transaction Table -->
            <!-- @include('admin.sidebar') -->

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Activity Log</h4>
                            </div>

                            <div class="col-md-5">
                                {!! Form::open(['method' => 'GET', 'url' => '/admin/activitylogs', 'class' => 'form-inline', 'role' => 'search'])  !!}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="tabetable-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="text-uppercase font-size-1">
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                ID
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Activity
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Actor
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Date
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Actions
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="font-size-1">
                                @foreach($activitylogs as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            @if ($item->causer)
                                                <a href="{{ url('/admin/users/' . $item->causer->id) }}">{{ $item->causer->name }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ url('/admin/activitylogs/' . $item->id) }}" title="View Activity"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/activitylogs', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Activity',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $activitylogs->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
