
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -150px">


        <form action="{{route('categories.destroy',$category->id)}}" method="post">
            @method('DELETE')
            @csrf

            <div>
                <label>Name</label>
                <input value="{{$category->name}}" disabled style="color:blue;" type="text" id="name" name="name" placeholder="Write a name" required>
            </div>

            <div>
                <input  type="submit" value="Delete">
            </div>


        </form>


    </div>

</div>
@include("admin.adminscript")
</body>
</html>
