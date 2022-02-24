
<?php
require_once('componenet/navbar.php');
?>



<div class="container d-flex flex-column my-5">
    <form action="./post/addpost" method="POST">

    <div class="d-flex flex-column my-5"><label>Title  </label>           <input type="text" name="title"></div>	
    <div class="d-flex flex-column my-5"><label>Description</label>     <input type="text" name="description"></div>	
    <div class="d-flex flex-column my-5"><label> Photo </label>          <input type="text" name="photo">	</div>
    <div class="d-flex flex-column my-5"><label> Movie Name	</label>    <input type="text" name ="movieName"></div>
    <div class="d-flex flex-column my-5"><label>Genre </label>          <input type="text" name="genre"></div>
    
    <input type="submit" name="add">
    </form>

    </div>
    <?php
require_once('componenet/footer.php');
?>
