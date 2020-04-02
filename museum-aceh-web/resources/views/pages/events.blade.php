@extends('layouts.page')

@section('content')

    

    <div class="container">
        <div class="row py-4 align-items-center">
            <div class="col-sm-12">

                
                
                <h2 class=" mb-4" style="text-transform: uppercase;">Event dan Pameran</h2>
                <div class="aceh-stripe mb-4" style="width: 50%;"></div>

                <div class="row mb-3">

                    @foreach($events as $event)
                        <div class="col-sm-6 mb-3">
                            <div class="card card-body">
                                <div class="media">
                                    @if($event->featured_image)
                                        <img style="width: 45%;" class="mr-3" src="{{asset($event->featured_image)}}" />
                                    @endif
                                    <div class="media-body">
                                        
                                        <h4 class="mt-0"><a href="{{route('page.event', $event->slug)}}">{{$event->title}}</a></h4>
                                        <p>
                                            @if($event->event_date)
                                                <i class="fa fa-calendar"></i> {{date('d F Y', strtotime($event->event_date))}}
                                            @else
                                                &nbsp;
                                            @endif
                                        </p>
                                        <p>{{substr(strip_tags($event->body), 0, 150)}} [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        {{$events->links()}}
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