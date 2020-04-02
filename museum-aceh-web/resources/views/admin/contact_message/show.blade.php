@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <p><a class="btn btn-secondary" href="{{route('admin.contact_message.index')}}"><i class="fa fa-arrow-left"></i> Back</a></p>

                <div class="card">
                    <div class="card-header">Detail Contact Message</div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-2 text-sm-right">Name</dt>
                            <dd class="col-sm-10">{{$contact_message->name}}</dd>

                            <dt class="col-sm-2 text-sm-right">Email</dt>
                            <dd class="col-sm-10">{{$contact_message->email}}</dd>

                            <dt class="col-sm-2 text-sm-right">Category</dt>
                            <dd class="col-sm-10">{{$contact_message->category}}</dd>

                            <dt class="col-sm-2 text-sm-right">Message</dt>
                            <dd class="col-sm-10">{!!nl2br($contact_message->message)!!}</dd>
                        </dl>
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
        
        $('#description').ckeditor();
    </script>
    
    <script>
        $(function(){
            function onNameInputHandler(){
                const name = $('#name').val();
                $('#slug').val(slugify(name.toLowerCase()));
            }
            $('#name').on('input', onNameInputHandler);
        });
    </script>
@endsection