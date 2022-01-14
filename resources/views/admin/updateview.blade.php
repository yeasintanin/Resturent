<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    @include("admin.adminCss");

  </head>
<body>
    <div class="container-scroller">
        @include("admin.nav");
    </div>

    <div style="position: relative; top:60px; right: -200px">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="exampleInputTitel">Titel</label>
                    <input style="color:blue"; type="text" name="title" value="{{$data->title}}" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Price</label>
                    <input style="color:blue"; type="num" name="price" value="{{$data->price}}" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">Old Image</label>
                    <image  hight="200" width="200" style="color:blue"; src="/foodimage/{{$data->image}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">New Image</label>
                    <input style="color:blue"; type="file" name="image" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <input style="color:blue"; type="text" name="description" value="{{$data->description}}" requird>
                </div>
                <input type="submit" value="save" class="btn btn-primary">
            </form>
            <br>
            <br>
        </div>
        <br>
        <br>

    <!-- container-scroller -->
    @include("admin.adminScript");
    <!-- End custom js for this page -->
</body>
</html>
