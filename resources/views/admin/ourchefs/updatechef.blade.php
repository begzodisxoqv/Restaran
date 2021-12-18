<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
      @include('admin.adminhead') 
  </head>
  <body>
  <div class="container-scroller">
      @include('admin.navbar')

         @foreach($data->$d)
        {{ $d->name }}
    
         @endforeach
    </div>
      @include('admin.adminscript')
  </body>
</html>