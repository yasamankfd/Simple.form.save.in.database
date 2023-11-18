<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <h1>creating a new user</h1>
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('add.user')}}">
            @csrf
            @method('post')
            <input type="text" name="name" placeholder="name">
            <input type="text" name="lastname" placeholder="last name"/>
            <input type="text" name="pass" placeholder="password"/>
            <button type="submit">Submit</button>
        </form>
        </div>
</div>
</body>
</html>
