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
                TLU
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
                    <div class="post" >
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                            <span class="username">
                                <a href="#">{{$data->name_company}}</a>
                                @if(Auth::guard('employer')->check())

                                    <a href="#"  class="pull-right btn-box-tool" title="Xóa bài viết"><i class="fa fa-trash-o"></i></a>
                                    <a href="#" onclick="sua()" class="pull-right btn-box-tool" title="Chỉnh sửa bài viết"><i class="fa fa-pencil-square-o"></i></a>

                                </ul>

                                @endif
                            </span>
                            <span class="description">Đã đăng - {{$data->created_at}}</span>
                            <span class="description "><i class="fa fa-paperclip"></i> File đính kèm: <a href="{{Storage::url($data->attach_file)}}"><i class="fa fa-download"></i></a></span>
                            <span class="description">Loại: Thực tập</span>
                            <span class="description">Thời gian: Full time</span>
                        </div>
                        <hr>
                        <!-- /.user-block -->
                        <div id="content_re">
                        {!! $data->content !!}
                        </div> 
                        <hr>
                        <ul class="list-inline">
                            @if(Auth::guard('student')->check())
                                <li><a href="{{route('student.index.sendcv',['company' => $data->employer_id])}}" class="link-black text-sm"><i class="fa fa-send-o"></i> Gửi cv</a></li>
                            @endif

                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </li>

                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                    (5)</a></li>
                        </ul>

                        <div class="form-group">
                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <div class="form-group" >
                            <button class="btn btn-success pull-right">Gửi bình luận</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>

        </section>
    </div>

@endsection
@section('js')

<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<script>
         function sua(){
            CKEDITOR.replace( 'content_re' );
        }
    </script>
@endsection