<HTML>
<HEAD>
<meta charset="utf-8"> 
</HEAD>
<BODY>
<?php
print("<TABLE bgcolor='ffccoo' BORDER=\"1\">");
	for($Row=1;$Row<=12;$Row++)
	{
		print("<TR>");
		for($column=1;$column<=12;$column++)
	{
		print("<TD>");
		print($Row*$Column);
		print("</TD>");
	}
	print("</TR>");
	}
	print("</TABLE>");
?>
</BODY>
</HTML>