<?php


namespace Opalkor\HtmlParser;

require_once 'simple_html_dom.php';

class HtmlParser {

    /**
     * @return \simple_html_dom.php
     */
    static public function file() {
        return call_user_func_array ( '\file_get_html' , func_get_args() );
    }

    /**
     * @return \simple_html_dom.php
     */
    static public function string() {
        return call_user_func_array ( '\str_get_html' , func_get_args() );
    }
}
