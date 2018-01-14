<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" >
    attach file: <input type="file" name="attach_file" id="">
        content: <textarea name="content" id="" cols="30" rows="10">
        </textarea>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Submit</button>
    </form>
</body>
</html>