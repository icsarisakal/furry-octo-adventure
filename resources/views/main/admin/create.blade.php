@extends('main.admin.layout')

@section('title','Create|Admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Editor</h1>
                        </div>

                    </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">

            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Enter New News</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="exampleInput">Title</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="News Title" name="news_title">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="exampleInputFile">Image 1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="news_img1" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="exampleInput">Image 1 Description</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Description" name="news_img1_url">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInput">Slug</label>
                                    <input type="text" class="form-control" id="exampleInput" placeholder="Slug" name="news_slug">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="exampleInputFile">Image 2</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="news_img2">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image 2 Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="news_img2_url">
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!-- /.col -->
                                <div class="col-md-12">
                                        <!-- /.card-header -->
                                        <div class="card-body pad">
                                            <div class="mb-3">
                                                <label for="news_content">News Content</label>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="news_content"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            <input type="file" name="lasdjlakjdalşkmd">
                            <div class="col-lg-11">
                                <input type="submit" class="btn btn-warning pr-5 pl-5 mt-n1 mb-n2 " style="float: right;" value="Edit">
                            </div>
                        </form>

                        </div>


                    </div>

                    <!-- /.row -->


                    <!-- /.col -->


                    <!-- /.row -->
                </div>

                <!-- /.card-body -->



            <!-- /.card -->

    </section>
@endsection

@section('content1')
    <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Text Editors</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Text Editors</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Bootstrap WYSIHTML5
                                        <small>Simple and fast</small>
                                    </h3>
                                    <!-- tools box -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pad">
                                    <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                    <p class="text-sm mb-0">
                                        Editor <a href="https://github.com/summernote/summernote">Documentation and license
                                            information.</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
            </div>
@endsection
