@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Category List</h5>
          <a href="{{ url('/admin/category/create') }}" class="btn btn-primary" title="Add New Category">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Category
          </a>

          <p><br></p>
          <div class="table-primary">
            <table class="table" id="DataTables">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ url('/admin/category/' . $item->id) }}" title="View Category"><button class="btn btn-primary btn-sm">View</button></a>
                            <a href="{{ url('/admin/category/' . $item->id . '/edit') }}" title="Edit Category"><button class="btn btn-warning btn-sm"><i class="bx bx-pencil"></i></button></a>

                            <form method="POST" action="{{ url('/admin/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="bx bx-trash"></i></button>
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
@endsection