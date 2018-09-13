<?php

namespace Drupal\webform_d7_to_d8\traits;

use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Database;

/**
 * Wrapper around elements external to the application logic.
 */
trait Environment {

  /**
   * Mockable wrapper around Database::getConnection().
   *
   * @param string $target
   * @param null $key
   *
   * @return \Drupal\Core\Database\Driver\mysql\Connection
   */
  public function drupalGetConnection($target = 'default', $key = NULL): Connection {
    return Database::getConnection($target, $key);
  }

  /**
   * Mockable wrapper around Database::getAllConnectionInfo().
   *
   * @throws \Throwable
   */
  public function getAllConnectionInfo(): array {
    return Database::getAllConnectionInfo();
  }

  /**
   * Mockable wrapper around print().
   */
  public function phpPrint($string) {
    print($string);
  }

  /**
   * Mockable wrapper around print_r().
   */
  public function printR($mixed) {
    print_r($mixed);
  }

  /**
   * Mockable wrapper around t().
   *
   * @param $string
   * @param array $args
   *
   * @return string
   */
  public function t($string, array $args = []): string {
    return t($string, $args);
  }

}
