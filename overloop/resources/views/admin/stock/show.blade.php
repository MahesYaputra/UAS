@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Stock {{ $stock->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/stock') }}" title="Back"><button class="btn btn-primary btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/stock/' . $stock->id . '/edit') }}" title="Edit Stock"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/stock' . '/' . $stock->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Stock" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $stock->id }}</td>
                                    </tr>
                                    <tr><th> Product Id </th><td> {{ $stock->product_id }} </td></tr><tr><th> Product Name </th><td> {{ $stock->product->title }} </td></tr><tr><th> Size </th><td> {{ $stock->size }} </td></tr><tr><th> Quantity </th><td> {{ $stock->quantity }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
