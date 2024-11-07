CREATE TABLE IF NOT EXISTS `people` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` text NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `relationship` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`older_relative_id` int NOT NULL,
	`younger_relative_id` int NOT NULL,
	`relation_degree_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `relation_degree` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name_degree` text NOT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `relationship` ADD CONSTRAINT `relationship_fk1` FOREIGN KEY (`older_relative_id`) REFERENCES `people`(`id`);

ALTER TABLE `relationship` ADD CONSTRAINT `relationship_fk2` FOREIGN KEY (`younger_relative_id`) REFERENCES `people`(`id`);

ALTER TABLE `relationship` ADD CONSTRAINT `relationship_fk3` FOREIGN KEY (`relation_degree_id`) REFERENCES `relation_degree`(`id`);
