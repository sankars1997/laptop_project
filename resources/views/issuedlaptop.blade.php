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
            <th> No</th>
                <th>Serial No</th>
                
                <th>Specifications</th>
                <th>Specifications</th>
                <th>Specifications</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($issueds as $issue )
            <tr>
            <td>{{$issueds->firstItem()+ $loop->index}}</td>
                <td>{{ $issue->Serial_no }}</td>
                <td>{{ $issue->specifications }}</td>
                <td>{{ $issue->specifications }}</td>
                <td>{{ $issue->specifications }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="page2">{{$issueds->links()}}</div>
</body>
</div>
</html>