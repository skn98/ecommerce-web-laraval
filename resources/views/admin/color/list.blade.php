@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
 <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Color List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
           <a href={{ url('admin/color/add') }} class="btn btn-primary"> Add New Color</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-12">

        @include('admin.layouts._message')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brand List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Name</th>
                      <th>code</th>
                      <th>Created By</th>
                      <th>Status </th>
                      <th>Created Date</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($getRecord as $value)
                      <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->code }}</td>
                        <td>{{ $value->created_by_name }}</td>
                        <td>{{ $value->status ==0 ?'Active' :'Inactive' }}</td>
                        <td>{{date('d-m-Y', strtotime($value->created_at)) }}</td>
                        <td>
                            <a href="{{ url('admin/color/edit/' .$value->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <a href="{{ url('admin/color/delete/' . $value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Brand?')">
                                <i class="bi bi-trash"></i>
                            </a>
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
    </section>
</div>
@endsection
@section('script')
@endsection




