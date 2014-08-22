<?php
if (!defined('MCR')) exit;

$page = 'Guide'; 

$content_main = View::ShowStaticPage('guide.html');

$menu->SetItemActive('guide');
?>