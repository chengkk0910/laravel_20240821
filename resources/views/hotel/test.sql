CREATE TABLE `test`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '姓名',
    `age` INT NULL DEFAULT '0' COMMENT '年齡',
    `birthday` DATE NULL DEFAULT '2020-01-01' COMMENT '生日',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE `test`.`students` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '姓名',
    `name1` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '姓名',
    `name2` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '姓名',
    `name3` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '' COMMENT '姓名',
    `age` INT NULL DEFAULT '0' COMMENT '年齡',
    `age1` INT NULL DEFAULT '0' COMMENT '年齡',
    `age2` INT NULL DEFAULT '0' COMMENT '年齡',
    `birthday` DATE NULL DEFAULT '2020-01-01' COMMENT '日期',
    `birthday3` DATE NULL DEFAULT '2020-01-01' COMMENT '日期',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;