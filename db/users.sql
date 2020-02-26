create table users (
    id int auto_increment primary key,
    name varchar(20) unique,
    passwd varchar(100) not null,
    email varchar(120) unique,
    remember_token varchar(200) default null
);

alter table users
    add column firstname varchar(50) not null,
    add column lastname varchar(50) not null
;

alter table users
    modify column name varchar(20) not null unique,
    modify column email varchar(200) not null unique
;

insert into users (name, passwd, email, firstname, lastname)
values ('jissan', sha('123'), 'teza2000@hotmail.com', 'jissan', 'luna');

update users
set firstname = 'jissan',
    lastname = 'luna'
where id = 1;

create user 'jissan'@'localhost' identified by '123';
grant all on demo.* to 'jissan'@'localhost';