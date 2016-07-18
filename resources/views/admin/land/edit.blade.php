@extends('admin.base.template')
@section('content')

<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Land</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form" role="form" method="POST" action="{{ url('admin/land/update/'.$land->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="box-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input name="name" type="text" class="form-control" placeholder="{{ $land->name }}" value="{{ $land->name }}">
                    </div>
                    <div class="form-group">
                      <label>Wide (Meter Persegi)</label>
                      <input name="wide" type="text" class="form-control" placeholder="{{ $land->wide }}" value="{{ $land->wide }}">
                    </div>
                    <div class="form-group">
                      <label>Province</label>
                      <select name="province" class="form-control">
                        @foreach($provinces as $province)
                          <option value="{{ $province->id }}" <?php if($land->province_id == $province->id) echo 'selected'; ?> >{{ $province->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>District</label>
                      <select name="district" class="form-control">
                        @foreach($districts as $district)
                          <option value="{{ $district->id }}" <?php if($land->district_id == $district->id) echo 'selected'; ?> >{{ $district->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Price (Per Meter Persegi)</label>
                      <input name="price" type="text" class="form-control" placeholder="{{ $land->price }}" value="{{ $land->price }}">
                    </div>
                    <div class="form-group">
                      <textarea name="description" id="compose-textarea" class="form-control" style="height: 300px">
                        {!!html_entity_decode($land->description)!!}
                      </textarea>
                    </div>
                    <div class="box-footer">
                      <ul class="mailbox-attachments clearfix">
                        <li>
                          <span class="mailbox-attachment-icon has-img"><img src="{{ URL::to('images/lands/'.$land->path) }}" alt="Attachment"/></span>
                          <div class="mailbox-attachment-info">
                            <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> {{ $land->name }}</a>
                           
                          </div>
                        </li>
                      </ul>
                    </div><!-- /.box-footer -->
                    <div class="form-group">
                      <div class="btn btn-default btn-file">
                        <i class="fa fa-paperclip"></i> Image
                        <input name="file" type="file"/>
                      </div> 
                      <p class="help-block">Max. 32MB</p>
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