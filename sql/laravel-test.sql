create table users (id int not null auto_increment, username varchar(255) not null, password varchar(255) not null, primary key (id));
create table movies (id int not null auto_increment, imdb_id varchar(255) not null, name varchar(255) not null, primary key (id));
create table user_movie (user_id int, movie_id int, status char(1));


insert into users (id, username, password) values (1, 'marie_binion', 'secret1');
insert into users (id, username, password) values (2, 'paul_mercal', 'secret2');
insert into users (id, username, password) values (3, 'john34', 'secret3');

insert into movies (id, imdb_id, name) values (1, 'tt0110912', 'Pulp Fiction');
insert into movies (id, imdb_id, name) values (2, 'tt0099685', 'Uno de los nuestros');
insert into movies (id, imdb_id, name) values (3, 'tt0102926', 'El silencio de los corderos');
insert into movies (id, imdb_id, name) values (4, 'tt0081505', 'El resplandor');
insert into movies (id, imdb_id, name) values (5, 'tt0169547', 'American Beauty');
insert into movies (id, imdb_id, name) values (6, 'tt0268978', 'Una mente maravillosa');
insert into movies (id, imdb_id, name) values (7, 'tt0405159', 'Million Dollar Baby');

insert into user_movie (user_id, movie_id, status) values (1, 1, 's');
insert into user_movie (user_id, movie_id, status) values (1, 2, 's');
insert into user_movie (user_id, movie_id, status) values (2, 2, 'p');
insert into user_movie (user_id, movie_id, status) values (1, 3, 's');
insert into user_movie (user_id, movie_id, status) values (3, 1, 'n');
insert into user_movie (user_id, movie_id, status) values (2, 4, 'n');
insert into user_movie (user_id, movie_id, status) values (1, 5, 's');
insert into user_movie (user_id, movie_id, status) values (2, 7, 'p');


select users.id, username, movies.name from users, user_movie, movies where user_movie.user_id = id and ;


select distinct users.id as user_id, username, movies.* from users, user_movie, movies where user_movie.user_id = users.id order by users.id;
