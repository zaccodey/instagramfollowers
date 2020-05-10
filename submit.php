
<?php

include('database.php');

$name =$_POST['name'];
$emailid =$_POST['emailid'];
$phonenumber =$_POST['phonenumber'];
$username =$_POST['username'];
$password =$_POST['password'];

// echo $_POST['username'];exit();

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO followers (name, emailid, phonenumber, username,password)
VALUES ('".$name."','".$emailid."','".$phonenumber."','".$username."','".$password."')";

if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}






?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <title>]Get Free Instagram Followers, The Easy Way</title>

    <style>
       .example button {
  float: left;
  background-color: #4E3E55;
  color: white;
  border: none;
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  font-weight: 600;
  border-radius: 3px;
  padding: 15px 35px;
  margin: 26px 5px 0 5px;
  cursor: pointer; 
}
.example button:focus{
  outline: none; 
}
.example button:hover{
  background-color: #33DE23; 
}
.example button:active{
  background-color: #81ccee; 
}


        body {
            background: rgb(82, 85, 241);
            background: -moz-linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            background: -webkit-linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            background: linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#5255f1", endColorstr="#f6274f", GradientType=1);
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Montserrat';
        }

        .btn-primary {
            background: rgb(82, 85, 241);
            background: -moz-linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            background: -webkit-linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            background: linear-gradient(48deg, rgba(82, 85, 241, 1) 2%, rgba(246, 39, 79, 1) 95%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#5255f1", endColorstr="#f6274f", GradientType=1);
            border: 2px solid #ffffff;
            border-radius: 10px;
        }

        input,
        button,
        .form-control,
        select {
            border-radius: 10px;
            min-height: 55px;
            height: auto !important;
            border: 0;
        }

        .slick-slide img {
            display: inline-block;
        }

        .slick-next {
            right: -7px;
        }

        .slick-prev {
            left: -7px;
        }

        .slick-arrow {
            z-index: 10;
        }

        .slick-arrow::before {
            font-size: 25px;
            opacity: 1;
        }

        @media (max-width:767px) {

            .h1,
            h1 {
                font-size: 1.5rem;
            }

            .logo img {
                width: 20%;
            }

            .testimonial h3 {
                font-size: 1.3rem;
            }

            input,
            button,
            .form-control,
            select {
                border-radius: 8px;
                min-height: 45px;
                height: auto !important;
                border: 0;
                padding: 8px 15px !important;
                font-size: 17px;
            }

            .form-control,
            select {
                padding: 11px 11px !important;
                overflow: hidden;
            }

            .slick-arrow {
                padding: 0 !important;
            }

            .btn-primary.btn-block.p-3 {
                padding: 0.6rem !important;
            }
        }
    </style>
</head>

<body>
<center><img src="img/1.png"></center>

</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
    <script>
        $('.slider-t').slick();
    </script>

<script>
    document.getElementById('b1').onclick = function()
{
    swal("Thank you your request has been submitted!");
};
</script>


</body>

</html>

