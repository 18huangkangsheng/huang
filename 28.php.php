<HTML>
<HEAD>
<meta charset="utf-8"> 
<TITLE></TITLE>
</HEAD>
<BODY>
<font size=5>
<?php
  function printColored($Text, $Color="black") 
    {
        print("<FONT COLOR=\"$Color\">$Text</FONT>");   
    }
    printColored("这是黑颜色的字！");
    print("<BR><BR>\n");
    printColored("这是蓝颜色的字！", "blue");
    print("<BR>\n");
?>
</size>
</BODY>
</HTML>