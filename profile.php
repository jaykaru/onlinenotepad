
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <!--  Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

    <title>Profile Page</title>
    <style>
        #container {
            margin-top:150px;
        }
       tr {
           cursor:pointer;
       }

    </style>
</head>
<body>
<!--Navigation bar -->

<nav class="navbar navbar-expand-sm bg-dark navbar-custom fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">logo</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">My Notes</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li><a class="nav-link" href="#">Logged in as <b>username</b></a></li>
                <li><a class="nav-link" href="#">Log out</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="container" id="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <h2>General Account Settings: </h2>
            <div class="table-responsive-md">
                <table class="table table-hover table-bordered table-sm">
                    <tbody>
                        <tr data-target="#updateUsernameModal" data-toggle="modal">
                            <td>UserName</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updateEmailModal" data-toggle="modal">
                            <td>Email</td>
                            <td>value</td>
                        </tr>
                        <tr data-target="#updatePasswordModal" data-toggle="modal">
                            <td>Password</td>
                            <td>hidden</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--update username Form -->

<form metho="post" id="updateUsernameForm">
    <!-- Modal -->
    <div class="modal fade" id="updateUsernameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Username:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--  Login   Messaing from PHP file -->
                    <div id="LoginMessage"></div>

                    <div class="form-group">
                        <label for="username">Username:</label>
                                                                                <!-- username value fetch from database  -->
                        <input type="text"  class="form-control" maxlength="30" name="username" id="username" value="username value">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="updateusername" class="btn green " value="Submit">
                    <button type="button" class="btn btn-light " data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!--update email Form -->

<form metho="post" id="updateemailForm">
    <!-- Modal -->
    <div class="modal fade" id="updateEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit New Email:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--  Login   Messaing from PHP file -->
                    <div id="LoginMessage"></div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                                                                <!-- Email value fetch from database  -->
                        <input type="email"  class="form-control" maxlength="50" name="email" id="email" value="email value">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="updateemail" class="btn green " value="Submit">
                    <button type="button" class="btn btn-light " data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!--update password Form -->

<form metho="post" id="updatepasswordForm">
    <!-- Modal -->
    <div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter Current and New password:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--  Login   Messaing from PHP file -->
                    <div id="LoginMessage"></div>

                    <div class="form-group">
                        <label for="currentpassword" class="sr-only">Current Password</label>
                        <!-- current password value fetch from database  -->
                        <input type="password"  placeholder="Your Current Password" class="form-control" maxlength="30" name="currentpassword" id="currentpassword">
                    </div>
                    <div class="form-group">
                        <label for="password1" class="sr-only">Choose a  Password</label>
                        <!-- current password value fetch from database  -->
                        <input type="password"  placeholder="Choose a password" class="form-control" maxlength="30" name="password1" id="password1">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="sr-only">Confirm Password</label>
                        <!-- current password value fetch from database  -->
                        <input type="password"  placeholder="Confirm password" class="form-control" maxlength="30" name="password2" id="password2">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="updateusername" class="btn green " value="Submit">
                    <button type="button" class="btn btn-light " data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>



<!--Footer -->
<div class="footer text-center pt-3">
    <div class="container">
        <p>Jay karu copyright&copy; 2018-<?php $today= date('Y'); echo $today; ?>.</p>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


