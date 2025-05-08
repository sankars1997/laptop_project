<div>@extends('layout.app')</div>

<!DOCTYPE html>
<html>
<head>
    <div >


    </div>
</head>

<div class="container">
<body>

    <table>
        <caption>in stock Laptop List</caption>
        <thead>
            <tr>
                <th>No</th>
                <th>Serial No</th>
                
                <th>Specifications</th>
                <th>Specifications</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($submitteds as $submitted)
            <tr>
                <td>{{$submitteds->firstItem()+ $loop->index}}</td>
                <td>{{ $submitted->Serial_no }}</td>
                <td>{{ $submitted->specifications }}</td>
                
                
                
            </tr>
            @endforeach
        </tbody>
    </table>
       
        
        <div class="page1">{{$submitteds->links()}}</div>
   
</body>
</div>
</html>