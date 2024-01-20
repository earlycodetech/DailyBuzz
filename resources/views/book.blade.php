@extends('layouts.app')
@section('content')
    @if ('2' === 2)
        <p>Hello World</p>
    @elseif ('b' == 'b')
        <p>B is Equal</p>
    @else
        <p>This is else</p>
    @endif
@endsection


