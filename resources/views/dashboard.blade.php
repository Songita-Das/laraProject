<html>
<head>
    <title>

    </title>
</head>
<body>
<h3>DASHBOARD</h3>
<ul>
    <li><a href="#">ALL teacher</a></li>
    <li><a href="#">ADD teacher</a></li>
    <li><a href="#">ALL departments</a></li>
    <li><a href="#">ADD teacher</a></li>
    @if(Session::get('userrole')=='student')
    <li><a href="#">Take ct marks</a></li>
        @endif
</ul>
</body>
</html>