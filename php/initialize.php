<?php

Define('DOMAINNAME', "http://" . $_SERVER['HTTP_HOST'] . "/php_day7_session/");

function at_public()
{

    return DOMAINNAME . "public/";
}

function at_root()
{

    return DOMAINNAME;
}

?>