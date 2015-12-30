<?php require 'config.php'; 
  
  $id = $_POST['id'];

  $sql = mysql_query("SELECT * FROM images WHERE id=$id");

      while ($row = mysql_fetch_array($sql))
  {

?>

<div class="attachment-details">
<<<<<<< HEAD
    <input type="text" value="<?php echo $row['id'];?>" id="#id" hidden>
=======
>>>>>>> b3f353a2ab5d0094016fa1d7326362c74ca08d51
    <img src="images/<?php echo $row['file_name'];?>" class="img img-thumbnail img-small">
  </div>
    <dl class="dl-horizontal">
      <dt>File name</dt>
      <dd><?php echo $row['file_name'];?></dd>
      <dt>File Size</dt>
      <dd><?php echo number_format($row['size']);?> byets</dd>
<<<<<<< HEAD
      <dt>Alt</dt>
      <dd id="edit-input" class="hidden"><input name="alt" type="text" id="input-data" class="form-control" placeholder="Alt" value="<?php echo $row['alt'];?>"></input></dd>
      <dd id="alt-text"><?php echo $row['alt'];?></input></dd>
    </dl>
    <span class="pull-left">
    <input name="file_name" type="text" id="file_name" value="<?php echo $row['file_name'];?>" hidden></input>      
      <a href="javascript:void();" onClick="deleteData(<?php echo $row['id']; ?>)" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a> 
      <a  href="javascript:void();" id="edit-btn" onclick="editData();"  class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a> 
      <a href="javascript:void();" onclick="saveData(<?php echo $row['id']; ?>);" id="check-btn" class="btn btn-success hidden" data-toggle="tooltip" title="Update"><i class="fa fa-check"></i></a>
      <a href="javascript:void();" onclick="cancelData();" id="cancel-btn" class="btn btn-warning hidden " data-toggle="tooltip" title="Cancel"><i class="fa fa-times"></i></a></span>
    <span class="pull-right"><input data-toggle="tooltip" title="Select" type="submit" class="btn btn-primary" value="Select"></span>
    <?php } ?>
                          
=======
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
                          
>>>>>>> b3f353a2ab5d0094016fa1d7326362c74ca08d51
