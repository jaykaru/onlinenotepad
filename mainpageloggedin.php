
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

    <title>My Notes</title>
    <style>
        #container {
            margin-top:150px;
        }
        #notepad,#allnotes,#done {
            display:none;
        }
        textarea {
           width:100%;
            max-width:100%;
            font-size:1.2em;
            border-left-width: 20px;
            border-color: #9456CD;
            line-height: 1.5em;
            color:darkred;
            background:#F8E5FF;
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
            <div>
                <button type="button" class="btn btn-info mb-3" id="addnote">Add Note</button>
                <button type="button" class="btn btn-info float-right" id="edit">Edit</button>
                <button type="button" class="btn green float-right" id="done">Done</button>
                <button type="button" class="btn btn-info" id="allnotes">All Notes</button>
            </div>
            <div id="notepad">
                <textarea class="px-4"rows="10"></textarea>
            </div>
            <div id="notes" class="notes">
    <!--  Ajax call to a php file          -->
            </div>
        </div>
    </div>
</div>



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


