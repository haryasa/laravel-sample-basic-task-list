{{-- Define parent of this view --}}
@extends('layouts.master')

{{-- Define section that will be displayed in parent view via @yield directives --}}
@section('content')

  @include('tasks.create-form')

  @include('tasks.list')

@endsection