@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">{{ isset($page) ? 'Edit Page' : 'Create Page' }}</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(isset($page))
                            <form action="{{ route('admin.page.update', $page->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('admin.page.store')}}" method="POST" enctype="multipart/form-data">
                        @endif


                            @csrf

                            @isset($page)
                                @method('PUT')
                            @endisset

                           <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" placeholder="Title" value="{{old('title', (isset($page) ? $page->title : null)) }}">
                                        @if($errors->has('title'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('title')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control {{$errors->has('slug') ? 'is-invalid' : ''}}" id="slug" name="slug" placeholder="Slug" value="{{old('slug', (isset($page) ? $page->slug : null)) }}">
                                        @if($errors->has('slug'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('slug')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" id="body" name="body" placeholder="Body" rows="10">{{old('body', (isset($page) ? $page->body : null)) }}</textarea>
                                        @if($errors->has('body'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('body')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="featured_image">Featured Image</label>
                                        <input type="file" class="form-control {{$errors->has('featured_image') ? 'is-invalid' : ''}}" id="featured_image" name="featured_image" placeholder="Featured Image" value="{{old('featured_image', (isset($page) ? $page->featured_image : null)) }}">
                                        @if($errors->has('featured_image'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('featured_image')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            

                            

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.page.index')}}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="/vendor/unisharp/ckeditor2/ckeditor.js"></script>
    <script src="/vendor/unisharp/ckeditor2/adapters/jquery.js"></script>
    <script>
        
        $('#body').ckeditor({
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        });
    </script>
    
    <script>
        $(function(){
            function onNameInputHandler(){
                const title = $('#title').val();
                $('#slug').val(slugify(title.toLowerCase()));
            }
            $('#title').on('input', onNameInputHandler);
        });
    </script>
@endsection