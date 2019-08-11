<link rel="stylesheet" type="text/css" href="navbar.css">
<script type="text/javascript" src="navbar.js"></script>
<nav class="mb-1 pt-2 pb-2 navbar navbar-expand-lg navbar-dark nav-color">
    <a class="navbar-brand" href="dashboard.php"><img src="logo2.png" class="img-responsive mr-2" style="height:7%; border-radius:50%;"/>Helping Nation</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarSupportedContent-4" style="">
        <ul class="navbar-nav ml-auto"> 
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="./index.php" onclick="check(0)">
                    <i class="fa fa-home"></i> Dashboard
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="./dashboard.php" onclick="check(1)">
                <i class="fa fa-users"></i> People In Need
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="./affected.php" onclick="check(2)">
                <i class="fa fa-user"></i> Report Affected People
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="./contributors.php" onclick="check(3)">
                <i class="fa fa-users"></i> Contributors
                </a>
            </li>
        </ul>
    </div>
</nav>	