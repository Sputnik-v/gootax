CREATE TABLE IF NOT EXISTS `users` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `messages` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`from_id` int NOT NULL,
	`to_id` int NOT NULL,
	`message` text NOT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `messages` ADD CONSTRAINT `messages_fk1` FOREIGN KEY (`from_id`) REFERENCES `users`(`id`);

ALTER TABLE `messages` ADD CONSTRAINT `messages_fk2` FOREIGN KEY (`to_id`) REFERENCES `users`(`id`);