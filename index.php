<!DOCTYPE html>
<html>
<head>
  <title>PHP - Dropzone Add Download Button Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>
   
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>PHP - Dropzone Add Download Button Example - connect2devendra.com</h2>
      <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
        <input type="hidden" name="request" value="add">
        <div>
          <h3>Upload Multiple Image By Click On Box</h3>
        </div>
      </form>
    </div>
  </div>
</div>
   
<script type="text/javascript">
  
    Dropzone.autoDiscover = false;
  
    var myDropzone = new Dropzone(".dropzone", { 
       maxFilesize: 10,
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       success: function (file, response) {
        if(response != 0){
           var anchorEl = document.createElement('a');
           anchorEl.setAttribute('href',response);
           anchorEl.setAttribute('target','_blank');
           anchorEl.innerHTML = "<br>Download File";
           file.previewTemplate.appendChild(anchorEl);
        }
       }
    });
   
</script>
  
</body>
</html>