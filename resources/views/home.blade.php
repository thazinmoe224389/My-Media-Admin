@extends('layouts.main')



@push('myJavaScript')

<script>
alert("hello world");
</script>

@endpush


@section('myContent')

<h1 style="color:red">This is home page</h1>

{{-- <a href="{{url('postTest')}}">Post method test</a>
<br> --}}


{{ $name }}
{!! $name !!}
{{ $lecture}}

<a href="{{url('resultPage/20/40')}}">URL</a>
<a href="{{route('myCalculation',[50,40])}}">Route</a>
<a href="{{route('passWithRoute')}}">Para Pass</a>

<br><br>

<img src="{{asset('image/profile.jfif')}}" width="300px">

@endsection

@section('footer')
<h1>This is footer testing</h1>
@endsection

