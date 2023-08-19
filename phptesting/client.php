<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client site</h1>
    <!-- GET | POST  -->
    <!-- post //form action && method=post  -->
    <!-- <a href="./server.php?name=sithu&job=programmer">send to server</a> -->
    <form action="./server.php"  enctype='multipart/form-data' method="post" >

        <input type="text" name="name" >
        <br>
        <input type="text" name="job" >
        <input type="file" name="myimage" >
        <button type="submit">click to send</button>
    </form>
</body>
</html>