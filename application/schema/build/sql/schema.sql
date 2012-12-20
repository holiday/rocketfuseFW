
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
	`user_id` INTEGER NOT NULL,
	`priceFrom` INTEGER NOT NULL,
	`priceTo` INTEGER NOT NULL,
	`yearFrom` INTEGER(4),
	`yearTo` INTEGER(4),
	`car_make_id` INTEGER NOT NULL,
	`car_model_id` INTEGER NOT NULL,
	`transmission` VARCHAR(255) NOT NULL,
	`tradeIn` INTEGER(1) NOT NULL,
	`postType` VARCHAR(4) NOT NULL,
	`comment` VARCHAR(1000) NOT NULL,
	`dateSubmitted` INTEGER(10) NOT NULL,
	`activation` VARCHAR(40),
	`active` TINYINT(1) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `Posts_FI_1` (`user_id`),
	INDEX `Posts_FI_2` (`car_make_id`),
	INDEX `Posts_FI_3` (`car_model_id`),
	CONSTRAINT `Posts_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `Users` (`id`),
	CONSTRAINT `Posts_FK_2`
		FOREIGN KEY (`car_make_id`)
		REFERENCES `CarMakes` (`id`),
	CONSTRAINT `Posts_FK_3`
		FOREIGN KEY (`car_model_id`)
		REFERENCES `CarModels` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Dealers
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Dealers`;

CREATE TABLE `Dealers`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`shopName` VARCHAR(100) NOT NULL,
	`email` VARCHAR(300) NOT NULL,
	`password` VARCHAR(40) NOT NULL,
	`clearance` INTEGER(1) NOT NULL,
	`streetName` VARCHAR(100) NOT NULL,
	`streetNumber` VARCHAR(5) NOT NULL,
	`postal` VARCHAR(7) NOT NULL,
	`city` VARCHAR(80) NOT NULL,
	`phone` VARCHAR(12) NOT NULL,
	`fax` VARCHAR(12) NOT NULL,
	`website` VARCHAR(500) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- CarMakes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `CarMakes`;

CREATE TABLE `CarMakes`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`make` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- CarModels
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `CarModels`;

CREATE TABLE `CarModels`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`make_id` INTEGER NOT NULL,
	`model` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `CarModels_FI_1` (`make_id`),
	CONSTRAINT `CarModels_FK_1`
		FOREIGN KEY (`make_id`)
		REFERENCES `CarMakes` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Admins
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Admins`;

CREATE TABLE `Admins`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(100) NOT NULL,
	`password` VARCHAR(40) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
