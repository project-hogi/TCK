<?php
$config["themeColor"] = "#977049";
$config["sitename"] = "TCK";
$config["mode"] = "front";
$config["isDev"] = true;
$config["cssTableMinWidth"] = 640;
$config["cssDesktopMinWidth"] = 1024;
$config["cssLargeDesktopMinWidth"] = 1280;
$config["srcResourcesDir"] = "/resources-dev/" . $config["mode"];
$config["destResourcesDir"] = "/resources/" . $config["mode"];
$config["resourcesDir"] = ($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))) ? $config["srcResourcesDir"] : $config["destResourcesDir"];
$config["imageDir"] = $config["resourcesDir"]  . "/images";
?><!DOCTYPE html>
<!-- App Header.html -->
<html lang="ko-KR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $config["sitename"]; ?> 홈페이지 입니다." />
<title><?php echo $config["sitename"]; ?></title>
<meta name="theme-color" content="<?php echo $config["themeColor"]; ?>">
<meta name="msapplication-navbutton-color" content="<?php echo $config["themeColor"]; ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="shortcut icon" href="/resources/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="<?php echo $config["themeColor"]; ?>">
<meta property="og:title" content="<?php echo $config["sitename"]; ?>">
<meta property="og:url" content="http://도메인/">
<meta property="og:description" content="<?php echo $config["sitename"]; ?> 홈페이지 입니다.">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $config["sitename"]; ?>">
<meta name="twitter:url" content="http://도메인/">
<meta name="twitter:description" content="<?php echo $config["sitename"]; ?> 홈페이지 입니다.">
<?php if($config['isDev'] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))){ ?>
<link rel="stylesheet/less" href="<?php echo $config["resourcesDir"]; ?>/less/phone.less" />
<link rel="stylesheet" href="<?php echo $config["destResourcesDir"]; ?>-legacy/css/legacy-phone.css" />
<script src="<?php echo $config["resourcesDir"]; ?>/etc/less.min.js"></script>
<?php }else{ ?>
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>/css/phone.min.css" />
<link rel="stylesheet" href="<?php echo $config["resourcesDir"]; ?>-legacy/css/legacy-phone.css" />
<?php } ?>
<?php if ($config["isDev"] === true && (isset($config['isBuild']) && !$config['isBuild'] || !isset($config['isBuild']))) { ?>
<!--[if lt IE 9]><script src="<?php echo $config["resourcesDir"]; ?>/jsvendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?php echo $config["resourcesDir"]; ?>/jsvendor-dev-only/jquery.js"></script><![endif]-->
<?php echoJsInPath('/resources-dev/' . $config["mode"] . '/jspack/'); ?>
<?php } else { ?>
<!--[if lt IE 9]><script src="<?php echo $config["resourcesDir"]; ?>/js/vendor/jquery-1.12.2.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?php echo $config["resourcesDir"]; ?>/js/vendor/jquery.min.js"></script><![endif]-->
<script src="<?php echo $config["resourcesDir"]; ?>/js/script.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/datepicker.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/dtree.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/app.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/page.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/tab.js"></script>
<script src="<?php echo $config["resourcesDir"]; ?>/js/part/input.js"></script>
<?php } ?>
</head>
<body class="<?php echo getBodyClass($pagePath, $bodyClass); ?>">
<!-- //App Header.html -->
