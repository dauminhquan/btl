@extends('students.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/recruitment/index.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">User profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user2-160x160.jpg" alt="User profile picture">

          <h3 class="profile-username text-center">Công ty A</h3>

          <p class="text-muted text-center">Kinh doanh phần mềm</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul>

          <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thông tin về tôi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> Tên công ty</strong>

          <p class="text-muted">
            Công ty A
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</strong>

          <p class="text-muted">Kim giang, Hà Nội</p>

          <hr>

          <strong><i class="fa fa-pencil margin-r-5"></i> Chuyên</strong>

          <p>
            <span class="label label-danger">Kinh doanh UI</span>
            <span class="label label-success">Kinh doanh UX</span>
            <span class="label label-info">Phát triển phần mềm</span>
          </p>

          <hr>

          
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          
          <li class="active"><a href="#settings" data-toggle="tab">Thông tin cá nhân</a></li>
        </ul>
        <div class="tab-content">
          

          <div class="active tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Tên công ty</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" value="Công ty A" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" value="congtya@gmail.com" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Địa chỉ</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" value="Kim Giang, Hà Nội" placeholder="Name">
                </div>
              </div>
              <div class="form-group">
                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                </div>
              </div>
              
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success" style="float:right">Lưu lại</button>
                </div>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
</div>
@endsection

@section('js')

@endsection