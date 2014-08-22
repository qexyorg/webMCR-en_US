<?php if (!defined('MCR')) exit;
$menu_items = array (
  0 => 
  array (
    'main' => 
    array (
      'name' => 'Home',
      'url' => '',
      'parent_id' => -1,
      'lvl' => -1,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'guide' => 
    array (
      'name' => 'Guide',
      'url' => 'go/guide/',
      'parent_id' => -1,
      'lvl' => -1,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'rules' => 
    array (
      'name' => 'Rules',
      'url' => 'go/rules/',
      'parent_id' => -1,
      'lvl' => -1,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'options' => 
    array (
      'name' => 'Options',
      'url' => 'go/options/',
      'parent_id' => -1,
      'lvl' => 1,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
  ),
  1 => 
  array (
    'admin' => 
    array (
      'name' => 'Administration',
      'url' => '',
      'parent_id' => -1,
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'add_news' => 
    array (
      'name' => 'Add news',
      'url' => 'go/news_add/',
      'parent_id' => 'admin',
      'lvl' => 1,
      'permission' => 'add_news',
      'active' => false,
      'inner_html' => '',
    ),
    'control' => 
    array (
      'name' => 'Users',
      'url' => 'control/user/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'category_news' => 
    array (
      'name' => 'News categories',
      'url' => 'control/category/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'reg_edit' => 
    array (
      'name' => 'Registration',
      'url' => 'control/ipbans/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'group_edit' => 
    array (
      'name' => 'User groups',
      'url' => 'control/group/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'file_edit' => 
    array (
      'name' => 'Files',
      'url' => 'control/filelist/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'site_edit' => 
    array (
      'name' => 'Settings',
      'url' => 'control/constants/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'rcon' => 
    array (
      'name' => 'RCON',
      'url' => 'control/rcon/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'game_edit' => 
    array (
      'name' => 'Game settings',
      'url' => 'control/update/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'serv_edit' => 
    array (
      'name' => 'Monitoring',
      'url' => 'control/servers/',
      'parent_id' => 'admin',
      'lvl' => 15,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
    'exit' => 
    array (
      'name' => 'Logout',
      'url' => 'login.php?out=1',
      'parent_id' => -1,
      'lvl' => 1,
      'permission' => -1,
      'active' => false,
      'inner_html' => '',
    ),
  ),
);
