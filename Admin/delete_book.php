<?php
 $con = mysqli_connect('localhost','root','','library') or die('Unable To connect');
 $query="delete from books where book_no=$_GET[bn]";
 $query_run=mysqli_query($con,$query);

?>
<script>
    alert("book Deleted..")
    window.location.href="manage_book.php";
</script>