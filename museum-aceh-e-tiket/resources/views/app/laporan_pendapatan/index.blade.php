@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Laporan Pendapatan</div>
                    <div class="card-body">

                        <form action="{{ route('app.laporan_pendapatan.pdf')}}" target="_blank" method="GET" enctype="multipart/form-data">

                            

                            <div class="row">
                                <div class="col-sm-7">

                                    <div class="form-group row">
                                        <label for="start" class="col-sm-3 col-form-label text-sm-right">Sejak</label>
                                        <div class="col-sm-9">

                                            <input type="date" class="form-control" name="start" id="start">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="end" class="col-sm-3 col-form-label text-sm-right">Sampai Dengan</label>
                                        <div class="col-sm-9">

                                            <input type="date" class="form-control" name="end" id="end">
                                        </div>
                                    </div>

                                    

                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{route('app.laporan_pendapatan.index')}}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
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
    <script>

    </script>
@endsection