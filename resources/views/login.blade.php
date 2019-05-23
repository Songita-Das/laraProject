<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="{{route('post_login')}}">
    {{ csrf_field() }}
    <label>Email</label>
    <br>
    <input type="text" name="email">
    <br>
    <label>Password</label>
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" name="submit" value="submit">

</form>

</body>
</html>