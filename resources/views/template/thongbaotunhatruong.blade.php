@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recruitment/index.css')}}">
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
            <div id="timeline">
                <danh-sach-tin-tuyen-dung @if(Auth::guard('student')->check()) :employer="1" @endif></danh-sach-tin-tuyen-dung>
            </div>
            
        </section>
    </div>

@endsection
@section('js')
<script src="{{asset('js/recruiments/index.js')}}"></script>
@endsection