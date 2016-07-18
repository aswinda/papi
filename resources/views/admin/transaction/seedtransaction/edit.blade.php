@extends('admin.base.template')
@section('content')

<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Seed Transaction</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form" role="form" method="POST" action="{{ url('admin/transaction/seed/update/'.$seed->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="box-body">
                    <div class="form-group">
                      <label>Investor Name</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $seed->user_name }}" value="{{ $seed->user_name }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>seed Name</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $seed->seed_name }}" value="{{ $seed->seed_name }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Date</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $seed->created_at }}" value="{{ $seed->created_at }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Amount</label>
                      <input name="wide" type="text" class="form-control" placeholder="{{ $seed->amount }}" value="{{ $seed->amount }}">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                          <option value="BELUM_DIBAYAR" <?php if($seed->status == "BELUM_DIBAYAR") echo 'selected'; ?> >BELUM_DIBAYAR</option>
                          <option value="DIBAYAR" <?php if($seed->status == "DIBAYAR") echo 'selected'; ?> >DIBAYAR</option>
                          <option value="CANCELLED" <?php if($seed->status == "CANCELLED") echo 'selected'; ?> >CANCELLED</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Price</label>
                      <input name="price" type="text" class="form-control" placeholder="{{ $seed->price }}" value="{{ $seed->price }}">
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