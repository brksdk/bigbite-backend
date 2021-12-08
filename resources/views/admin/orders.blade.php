<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel Siparişler</title>
</head>
<body>

<table>
    <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Email</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->firstName}}</td>
        <td>{{$customer->lastName}}</td>
        <td>{{$customer->email}}</td>

    </tr>
    @endforeach

</table>
</body>
</html>
