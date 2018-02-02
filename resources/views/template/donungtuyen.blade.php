@extends('students.layout')
@section('css')

<link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

@endsection
@section('content')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Đơn ứng tuyển #1
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Mailbox</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
               
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                                <h3>{{$data->title}}</h3>
                                <h5>Đến từ: <a href="{{route('employer.index.index.id',['id' => $data->employer_id])}}">A25428</a>
                                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                            </div>
                            <!-- /.mailbox-read-info -->
                           
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                {!! $data->more_information !!}
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <ul class="mailbox-attachments clearfix">
                                <li>
                                    <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                                    <div class="mailbox-attachment-info">
                                        <a href="{{Storage::url($data->file_attach)}}" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> File</a>
                                        <span class="mailbox-attachment-size">
                                            {{Storage::size($data->file_attach)/1000}} KB
                                            <a href="{{Storage::url($data->file_attach)}}" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                            <a  class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                            
                            <button type="button" class="btn btn-info"><i class="fa fa-calendar-o"></i> Hẹn phỏng vấn</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa  fa-check-square-o"></i> Chấp nhận</button>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
   
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nội dung thư chúc mừng</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label>Nhập nội dung thư: </label>
                    <textarea name="" class="form-control" id="noidung" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-success">Gửi</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endsection

@endsection

@section('js')

<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
        $(function () {
            //Add text editor
            CKEDITOR.replace( 'noidung');
        });
    </script>

    
@endsection