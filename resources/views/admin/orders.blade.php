<<<<<<< HEAD
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
=======

<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -150px">

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Customer ID</th>
                    <th style="padding: 30px">Order Date</th>
                    <th style="padding: 30px">Order Status</th>
                    <th style="padding: 30px">Total Amount</th>
                    <th style="padding: 30px">Action</th>

                </tr>

                @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->customer_id}}</td>
                        <td>{{$data->orderDate}}</td>
                        <td>{{$data->orderStatus}}</td>
                        <td>{{$data->totalAmount}}</td>
                        <td><a href="{{url('/deleteorder',$data->id)}}">Delete</a></td>
                    </tr>
                @endforeach

            </table>


        </div>


    </div>

</div>
@include("admin.adminscript")
>>>>>>> 4d61e85 (with admin panel)
</body>
</html>
