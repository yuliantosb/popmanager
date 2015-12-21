	<select class="image-picker" onchange="showImages(this.value)">
		<?php
			include "config.php";
			$sql = mysql_query("SELECT * FROM images");
			while ($row = mysql_fetch_array($sql))
  
			{
			?>
			<option selected></option>
		<option name="id" data-img-src="images/<?php echo $row['file_name'];?>" value="<?php echo $row['id'];?>"> <?php echo $row['file_name'];?> </option>
		<?php } ?>
	</select>
	<nav>
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>
