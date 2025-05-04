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
        <caption>issuedLaptop List</caption>
        <thead>
            <tr>
                
                <th>Serial No</th>
                
                <th>Specifications</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($issueds as $issue )
            <tr>
                <td>{{ $issue->Serial_no }}</td>
                <td>{{ $issue->specifications }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
   
</body>
</div>
</html>