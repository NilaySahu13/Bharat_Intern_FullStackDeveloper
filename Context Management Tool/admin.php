<?php session_start();
if(isset($_SESSION["uname"])&& $_SESSION["utype"]=="admin")
{
include("header.php"); ?>

<?php include("sideNavbar.php"); ?>
<main class="mt-5" style="padding-left: 300px;">
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
              $date=$row["bdate"];
              $image=$row["bimage"];
      
              $newContent = truncateText($content, 80);
              if($row['bvideo']!=null){
                $vid = $row['bvideo'];
                $video="<video src='./media/Posts/Videos/$vid' controls autoplay muted class='img-fluid mt-3' />";
              }
              else{$video='';}
              print("
              <div class='col-md-6 gx-5 mb-4'>
              <div class='bg-image hover-overlay ripple shadow-2-strong rounded-5' data-mdb-ripple-color='light'>
                <img src='./media/Posts/Images/$image' class='img-fluid' />
                $video
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
          $date=$row["bdate"];
          $image=$row["bimage"];
          $id=$row['bkey'];
          
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

<?php include("footer.php");
}
else
{
    header("location:login.php?mssg=0");
}
?> 
