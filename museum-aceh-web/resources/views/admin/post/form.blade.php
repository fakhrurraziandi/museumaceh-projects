@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</div>
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

                        @if(isset($post))
                            <form action="{{ route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                        @endif


                            @csrf

                            @isset($post)
                                @method('PUT')
                            @endisset

                           <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title" placeholder="Title" value="{{old('title', (isset($post) ? $post->title : null)) }}">
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
                                        <input type="text" class="form-control {{$errors->has('slug') ? 'is-invalid' : ''}}" id="slug" name="slug" placeholder="Slug" value="{{old('slug', (isset($post) ? $post->slug : null)) }}">
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
                                        <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" id="body" name="body" placeholder="Body" rows="10">{{old('body', (isset($post) ? $post->body : null)) }}</textarea>
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
                                        <label for="category_id">Category</label>
                                        <select class="form-control {{$errors->has('category_id') ? 'is-invalid' : ''}}" id="category_id" name="category_id" placeholder="Category">
                                            <option value=""></option>
                                            @foreach(App\Category::all() as $category)
                                                <option {{old('category_id', (isset($post) ? $post->category_id : null)) == $category->id ? 'selected=""' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('category_id'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('category_id')}}
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

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="status_drafted" name="status" class="custom-control-input" value="drafted" {{old('category_id', (isset($post) ? $post->status : null)) == 'drafted' ? 'checked=""' : '' }}>
                                        <label class="custom-control-label" for="status_drafted">Drafted</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="status_published" name="status" class="custom-control-input" value="published" {{old('category_id', (isset($post) ? $post->status : null)) == 'published' ? 'checked=""' : '' }}>
                                        <label class="custom-control-label" for="status_published">Published</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="status_archived" name="status" class="custom-control-input" value="archived" {{old('category_id', (isset($post) ? $post->status : null)) == 'archived' ? 'checked=""' : '' }}>
                                        <label class="custom-control-label" for="status_archived">Archived</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    @if($errors->has('status'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('status')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>
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

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        
        $('#body').ckeditor();
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