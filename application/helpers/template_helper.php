<?php

function add_assets($pos, $params)
{
    $ci = &get_instance();
    if (!is_array($params)) {
        $params = array($params);
    }
    $ci->config->set_item($pos, $params);
    return;
}
function header_assets($str = '')
{
    $ci = &get_instance();
    $headers = $ci->config->item('header');
    foreach ($headers as $item) {
        $str .= $item . "\n";
    }
    echo $str;
}
