<section style="padding-left; 300px; padding-top: 30px;">
  <div id='leftNav' class='d-flex flex-column fixed flex-shrink-0 p-3 bg-light' style='width: 280px; height: 95vh; position: fixed;;'>

        <ul class='nav nav-pills flex-column mb-auto'>
        <li class='nav-item'>
        <a href='#' class='nav-link' style='height: 30px;' aria-current='page'></a>
        </li>
        <li>
        <a href='#' class='nav-link link-dark'>
        Dashboard
        </a>
        </li>
        <li>
        <button class='nav-link link-dark' data-bs-toggle='collapse' data-bs-target='#dashboard-collapse' aria-expanded='false'>
        CMS
        </button>
        <div class='collapse p-3 pt-0' id='dashboard-collapse'>
        <ul class='btn-toggle-nav list-unstyled fw-normal pb-1'>
            <li><a href='createPost.php' class='nav-link link-dark'>Create</a></li>
            <li><a href='#' class='nav-link link-dark'>Edit</a></li>
            <li><a href='#' class='nav-link link-dark'>Delete</a></li>
            <li><a href='#' class='nav-link link-dark'>Overview</a></li>
        </ul>
        </div>
        </li>
        <li>
        <a href='#' class='nav-link link-dark'>
        User Management
        </a>
        </li>
        <li>
        <a href='#' class='nav-link link-dark'>
        Comment Moderation
        </a>
        </li>
        <li>
        <a href='#' class='nav-link link-dark'>
        Sidebar
        </a>
        </li>
        </ul>
        <hr>
        <div class='dropdown'>
        <a href='#' class='d-flex align-items-center link-dark text-decoration-none dropdown-toggle' id='dropdownUser2' data-bs-toggle='dropdown' aria-expanded='false'>
        <img src='./media/20220723_133917.jpg' alt='' width='32' height='32' class='rounded-circle me-2'>
        <strong><?php echo $name; ?></strong>
        </a>
        <ul class='dropdown-menu text-small shadow' aria-labelledby='dropdownUser2'>
        <li><a class='dropdown-item' href='#'>Settings</a></li>
        <li><a class='dropdown-item' href='#'>Profile</a></li>
        <li><hr class='dropdown-divider'></li>
        <li><a class='dropdown-item' href='logout.php'>Logout</a></li>
        </ul>
        </div>
        </div>
</section>