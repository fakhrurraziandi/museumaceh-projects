@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Tambah Koleksi Digital</div>
                    <div class="card-body">
                        
                        
                       
                        <form action="{{ route('app.collection.digital_collection.store', $collection->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                           
                            <div class="form-group row"> 
                                <label for="file" class="col-sm-2 col-form-label text-sm-right">file</label> 
                                <div class="col-sm-10"> 
                                    <input type="file" class="form-control {{$errors->has('file') ? 'is-invalid' : ''}}" id="file" name="file" placeholder="file" />
                                    @if($errors->has('file')) 
                                        <div class="invalid-feedback"> 
                                            {{$errors->first('file')}} 
                                        </div> 
                                    @endif 
                                </div> 
                            </div>

                            

                            <div class="row mt-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('app.collection.digital_collection.index', $collection->id)}}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

