<?php
//include this code between the <head></head> tags or just after the <body> tag
if(empty($_COOKIE['thesimplestcookieconsentplugin']))
echo '<script type="text/javascript" >
var cconsent=confirm("Hello! This site appears to use cookies necessary to ensure its proper functioning and tracking cookies to understand how you interact with it. If you accept this, press OK to go to the page. Otherwise, press Cancel.");
if(cconsent) document.cookie = "thesimplestcookieconsentplugin=accepted; expires=Wed, 05 Aug 2100 23:00:00 UTC";
else
window.location.href="about:blank";
</script>';


?>
