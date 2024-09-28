@extends('layouts.default')

@section('content')

@foreach ($users as $user)
    {{$user->name}}<br>
@endforeach

@endsection