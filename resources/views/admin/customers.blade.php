
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -60px">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 30px">First Name</th>
                <th style="padding: 30px">Last Name</th>
                <th style="padding: 30px">E-Mail</th>
                <th style="padding: 30px">password</th>
                <th style="padding: 30px">Phone Number</th>
                <th style="padding: 30px">Action</th>
            </tr>

            @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->firstName}}</td>
                    <td>{{$data->lastName}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>{{$data->phoneNumber}}</td>
                    <td><a href="{{url('/deletecustomer',$data->id)}}">Delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>

</div>
@include("admin.adminscript")
</body>
</html>
