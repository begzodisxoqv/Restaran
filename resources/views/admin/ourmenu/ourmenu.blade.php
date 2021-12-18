<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

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
							 <div>
										<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
												@csrf

												<div>
														<label>Title</label>
														<input style="color: black;" type="text" name="title" placeholder="Write a title" required>
												</div>

												<div>
														<label>Price</label>
														<input style="color: black;"type="num" name="price" placeholder="price" required>
												</div>

												<div>
														<label>Image</label>
														<input type="file" name="image"  required>
												</div>

												<div>
														<label>Description</label>
														<input style="color: black;"type="text" name="description" placeholder="Description" required>
												</div>

												<div>
														<input style="color:black" type="submit" value="Save">
												</div>

								 </form>

								<div>
									 <table  bgcolor="black">
                                            <tr>
                                                <th style="padding: 50px">FoodName</th>
                                                <th style="padding: 50px">Price</th>
                                                <th style="padding: 50px">Description</th>
                                                <th style="padding: 50px">Image</th>
                                                <th style="padding: 50px">Action</th>
                                                <th style="padding: 50px">Action2</th>
                                            </tr>
                                            @foreach($data as $data)
                                            <tr style="border-bottom: 1px solid blue;" align="center">
                                                <td>{{ $data->title }}</td>
                                                <td>{{ $data->price }}</td>
                                                <td>{{ $data->description}}</td>
                                                <td><img style="height:200px; width: 200px; padding: 6px;" src="ourmenuimage/{{ $data->image  }}"></td>
                                                <td><a href="{{ url('/deletemenu',$data->id) }}"> Delete</a></td>
                                                <td><a href="{{ url('/updateview',$data->id) }}"> Updata</a></td>
                                                </tr>
										 @endforeach
									 </table>
								</div>
								
							</div>
							@include('admin.adminscript')
				</body>
			</html>

</body>
</html>