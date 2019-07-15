<?php

class Utilities {

  /**
   * Constructor
   */
  public function __construct() {}

  public static function isCLI() {
    // Returns TRUE if running from the command line (eg: cron job). Otherwise returns FALSE
    return (php_sapi_name() === 'cli');
  }

  public static function error($error = 'An unknown error occurred!') {
    $error .= PHP_EOL;
    if (self::isCLI()) {
      echo $error;
      exit(1);
    } else {
      die($error);
    }
  }

}
