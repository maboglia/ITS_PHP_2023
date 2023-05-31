
<pre>
<?php

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.0')
    var_dump($_SERVER);
else
    echo 'non puoi entrare';
?>
</pre>