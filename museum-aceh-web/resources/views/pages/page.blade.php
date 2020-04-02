@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                <img src="{{asset($page->featured_image)}}" class="w-100 mb-5" alt="">
                
                <h2 class=" mb-4" style="text-transform: uppercase;">{{$page->title}}</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                <div class="body">
                    {!! $page->body !!}
                </div>
            

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.content img').css({
            // width: '100%',
            height: 'auto'
        });

        $('.col').removeClass('col');
    </script>
@endsection