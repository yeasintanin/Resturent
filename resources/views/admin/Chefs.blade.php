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
            <form action="{{url('/uploadchefs')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="exampleInputTitel">Name</label>
                    <input style="color:blue"; type="text" name="name" placeholder="Name" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Specialty</label>
                    <input style="color:blue"; type="num" name="specialty" placeholder="Specialty" requird>
                </div>
                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input style="color:blue"; type="file" name="image" requird>
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
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Specialty</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td><img hight="200" width="100" src="/chefsimage/{{$data->image}}"></td>
                            <td>{{$data->Specialty}}</td>
                            <td><a href="{{url('/deletechefs',$data->id)}}">Deleted</a></td>
                            <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
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
