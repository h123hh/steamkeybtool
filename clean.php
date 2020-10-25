<?php
//定时运行该文件以清理缓存
array_map('unlink', glob('./keytxt/*.txt'));
?>