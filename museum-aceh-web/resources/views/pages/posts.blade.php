@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                
                
                <h2 class=" mb-4" style="text-transform: uppercase;">Berita</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                <div class="row mb-3">

                    @foreach($posts as $post)
                        <div class="col-sm-12 mb-3">
                            <div class="card card-body border-0">
                                <div class="media">
                                    @if($post->featured_image)
                                        <img style="width: 25%;" class="mr-3" src="{{asset($post->featured_image)}}" />
                                    @endif
                                    <div class="media-body">
                                        
                                        <h4 class="mt-0"><a href="{{route('page.post', $post->slug)}}">{{$post->title}}</a></h4>
                                        <p><i class="fa fa-calendar"></i> {{$post->created_at->diffForHumans()}}, Kategori: <a href="{{route('page.category', $post->category->slug)}}">{{$post->category->name}}</a></p>
                                        <p>{{substr(strip_tags($post->body), 0, 300)}} [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        {{$posts->links()}}
                    </div>
                </div>
                    
            

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        
    </script>
@endsection