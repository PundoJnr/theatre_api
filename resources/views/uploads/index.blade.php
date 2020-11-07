@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3 class="font-weight-bold">Dashboard</h3>
        </div>

        <a href="{{ route('uploads.create') }}" class="btn btn-primary">Upload Video</a>
    </div>
@endsection