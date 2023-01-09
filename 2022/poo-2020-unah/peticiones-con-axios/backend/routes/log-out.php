<?php
    sleep(2);
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../../frontend/index.html');
?>