<?php
include('header.php');
include('dbconnect.php');
$id = $_REQUEST['id'];
$rscon=mysqli_query($con," select * from blogposts where bkey like '$id'") or die('Query Error');
    $row=mysqli_fetch_array($rscon);
    $title=$row['btitle'];
    $content=$row['bcontent'];
    $author=$row['bauthor'];
    $dateString=$row['bdate'];
    $category=$row['bcategory'];
    $image=$row['bimage'];
    $video=$row['bvideo'];

    $date = strtotime($dateString);
    $formattedDate = date("F j, Y", $date);
    
    if($video!=null){
        $vid = "<video style='width: 100%;' src='./media/Posts/Videos/$video' controls muted autoplay poster='./media/Posts/Images/$image'>";
    }
    else{
        $vid = "";
    }
?>

<div class='container mt-5'>
            <div class='row'>
                <div class='col-lg-8'>
                    <article>
                        <header class='mb-4'>
                            <h1 class='fw-bolder mb-1'><?php echo $title ?></h1>
                            <div class='text-muted fst-italic mb-2'><?php print("Posted on $formattedDate by $author");?></div>
                            <a class='badge bg-secondary text-decoration-none link-light' href='#!'><?php echo $category ?></a>
                        </header>
                        <figure class='mb-4'><img class='img-fluid rounded' src='./media/Posts/Images/<?php echo $image ?>' alt='...' /></figure>
                        <section class='mb-5'>
                            <p class='fs-5 mb-4' style='text-align: justify;'><?php echo $content; ?></p>

                            <?php
                            $rscon2=mysqli_query($con," select * from subposts where skey like '$id' order by sdate asc") or die('Query Error');
                            for($i=0;$i<=mysqli_num_rows($rscon2);$i++){
                                $row2=mysqli_fetch_array($rscon2);
                                $subTitle=$row2['stitle'];
                                $scontent=$row2['scontent'];
                                $simage=$row2['simage'];
                                if($scontent!=null){
                                    print("
                                            <div class='container'>
                                                <article>
                                                    <h3 class='fw-bolder mb-3'>$subTitle</h3>
                                                    <figure class='mb-4'><img class='img-fluid rounded' src='./media/Posts/Images/$simage' alt='...' /></figure>
                                                    <section class='mb-5'>
                                                        <p class='fs-5 mb-4' style='text-align: justify;'>$scontent</p>
                                                    </section>
                                                </article>        
                                            </div>
                                    ");

                                }
                            }
                            ?>
                        </section>
                    </article>
                    <section class='mb-5'>
                        <div class='card bg-light'>
                            <div class='card-body'>
                                <form class='mb-4'><textarea class='form-control' rows='3' placeholder='Join the discussion and leave a comment!'></textarea></form>
                                <div class='d-flex mb-4'>
                                    <div class='flex-shrink-0'><img class='rounded-circle' src='https://dummyimage.com/50x50/ced4da/6c757d.jpg' alt='...' /></div>
                                    <div class='ms-3'>
                                        <div class='fw-bold'>Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                        <div class='d-flex mt-4'>
                                            <div class='flex-shrink-0'><img class='rounded-circle' src='https://dummyimage.com/50x50/ced4da/6c757d.jpg' alt='...' /></div>
                                            <div class='ms-3'>
                                                <div class='fw-bold'>Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <div class='d-flex mt-4'>
                                            <div class='flex-shrink-0'><img class='rounded-circle' src='https://dummyimage.com/50x50/ced4da/6c757d.jpg' alt='...' /></div>
                                            <div class='ms-3'>
                                                <div class='fw-bold'>Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='d-flex'>
                                    <div class='flex-shrink-0'><img class='rounded-circle' src='https://dummyimage.com/50x50/ced4da/6c757d.jpg' alt='...' /></div>
                                    <div class='ms-3'>
                                        <div class='fw-bold'>Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class='col-lg-4'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class=''>
                                    <?php echo $vid; ?>
                                </div>
                            </div>
                        </div>
                    <div class='card mb-4'>
                        <div class='card-header'>Search</div>
                        <div class='card-body'>
                            <div class='input-group'>
                                <input class='form-control' type='text' placeholder='Enter search term...' aria-label='Enter search term...' aria-describedby='button-search' />
                                <button class='btn btn-primary' id='button-search' type='button'>Go!</button>
                            </div>
                        </div>
                    </div>
                    <div class='card mb-4'>
                        
                        <div class='card-header'>Categories</div>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <ul class='list-unstyled mb-0'>
                                        <?php
                                                print("
                                                <li><a href='#'>$category</a></li>
                                                ");
                                            $rscon3=mysqli_query($con," select distinct scategory from subposts where skey like '$id'") or die('Query Error3');
                                            for($i=0;$i<=mysqli_num_rows($rscon3);$i++){
                                                $row3=mysqli_fetch_array($rscon3);
                                                $cat=$row3['scategory'];
                                                if($cat!=$category){
                                                    print(" 
                                                    <li><a href='#!'>$cat</a></li>
                                                    ");
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class='card mb-4'>
                    <section class="text-center">
                        <h4 class="mb-4 mt-4"><strong>Recently Added</strong></h4>

                        <div class="row">
                            
                            <?php
                            $rscon4=mysqli_query($con,"select * from blogposts where bkey not like '$id' order by bdate desc") or die("Query Error");
                            function truncateText($text, $limit) {
                                $words = explode(" ", $text);
                                if (count($words) > $limit) {
                                  $truncatedText = implode(" ", array_slice($words, 0, $limit));
                                  return $truncatedText . '...';
                                } else {
                                  return $text;
                                }
                              }
                            
                            
                            for($i=0; $i<5; $i++){
                            $row4=mysqli_fetch_array($rscon4);
                            $title4=$row4["btitle"];
                            $content4=$row4["bcontent"];
                            $author4=$row4["bauthor"];
                            $date4=$row4["bdate"];
                            $image4=$row4["bimage"];
                            $id4=$row4['bkey'];
                            
                            
                            // Example usage
                            $truncatedText4 = truncateText($content4, 18);

                            print("
                                <div class='container'>
                                <div class='card'>
                                    <div class='bg-image hover-overlay ripple' data-mdb-ripple-color='light'>
                                    <img
                                        
                                        src='./media/Posts/Images/$image4'
                                        class='img-fluid'
                                        alt='$image4'
                                    />
                                    <a href='#!'>
                                        <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
                                    </a>
                                    </div>
                                    <div class='card-body'>
                                    <h5 class='card-title small'>$title4</h5>
                                    <p class='card-text'>
                                        $truncatedText4
                                    </p>
                                    <a href='posts.php?id=$id4' class='btn btn-primary'>Read More</a>
                                    </div>
                                </div>
                                </div>

                            ");
                            }
                            ?>
                            
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

<?php
include('footer.php');
?>