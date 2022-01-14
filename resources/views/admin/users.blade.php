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
        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->usertype=="0")
                        <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                        @else
                        <td><a >Not Allowed</a></td>
                        @endif
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
