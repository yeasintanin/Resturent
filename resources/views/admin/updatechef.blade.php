<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

  <head>
    @include("admin.adminCss");
    <base href="/public">
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.nav");

        <div style="position: relative; top:60px; right: -200px">
            <form action="{{url('/updatechefs',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="exampleInputTitel">Name</label>
                    <input style="color:blue"; type="text" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Specialty</label>
                    <input style="color:blue"; type="num" name="specialty" value="{{$data->Specialty}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">Old Image</label>
                    <image  hight="200" width="200" style="color:blue"; src="/chefsimage/{{$data->image}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">New Image</label>
                    <input style="color:blue"; type="file" name="image" requird>
                </div>
                <input type="submit" value="save" class="btn btn-primary">
            </form>
            <br>
            <br>
        </div>
        <br>
        <br>
    </div>

    <!-- container-scroller -->
    @include("admin.adminScript");
    <!-- End custom js for this page -->
  </body>
</html>
