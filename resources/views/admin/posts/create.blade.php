@extends('admin.layouts.layout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post qo`shish</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Post qo`shish</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Nomi</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               placeholder="Nomi">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Sitata</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="5" placeholder="Sitata..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Kontent</label>
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7" placeholder="Kontent..."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Kategoriya</label>
                                        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                            @foreach($categories as $k => $v)
                                                <option value="{{ $k }}">{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tags">Teglar</label>
                                        <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="Teg tanlang" style="width: 100%;">
                                            @foreach($tags as $k => $v)
                                                <option value="{{ $k }}">{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumbnail">Su`rat tanlang</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                                <label class="custom-file-label" for="thumbnail">Faylni tanlang</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Saqlash</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection

