create table users (
    id int auto_increment primary key,
    name varchar(20) unique,
    passwd varchar(200) not null,
    email varchar(200) unique,
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
values ('bidkar', sha('123'), 'bidkar.aragon@udo.mx', 'Bidkar', 'Aragon');

update users
set firstname = 'Nombres',
    lastname = 'Apellidos'
where id = 1; 