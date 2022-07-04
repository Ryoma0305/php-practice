<?php
require_once 'dir1/dir2/dir3/AbstractModel.php';

class ComputersModel extends AbstractModel
{
    /**
     * ID
     */
    private $id;

    /**
     * 作成日時
     */
    private $created;

    /**
     * 変更日時
     */
    private $modified;

    /**
     * 製品No
     */
    private $productNumber;

    /**
     * OS種別ID
     */
    private $operatingSystemId;

    /**
     * CPU名
     */
    private $cpu;

    /**
     * メモリ容量(単位：G)
     */
    private $memory;

    /**
     * 価格
     */
    private $price;

    /**
     * IDを取得する
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * IDをセットする
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * 作成日時を取得する
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * 作成日時をセットする
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * 変更日時を取得する
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * 変更日時をセットする
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * 製品Noを取得する
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * 製品Noをセットする
     */
    public function setProductNumber($productNumber)
    {
        $this->productNumber = $productNumber;
    }

    /**
     * OS種別IDを取得する
     */
    public function getOperatingSystemId()
    {
        return $this->operatingSystemId;
    }

    /**
     * OS種別IDをセットする
     */
    public function setOperatingSystemId($operatingSystemId)
    {
        $this->operatingSystemId = $operatingSystemId;
    }

    /**
     * CPU名を取得する
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * CPU名をセットする
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * メモリ容量(単位：G)を取得する
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * メモリ容量(単位：G)をセットする
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * 価格を取得する
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 価格をセットする
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

}
