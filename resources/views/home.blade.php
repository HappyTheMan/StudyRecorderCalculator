@extends('layouts.app')

@section('content')
<center>
    <h1>💝StudyRecords💝</h1>
</center>
<br>
<div class="container">
    @if(count($records) != 0)
        <form method="post">
            @csrf
            @foreach($records as $record)
            <div class="form-group">
            <label
            for="{{ $record['id'] }}">{{ $record['subject'] }} (Hour : Minute)</label>
                        <div class=" input-group mb-3">
                            <input type="number" class="form-control col-lg-10 col-sm-12" value="{{ $record['hour'] }}"
                            min="0" max="1000" id="{{ $record['id'] }}"

                        name="hour[]">
                        <input type="number" class="form-control col-lg-10 col-sm-12" value="{{ $record['minute'] }}"
                        min="0" max="60" id="{{ $record['id'] }}"
                        name="min[]">
                        <div class="input-group-append">

                            <button class="btn btn-info btn-lg"><a href="update/{{$record['id']}}" class="" style="color:white;text-decoration:none;">Update</a></button>
                        </div>
                        <a href="delete/{{$record['id']}}" style="text-decoration: none;"><span class="col-lg-1 col-sm-1" style="font-size: 30px;">⛔</span></a>
                </div>
            </div>
            @endforeach

            <div class="form-group">
                <label for="11">Price Per Hour</label>
                <input type="number" class="form-control" value="" min="0" max="100000" id="11" name="price">
            </div>
            <br>
            <input type="submit" value="Record" class="btn  btn-block"
                style="color:black;background-color:pink;font-size:25px;">
            @if($totalHour ?? '')
            <br>
            <div class="form-group">

                <label for="13">Total Hour</label>
                <input type="number" class="form-control" value="{{ $totalHour }}" min="0" max="100000" id="13"
                    readonly>

                </div>
                <div class="form-group">

                    <label for="13">Total Minute</label>
                    <input type="number" class="form-control" value="{{ $totalMinute }}" min="0" max="100000" id="13"
                        readonly>
                    </div>
                <label for="14">Total Price</label>

                <input type="text" class="form-control" value="{{ (int)($price * ($grandMinute / 60)) }} Kyats" id="14" readonly>
            @endif
            <br>
            <br>


        </form>
    @endif
    <center><a href="subject" style="text-decoration: none;color:black"><button href="subject" class="btn"
                style="color: black; background-color: lightblue">+ Add New Subject +</button></a></center>


</div>
@endsection
