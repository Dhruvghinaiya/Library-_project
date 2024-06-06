<?php
 $con = mysqli_connect('localhost','root','','library') or die('Unable To connect');
 $query="delete from author where author_id=$_GET[aid]";
 $query_run=mysqli_query($con,$query);

?>
<script>
    alert("author Deleted..")
    window.location.href="manage_author.php";
</script>