<?php @session_start();
if(isset($_SESSION["uname"])&& $_SESSION["utype"]=="admin"){
include('header.php');
include('sideNavbar.php');

$id = $_REQUEST['id'];
include('dbconnect.php');
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
        $vid = "<video style='heigth: 200px; width: 300px;' src='./media/Posts/Videos/$video' controls muted autoplay poster='./media/Posts/Images/$image'>";
    }
    else{
        $vid = "";
    }
print("
<div class='container mt-5' style='padding-left: 280px;'>
    <div class='row'>
        <div class='col-lg-8'>
            <article>
                <header class='mb-4'>
                    <h1 class='fw-bolder mb-1'>$title</h1>
                    <div class='text-muted fst-italic mb-2'>Posted on $formattedDate by $author</div>
                    <a class='badge bg-secondary text-decoration-none link-light' href='#!'>$category</a>
                </header>
                <figure class='mb-4'><img class='img-fluid rounded' src='./media/Posts/Images/$image' alt='...' /></figure>
                <section class='mb-5'>
                    <p class='fs-5 mb-4' style='text-align: justify;'>$content</p>
                </section>
            </article>        
        </div>
        
        <div class='col-lg-4'>
            <div class='card-body'>
                <div class='row'>
                    <div class='col-sm-6'>
                        $vid
                    </div>
                </div>
            </div>
            <h3 class='text-center p-2'>Add More</h3>
            <form  action='submitSubPost.php?id=$id' method='POST' enctype='multipart/form-data'>
                <div class='mb-3'>
                <label for='subTitle' class='form-label'>Sub-Title</label>
                <input type='text' class='form-control' id='subTitle' name='subTitle' required>
                </div>
        
                <div class='mb-3'>
                <label for='content' class='form-label'>Content</label>
                <textarea class='form-control' id='content' name='content' rows='7' required></textarea>
                </div>

                <div class='mb-3'>
                <label for='category' class='form-label'>Category</label>
                <select class='form-select' id='category' name='category' required>
                    <option value=''>Select a category</option>
                    <option value='personal'>Personal Blog</option>
                    <option value='travel'>Travel Blog</option>
                    <option value='fashion'>Fashion and Beauty Blog</option>
                    <option value='food'>Food Blog</option>
                    <option value='lifestyle'>Lifestyle Blog</option>
                    <option value='technology'>Technology Blog</option>
                    <option value='finance'>Finance and Business Blog</option>
                    <option value='health'>Health and Fitness Blog</option>
                    <option value='diy'>DIY and Crafts Blog</option>
                    <option value='news'>News and Current Affairs Blog</option>
                </select>
                </div>
        
                <div class='mb-3'>
                <label for='subImage' class='form-label'>Sub-Image</label>
                <input type='file' class='form-control' id='subImage' name='subImage'>
                </div>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </form>
        </div>
    </div>
</div>
        ");


        $rscon2=mysqli_query($con," select * from subposts where skey like '$id' order by sdate asc") or die('Query Error');
        for($i=0;$i<=mysqli_num_rows($rscon2);$i++){
            $row2=mysqli_fetch_array($rscon2);
            $subTitle=$row2['stitle'];
            $scontent=$row2['scontent'];
            $simage=$row2['simage'];
    
    
            if($simage!=null){
                print("
            <div class='container mt-5' style='padding-left: 280px;'>
                <div class='row'>
                    <div class='col-lg-8'>
                        <article>
                            <h2 class='fw-bolder mb-1'>$subTitle</h2>
                            <figure class='mb-4'><img class='img-fluid rounded' src='./media/Posts/Images/$simage' alt='...' /></figure>
                            <section class='mb-5'>
                                <p class='fs-5 mb-4' style='text-align: justify;'>$scontent</p>
                            </section>
                        </article>        
                    </div>
                </div>
            </div>
            ");
            }
        }
?>

<?php
include('footer.php');
}
else{
    header("location:login.php");
}   
?>