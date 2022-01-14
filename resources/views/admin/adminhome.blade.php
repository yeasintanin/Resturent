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

    <!-- container-scroller -->
    @include("admin.adminScript");
    <!-- End custom js for this page -->
  </body>
</html>
