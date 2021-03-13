<h1> This is image list </h1>

<table border="1">
    <tr>
        <td>id </td>
        <td>name</td>
        <td>caption</td>
        <td>is_primary</td>
        <td>status</td>
        <td>room_type_id</td>
        <td>created_at</td>
        <td>updated_at</td>
    </tr>
    @foreach ($Images as $image)
    <tr>
    <td>{{$image['id']}}</td>
    <td>{{$image['name']}}</td>
    <td>{{$image['caption']}}</td>
    <td>{{$image['is_primary']}}</td>
    <td>{{$image['status']}}</td>
    <td>{{$image['room_type_id']}}</td>
    <td>{{$image['created_at']}}</td>
    <td>{{$image['updated_at']}}</td>
</tr>
    @endforeach
</table>

<span>
    {{$Images->links()}}
</span>

<style>
 .w-5{
     display: none
 }   
</style>