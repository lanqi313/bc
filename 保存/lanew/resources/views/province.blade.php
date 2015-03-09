<html>
<head>
    <title>This  is   fuzhou  uin</title>
</head>
<body>
    <h1>This  is   fujian  uin</h1>
<table border = "1">
<tr>
    <td>uin</td>
    <td>nick</td>    
    <td>province</td>
    <td>city</td>
    <td>gin_gid</td>
</tr>
@foreach ($provinces  as $province)
<tr>
    <td align="left">{{$province->uin}}</td>
    <td align="left">{{$province->nick}}</td>
    <td align="left">{{$province->province}}</td>
    <td align="left">{{$province->city}}</td>
    <td align="left">{{$province->gin_gid}}</td>
</tr>
@endforeach
</table>
</body>
</html>