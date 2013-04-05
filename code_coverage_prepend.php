<?php
// REF: http://shiftlock.wordpress.com/2009/11/01/standalone-php-code-coverage-without-phpunit/
function __code_coverage_xdebug_stop(){
    //$data = xdebug_get_code_coverage();
    //xdebug_stop_code_coverage();
    
    include_once 'code_coverage_class.php';
    $code_coverage = new code_coverage('code_coverage.var','code_coverage_reports/');
    $code_coverage->code_coverage_analysis_save();
    $code_coverage->code_coverage_reports();
}

if (function_exists('xdebug_start_code_coverage')){
    xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);
    register_shutdown_function('__code_coverage_xdebug_stop');
}