<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	color:red;
	font-size: 50px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	font-size:16px;
}

p {
	margin: 12px 15px 12px 15px;
}

.info{font-size:18px;letter-spacing:1px;color:#666;margin-top:30px;}
</style>
</head>
<body>
	<div id="container">

		<h1>Oops! 404 找不到網頁 ( Page not found )</h1>
		<?php if ($message): ?><div class="info"><?php echo $message; ?></div><?php endif; ?>
		<h3>抱歉, 搜尋不到您所查詢的頁面</h3>
		<p>日期 : <?php echo date("Y-m-d H:i:s"); ?></p>
		<p>您從 <?php echo getenv("REMOTE_ADDR"); ?> 嘗試讀取 <?php echo getenv("SERVER_NAME"); ?> <?php echo getenv("REQUEST_URI"); ?> 網頁!</p>
		<p>您所使用的瀏覽器 : <?php echo getenv ("HTTP_USER_AGENT"); ?></p>
		<p>很抱歉! 您所輸入或查詢的資料, 目前無法找到任何的網頁; 可能是因為以下幾種原因:</p>
		<ul>
			<li>您輸入了錯誤的網址</li>
			<li>此頁面已被移除或不存在</li>
		</ul>
		<h2>建議您可以</h2>
		<ul>
			<li>檢查您所輸入的網址並重新查詢</li>
			<li>直接回到上一頁, 或是查看其他熱門的網頁!</li>
			<li>等待 10 秒後, 將轉至首頁!</li>
		</ul>
		<div>
			<a href="javascript:history.back();">回上一頁</a> | <a href="/">回到首頁</a>
		</div>

		<script language="javascript">
			// function PageNotfound(){ window.location.replace("/");}
			// setTimeout(PageNotfound, 10000);
		</script>


		<!--<h1><?php echo $heading; ?></h1>
		<div class="info"><?php echo $message; ?></div> -->
	</div>
</body>
</html>
