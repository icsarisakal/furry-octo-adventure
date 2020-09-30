@extends('main.admin.layout')

@section('title','Covid Admin Panel')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Ana Sayfa</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Controller
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body mb-n10">
                                <div class="tab-content p-0">
                                    <!-- Morris chart - Sales -->
                                    <div class="active" id="revenue-chart" style="position: relative; height: 300px;">
                                        <div class="d-flexx">
                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <div class="card">
                                                        <div class="card-header border-top border-bottom-0 border-success">New News</div>
                                                        <div class="card-body">
                                                            <p class="card-text">Enter the here whether insert new news.</p>
                                                            <a href="{{route('post.create')}}" class="btn btn-primary">Go Poster</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="card">
                                                        <div class="card-header border-top border-bottom-0 border-warning">Edit News</div>
                                                        <div class="card-body">
                                                            <p class="card-text ">Enter the here whether edit new news.</p>
                                                            <a href="#" class="btn btn-success">Go Editor</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 ">
                                                    <div class="card">
                                                        <div class="card-header border-top border-bottom-0 border-primary">Delete News</div>
                                                        <div class="card-body">
                                                            <p class="card-text">Enter the here whether delete new news.</p>
                                                            <a href="#" class="btn btn-warning">Go Killer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- DIRECT CHAT -->

                            <!--/.direct-chat -->

                            <!-- TO DO List -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->

                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
