@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                
                
                <h2 class="h5 mb-4" style="text-transform: uppercase;">Berita</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                <div class="row align-items-center mb-4">
                    <div class="col-sm-9 text-center text-sm-left">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="col-sm-3 text-center text-sm-right">
                        <span class="text-danger"><i class="fa fa-calendar"></i> {{$post->created_at->format('d-m-Y')}}</span>
                    </div>
                </div>

                <p>Kategori: <a href="{{route('page.category', $post->category->slug)}}">{{$post->category->name}}</a></p>

                <img class="w-100" src="{{asset($post->featured_image)}}" alt="">
                    
                <div class="body my-4">
                    {!!$post->body!!}
                </div>

                <p class="text-center text-sm-left"><a href="{{route('page.posts')}}" class="btn btn-primary">Indeks Berita</a></p>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        
    </script>
@endsection