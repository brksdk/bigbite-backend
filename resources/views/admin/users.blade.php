
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
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="1")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>

                    @else
                    <td><a >Not allowed</a></td>
                    @endif
            </tr>
            @endforeach
        </table>
    </div>

    </div>
@include("admin.adminscript")
</body>
</html>
