<?php include "templates/admin/include/adminHeader.php" ?>

<div class="container">
    <?php include "templates/admin/include/adminNavigation.php" ?>

    <div class="playground">
        <div class="liquid-row">
            <div class="liquid-column12">
                <div class="recentUpdates" style="margin-bottom:20px;">
                    <div class="liquid-row">
                        <div class="liquid-mobile6">
                            <div class="btn-inverted" style="border-color:transparent;color:#363437;">
								Students (<?php echo $results['totalRows']?>)
							</div>
                        </div>
						<div class="liquid-mobile6">
							<div class="btn-inverted" onclick="location='admin.php?action=newArticle'" style="float:right;">
								Add Student
							</div>
                        </div>
                    </div>
                    <ul class="recentUpdatesList">
                        <?php foreach ( $results[ 'articles'] as $article ) { ?>
                        <li class="recentUpdatesItem" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
                            <div class="liquid-row">
								
                                <div class="liquid-column6" style="margin-bottom:0;">
									<?php if ( $imagePath = $article->getImagePath( IMG_TYPE_THUMB ) ) { ?>
										<img src="<?php echo $imagePath?>" alt="Article Thumbnail" style="height:48px;width:auto;border-radius:50%;vertical-align: middle;"/>
									<?php } ?>                                
									<h1 style="display:inline;margin-left:10px;"><?php echo $article->fullName?></h1>
                                </div>
                                <div class="liquid-column6 hidden-phone" style="margin-bottom:0;">
                                    <div class="date">
                                        <h1><?php echo $article->course?></h1>
									</div>
                                </div>
							</div>
                        </li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>