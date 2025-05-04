<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



@foreach($issuedItems as $item)
    <tr>
        <td>{{ $item->Serialno }}</td>
        <td>{{ $item->specifactions }}</td>
        <td>{{ $item->collegename }}</td>
        <td>{{ $item->issued_date }}</td>
        <td>
            <form action="{{ route('issued.move', $item->id) }}" method="POST">
                @csrf
                <button type="submit">Move to Submitted</button>
            </form>
        </td>
    </tr>
@endforeach









    
</body>
</html>