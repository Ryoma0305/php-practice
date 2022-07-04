<?php
require_once 'dir1/dir2/dir3/AbstractModel.php';

class OperatingSystemsModel extends AbstractModel
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
     * OS名
     */
    private $osName;

    /**
     * OSバージョン
     */
    private $version;

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
     * OS名を取得する
     */
    public function getOsName()
    {
        return $this->osName;
    }

    /**
     * OS名をセットする
     */
    public function setOsName($osName)
    {
        $this->osName = $osName;
    }

    /**
     * OSバージョンを取得する
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * OSバージョンをセットする
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

}
