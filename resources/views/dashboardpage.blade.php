@extends('layout.dashboard')

@section('content')
@switch($parameter)
    @case('sales')
    @include('compoenet.salestable')
    @break
    @case('inventory')
    @include('compoenet.inventory')
    @break
    @default
    @include('compoenet.salestable')
    @break
@endswitch


@endsection
