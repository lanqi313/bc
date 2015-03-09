<html>
<head>
    <title>This  is   fuzhou  uin</title>
</head>
<body>
    <h1>This  is   fuzhou  uin</h1>
<table border = "1">
<tr>
    <td>uin</td>
    <td>nick</td>    
    <td>province</td>
    <td>city</td>
    <td>gin_gid</td>
</tr>
@foreach ($minfos  as $minfo)
<tr>
    <td align="left">{{$minfo->uin}}</td>
    <td align="left">{{$minfo->nick}}</td>
    <td align="left">{{$minfo->province}}</td>
    <td align="left">{{$minfo->city}}</td>
    <td align="left">{{$minfo->gin_gid}}</td>
</tr>
@endforeach
</table>
</body>
</html>