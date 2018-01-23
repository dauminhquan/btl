@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recruitment/index.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- /.tab-pane -->
        <section class="content-header">
            <h1>
                Bảng tin tuyển dụng
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div id="danhsachtindangchoduyet">
            <danh-sach-dang-cho></danh-sach-dang-cho>
            </div>
            
        </section>
    </div>

@endsection
@section('js')
<script src="{{asset('js/admin/list_recruitments_wait.js')}}"></script>
@endsection