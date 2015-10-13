<?php include "templates/admin/include/adminHeader.php" ?>
      <script>

      // Prevents file upload hangs in Mac Safari
      // Inspired by http://airbladesoftware.com/notes/note-to-self-prevent-uploads-hanging-in-safari

      function closeKeepAlive() {
        if ( /AppleWebKit|MSIE/.test( navigator.userAgent) ) {
          var xhr = new XMLHttpRequest();
          xhr.open( "GET", "/ping/close", false );
          xhr.send();
        }
      }

      </script>

  <div class="container">

  <?php include "templates/include/adminNavigation.php" ?>
    

    <div class="playground">
      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
      <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
	  
      <div class="liquid-row">

        <div class="liquid-column8">
          <div class="card">
            <h1>Content</h1>
            <input type="text" name="name" id="name" class="textBox" placeholder="Full Name" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->name )?>" />
            <textarea name="content" id="content"  class="textBox" placeholder="Description" required maxlength="1000"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </div>
        </div>

        <div class="liquid-column4">
          <div class="card">
            <h1>Attributes</h1>
            <input type="date"  class="textBox" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
          </div>

          <div class="card">
            <h1>Feature Image</h1>
            <div class="liquid-row" id="articleImageContainer">
              <?php if ( $results['article'] && $imagePath = $results['article']->getImagePath() ) { ?>
              <div class="liquid-row" >
                <img id="articleImage" class="textBox" src="<?php echo $imagePath ?>" alt="Article Image" />
              </div> 
              <div class="liquid-row">
                <label class="click textCenter button" for="deleteImage">
                  <input type="checkbox" name="deleteImage" id="deleteImage" value="yes" style="visibility: hidden;" onclick="return confirm('Delete This Image?')" / > Delete
                </label>
              </div>
              <?php } ?>
              <div class="fileUpload btn">
                <span>Upload</span>
                <input type="file" class="upload" name="image" id="image" placeholder="Choose an image to upload" maxlength="255" />
              </div>
            </div>
          </div>
          <div class="card">
            <h1>Settings</h1>
            <div class="fileUpload btn">
                Preview
              </div>
            <button type="submit" name="saveChanges" value="Save Changes" class="click textCenter primary">
              <i class="fa fa-plus"></i> Save
            </button>
            <button type="submit" formnovalidate name="cancel" value="Cancel" class="click textCenter default">
              <i class="fa fa-trash-o"></i> Cancel
            </button>
          </div>
        </div>

      </form>
    </div>
    </div>


	<script>
	document.getElementById("image").onchange = function() {
	    var reader = new FileReader();

	    reader.onload = function(b) {
	        // get loaded data and render thumbnail.
	        document.getElementById("articleImage").src = b.target.result;
	    };

	    if (!document.getElementById("articleImage")) {

	        $("#articleImageContainer").prepend('   <div class="liquid-row" > \
            <img id="articleImage" class="textBox" src="<?php echo $imagePath ?>" alt="Article Image" /> \
          </div> \
          <!--<div class="liquid-row"> \
            <label class="click textCenter button" for="deleteImage"> \
            <input type="checkbox" name="deleteImage" id="deleteImage" value="yes" / > Delete \
          </div>--> \
            </label>');

	    }

	    // read the image file as a data URL.
	    reader.readAsDataURL(this.files[0]);
	};

	</script>