<?php
require 'prepend.inc';
setcookie("MAGIC_COOKIE","",time()-3600,'/','.php.net');
setcookie("MAGIC_COOKIE","",time()-3600,'/');
commonHeader("Logout");
?>
<p>You've been logged out.</p>
<?php
commonFooter();