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
                        <li class="recentUpdatesItem">
                            <div class="box-holder">
                                <div class="box-delete">

                                </div>
                                <div class="box-undo">

                                </div>
                                <div class="box" newaddress="?action=editArticle&amp;articleId=<?php echo $article->id?>">
                                    <div class="liquid-row">
                                        <div class="liquid-mobile6" style="margin-bottom:0;">
                                            <h1><?php echo $article->title?></h1>
                                        </div>
                                        <div class="liquid-mobile6" style="margin-bottom:0;">
                                            <div class="date">
                                                <?php echo date( 'j M Y', $article->publicationDate)?></div>
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