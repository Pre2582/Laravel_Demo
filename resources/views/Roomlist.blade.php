<h1>DataBase Data view in list Form </h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Room_number</td>
        <td>description</td>
        <td>Available</td>
        <td>Status</td>
        <td>room_type_id</td>
        <td>Created_at</td>
        <td>update_at</td>
    </tr>
   @foreach ($rooms as $Room)
   <tr>
    <td>{{$Room['id']}}</td>
    <td>{{$Room['room_number']}}</td>
    <td>{{$Room['description']}}</td>
    <td>{{$Room['available']}}</td>
    <td>{{$Room['status']}}</td>
    <td>{{$Room['room_type_id ']}}</td>
    <td>{{$Room['created_at']}}</td>
    <td>{{$Room['updated_at']}}</td>
</tr>
       
   @endforeach
</table>