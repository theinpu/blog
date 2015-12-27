DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id`         INT          NOT NULL AUTO_INCREMENT,
  `title`      VARCHAR(200) NOT NULL,
  `subTitle`   TEXT,
  `text`       TEXT         NOT NULL,
  `createTime` INT(11)      NOT NULL,
  `status`     INT(1)       NOT NULL DEFAULT 0,
  `canComment` INT(1)                DEFAULT 1,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;