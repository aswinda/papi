@extends('admin.base.template')
@section('content')

<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Land Transaction</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form" role="form" method="POST" action="{{ url('admin/transaction/land/update/'.$land->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="box-body">
                    <div class="form-group">
                      <label>Investor Name</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $land->user_name }}" value="{{ $land->user_name }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Land Name</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $land->land_name }}" value="{{ $land->land_name }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $land->created_at }}" value="{{ $land->created_at }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Wide (Meter Persegi)</label>
                      <input name="wide" type="text" class="form-control" placeholder="{{ $land->wide }}" value="{{ $land->wide }}">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                          <option value="BELUM_DIBAYAR" <?php if($land->status == "BELUM_DIBAYAR") echo 'selected'; ?> >BELUM_DIBAYAR</option>
                          <option value="DIBAYAR" <?php if($land->status == "DIBAYAR") echo 'selected'; ?> >DIBAYAR</option>
                          <option value="CANCELLED" <?php if($land->status == "CANCELLED") echo 'selected'; ?> >CANCELLED</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Price (Per Meter Persegi)</label>
                      <input name="price" type="text" class="form-control" placeholder="{{ $land->price }}" value="{{ $land->price }}">
                    </div>
                    

                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->


            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ URL::to('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::to('dist/js/app.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::to('dist/js/demo.js') }}" type="text/javascript"></script>

     <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ URL::to('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ URL::to('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
    <!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>

    @endsection