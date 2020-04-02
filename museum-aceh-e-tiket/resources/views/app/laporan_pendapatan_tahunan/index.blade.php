@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header">Laporan Pendapatan Tahunan</div>
                    <div class="card-body">

                        <form action="{{ route('app.laporan_pendapatan_tahunan.pdf')}}" target="_blank" method="GET" enctype="multipart/form-data">

                            

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-3 col-form-label text-sm-right">Tahun</label>
                                        <div class="col-sm-9">
                                            <select name="tahun" id="tahun" class="form-control">
                                                <option></option>
                                                @for($i = 2019; $i <= date('Y'); $i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="{{route('app.laporan_pendapatan_tahunan.index')}}" class="btn btn-secondary">Cancel</a>
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