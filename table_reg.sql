CREATE TABLE `petreg`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `login` VARCHAR(64) NOT NULL , `password` VARCHAR(64) NOT NULL , `first_name` TEXT NOT NULL , `last_name` TEXT NOT NULL , `phone` INT NOT NULL , `email` VARCHAR(64) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;