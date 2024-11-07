CREATE TABLE IF NOT EXISTS `reservoirs_type` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`reservoir` text NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `reservoirs` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`name` text NOT NULL,
	`type_id` int NOT NULL,
	`flows_into_id` int NOT NULL,
	PRIMARY KEY (`id`)
);


ALTER TABLE `reservoirs` ADD CONSTRAINT `reservoirs_fk2` FOREIGN KEY (`type_id`) REFERENCES `reservoirs_type`(`id`);



-- id - первичный ключ водоёма
-- id_type - ключ типа водоёма, ссылается на таблицу "тип_водоёма"
-- id_flows_into - куда впадает (не впадает - null), ссылается на саму таблицу "водоёмы"
-- name - название водоёма
--
-- отдельную таблица "тип_водоёма":
--
-- id - первичный ключ типа водоёма
-- name - название типа водоёма