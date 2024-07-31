@extends('layouts.master')

@section('title')
    Dashboard Member
@endsection

@section('content')
    <h2>
        Hi member - {{ Auth::user()->name }}
    </h2>
    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit" class="btn btn-info">Logout</button>
    </form>
@endsection
