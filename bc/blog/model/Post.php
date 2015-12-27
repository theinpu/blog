<?php

namespace bc\blog\model;

use bc\model\Model;

/**
 * Class Post
 */
class Post extends Model {


    //region Fields

    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $subTitle;
    /**
     * @var string
     */
    private $text;
    /**
     * @var int
     */
    private $createTime;
    /**
     * @var int
     */
    private $status;
    /**
     * @var bool
     */
    private $canComment;

    //endregion

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
        $this->changed();
    }

    /**
     * @return string
     */
    public function getSubTitle() {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     */
    public function setSubTitle($subTitle) {
        $this->subTitle = $subTitle;
        $this->changed();
    }

    /**
     * @return string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text) {
        $this->text = $text;
        $this->changed();
    }

    /**
     * @return int
     */
    public function getCreateTime() {
        return $this->createTime;
    }

    /**
     * @throws \RuntimeException
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime) {
        if(!is_null($this->createTime) && !is_null($this->getId())) throw new \RuntimeException('Changing not allowed');
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status) {
        $this->status = $status;
        $this->changed();
    }

    /**
     * @return bool
     */
    public function getCanComment() {
        return $this->canComment;
    }

    /**
     * @param bool $canComment
     */
    public function setCanComment($canComment) {
        $this->canComment = $canComment;
        $this->changed();
    }

}
