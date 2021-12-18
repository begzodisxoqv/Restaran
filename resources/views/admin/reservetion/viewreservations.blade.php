<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.adminhead') 
  </head>
  <body>
  <div class="container-scroller">
      @include('admin.navbar')
    
        <div style=" position: relative; top: 20px; right: 100;" >
          <table bgcolor="grey" border="1px" >
            <tr>
              <th style="padding: 30px;" >Name</th>
              <th style="padding: 30px;">Email</th>
              <th style="padding: 30px;">Phone</th>
              <th style="padding: 30px;">Guest</th>
              <th style="padding: 30px;">Date</th>
              <th style="padding: 30px;">Time</th>
              <th style="padding: 30px;">Message</th>
            </tr>

          @foreach($data as $d)
            <tr align="center">
              
              <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->phone}}</td>
                <td>{{$d->guest}}</td>
                <td>{{$d->date}}</td>
                <td>{{$d->time}}</td>
                <td>{{$d->message}}</td>
              
            </tr>
            @endforeach
          </table>
        </div>


    </div>
      @include('admin.adminscript')
  </body>
</html>