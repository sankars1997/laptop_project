 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laptop List</title>
    @extends('layout.app')
    @if(session('message'))
    <script>
        alert("{{ session('message') }}");
    </script>
@endif

    <style>
        form {
            margin-bottom: 20px; /* Space below search box */
        }
        .table {
            width: 50%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>

    <form action="{{ route('welcome') }}" method="get">
        <input type="search" placeholder="Search..." name="searchinput" />
        <button type="submit">→</button>
    </form>

    <div class='roww'>
        @if(request()->has('searchinput'))
            @if(isset($results) && $results->isNotEmpty())
            <div>
                <table class="table">
                    
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Specifications</th>
                            <th>Specifications</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $laptop)
                            <tr>
                                <td>{{ $laptop->Serial_no }}</td>
                                <td>{{ $laptop->specifications }}</td>
                                <td>{{ $laptop->specifications }}</td>
                                <td>
                                    @if($laptop->active == 1)
                                        <a href="{{ route('issued', $laptop->Serial_no) }}" class="btn btn-primary">Issue</a>
                                    @else
                                        <a href="{{ route('submitted', $laptop->Serial_no) }}" class="btn btn-primary">Return</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            @else
                <p>No laptops found.</p>
            @endif
        @endif
    </div>

</body>
</html>
