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
    </div>
    <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Guest</th>
                        <th scope="col">Date </th>
                        <th scope="col">Time</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <th scope="row">{{$data->name}}</th>
                            <th scope="row">{{$data->email}}</th>
                            <th scope="row">{{$data->phone}}</th>
                            <th scope="row">{{$data->guest}}</th>
                            <th scope="row">{{$data->date}}</th>
                            <th scope="row">{{$data->time}}</th>
                            <th scope="row">{{$data->message}}</th>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    <!-- container-scroller -->
    @include("admin.adminScript");
    <!-- End custom js for this page -->
  </body>
</html>
