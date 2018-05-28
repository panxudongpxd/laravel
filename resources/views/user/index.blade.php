<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表单页</title>
</head>
<body>
<form action="{{url('/user/insert')}}" method="post">
    {{csrf_field()}}
    姓名：<input type="text" name="uname"  value="{{old('uname')}}"><br>
    密码：<input type="password" name="pwd" value=""><br>
    手机号：<input type="text" name="phone" value="{{old('phone')}}"><br>
    选择文件：<input type="file" name="file">
    <input type="submit" value="提交">
</form>
<form action="{{url('/user/upload')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="pic">
    <input type="submit" value="提交">
</form>
</body>
</html>