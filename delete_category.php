<?php
 $con = mysqli_connect('localhost','root','','library') or die('Unable To connect');
 $query="delete from category where cat_id=$_GET[cid]";
 $query_run=mysqli_query($con,$query);

?>
<script>
    alert("category Deleted..")
    window.location.href="manage_category.php";
</script>