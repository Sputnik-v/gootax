CREATE TABLE IF NOT EXISTS `users` (
	`id` int NOT NULL,
	`user_type_id` int NOT NULL,
	`parse_id` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`logged_in` boolean NOT NULL,
	`token_facebook` varchar(255) NOT NULL,
	`token_twitter` varchar(255) NOT NULL,
	`user_token` varchar(255) NOT NULL,
	`token_expiration` datetime NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `user_schedules` (
	`id` int NOT NULL,
	`user_id` int NOT NULL,
	`goal` varchar(255) NOT NULL,
	`schedule_cloud_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `user_types` (
	`id` int NOT NULL,
	`type` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `user_addresses` (
	`id` int NOT NULL,
	`user_id` int NOT NULL,
	`title` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk1` FOREIGN KEY (`user_type_id`) REFERENCES `user_types`(`id`);
ALTER TABLE `user_schedules` ADD CONSTRAINT `user_schedules_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `user_addresses` ADD CONSTRAINT `user_addresses_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);