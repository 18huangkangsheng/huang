<HTML>
<HEAD>
<meta charset="utf-8"> 
<TITLE></TITLE>
</HEAD>
<BODY>
<font size=5>
<?php
	function write($text)
	{
		print($text);
	}
	function writebold($text)
	{
		print("<b>$text</b>");
	}
	
	$myfunction="write";
	$myfunction("你好!<br>");
	print("<br>\n");
	$myfunction="writebold";
	$myfunction("再见!");
	print("<br>\n");
?>
</font>
</BODY>
</HTML>