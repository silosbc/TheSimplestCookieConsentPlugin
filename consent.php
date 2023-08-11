<?php
if(!(str_contains(strtolower($_SERVER['HTTP_USER_AGENT']),strtolower('google'))||str_contains(strtolower($_SERVER['HTTP_USER_AGENT']),strtolower('bing'))))
{
if($_COOKIE['cookieconsent']!='true')
echo '<script type="text/javascript" >
var cconsent=confirm("Hello! This site appears to use cookies necessary to ensure its proper functioning and tracking cookies to understand how you interact with it. If you accept this, press OK to go to the page. Otherwise, press Cancel.");
if(cconsent) document.cookie = "cookieconsent=true; expires=Wed, 05 Aug 2040 23:00:00 UTC";
else
window.location.href="about:blank";
</script>';
}

?>
