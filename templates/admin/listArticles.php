<?php include "templates/admin/include/adminHeader.php" ?>

<div class="container">
    <?php include "templates/admin/include/adminNavigation.php" ?>

    <div class="playground">
        <div class="liquid-row">
            <div class="liquid-column12">
                <div class="recentUpdates" style="margin-bottom:20px;">
                    <div class="liquid-row">
                        <div class="liquid-mobile12">
                            <h1>Students (<?php echo $results['totalRows']?>)</h1>
                        </div>
                    </div>
                    <ul class="recentUpdatesList">
                        <?php foreach ( $results[ 'articles'] as $article ) { ?>
                        <li class="recentUpdatesItem" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
                            <div class="liquid-row">
                                <div class="liquid-mobile6" style="margin-bottom:0;">
                                    <h1><?php echo $article->name?></h1>
                                </div>
                                <div class="liquid-mobile6" style="margin-bottom:0;">
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