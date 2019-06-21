<HTML>
<HEAD>
<meta charset="utf-8"> 
</HEAD>
<BODY>
<?php
function calculate($period)
{
	return(cos(time()%$period));
}
$start=time();
for($index=0;$index<2000;$index++)
	{
		$value+=calculate(360);
	}
	$finish=time();
print("这次循环使用的时间为："."<br>".($finish-$start)."seconds<br>\n");
print("<hr>");
print("value的值为：".$value);
?>
</BODY>
</HTML>