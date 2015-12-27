<?php

namespace bc\blog\model;

use bc\model\IBuilder;

/**
 * Class PostBuilder
 */
class PostBuilder implements IBuilder {


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
     * @param string $title
     *
     * @return PostBuilder
     */
    public function title($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $subTitle
     *
     * @return PostBuilder
     */
    public function subTitle($subTitle) {
        $this->subTitle = $subTitle;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return PostBuilder
     */
    public function text($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * @param int $createTime
     *
     * @return PostBuilder
     */
    public function createTime($createTime) {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * @param int $status
     *
     * @return PostBuilder
     */
    public function status($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * @param bool $canComment
     *
     * @return PostBuilder
     */
    public function canComment($canComment) {
        $this->canComment = $canComment;

        return $this;
    }

    /**
     * @return PostBuilder
     */
    public static function create() {
        return new self();
    }

    /**
     * @throws \InvalidArgumentException
     * @return Post
     */
    public function build() {
        if(is_null($this->title)) {
            throw new \InvalidArgumentException('Need to set title');
        }
        if(is_null($this->text)) {
            throw new \InvalidArgumentException('Need to set text');
        }
        if(is_null($this->createTime)) {
            throw new \InvalidArgumentException('Need to set createTime');
        }
        if(is_null($this->status)) {
            throw new \InvalidArgumentException('Need to set status');
        }
        $item = new Post();
        $item->setTitle($this->title);
        $item->setSubTitle($this->subTitle);
        $item->setText($this->text);
        $item->setCreateTime($this->createTime);
        $item->setStatus($this->status);
        $item->setCanComment($this->canComment);

        return $item;
    }

}
