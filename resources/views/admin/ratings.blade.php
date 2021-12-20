
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
                    <th style="padding: 30px">Menu ID</th>
                    <th style="padding: 30px">Score</th>
                    <th style="padding: 30px">Created At</th>
                    <th style="padding: 30px">Remarks</th>

                </tr>

                @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->customer_id}}</td>
                        <td>{{$data->menu_id}}</td>
                        <td>{{$data->score}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->remarks}}</td>
                    </tr>
                @endforeach

            </table>


        </div>


    </div>

</div>
@include("admin.adminscript")
</body>
</html>
