@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
 <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Product </h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <form action="" method="post">
                  {{ csrf_field() }}
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Title <span style="color:red">*</span></label>
                          <input type="text" id="title" class="form-control" required value="{{ old('title', $product->title) }}" name="title" placeholder="Title">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>SKU <span style="color:red">*</span></label>
                          <input type="text" id="sku" class="form-control" required value="{{ old('sku', $product->sku) }}" name="sku" placeholder="SKU">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label >Category <span style="color:red">*</span></label>
                          <select class="form-control" id="ChangeCategory" name="category_id">
                            <option value="">Select</option>

                            @foreach ($getCategory as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Sub Category <span style="color:red">*</span></label>
                          <select class="form-control" id="getSubCategory" name="sub_category_id">
                            <option value="">Select</option>



                          </select>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Color <span style="color:red">*</span></label>
                          <div>
                            <label><input type="checkbox" name="color_id[]"> Red</label>
                          </div>
                          <div>
                            <label><input type="checkbox" name="color_id[]"> Green</label>
                          </div>
                          <div>
                            <label><input type="checkbox" name="color_id[]"> Black</label>
                          </div>
                        </div>
                      </div>
                    </div>

                   <hr>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label >Price <span style="color:red">*</span></label>
                          <input type="text" id="price" class="form-control" required value="" name="price" placeholder="Price">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Old Price <span style="color:red">*</span></label>
                          <input type="text" id="old_price" class="form-control" required value="" name="old_price" placeholder="Old Price">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Size <span style="color:red">*</span></label>
                            <div>
                               <table class="table table-striped" >
                               <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Add
                                        </button>
                                        <button type="button" class="btn btn-danger ">Delete
                                        </button>

                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>

                                        <button type="button" class="btn btn-danger ">Delete
                                        </button>

                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                    <td>

                                        <button type="button" class="btn btn-danger ">Delete
                                        </button>

                                    </td>
                                 </tr>


                               </tbody>
                               </table>
                            </div>
                          </div>
                        </div>
                      </div>

                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Short Description <span style="color:red">*</span></label>
                          <textarea id="short_description" name="short_description" class="form-control" placeholder="Short Description"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea id="description" name="description" class="form-control" placeholder=" Description"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Additional Information <span style="color:red">*</span></label>
                            <textarea id="additional_information" name="additional_information" class="form-control" placeholder="Additional Information"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Shipping Retrns <span style="color:red">*</span></label>
                            <textarea id="shipping_retrns" name="shipping_retrns" class="form-control" placeholder="Shipping Retrns"></textarea>
                          </div>
                        </div>
                      </div>

                    <hr />
                      <div class="row">
                        <div class="col-md-12">
                            <label >Status  <span style="color:red">*</span></label>
                            <select class="form-control" name ="status" required>
                                <option {{ (old('status')==0) ? 'selected' : '' }} value="0">Active</option>
                                <option {{ (old('status')==1) ? 'selected' : '' }} value="1">Inactive</option>
                            </select>
                          </div>
                        </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

</div>
@endsection


@section('script')
 <script type="text/javascript">
    $('body').delegate('#ChangeCategory','change', function(e){
        var id = $(this).val();

        $.ajax({
            type : "POST",
            url  : "{{ url('admin/get_sub_category') }}",
            data : {
                "id":id,
            //    "_token" :"{{ csrf_field() }}"
                "_token" :"{{ csrf_field() }}"
            },

            dataType : "json",
            success:function(data) {
                $('#getSubCategory').html(data.html);


            },
            error: function(data) {

            }
        });
    });

</script>

@endsection

