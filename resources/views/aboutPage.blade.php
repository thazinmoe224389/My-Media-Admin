@extends('layouts.main')

@section('myContent')

<h1 style="color:red">This is about page</h1>



{{ $num1 }} + {{ $num2 }} = {{ $num1 + $num2}}

<hr>
@php
echo date("d/m/Y");
@endphp

@if (true)

<h1> This is true status</h1>

@elseif (false)

<h1>This is else if status</h1>
<h2>Else</h2>

@endif

<hr>

@for ($i = 0 ; $i < count($fruits) ; $i++)

<h1>This is {{$fruits[$i]}}</h1>

@endfor

<hr>

@foreach ($fruits as $f )

<h3>{{$f}}</h3>

@endforeach




@endsection