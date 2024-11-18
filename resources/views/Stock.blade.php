<!DOCTYPE html>
<html>

<head>
    <title>Stocks</title>
</head>

<body>
    <h1>List of Stocks</h1>
    <table>
        @foreach ($data as $item)
        <tr>
            <td>
                ID {{ $item->id }}
            </td>
            <td>
                : {{ $item->artikelkode }}
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>