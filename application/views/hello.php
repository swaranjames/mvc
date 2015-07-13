<?php

echo "Welcome";
echo $hello;

foreach($getallUser as $user)
{
    echo $user->id;
}

echo "</br>user id: ".$userfetch[0]->username;

?>