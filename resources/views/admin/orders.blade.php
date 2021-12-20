
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
</body>
</html>
