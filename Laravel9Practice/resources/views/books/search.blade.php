<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Book</title>
    <style type="text/css">
        div.list {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        table {
            margin-top: 20px;
        }
        a {
            margin-top: 20px;
            margin-left: 23%;
            text-decoration: none;
            font-size: 20px;
            color: Black;
            font-weight: 700;
            border: 1px solid lightgrey;
            padding: 4px;
            background-color: lightblue;
        }
        a:hover {
            color: Red;
        }
    </style>
</head>
<body>
    <div class="list">
        <form action="{{ route('search') }}" method="get">
            <label for="search">Enter Book Title</label>
            <input type="text" name="search" required/>
            <button type="submit">Search</button>
        </form>
        @if($books->isNotEmpty())
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Author ID</td>
                    <td>Title</td>
                    <td>ISBN</td>
                    <td>Publish Year</td>
                    <td>Available</td>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->authorid }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->pub_year }}</td>
                        <td>{{ $book->available }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <h2>No books found</h2>
        @endif
        <a href="/">Back To Home</a>
    </div>
</body>
</html>
