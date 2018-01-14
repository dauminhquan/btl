@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recruitment/index.css')}}">
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
            <div id="timeline">
                <danh-sach-tin-tuyen-dung></danh-sach-tin-tuyen-dung>
            </div>
            <!-- /.tab-pane -->
        </section>
    </div>

@endsection
@section('js')
<script src="{{asset('js/recruiments/index.js')}}"></script>
@endsection