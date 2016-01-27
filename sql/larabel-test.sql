create table users (id int, username varchar(255), password varchar(255));
create table movies (id int, imdb_id varchar(255), name varchar(255));
create table user_movie (user_id int, movie_id int, status char(1));


insert into users (id, username, password) values (1, 'marie_binion', 'secret1');
insert into users (id, username, password) values (2, 'paul_mercal', 'secret2');
insert into users (id, username, password) values (3, 'john34', 'secret3');

insert into movies (id, imdb_id, name) values (1, 'tt0110912', 'Pulp Fiction');
insert into movies (id, imdb_id, name) values (2, 'tt0099685', 'Uno de los nuestros');
insert into movies (id, imdb_id, name) values (3, 'tt0102926', 'El silencio de los corderos');
insert into movies (id, imdb_id, name) values (4, 'tt0081505', 'El resplandor');
insert into movies (id, imdb_id, name) values (5, 'tt0169547', 'American Beauty');
insert into movies (id, imdb_id, name) values (5, 'tt0268978', 'Una mente maravillosa');
insert into movies (id, imdb_id, name) values (5, 'tt0405159', 'Million Dollar Baby');

insert into user_movie (user_id, movie_id, status) values (1, 1, 's');
insert into user_movie (user_id, movie_id, status) values (1, 2, 's');
insert into user_movie (user_id, movie_id, status) values (2, 2, 'p');
insert into user_movie (user_id, movie_id, status) values (1, 3, 's');
insert into user_movie (user_id, movie_id, status) values (3, 1, 'n');
insert into user_movie (user_id, movie_id, status) values (2, 4, 'n');
insert into user_movie (user_id, movie_id, status) values (1, 5, 's');
insert into user_movie (user_id, movie_id, status) values (2, 7, 'p');
