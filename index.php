<?php include("../cmsbook_frame/beforeContent.php"); ?>

   <?php
     $sectionStr = getThisFileSectionStr($contents);
     if (! empty($sectionStr) ) echo '<h2>' . $sectionStr . '</h2>';
   ?>

<?php include("../cmsbook_frame/afterContent.php"); ?>

