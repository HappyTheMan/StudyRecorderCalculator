  @extends('home')

    @section('content1')
  <center><h1>💝 Babe Putu's Study Records 💝</h1></center>

      <div class="container">
        <form method="post">
          @csrf
          @foreach($records as $record)
          <div class="form-group">
            <label for="{{ $record['id'] }}">{{ $record['Subject'] }}</label>
            <input type="number" class="form-control" value="{{ $record['Hour'] }}" min="0" max="100" id = "{{ $record['id'] }}" name = "hour{{ $record['id']}}">
          </div>
          @endforeach
          <div class="form-group">
          <label for="11">Price Per Hour</label>
          <input type="number" class="form-control" value="" min="0" max="100000" id = "11" name = "price">
        </div>
        <br>
          <input type="submit" value = "Record" class = "btn  btn-block" style = "color:black;background-color:pink;font-size:25px;">
          @if($totalHour ?? '')
          <label for="13">Total Hour</label>
          <input type="number" class="form-control" value="{{ $totalHour }}" min="0" max="100000" id = "13"  readonly>

          <label for="14">Total Price</label>
          <br>
          <br>
          <input type="text" class="form-control" value="{{ $price * $totalHour }} Kyats"  id = "14"  readonly>
          @endif
        </form>
        <br>
        <br>
        <center>
          <p>Developed by Koko putu for 💝 Babe putu (Thel Thel) 💝</p>
        </center>

      </div>
      @endsection
