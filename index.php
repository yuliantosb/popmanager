<html>
<head>
	<title>Pop Manager - By Atto</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/image-picker.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.vertical-tabs.min.css">
	<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/enyo/dropzone/master/dist/dropzone.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body onload="viewdata(); selectdata();">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert Pictures</h4>
      </div>
      <div class="modal-body">
        <div class="row" style="max-height:400px;">
      <div  class="col-sm-12">
        <div class="col-xs-2"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <li class="active"><a href="#upload" data-toggle="tab">Upload</a></li>
            <li><a href="#media" data-toggle="tab">Media</a></li>
            <li><a href="#link" data-toggle="tab">Link</a></li>
          </ul>
        </div>

        <div class="col-xs-10">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="upload">
              <div class="row">
                <div class="col-md-12">
              		<form action="upload.php" class="dropzone upload" id="my-dropzone">
                    <span class="dz-message"> Seret dan Lepaskan disini</span>
                    <div class="dz-details">
                        <div class="dz-filename"><span data-dz-name></span></div>
                        <div class="dz-size" data-dz-size></div>
                        
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="media">
            	<div class="image-selector">
            		<div class="row">
            			<div class="col-xs-8 picker" id="viewdata">
            				
						      </div>
	            			<div class="col-xs-4 row" style="max-height: 300px" id="selectdata">                       

                        
                      
                          
                    </div>
            			</div>
            		</div>
            	</div>
            <div class="tab-pane" id="link">
            	<div class="link">
            		<div class="row">
            			<div class="input-group">
						    <input type="text" class="form-control" placeholder="Insert Link" value="http://">
						     <span class="input-group-btn">
						        <button class="btn btn-primary" type="button">Insert</button>
						    </span>
						</div><!-- /input-group -->
            		</div>
            	</div>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>
      </div>
      <div class="modal-footer">
        <p class="right-text">Pop Manager V. 1.0 | Created with <span class="glyphicon glyphicon-heart"></span> by Yulianto </p>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/image-picker.min.js"></script>
<script>
	jQuery("select.image-picker").imagepicker({
  	hide_select:  true,
	});
</script>
<script src="https://raw.github.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script>
    function viewdata(){
      
    $.ajax({
	   type: "GET",
	   url: "php/getdata.php",
	   dataType: "html"
      }).done(function( data ) {
	  $('#viewdata').html(data);
	  $("select").imagepicker();
      });
    }

</script>

<script>

 Dropzone.options.myDropzone = {
  init: function() {
    this.on("success", function(file, responseText) {
      onload('viewdata');
    });
  }
};

</script>

<script>
function showImages(val) {
  $.ajax({
  type: "POST",
  url: "php/selectdata.php",
  data:'id='+val,
  success: function(data){
    $("#selectdata").html(data);
  }
  });
}
</script>

</body>
</html>
