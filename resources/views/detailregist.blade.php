<!DOCTYPE html>
@extends('layouts.app')
@section("headerName", "Registration Detail")
@section("pageName", "Registration Deatail")
@section("content")
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">UMKM Detail Information</h3>

              <div class="card-tools">
              <small class="float-center">Registration Date: 19/03/2023</small>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                  
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">UMKM Name</label>
                <input type="text" id="inputName" class="form-control" value="Camille Beauty">
              </div>
              <div class="form-group">
                <label for="inputOwner">UMKM Owner</label>
                <input type="text" id="inputOwner" class="form-control" value="Nadya Shavira">
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
                <label for="inputDescription">UMKM Description</label>
                <textarea id="inputDescription" class="form-control" rows="4">PT. Shavira Barokah Utama is a company engaged in local cosmetics which has been established since 2018. Authorized by KEMENKUMHAN in 2020 with the brand name "Camille" and founded by Nadya Shavira</textarea>
              </div>
              <div class="form-group">
                <label for="inputSocialMedia">Social Media</label>
                <input type="text" id="inputSocialMedia" class="form-control" value="@camille.beauty">
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <option selected >On Hold</option>
                  <option>Denied</option>
                  <option>Accepted</option>
                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">License</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CamilleKemenkumham.pdf</td>
                        <td>49.8005 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    <tr>
                        <td>BPOMNA18230200181.pdf</td>
                        <td>28.4883 kb</td>
                        <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    <tr>                    
                </tbody>
              </table>            
            </div>           
            <!-- /.card-body -->
          </div>
          </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-danger">Denied</a>
          <input type="submit" value="Accept" class="btn btn-success float-center">
        </div>
      </div>
          <!-- /.card -->
      
      
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
