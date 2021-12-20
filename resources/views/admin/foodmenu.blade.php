
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -150px">

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label>Title</label>
                <input style="color:blue;" type="text" name="name" placeholder="Write a name" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color:blue;" type="num" name="price" placeholder="price" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <label>Description</label>
                <input style="color:blue;" type="text" name="ingredients" placeholder="Description" required>
            </div>
            <div>
                <label>Category</label>
                <select style="color:#000000;" name="category" id="category">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input  type="submit" value="Save">
            </div>


        </form>

        <div>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Food Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Category</th>
                    <th style="padding: 30px">Action</th>

                </tr>

                @foreach($data as $data)
                <tr align="center">

                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}₺</td>
                    <td>{{$data->ingredients}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td>{{$data->category->name}}</td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

                </tr>
                @endforeach

            </table>


        </div>


    </div>

</div>
@include("admin.adminscript")
</body>
</html>
