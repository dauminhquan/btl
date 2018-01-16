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
                Gửi CV
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
                                <h3 class="box-title">Bài đăng mới</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <lable>Chọn ngành muốn tuyển dụng: </lable>
                                    <select name="company" id="" class="form-control" multiple required>

                                        <option> Khoa học máy tính</option>
                                        <option> Quản trị kinh doanh</option>
                                        <option> An toàn thông tin</option>
                                        <option> Ngôn ngữ Nhật</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="title" placeholder="Tiêu đề:" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" min="0" class="form-control" name="pay" placeholder="Nhập mức lương..">
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="" id="" class="form-control">
                                                <option value="">
                                                    Chọn loại tuyển dụng
                                                </option>
                                                <option value="">
                                                    Thực tập
                                                </option>
                                                <option value="">
                                                    Tuyển nhân viên
                                                </option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="number" min="1" name="number" class="form-control" placeholder="Số lượng muốn tuyển..">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                    <textarea placeholder="Nhập nội dung đơn xin việc ....." id="compose-textarea" name="content" class="form-control" style="height: 300px" required>

                    </textarea>
                                </div>
                                <div class="form-group">
                                    <div class="btn btn-default btn-file">
                                        <i class="fa fa-paperclip"></i> File đính kèm
                                        <input type="file" name="attachment"  onchange="$('#upload-file-info').html(this.files[0].name)" required>
                                    </div>
                                    <p class="help-block" id="upload-file-info">Max. 32MB</p>
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

<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script>
        $(function () {
            //Add text editor
            CKEDITOR.replace( 'compose-textarea' );
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