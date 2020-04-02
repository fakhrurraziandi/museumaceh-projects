@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                
                
                <h2 class="h5 mb-4" style="text-transform: uppercase;">Event</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                

                <img class="w-100" src="{{asset($event->featured_image)}}" alt="">

                <div class="row align-items-center my-4">
                    <div class="col-sm-12 text-center text-sm-left">
                        <h2>{{$event->title}}</h2>
                    </div>
                    <div class="col-sm-12 text-center text-sm-left">
                        @if($event->event_date)
                            <span class="text-danger"><i class="fa fa-calendar"></i> {{ date('d F Y', strtotime($event->event_date))}}</span> | 
                        @endif
                        <span class="text-danger"><i class="fa fa-map-marker"></i> {{$event->location }}</span>
                    </div>
                </div>
                    
                <div class="body my-4">
                    {!!$event->body!!}
                </div>

                <p class="text-center text-sm-left"><a href="{{route('page.events')}}" class="btn btn-primary">Indeks Event</a></p>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        
    </script>
@endsection