@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
 <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
           <a href={{ url('admin/sub_category/add') }} class="btn btn-primary"> Add New SubCategory</a>
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
                <h3 class="card-title">Sub Category List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Category Name</th>
                      <th>Subcategory Name</th>
                      <th>Slug</th>
                      <th>Meta Title</th>
                      <th>Meta Description</th>
                      <th>Meta keywords</th>
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
                        <td>{{ $value->category_name }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->slug }}</td>
                        <td>{{ $value->meta_title }}</td>
                        <td>{{ $value->meta_description }}</td>
                        <td>{{ $value->meta_keywords }}</td>
                        <td>{{ $value->created_by_name }}</td>
                        <td>{{ $value->status == 0 ? 'Active' : 'Inactive' }}</td>
                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                        <td>

                            <a href="{{ url('admin/sub_category/edit/' .$value->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <a href="{{ url('admin/sub_category/delete/' . $value->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this sub category?')">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach


                  </tbody>
                </table>
                <div style="padding: 10px; float: right;">
                    {!!  $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                </div>
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






