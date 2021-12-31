@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <form method="POST" action="{{route('cliente')}}">
            @csrf
            <label for="name">Name</label>
            <input id="title" type="text" class="@error('title') is-invalid @enderror">
        </form>
                        </div>
                    @endif

                    {{ __('view client') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
