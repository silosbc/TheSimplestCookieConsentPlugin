<?php
if(!(str_contains(strtolower($_SERVER['HTTP_USER_AGENT']),strtolower('google'))||str_contains(strtolower($_SERVER['HTTP_USER_AGENT']),strtolower('bing'))))
{
if($_COOKIE['cookieconsent']!='true')
echo '<script type="text/javascript" >
var cconsent=confirm("Witaj! Wygląda na to, że ta strona używa plików cookie niezbędnych do zapewnienia jej prawidłowego działania oraz plików cookie do śledzenia, aby zrozumieć, w jaki sposób z nią współdziałasz. Jeśli akceptujesz to, wciśnij OK aby przejść do strony. W przeciwnym wypadku wciśnij Cancel (Anuluj).");
if(cconsent) document.cookie = "cookieconsent=true; expires=Wed, 05 Aug 2040 23:00:00 UTC";
else
window.location.href="about:blank";
</script>';
}

?>
