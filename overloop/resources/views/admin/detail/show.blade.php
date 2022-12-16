@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h5 class="card-title">Detail for {{ $detail->loopkey }}</h5></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/detail') }}" title="Back"><button class="btn btn-primary btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/detail/' . $detail->id . '/edit') }}" title="Edit Detail"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/detail' . '/' . $detail->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Detail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detail->id }}</td>
                                    </tr>
                                    <tr><th> Stock Id </th><td> {{ $detail->stock_id }} </td></tr><tr><th> Loopkey </th><td> {{ $detail->loopkey }} </td></tr><tr><th> Status </th><td> {{ $detail->status }} </td></tr><tr><th> Owner </th><td> {{ $detail->customer->name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
