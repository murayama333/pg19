create table message (
  id int primary key auto_increment,
  text varchar(255),
  created_at datetime default current_timestamp
);

insert into message (text) values('Hello World!');