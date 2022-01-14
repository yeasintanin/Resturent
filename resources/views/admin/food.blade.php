<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

  <head>
  @include("admin.adminCss");
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.nav");
        <div style="position: relative; top:60px; right: -200px">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="exampleInputTitel">Titel</label>
                    <input style="color:blue"; type="text" name="title" placeholder="Title" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Price</label>
                    <input style="color:blue"; type="num" name="price" placeholder="Price" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input style="color:blue"; type="file" name="image" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <input style="color:blue"; type="text" name="description" placeholder="Description" requird>
                </div>
                <input type="submit" value="save" class="btn btn-primary">
            </form>
            <br>
            <br>
        </div>
        <br>
        <br>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>
                            <td><img hight="200" width="100" src="/foodimage/{{$data->image}}"width:1000px></td>
                            <td>{{$data->description}}</td>
                            <td><a href="{{url('/deletefood',$data->id)}}">Deleted</a></td>
                            <td><a href="{{url('/updatefood',$data->id)}}">Update</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- container-scroller -->
    @include("admin.adminScript");
    <!-- End custom js for this page -->
  </body>
</html>
