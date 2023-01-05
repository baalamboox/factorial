CREATE DATABASE IF NOT EXISTS factorial;
USE factorial;
CREATE TABLE IF NOT EXISTS users_table(
    `user_email` VARCHAR(64) NOT NULL PRIMARY KEY,
    `user_names` VARCHAR(32) NOT NULL,
    `user_first_surname` VARCHAR(16) NOT NULL,
    `user_second_surname` VARCHAR(16) NOT NULL,
    `user_password` VARCHAR(8) NOT NULL
) ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS factorial_table(
    `factorial_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_email` VARCHAR(64) NOT NULL,
    `factorial_proccess` VARCHAR(255) NOT NULL,
    `factorial_result` INT
) ENGINE = InnoDB;
ALTER TABLE factorial_table ADD FOREIGN KEY (user_email) REFERENCES users_table(user_email) ON UPDATE CASCADE ON DELETE CASCADE;
