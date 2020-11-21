CREATE TABLE `cinema`.`movies` ( `movieid` INT(20) NOT NULL AUTO_INCREMENT ,
    `movie_name` VARCHAR(130) NOT NULL , 
    `movie_producer` VARCHAR(30) NOT NULL ,
    `movie_date` DATETIME(6) NOT NULL , 
    `post_name` VARCHAR(130) NOT NULL , 
    `is_active` INT(1) NOT NULL ,
     PRIMARY KEY (`movieid`))
     ENGINE = InnoDB;