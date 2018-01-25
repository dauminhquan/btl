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
                Ứng tuyển
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sendcv</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('recruitments.index')}}" class="btn btn-primary btn-block margin-bottom">Xem tuyển dụng</a>

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ứng tuyển</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{route('student.index.sendcv')}}"><i class="fa fa-edit"></i>Ứng tuyển</a></li>
                                <li><a href="{{route('student.index.thongbao')}}"><i class="fa fa-bullhorn"></i>Thông báo</a></li>
                                <li><a href="{{route('student.index.cvbox')}}"><i class="fa fa-envelope-o"></i> Các đơn đã gửi</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Đơn nháp</a></li>
                            
                                <li><a href="#"><i class="fa fa-trash-o"></i> Đơn đã xóa</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Xem thêm</h3>

                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Tuyển dụng mới nhất</a></li>
                                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Tuyển dụng nhiều người ứng tuyển</a></li>

                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <form method="post" enctype="multipart/form-data" >
                            <div class="box-header with-border">
                                <h3 class="box-title">Form thông tin</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <select name="company" id="" class="form-control" required>

                                        @foreach($data as $item)
                                            <option value="{{$item->id}}" @if(isset($company)) @if($company == $item->id) selected  @endif @endif >{{$item->name_company}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title" placeholder="Subject:" required>
                                </div>
                                <div class="form-group">
                    <textarea placeholder="Nhập nội dung đơn xin việc ....." id="compose-textarea" name="content" class="form-control" style="height: 300px" required>

                    </textarea>
                                </div>
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> CV đính kèm
                                        <input type="file" name="attachment" required>
                                    </div>
                                    <p class="help-block">Max. 32MB</p>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="pull-right">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Gửi</button>
                                </div>
                                <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Reset</button>
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

    <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
        $(function () {
            //Add text editor
            $("#compose-textarea").wysihtml5();
        });
    </script>

    @if(isset($store))
        <script type="text/javascript">
            $(function(){
                var opts = {
                    title: "Thành công",
                    text: "Gửi CV thành công!",
                    addclass: "stack-topright",
                    type : "success"
                };

                new PNotify(opts);
            });
        </script>
    @endif
@endsection