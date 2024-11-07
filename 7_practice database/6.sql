CREATE TABLE IF NOT EXISTS `teams` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`team` text NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `players` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`player_name` text NOT NULL,
	`team_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `games` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`owner_id` int NOT NULL,
	`guest_id` int NOT NULL,
	`date` timestamp NOT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `players` ADD CONSTRAINT `players_fk2` FOREIGN KEY (`team_id`) REFERENCES `teams`(`id`);
ALTER TABLE `games` ADD CONSTRAINT `games_fk1` FOREIGN KEY (`owner_id`) REFERENCES `teams`(`id`);

ALTER TABLE `games` ADD CONSTRAINT `games_fk2` FOREIGN KEY (`guest_id`) REFERENCES `teams`(`id`);