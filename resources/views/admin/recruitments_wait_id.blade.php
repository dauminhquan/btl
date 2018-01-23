@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recruitment/index.css')}}">
    <style>
        .post2{
            background-color: #ffffff;
            padding-left: 20px;
            padding-top: 10px;
            padding-bottom: 10px !important;
            margin-left: -12px;
            margin-right: -12px;
            padding-right: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- /.tab-pane -->
        <section class="content-header">
            <h1>
                Tin chờ duyệt
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="post2">
                <div class="active tab-pane" id="activity" >
                    <!-- Post -->
                    <div class="post" id="box-recruitments" pa_data="{{$id}}"  em_id="{{$data->employer_id}}">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">{{$data->name_company}}</a>
                                
                                

                                    <a  @click="xoa({{$id}})" class="pull-right btn btn-box-tool" title="Xóa bài viết"><i class="fa fa-trash-o"></i></a>
                                    <a  @click="sua()" class="pull-right btn btn-box-tool" title="Chỉnh sửa bài viết"><i class="fa fa-pencil-square-o"></i></a>

                                </ul>

                               
                            </span>
                            <span class="description">Đã đăng - {{$data->created_at}}</span>
                            <span class="description "><i class="fa fa-paperclip"></i> File đính kèm: <a href="{{Storage::url($data->attach_file)}}"><i class="fa fa-download"></i></a></span>
                            <span class="description">Loại tuyển dụng: {{$data->recruitment_type_name}}</span></span>
                            <span class="description">Chuyên ngành: @foreach($data_branches as $item){{$item->branch_name}},@endforeach</span>
                        </div>
                        <hr>
                        <!-- /.user-block -->
                        <div id="content_re">
                        {!! $data->content !!}
                        </div> 
                        <br>
                        
                        <button class="btn btn-success pull-right"  style="margin-right:5px" @click="duyettin({{$id}})" >Duyệt</button>
                        <button class="btn btn-danger pull-right " data-toggle="modal" data-target="#modal-default" style="margin-right:5px" >Hủy</button>
                        <button class="btn btn-info pull-right" style="margin-right:5px" v-if="edit == true" @click="getData({{$id}})">Lưu lại</button>
                        <div class="clearfix"></div>
                        
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"><b>Gửi phản hồi cho doanh nghiệp</b></h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Nhập nguyên nhân hủy bài viết</label>
                                        
                                        <textarea name="" v-model="report" class="form-control" id="" cols="30" rows="10"></textarea>
                                      
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success"  @click="huybaiviet({{$id}})">Xác nhận</button>
                                </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>

@endsection
@section('js')

<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="{{asset('js/admin/list_recruitments_wait_id.js')}}"></script>
@endsection