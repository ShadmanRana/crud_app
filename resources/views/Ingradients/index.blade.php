@extends('Layouts.layout')
@section('title')
    <title>Ingradient</title>
@endsection
@section('body')

       @foreach ($ingradients as $ingradient)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                {{$ingradient->name}}
                            </span>
                        @endforeach
                        @endsection