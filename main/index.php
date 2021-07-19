<?php

include "connection.php";


 ?>

<?php

if(isset($_POST["button1"]))
{
    



mysqli_query($link, "update customers set curbal= curbal+ $_POST[money] where id = $_POST[cname]" );


}

 ?>



