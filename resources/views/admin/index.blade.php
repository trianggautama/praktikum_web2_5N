@extends('layouts.app')
@section('content')
    <div class="containter p-4">
        <div class="card">
            <div class="card-body">
                <h1>Halo, Selamat datang {{Auth::user()->nama}}</h1>
            </div>
        </div>
    </div>
@endsection