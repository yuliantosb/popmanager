<div class="row col-md-12" style="min-height:340px">
	<select id="itemContainer" class="image-picker" onchange="showImages(this.value)">
		<?php
            include "config.php";
            $num_rec_per_page=10;
 
            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
            $start_from = ($page-1) * $num_rec_per_page;
            $sql = "SELECT * FROM images ORDER BY id DESC LIMIT $start_from, $num_rec_per_page";
            $rs_result = mysql_query ($sql); //run the query
            ?>
 
            <?php
                while ($row = mysql_fetch_assoc($rs_result)) {
                ?>

           
		<option name="id" data-img-src="images/<?php echo $row['file_name'];?>" value="<?php echo $row['id'];?>"> <?php echo $row['file_name'];?> </option>
		<?php } ?>
	</select>
</div>
		 <?php
        $sql = "SELECT * FROM images";
        $rs_result = mysql_query($sql); //run the query
        $total_records = mysql_num_rows($rs_result);  //count number of records
        $total_pages = ceil($total_records / $num_rec_per_page);
 
        ?>

        <nav>
        <ul class="pagination">
            <li><a href="javascript:void(0);" class="links" onclick="viewdata('<?php echo 1; ?>');">&laquo;</a></li>
        <?php
 
        for ($i=1; $i<=$total_pages; $i++) {
                    echo '<li><a href="javascript:void(0);" onclick="viewdata('. $i .');">'.$i.'</a></li>';
        };
        echo '<li><a href="javascript:void(0);" class="links" onclick="viewdata('. $total_pages .');">&raquo;</a></li>';  // Goto last page
        ?>
        </ul>
    </nav>