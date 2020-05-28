  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <title></title>
      <style media="screen">
        body{
          color:whitesmoke;
          background-color:black;
        }
      </style>
    </head>
    <body><center><h1>💝 Babe Putu's Study Record 💝</h1></center>

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

    </body>
  </html>
