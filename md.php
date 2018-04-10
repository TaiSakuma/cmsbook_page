<?php
include("../../cmsbook_bind/site_extra/markdown_page_loader.php");
$markdown_path = $_GET['md'];
markdown_page_loader($markdown_path);
?>
