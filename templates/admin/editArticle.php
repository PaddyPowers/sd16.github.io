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

  <?php include "templates/admin/include/adminNavigation.php" ?>
    

    <div class="playground">
      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
      <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
	  
		<?php if ( isset( $results['errorMessage'] ) ) { ?>
			<div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
		<?php } ?>
	  
      <div class="liquid-row">

        <div class="liquid-column8">
		
          <div class="card">
            <h1>Content</h1>
            <input type="text" name="fullName" id="fullName" class="textBox" placeholder="Full Name" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->fullName )?>" />
            <textarea name="content" id="content"  class="textBox" placeholder="Description" required maxlength="1000"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </div>
		  <div class="card">
            <h1>Links</h1>
			<div style="margin-bottom:10px;">
				<p style="display:inline;color:#97a1aa;font-size:18px;">facebook</p>
				<input type="text" name="twitter" id="twitter" class="textBox" placeholder="twitter" style="width:auto;margin-bottom:0;" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->twitter )?>" />
			</div>
			<div style="margin-bottom:10px;">
				<p style="display:inline;color:#97a1aa;font-size: 18px;">linkedin</p>
				<input type="text" name="linkedin" id="linkedin" class="textBox" placeholder="linkedin" style="width:auto;margin-bottom:0;" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->linkedin )?>" />
            </div>
			<div style="margin-bottom:10px;">
				<p style="display:inline;color:#97a1aa;font-size: 18px;">website</p>
				<input type="text" name="website" id="website" class="textBox" placeholder="portfolio" style="width:auto;margin-bottom:0;" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->website )?>" />
            </div>
			
		  </div>
        </div>

        <div class="liquid-column4">
          <div class="card">
            <h1>Attributes</h1>
            <input type="date"  class="textBox" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
			<select name="course" id="course" >
              <option> 
              <?php if( htmlspecialchars( $results['article']->course === NULL)){
                echo "Choose a course";
                }
                else{
                  echo htmlspecialchars( $results['article']->course );
                }            
              ?>
              <option value="Interaction Design">Interaction Design</option>
              <option value="Product Design">Product Design</option>
            </select>
		  </div>

          <div class="card">
            <h1>Profile Image</h1>
            <div class="liquid-row" id="articleImageContainer">
              <?php if ( $results['article'] && $imagePath = $results['article']->getImagePath() ) { ?>
              <div class="liquid-row" >
                <img id="articleImage" class="textBox" src="<?php echo $imagePath ?>" alt="Article Image" />
              </div> 
              <?php } ?>
            </div>
          </div>
          <div class="card">
            <h1>Settings</h1>
            <button type="submit" name="saveChanges" value="Save Changes" class="click textCenter primary">
				Save
            </button>
            <button type="submit" formnovalidate name="cancel" value="Cancel" class="click textCenter default">
				Cancel
            </button>
          </div>
        </div>

      </form>
		<!--<?php if ( $results['article']->id ) { ?>
			<a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">
				Delete this article
			</a>
		<?php } ?>-->
    </div>
    </div>
</div>

</body>