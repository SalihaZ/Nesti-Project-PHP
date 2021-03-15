<?php

echo " LOC : ".$loc. " ; ";
echo " ACTION : ".$action. " ; ";
echo " ID : ".$id. " ; ";
var_dump($_POST);

//Navigation
if (($loc != "connection") && ($loc != "disconnection")) {
    include('navigation.php');
}

//Content 
include(PATH_CTRL . 'controller_content.php');

// Scripts
include('scripts.php'); ?>

</body>

</html>