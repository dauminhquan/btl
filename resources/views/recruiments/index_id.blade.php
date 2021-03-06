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
                Tin tuyển dụng
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
                    <div class="post" id="box-recruitments" pa_data="{{$id}}" @if(Auth::guard('employer')->check()) em_id="{{Auth::guard('employer')->user()->id}}" @endif>
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">{{$data->name_company}}</a>
                                
                                @if(isset($own))

                                    <a  @click="xoa({{$id}})" class="pull-right btn btn-box-tool" title="Xóa bài viết"><i class="fa fa-trash-o"></i></a>
                                    <a  @click="sua()" class="pull-right btn btn-box-tool" title="Chỉnh sửa bài viết"><i class="fa fa-pencil-square-o"></i></a>

                                </ul>

                                @endif
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
                        <button class="btn btn-success pull-right" v-if="edit == true" @click="getData()">Lưu lại</button>
                        <div class="clearfix"></div>
                        <hr>
                        @if(Auth::guard('student')->check())
                        <ul class="list-inline">
                                <li><a href="{{route('student.index.sendcv',['company' => $data->employer_id])}}" class="btn btn-info"><i class="fa fa-send-o"></i> Gửi cv</a></li>
                        </ul>
                        @endif
                    </div>

                </div>
            </div>

        </section>
    </div>

@endsection
@section('js')

<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="{{asset('js/recruiments/index_id.js')}}"></script>
@endsection