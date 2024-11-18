<!DOCTYPE html>
<html>

<head>
    <title>Price List</title>
</head>

<body>
    <h1>List of Prices</h1>
    <table>
        @foreach ($data as $item)
        <tr>
            <td>
                ID {{ $item->id }}
            </td>
            <td>
                : {{ $item->price }}
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>