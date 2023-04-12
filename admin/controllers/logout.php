<?php
session_start();
session_destroy();
echo ("<script>location.href = '../../site/controller/index.php?action=sign_in';</script>");
