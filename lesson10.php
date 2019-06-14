<?php
//validating email and web url and names
$name = $_POST['myname'];
$email = $_POST['email'];
$url = $_POST['url'];
$imgurl=$_POST['imgurl'];


if(empty($name)){
    $nameError = "Field is empty";
    echo $nameError;
}else{
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
}else {
    echo"your name is $name";
}
}




if(empty($email)){
    $emailErr = "Email cannot be empty";

}else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr="Invalid email format";
    }else{
        echo"Email is invalid";
    };





if(empty($url)) {
    $urlErr = "url cannot be empty";
    echo $urlError;
}else {

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $urlErr = "Invalid url format";
        echo $urlError;
    } else {
        echo "url is invalid";

    };
}





    if(empty($imgurl)) {
        $imgurlErr = "url cannot be empty";
        echo $urlError;
    }else {

        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $imgurlErr = "Invalid url format";
            echo $imgurlError;
        } else {
            echo "imgurl is invalid";

        };
    }





}



?>

<html>
<head>
    <title> Php name, Email ad URL validation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</head>
<body>
<div style="justify-content:center">
    <img src="<?php echo $_POST['imgurl']?>">

</div>

<div class="justify-content:center">


    <form action="" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="myname" class="form-control">

    </div>
        <br>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">

        </div>
        <br>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" class="form-control">

        </div>

</div>

<div class="form-group">
    <label for="imgurl">IMGURL</label>
    <input type="text" name="url" class="form-control">

</div>


<div class="form-group">
    <label for="imgurl">IMGURL</label>
    <input type="text" name="imgurl" class="form-control">

</div>

<div class="form-group">
    <button name="submit" class="btn btn-primary">Submit</button>






</form>
</div>
</body>

</html>
