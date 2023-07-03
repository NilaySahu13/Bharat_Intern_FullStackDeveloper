<hr class="m-5" />
<footer style="<?php if(isset($_SESSION['uname'])&& $_SESSION['utype']=='admin'){print('padding-left: 280px');}?>">
        <div class="text-center py-4 align-items-center" style="<?php if(isset($_SESSION['uname'])&& $_SESSION['utype']=='admin'){ print('display: none;');}?>">
          <p>Follow ME CMS on social media</p>
          <a
            href="https://www.youtube.com/"
            class="btn"
            role="button"
            rel="nofollow"
            target="_blank"
          >
          <img src="./media/youtube.svg" alt="" srcset="">
          </a>
          <a
            href="https://www.facebook.com/"
            class="btn"
            role="button"
            rel="nofollow"
            target="_blank"
          >
            <img src="./media/facebook.svg" alt="" srcset="">
          </a>
          <a
            href="https://twitter.com/"
            class="btn"
            role="button"
            rel="nofollow"
            target="_blank"
          >
            <img src="./media/twitter.svg" alt="" srcset="">
          </a>
          <a
            href="https://github.com/NilaySahu13"
            class="btn"
            role="button"
            rel="nofollow"
            target="_blank"
          >
            <img src="./media/github.svg" alt="" srcset="">
          </a>
        </div>
  
        <!-- Copyright -->
        <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright: ME CMT
        </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>