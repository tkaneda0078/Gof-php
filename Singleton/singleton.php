<?php

class Singleton
{
  /**
   * ID
   */
  private $id;

  /**
   * インスタンス
   */
  private static $instance;

  /**
   * Singleton constructor.
   *
   * Singletonクラス以外からインスタンスを禁止
   */
  private function __construct()
  {
    $this->id = date('r');
  }

  /**
   * インスタンスを返す
   *
   * @return Singletonインスタンス
   */
  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new Singleton();
      echo 'singleton classをインスタンス化';
    }

    return self::$instance;
  }

  /**
   * IDを返す
   *
   * @return int ID
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * このインスタンスの複製を許可しないようにする
   */
  public final function __clone()
  {
    throw new RuntimeException('clone is not allowed against' . get_class($this));
  }

}