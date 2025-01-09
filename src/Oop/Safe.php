<?php

function jdecode($json, $assoc = false)
{
    return json_decode($json, $assoc);

}