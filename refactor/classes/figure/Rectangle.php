<?php

namespace MyApplication\Figure;

require_once dirname(__FILE__) . '/Figure.php';

/**
 * 四角形を表すクラス
 */
class Rectangle extends Figure
{

    /**
     * コンストラクタ
     * @param int $width 四角形の幅
     * @param int $height 四角形の高さ
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * 図形の角を丸くする
     * @param int $radius 角丸の半径
     */
    public function round(int $radius)
    {
        return $this->data;
    }

    /**
     * 図形を描画し、$this->dataにバイナリデータを保存する
     */
    protected function draw(): void
    {
        // 何らかの処理
    }
}
