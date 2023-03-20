<!DOCTYPE html>
@extends('layouts.app')
@section("headerName", "User Account Detail")
@section("pageName", "User Account Detail")
@section("content")
<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Detail Information</h3>

              <div class="card-tools">
              <small class="float-center">Registration Date: 19/03/2023</small>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                  
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputUserame">Username</label>
                <input type="text" id="inputUserame" class="form-control" value="Camille Beauty">
              </div>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" value="Nadya Shavira">
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" id="inputAddress" class="form-control" value="Jl. Cipinang Muara Duren Sawit, Jakarta Timur">
              </div>
              <div class="form-group">
                <label for="inputPhone">Phone Number</label>
                <input type="text" id="inputPhone" class="form-control" value="089898989876">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="text" id="inputPassword" class="form-control" value="1234">
              </div>
              <div class="form-group">
                <label for="inputSocialMedia">Social Media</label>
                <input type="text" id="inputSocialMedia" class="form-control" value="@camille.beauty">
              </div>
            </div>
            <!-- /.card-body -->
  
        </section>


@endsection



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>