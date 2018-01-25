@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hẹn phỏng vấn
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Mailbox</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <form method="post" enctype="multipart/form-data" >
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">Nhập mã sinh viên:</label>
                                    <input type="text" class="form-control" require> 
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title" placeholder="Tiêu đề:" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Chọn thời gian</label>
                                            <input type="datetime-local" placeholder="Chọn thời gian bắt đầu..." class="form-control">
                                        </div>

                                    </div>
                                    
                                   
                                </div>
                                <div class="form-group">
                    <textarea placeholder="Nhập nội dung đơn xin việc ....." id="compose-textarea" name="content" class="form-control" style="height: 300px" required>

                    </textarea>
                                </div>
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="pull-right">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Đăng</button>
                                </div>
                            </div>
                            <!-- /.box-footer -->
                        </form>
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

@endsection


@section('js')

<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
        $(function () {
            //Add text editor
            CKEDITOR.replace( 'compose-textarea');
        });
    </script>

    @if(isset($success))
        <script type="text/javascript">
            $(function(){
                var opts = {
                    title: "Thành công",
                    text: "Gửi bài thành công!",
                    addclass: "stack-topright",
                    type : "success"
                };

                new PNotify(opts);
            });
        </script>
    @endif
@endsection