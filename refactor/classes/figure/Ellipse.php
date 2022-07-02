<?php

namespace MyApplication\Figure;

require_once dirname(__FILE__) . '/Figure.php';

/**
 * 楕円形を表すクラス
 */
class Ellipse extends Figure
{

    /**
     * コンストラクタ
     * @param int $width 楕円形の幅
     * @param int $height 楕円形の高さ
     * @param string $color 楕円形のカラーコード。RGBの16進数で表す。たとえば「red」なら「#FF0000」となる。
     */
    public function __construct(int $width, int $height, string $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
        $this->draw();
        echo "* 横{$width}、縦{$height}、色{$color}の円形を作りました。<br>";
    }

    /**
     * 楕円形を描画し、$this->dataにバイナリデータを保存する
     */
    protected function draw(): void
    {
        // 何らかの処理
    }

}
