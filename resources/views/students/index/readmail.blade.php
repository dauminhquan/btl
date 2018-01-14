@extends('students.layout')
@section('css')


@endsection
@section('content')

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
                <div class="col-md-3">
                    <a href="{{route('student.index.sendcv')}}" class="btn btn-primary btn-block margin-bottom">Gửi CV</a>

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
                                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Hộp thứ đến
                                        <span class="label label-primary pull-right">12</span></a></li>
                                <li><a href="{{route('student.index.cvbox')}}"><i class="fa fa-envelope-o"></i> Thư đã gửi</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Thư nháp</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Thư rác <span class="label label-warning pull-right">65</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Thư đã xóa</a></li>
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
                        <div class="box-header with-border">
                            <h3 class="box-title">Email</h3>

                            <div class="box-tools pull-right">
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                                <h3>{{$data->title}}</h3>
                                <h5>Đến từ: <a href="{{route('employer.index.index.id',['id' => $data->employer_id])}}">{{$data->name_company}}</a>
                                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                                        <i class="fa fa-trash-o"></i></button>
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                                        <i class="fa fa-reply"></i></button>
                                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                                        <i class="fa fa-share"></i></button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                                    <i class="fa fa-print"></i></button>
                            </div>
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
                            <div class="pull-right">
                                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Chuyển tiếp</button>
                            </div>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Xóa</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> In ra</button>
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
    <div class="modal fade" id="modal-default" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Url file đính kèm</h4>
                </div>
                <div class="modal-body">
                    <input class="form-control" value="{{Storage::url($data->file_attach)}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Đóng</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@endsection
@section('js')

@endsection