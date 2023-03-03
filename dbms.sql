//create the table users

create table users (
	id int(30) not null AUTO_INCREMENT PRIMARY KEY,
    name varchar(1000) not null,
    email varchar(1000) not null,
    password varchar(1000) not null
);