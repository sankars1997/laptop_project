@extends('layout.app') 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

<form action="{{ route('welcome') }}" method="get">
  <input type="search" placeholder="Search..." name="searchinput" />
  <button type="submit">→</button>
</form>


@if(isset($results) && $results->isNotEmpty())

  <table class="table">
      <caption>Laptop List</caption>
      <thead>
          <tr>
              <th>Serial No</th>
              <th>Specifications</th>
              
          </tr>
      </thead>
      <tbody>
          @foreach($results as $laptop)
              <tr>
                  <td>{{ $laptop->Serial_no }}</td>
                  <td>{{ $laptop->specifications }}</td>
                  @if($laptop->active == 1)
                      <td><a href="{{route('issued')}}" class="btn btn-primary">Issue</a></td>
                  @else
                      <td><a href="#" class="btn btn-primary">Return</a></td>
                  @endif
              </tr>
          @endforeach
      </tbody>
  </table>
@else
  <p>No laptops found.</p>
@endif

</body>
</html>

