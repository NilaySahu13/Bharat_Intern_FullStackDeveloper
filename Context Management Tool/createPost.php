<?php session_start();
if(isset($_SESSION["uname"])&& $_SESSION["utype"]=="admin")
{
include("header.php"); ?>
<?php include("sideNavbar.php")?>
<main class="container mt-4" style="padding-left: 280px; padding-top: 40px; width: 650px; margin: 0 auto;">
    <h1 class="text-center">Create Post</h1>
    <form  action="submitPost.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
      </div>

      <div class="mb-3 d-flex">
        <div>
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="ms-3">
          <label for="date" class="form-label">Date</label>
          <input type="date" class="form-control" id="date" name="date" required>
        </div>
      </div>

      <div class="mb-3">
      <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" required>
            <option value="">Select a category</option>
            <option value="personal">Personal Blog</option>
            <option value="travel">Travel Blog</option>
            <option value="fashion">Fashion and Beauty Blog</option>
            <option value="food">Food Blog</option>
            <option value="lifestyle">Lifestyle Blog</option>
            <option value="technology">Technology Blog</option>
            <option value="finance">Finance and Business Blog</option>
            <option value="health">Health and Fitness Blog</option>
            <option value="diy">DIY and Crafts Blog</option>
            <option value="news">News and Current Affairs Blog</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
        <label for="video" class="form-label">Video</label>
        <input type="file" class="form-control" id="video" name="video">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>

<?php 
include("footer.php");
}
else
{
    header("location:login.php");
}   
?> 
