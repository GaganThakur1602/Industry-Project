<?php
    session_destroy();
    header("Location: http://localhost/practice/index.php", TRUE, 302);
?>