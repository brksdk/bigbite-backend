
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -150px">

        <a href="{{route('categories.create')}}">Insert New Category</a>
        <br>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Category Name</th>
                    <th style="padding: 30px">Action</th>

                </tr>

                @foreach($categories as $category)
                    <tr align="center">

                        <td>{{$category->name}}</td>
                        <td><a href="{{route('categories.edit',$category->id)}}">Update</a></td>
                        <td><a href="{{route('categories.show',$category->id)}}">Delete</a></td>
                    </tr>
                @endforeach

            </table>


        </div>


    </div>

</div>
@include("admin.adminscript")
</body>
</html>
