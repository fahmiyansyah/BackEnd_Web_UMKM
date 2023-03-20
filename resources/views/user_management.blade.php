<!DOCTYPE html>
@extends('layouts.app')
@section("headerName", "User Management")
@section("pageName", "User Management")
@section("content")

<!-- Content Wrapper. Contains page content -->
    <!-- ./wrapper -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User Account</h3>

                        <div class="card-tools">
                            <small class="float-center">See Detail</small>
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
                                        <th>Username</th>
                                        <th>Registration Date</th>
                                        <th>Account Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>lala123</td>
                                        <td>19/03/2023</td>
                                        <td>Mrs. Nadya Shavira</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="/userdetail" class="btn btn-warning plus float-right">See
                                                    Detail</a>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>lohloh</td>
                                        <td>12/02/2023</td>
                                        <td>Mr. Anugrah Pakerti</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="/userdetail" class="btn btn-warning plus float-right">See
                                                    Detail</a>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>jun123</td>
                                        <td>08/02/2023</td>
                                        <td>Mr. Jun</td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="/userdetail" class="btn btn-warning plus float-right">See
                                                    Detail</a>
                                            </div>
                                        </td>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                        <section>
                        <!-- /.card-body -->
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