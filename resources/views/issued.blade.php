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
    <form action="{{ route('issued') }}" method="get">  
        @csrf

      <div class="form-group">
        <label for="serial_no">Serial Number</label>
        <input type="text"  name="" class="form-control" readonly>
      </div>
      <div class="form-group">
        <label for="specifications">Specifications</label>
        <input type="text"  name="" class="form-control" readonly>
      </div>
      <div class="form-group">
        <label for="college_name">College Name</label>
        <input type="text" id="college_name" name="college_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="issued_date">Issued Date</label>
        <input type="date" id="issued_date" name="issued_date" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Issued</button>
    </form>
  </div>












    
</body>
</html>