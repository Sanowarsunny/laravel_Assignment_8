<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>person</title>
</head>
<body>
    <h1>Created a Person</h1>
    <form action="/persons" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="Sunny">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="sanowr@gmail.com">

        <label for="image">Image</label>
        <input type="file" name="image" id="image">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
