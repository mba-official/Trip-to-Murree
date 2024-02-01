<?php

session_start();

session_unset('loggedIn');

session_destroy;


header:('Location: admin_data.php')

?>