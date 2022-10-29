@extends('layouts.app')

@section('content')
<center>
    <form class="col-6 ml-105 mr-105 mb-10" method="POST" action="{{ route('diagnosa.store') }}">
        @csrf
        @foreach($gejalas as $gejala)
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text mt-1">
                    <input type="checkbox" aria-label="Checkbox for following text input" value="1" name="gejala[{{ $gejala->kode }}]">
                </div>
            </div>
            <input type="text" class=" border-0 form-control bg-transparent" aria-label="Text input with checkbox" value="{{ $gejala->keterangan }}" readonly>
        </div>
        @endforeach
        <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="submit">
    </form>
</center>
@endsection
