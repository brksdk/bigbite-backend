
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
<div class="container-scroller">
    @include("admin.nevbar")

    <div style="position: relative; top: 60px; right: -150px">


        <form action="{{route('categories.store')}}" method="post">
            @csrf

            <div>
                <label>Name</label>
                <input style="color:blue;" type="text" id="name" name="name" placeholder="Write a name" required>
            </div>

            <div>
                <input  type="submit" value="Save">
            </div>


        </form>


    </div>

</div>
@include("admin.adminscript")
</body>
</html>
