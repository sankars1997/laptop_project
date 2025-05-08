
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
    <h2>Issue Device Form</h2>
    <form action="{{route('save')}}" method="get">  
        @csrf

      <div class="form-group">
        <label for="Serial_no">Serial Number</label>
        <input type="text"  name="Serial_no" id="Serial_no" value="" class="form-control" >
      </div>
      <div class="form-group">
        <label for="specifications">Specifications</label>
        <input type="text"  name="specifications" id="specifications"  value="" class="form-control" >
      </div>
      <div class="form-group">
        <label for="returned_date"> Date</label>
        <input type="date" id="returned_date" name="returned_date" value="" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>












    
</body>
</html>