@extends('layout.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="container mt-5">
    <h2>Return Form</h2>
    <form action="{{route('movetosubmitteds')}}" method="get">  
        @csrf

      <div class="form-group">
        <label for="Serial_no">Serial Number</label>
        <input type="text"  name="Serial_no" value="{{$laptop->Serial_no}}" class="form-control" readonly>
      </div>
      <div class="form-group">
        <label for="specifications">Specifications</label>
        <input type="text"  name="specifications"  value="{{$laptop->specifications}}" class="form-control" readonly>
      </div>
      <div class="form-group">
        <label for="college_name">College Name</label>
        <input type="text" id="college_name" name="college_name" value="{{$laptop->college_name}}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="returned_date">Returned Date</label>
        <input type="date" id="returned_date" name="returned_date" value="" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Returned</button>
    </form>
  </div>












    
</body>
</html>