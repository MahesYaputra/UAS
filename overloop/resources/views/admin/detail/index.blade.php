@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Stock Details</h5>
          <a href="{{ url('/admin/detail/create') }}" class="btn btn-primary" title="Add New Detail">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Detail
          </a>

          <p><br></p>

          {{-- <form method="GET" action="{{ url('/admin/detail') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                <span class="input-group-append">
                    <button class="btn btn-secondary" type="submit">
                        <i class="bx bx-search fs-4 lh-0"></i>
                    </button>
                </span>
            </div>
          </form><br> --}}
          <div class="table-primary">
            <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Loopkey</th>
                    <th>Size</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detail as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->loopkey }}</td>
                    <td>Size {{ $item->stock->size }}</td>
                    <td>{{ $item->stock->product->title }}</td>
                    <td>{{ $item->stock->product->category->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                      <a href="{{ url('/admin/detail/' . $item->id) }}" title="View Detail"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                      <a href="{{ url('/admin/detail/' . $item->id . '/edit') }}" title="Edit Detail"><button class="btn btn-warning btn-sm"><i class="bx bx-pencil"></i></button></a>

                      <form method="POST" action="{{ url('/admin/detail' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger btn-sm" title="Delete Detail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bx bx-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <br>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
