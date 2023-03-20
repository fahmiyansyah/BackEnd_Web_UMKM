<!DOCTYPE html>
@extends('layouts.app')
@section("headerName", "Frequently Asked Questions")
@section('headerPlus')
<br>
            <br>
            <a type="button" class="btn btn-danger plus float-left" href="/faqedit">Add Question</a>
@endsection
@section("pageName", "FAQ")
@section("content")
<!-- Content Wrapper. Contains page content -->

<!-- Main content -->
<section class="content">

        <div class="row">
            <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <button type="button" class="btn btn-danger plus float-right">Delete</button>
                                <a type="button" class="btn btn-warning plus float-right" href="/faqedit">Edit</a>
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                1. Lorem ipsum dolor sit amet
                                </a>
                                
                            </h4>
                        </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                            <button type="button" class="btn btn-danger plus float-right">Delete</button>
                                <a type="button" class="btn btn-warning plus float-right" href="/faqedit">Edit</a>
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                2. Aenean massa
                              </a>
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                  
                        <div class="card-header">
                            <h4 class="card-title w-100">
                            <button type="button" class="btn btn-danger plus float-right">Delete</button>
                                <a type="button" class="btn btn-warning plus float-right" href="/faqedit">Edit</a>
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                3. Donec quam felis
                              </a>
                            </h4>
                        </div>
                    </a>
                    <!-- <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        </div>
                    </div>
                </div>
                <div class="card card-warning card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                            <button type="button" class="btn-danger plus float-right">Delete</button>
                            <button type="button" class="btn-primary plus float-right">Edit</button>
                                4. Donec pede justo
                            </h4>
                        </div>
                    </a>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                        </div>
                    </div>
                </div>
                <div class="card card-warning card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                            <button type="button" class="btn-danger plus float-right">Delete</button>
                            <button type="button" class="btn-primary plus float-right">Edit</button>
                                5. In enim justo
                            </h4>
                        </div>
                    </a>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </div>
                    </div>
                </div>
                <div class="card card-warning card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                            <button type="button" class="btn-danger plus float-right">Delete</button>
                            <button type="button" class="btn-primary plus float-right">Edit</button>
                                6. In enim justo
                            </h4>
                        </div>
                    </a>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        </div>
                    </div>
                </div> -->
          
</section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
</html>
