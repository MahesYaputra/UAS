@extends('admin.layouts.main')

@section('content')
<div class="row mb-5">
  <div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
    <a href="/admin/category/create">
        <div class="card-body"> 
            <h6 class="card-title text-muted"><span>| Shorcut</span></h6>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <h4 class="text-primary"><b>Add Category</b></h4>
                </div>
            </div>
        </div>
    </a>
    </div>
  </div>

  <div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
    <a href="/admin/product/create">
        <div class="card-body"> 
            <h6 class="card-title text-muted"><span>| Shorcut</span></h6>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <h4 class="text-primary"><b>Add Procuct</b></h4>
                </div>
            </div>
        </div>
    </a>
    </div>
  </div>

  <div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
    <a href="/admin/Stock/create">
        <div class="card-body"> 
            <h6 class="card-title text-muted"><span>| Shorcut</span></h6>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <h4 class="text-primary"><b>Add Stock</b></h4>
                </div>
            </div>
        </div>
    </a>
    </div>
  </div>

  <div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
    <a href="/admin/detail/create">
        <div class="card-body"> 
            <h6 class="card-title text-muted"><span>| Shorcut</span></h6>
            <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <h4 class="text-primary"><b>Add Detail</b></h4>
                </div>
            </div>
        </div>
    </a>
    </div>
  </div>
</div>  
@endsection
