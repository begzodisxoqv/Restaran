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
      
        <form action="{{url('/uploadchefs')}}" method="Post" enctype="multipart/form-data"> 
          @csrf
         
          <div>
              <label>Name</label>
              <input  style=" color:black; " type="text" name="name" required="" placeholder="Entor Name">
          </div>

          <div>
              <label>speciality</label>
              <input  style=" color:black; " type="text" name="speciality" required="" placeholder="Entor the speciality">
          </div>

          <div>
            <input type="file" name="image" required="" > 
          </div>

          <div>
            <input style="color: black;" type="submit" value="Save">
          </div>
          
        </form>
<div>
        <table bgcolor="black"> 
            <tr>
              <th  style=" padding:30px; " >Name</th>
              <th style=" padding:30px; " >Speciality</th>
              <th style=" padding:30px; " >Image</th>
              <th style=" padding:30px; " >Action</th>
            </tr>
            @foreach($data as $data )
            <tr align="center" >
              <td>{{ $data->name }}</td>
              <td>{{ $data->speciality }}</td>
              <td> <img class="imageour" src="chefimage/{{$data->image}}" ></td>
              <td><a href="{{ url('/updatechef',$data->id) }}">Update</a></td>
           
            </tr>
            @endforeach
        </table>

        </div>

    
    </div>
      @include('admin.adminscript')
  </body>
</html>










<style>
  .imageour{
    height: 100px;
    width: 100px;
  }

  th{
    text-align: center;
  }
</style>