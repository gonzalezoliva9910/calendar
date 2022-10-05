<?php
function response($code, $msg, $obj)
{
    header("Content-Type: application/json");
    echo  json_encode(array(
        "code" => $code,
        "msg" => $msg,
        "obj" => $obj,
    ),true);
}

/**  
0 -> server error
1 -> OK
2 -> not found
3 -> request error 

 **/
