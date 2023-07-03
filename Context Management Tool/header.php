<!DOCTYPE html> 
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ME CMT</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM' crossorigin='anonymous'>
<body>
    <header>
    <?php @session_start();
        if(isset($_SESSION['uname'])&& $_SESSION['utype']=='admin'){
            $name = $_SESSION['uname'];
            print("
            <nav class='navbar navbar-expand-lg bg-body-tertiary' style='position: fixed; left:0; top: 0; width: 100%; z-index: 3;'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='admin.php'>ME CMT</a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='admin.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='#'>Blog</a>
                    </li>
                    <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        More
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='#'>Categories</a></li>
                        <li><a class='dropdown-item' href='#'>Archives</a></li>
                        <li><a class='dropdown-item' href='#'>About</li>
                        <li><a class='dropdown-item' href='#'>Contact</a></li>
                    </ul>
                    </li>    
                   
                    
                </ul>
                <form class='d-flex' role='search'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                </form>
                </div>
            </div>
        </nav>    
            ");
        }
        else{
            if(isset($_SESSION['uname'])&& $_SESSION['utype']=='user'){
                $login = "<li class='nav-item'>
                <a class='nav-link' href='logout.php'>Logout</a>
                </li>";
                $name = $_SESSION['uname'];
            }
            else{
                $login = "<li class='nav-item'>
                <a class='nav-link' href='login.php'>Login</a>
                </li>";
                $name = "";
            }
            print("
            <nav class='navbar navbar-expand-lg bg-body-tertiary'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='index.php'>ME CMT</a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='index.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                    <a class='nav-link' href='#'>Blog</a>
                    </li>
                    <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        More
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='#'>Categories</a></li>
                        <li><a class='dropdown-item' href='#'>Archives</a></li>
                        <li><a class='dropdown-item' href='#'>About</li>
                        <li><a class='dropdown-item' href='#'>Contact</a></li>
                    </ul>
                    </li>
                    $login
                    
                </ul>
                <form class='d-flex' role='search'>
                    <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                    <a class='nav-link ' style='font-weight: 700' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                        $name
                    </a>
                    </ul>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                </form>
                </div>
            </div>
        </nav>    
            ");
        }
    ?>
    </header>
