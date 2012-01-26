
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- Users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Posts
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Posts`;

CREATE TABLE `Posts`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(70) NOT NULL,
	`userId` INTEGER NOT NULL,
	`priceFrom` INTEGER(6) NOT NULL,
	`priceTo` INTEGER(6) NOT NULL,
	`yearFrom` INTEGER(4),
	`yearTo` INTEGER(4),
	`carMakeId` INTEGER NOT NULL,
	`carModelId` INTEGER NOT NULL,
	`transmission` VARCHAR(255) NOT NULL,
	`tradein` INTEGER(1) NOT NULL,
	`comment` VARCHAR(1000) NOT NULL,
	`submitted` INTEGER(11) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
