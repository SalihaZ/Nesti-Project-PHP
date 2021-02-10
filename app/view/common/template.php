<?php

// Head
include(PATH_COMMON . 'head.php');

//Navigation
if ($loc != "login") {

    include('navigation.php');
}

//Content 
include(PATH_CTRL . 'controller_content.php');

?>

</body>

</html>