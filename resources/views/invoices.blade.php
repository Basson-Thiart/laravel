<!DOCTYPE html>
<html>

<head>
    <title>Invoices</title>
</head>

<body>
    <table>
        @foreach ($data as $item)
        <tr>
            <td>
                <h1>
                    ID {{ $item->id }}
                </h1>
            </td>
            <td>
                <h1>
                    : {{ $item->title }}
                </h1>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>