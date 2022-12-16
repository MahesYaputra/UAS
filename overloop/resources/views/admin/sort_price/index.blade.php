@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Sort Prices</h5>
          <a href="{{ url('/admin/sort_price/print_pdf') }}" target="blank" class="btn btn-primary" title="Print PDF">
            <i class="fa fa-plus" aria-hidden="true"></i> Print PDF
          </a>

          <p><br></p>
          <div class="table-primary">
            <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Currency</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sort_price as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->currency }}</td>
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