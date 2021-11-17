<?php if(!defined('Z_PROTECTED')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">				
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php eh($lang["headerLDAPPhonebook"]) ?></title>
		<link type="text/css" href="templ/style.css" rel="stylesheet" />
		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<link rel="icon" type="image/png" sizes="32x32" href="templ/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="templ/favicon-16x16.png">
		<script src="pb.js"></script>
	</head>
	<body style="padding-top:73px;">
		<ul class="menu-bar" style="display:none">
			<li><a href="<?php eh("$self"); ?>"><?php eh($lang["headerHome"]) ?></a></li>
			<li><a href="?action=map&amp;id=1"><?php eh($lang["headerMap"]) ?></a></li>
			<?php if($uid && false) { ?>
			<li><a href="?action=all"><?php eh($lang["headerShowAll"]) ?></a></li>
			<li><a href="?action=handshakes"><?php eh($lang["headerHandshakes"]) ?></a></li>
			<li><a href="?action=sync"><?php eh($lang["headerSync"]) ?></a></li>
			<li><a href="?action=export"><?php eh($lang["headerExport"]) ?></a></li>
			<li><a href="?action=services"><?php eh($lang["headerTools"]) ?></a></li>
			<?php } ?>
			<ul style="float:right;list-style-type:none;">
				<?php if($uid) { ?>
				<li><a href="?action=logoff"><?php eh($lang["headerLogOut"]) ?></a></li>
				<?php } else { ?>
				<li><a href="?action=login"><?php eh($lang["headerLogIn"]) ?></a></li>
				<?php } ?>
			</ul>
		</ul>







	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <!--<div class="container-fluid"> fixed-top -->
        <a class="navbar-brand" href="<?php eh("$self"); ?>">Справочник организации</a>
			
			
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Поэтажный план
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?action=map&amp;id=5">4 этаж</a>
          <a class="dropdown-item" href="?action=map&amp;id=4">3 этаж</a>
          <a class="dropdown-item" href="?action=map&amp;id=3">2 этаж</a>
          <a class="dropdown-item" href="?action=map&amp;id=2">1 этаж</a>
          <a class="dropdown-item" href="?action=map&amp;id=1">Цоколь</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?action=map&amp;id=6">Оргструктура</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://help.zilcc.ru">Техподдержка</a>
      </li>
	  <?php if($uid) { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Инструменты
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?action=all"><?php eh($lang["headerShowAll"]) ?></a>
          <a class="dropdown-item" href="?action=handshakes"><?php eh($lang["headerHandshakes"]) ?></a>
          <a class="dropdown-item" href="#" onclick="f_edit(null);">Добавить контакт</a>
          <a class="dropdown-item" href="?action=sync"><?php eh($lang["headerSync"]) ?></a>
          <a class="dropdown-item" href="?action=services"><?php eh($lang["headerTools"]) ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="?action=export"><?php eh($lang["headerExport"]) ?></a>
        </div>
      </li>
	  <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" id="search" type="search" onkeyup="filter_table()" style="display:none;" placeholder="Поиск..." aria-label="Search">
      <ul class="navbar-nav mr-auto">
		  <li class="nav-item">
			<?php if($uid) { ?>
				<a class="nav-link" href="?action=logoff">Выход</a>
			<?php } else { ?>
				<a class="nav-link" href="?action=login">Вход</a>
																		   
																			
			<?php } ?>
		  </li>
	  </ul>
    </form>
																			
					 
																		  
			  
  </div>
			
    </nav>