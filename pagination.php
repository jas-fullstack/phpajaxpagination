<?php
include('db.php');

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM posts ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>Title</th>  
<th>Body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["title"]; ?></td>  
            <td><?php echo $row["body"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>    

