<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset("css/root.css")}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HMPD FKUB</title>
    <link rel="shortcut icon" type="image/png" href="{{asset("image/hmpd-icon.png")}}"/>
</head>

<body style="background-color:black">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">


    <div class="container">
        <div class="row" id="loginText">
            <h2 id="login" style="color:var(--color-red)">LOGIN</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-lg-5" id="loginBase">
                <form action="{{url("/login/send")}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="form-group">
                            <label for="inputEmail" id="labelText">Username</label>
                            <input type="text" name="username" class="form-control" id="inputEmail" placeholder="Eg. johndoe">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" id="labelText">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Eg. ********">
                        </div>
                        <div id="but">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

<script src="https://kit.fontawesome.com/5a91d5d98c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>
