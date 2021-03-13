<h1> User sample form</h1>

<form action="forms" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter user name" /><br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="number" name="usernumber" placeholder="Enter your contact" /><br>
    <span style="color: red">@error('usernumber'){{$message}}@enderror</span>
    <br>
    <input type="email" nmae="useremail" placeholder="Enter email"/> <br>
    <span style="color: red">@error('useremail'){{$message}}@enderror</span>
    <br>
    <input type="password" name="userpassword" placeholder="Enter your password" /><br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <br>
    <button type="submit">submit</button>
</form>