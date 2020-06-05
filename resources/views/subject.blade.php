@extends('layouts.app')

@section('content')
<div class="container">
    <form  method="post">
        @csrf
        <label for="1">Subject</label>
        @if ($subject ?? '')
    <input type="text" id="1" class="form-control" name="subject" value = "{{$subject -> subject}}">
    <br>
    <br>
    <input type="submit" value = "Update" class = "btn  btn-block" style = "color:black;background-color:pink;font-size:25px;">
        @else
        <input type="text" id="1" class="form-control" name="subject">
        <br>
        <br>
        <input type="submit" value = "Add +" class = "btn  btn-block" style = "color:black;background-color:pink;font-size:25px;">
        @endif
    <input type="hidden" id="2" class="form-control" name="uid" value="{{ Auth::user()->id}}">

    </form>
</div>
@endsection
