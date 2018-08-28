<?php

/**
 * Abstract class
 */
abstract class AbstractDisplay
{
  /**
   * 表示するデータ
   */
  private $data;

  /**
   * コンストラクタ
   */
  public function __construct($data)
  {
    if (!is_array($data)) {
      $data = array($data);
    }
    $this->data = $data;
  }

  /**
   * template methodに相当
   */
  public function display()
  {
    $this->displayHeader();
    $this->displayBody();
    $this->displayFooter();
  }

  /**
   * データを取得
   */
  public function getData()
  {
    return $this->data;
  }

  /**
   * ヘッダーを表示
   * サブクラスに実装を任せる抽象メソッド
   */
  protected abstract function displayHeader();

  /**
   * ボディを表示
   * サブクラスに実装を任せる抽象メソッド
   */
  protected abstract function displayBody();

  /**
   * フッターを表示
   * サブクラスに実装を任せる抽象メソッド
   */
  protected abstract function displayFooter();

}