<div>@extends('layout.app')</div>

<!DOCTYPE html>
<html>
<head>
    <style>
       
    </style>
</head>
<body>

    <table>
        <caption>Laptop List</caption>
        <thead>
            <tr>
                
                <th>Serial No</th>
                
                <th>Specifications</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($laptops as $laptop )
            <tr>
                <td>{{ $laptop->Serial_no }}</td>
                <td>{{ $laptop->specifications }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
