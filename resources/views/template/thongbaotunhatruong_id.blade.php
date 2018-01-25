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
                Thông báo từ nhà trường
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
        <div class="post">
        <div class="user-block">
          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
              <span class="username">
                <a href="#">Nhân viên A.</a>
     
              </span>
          <span class="description">Gửi vào lúc: 7:30 PM hôm nay</span>
        </div>
        <!-- /.user-block -->
        <p>
          Thông báo đợt tốt nghiệp năm 2017-2018
        </p>
        
      </div>

        </section>
    </div>

@endsection
@section('js')

<script src="//cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="{{asset('js/recruiments/index_id.js')}}"></script>
@endsection