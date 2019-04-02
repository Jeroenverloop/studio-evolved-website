@extends('layouts.app')
@section('title', 'Home page')
@section('third-party')
@endsection

@section('sidebar') @parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>This is my body content.</p>
@endsection
