<?php
// session_start();
session_destroy();
echo ("<script>location.href = '../controller/index.php?action=sign_in';</script>");
