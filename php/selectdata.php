<?php require 'config.php'; 
  
  $id = $_POST['id'];

  $sql = mysql_query("SELECT * FROM images WHERE id=$id");

      while ($row = mysql_fetch_array($sql))
  {

?>

<div class="attachment-details">
    <img src="images/<?php echo $row['file_name'];?>" class="img img-thumbnail img-small">
  </div>
    <dl class="dl-horizontal">
      <dt>File name</dt>
      <dd><?php echo $row['file_name'];?></dd>
      <dt>File Size</dt>
      <dd><?php echo number_format($row['size']);?> byets</dd>
      <dt>File Width</dt>
      <dd>600px</dd>
      <dt>File height</dt>
      <dd>600px</dd>
      <dt>Alt</dt>
      <dd><?php echo $row['alt'];?></dd>
    </dl>
    <span class="pull-left"><a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>  <a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a> </span>
    <span class="pull-right"><input type="submit" class="btn btn-primary" value="Select"></span>
    <?php } ?>
                          
