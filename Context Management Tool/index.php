<?php 
include("header.php");
?>
<div id="carouselExampleCaptions" class="carousel slide h-40">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"  aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="./media/bg1.jpg" class="d-block w-100 h-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 style='color: gray; font-weight: 700'>6 Tips to Kick Start Your</h2>
        <h2 style='color: grey; font-weight: 700'><i>New Year</i></h2>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./media/bg2.jpg" class="d-block w-100 h-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Homemade Gift Ideas for New Year</h2>
        <p></p>
      </div>
    </div>
    <div class="carousel-item active">
      <img src="./media/bg3.jpg" class="d-block w-100 h-80" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Basic COOKING SKILL</h2>
        <p>You Need to Know</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<main class="mt-5">
      <div class="container">
        <section>
          <div class="row">
            <?php

            include("dbconnect.php");
            $rscon=mysqli_query($con,"select * from blogposts order by bdate desc") or die("Query Error");
            function truncateText($text, $limit) {
              $words = explode(" ", $text);
              if (count($words) > $limit) {
                $truncatedText = implode(" ", array_slice($words, 0, $limit));
                return $truncatedText . '...';
              } else {
                return $text;
              }
            }
              $row=mysqli_fetch_array($rscon);
              $title=$row["btitle"];
              $content=$row["bcontent"];
              $author=$row["bauthor"];
              $dateString=$row["bdate"];
              $image=$row["bimage"];
              $newContent = truncateText($content, 80);
              $date = strtotime($dateString);
          $formattedDate = date("F j, Y", $date);
            
              print("
              <div class='col-md-6 gx-5 mb-4'>
              <div class='bg-image hover-overlay ripple shadow-2-strong rounded-5' data-mdb-ripple-color='light'>
                <img src='./media/Posts/Images/$image' class='img-fluid' />            
                  <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'><div class='text-muted fst-italic mb-2 pt-4'>Posted on $formattedDate by $author</div></div>
              </div>
            </div>
          

            <div class='col-md-6 gx-5 mb-4'>
              <h4><strong>$title</strong></h4>
              <p class='text-muted'>
                $newContent
              </p>
              <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
              <p class='text-muted'>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                alias, unde optio accusantium soluta, iusto molestiae adipisci et?
              </p>
            </div>
              ");

              ?>
          </div>
        </section>

        <hr class="my-5" />
        <section class="text-center">
          <h4 class="mb-5"><strong>Recent Blogs</strong></h4>

          <div class="row">
            
            <?php

        include("dbconnect.php");
        $rscon=mysqli_query($con,"select * from blogposts order by bdate desc") or die("Query Error");
        for($i=0; $i<6; $i++){
          $row=mysqli_fetch_array($rscon);
          $title=$row["btitle"];
          $content=$row["bcontent"];
          $author=$row["bauthor"];
          $dateString=$row["bdate"];
          $image=$row["bimage"];
          $id=$row['bkey'];

          $date = strtotime($dateString);
          $formattedDate = date("F j, Y", $date);
          
          $truncatedText = truncateText($content, 18);
          print("
            <div class='col-lg-4 col-md-12 mb-4'>
              <div class='card'>
                <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                  <img
                    style='width: 780px; height: 250px;'
                    src='./media/Posts/Images/$image'
                    class='img-fluid'
                    alt='$image'
                  />
                  <a href='#!'>
                    <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                  </a>
                </div>
                <div class='card-body'>
                <div class='text-muted fst-italic mb-2 small'>Posted on $formattedDate by $author</div>
                  <h5 class='card-title'>$title</h5>
                  <p class='card-text'>
                    $truncatedText
                  </p>
                  <a href='posts.php?id=$id' class='btn btn-primary'>Read More</a>
                </div>
              </div>
            </div>
          ");
        }
        ?>
          
          </div>
        </section>
</div>
</main>
<?php
include("footer.php");
?>