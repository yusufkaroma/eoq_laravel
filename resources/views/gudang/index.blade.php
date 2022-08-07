@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($error))
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halo {{Auth::User()->nama_pegawai}}</div>

                <div class="card-body">
                    {{$pesan}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
