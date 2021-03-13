<?php

echo "LOC : ".$loc. " ; ";
echo "ACTION : ".$action. " ; ";
echo "ID : ".$id. " ; ";
// var_dump("POST : ".$_POST. " ; ");
var_dump($_POST);

//Navigation
if (($loc != "connection") && ($loc != "disconnection")) {
    include('navigation.php');
}

//Content 
include(PATH_CTRL . 'controller_content.php');

?>

</body>

<!-- Add all my scripts -->
<script type="text/javascript" src=" <?php echo PATH_JS ?>recipes-create.js"></script>
<script type="text/javascript" src=" <?php echo PATH_JS ?>users-create.js"></script>

</html>