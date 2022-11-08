<?php
    session_start();
    session_destroy();
    echo "Logging You out.Please wait...";
    header("Location: /forum");
?>