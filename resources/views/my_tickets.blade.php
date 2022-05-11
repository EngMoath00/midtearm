@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> My Tickets</i>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{ $ticket->category }}</td>
                                    <td>
                                        <a href="{{ route('show.ticket') }}">
                                            {{ $ticket->title }}
                                        </a>
                                    </td>
                                    <td><span class="label label-success">{{ $ticket->Status }}</span></td>
                                    <td>{{ $ticket->updated_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
