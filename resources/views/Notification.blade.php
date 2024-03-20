<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>
    
            <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>PV</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notification as $item)
                <tr>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->Surname }} บาท</td>
                    <td>{{ $item->pv }} point</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    
</body>
</html>