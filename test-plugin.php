<?php

/**
* Plugin Name: Test plugin
* Plugin URI: https://pythonchannel.com
* Description: テスト用のプラグイン
* Version: 1.0.0
* Author: oshimamasara
* Author URI: https://pythonchannel.com
* License: GPL2
*/

add_shortcode('test', 'test_function');

function test_function()
{
    return "プラグインのテスト";
}

?>