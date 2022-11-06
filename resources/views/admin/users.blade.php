<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss")
    
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: relative; top: 60px; right: -60px">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->usertype=="0")

                <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>

                @else

                <td>Not Allowed</td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>

    </div>
    @include("admin.adminjs")

  </body>
</html>