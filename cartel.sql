#drop database if exists cartel;
#create database cartel character set utf8 collate utf8_croatian_ci;
#use cartel;

#za potrebe byet hosting
ALTER DATABASE CHARACTER SET utf8 COLLATE utf8_unicode_ci;

create table autor(
sifra				int					not null primary key auto_increment,
email				varchar(100)		not null,
password			varchar(32)			not null,
ime					varchar(15)			not null,
prezime				varchar(25)			not null
);

create table post(
sifra				int					not null primary key auto_increment,
naslov				varchar(150)		not null,
clanak				varchar(2000)		null,
privitak			varchar(200)		null,			
datumObjave			datetime			not null,
autor_sifra			int					not null,
vidljivPost			boolean				not null
);

create table tag(
sifra				int					not null primary key auto_increment,
naziv				varchar(45)			not null
);

create table tag_post(
sifra_post					int					not null,
sifra_tag					int					not null
);

alter table post add foreign key (autor_sifra) references autor(sifra);
alter table tag_post add foreign key (sifra_post) references post(sifra);
alter table tag_post add foreign key (sifra_tag) references tag(sifra);


#select * from autor;

insert into autor (email, password, ime, prezime) values
#1
('bpetrij3@gmail.com', md5('bp'), 'Barbara', 'Petrijevčanin'),
#2
('apetrij4@gmail.com', md5('ap'), 'Ana', 'Vujanić'),
#3
('imunimatea@gmail.com', md5('ms'), 'Matea', 'Šimunić'),
#4
('andrej.vrdoljak@gmail.com', md5('av'), 'Andrej', 'Vrdoljak'),
#5
('denis.bubalo@gmail.com', md5('db'), 'Denis', 'Bubalo'),
#6
('ivan.gregor@gmail.com', md5('ivangregor121'), 'Ivan', 'Gregor');

#select * from post;

insert into post (sifra, naslov, clanak, privitak, datumObjave, autor_sifra, vidljivPost) values
#1
(null, 'A Sticky Post', null, 'img/stickyarticle.jpg', '2013-09-05', 1, 1),
#2
(null, 'Photo Post', null, 'img/photos.jpg', '2013-09-06', 2, 1),
#3
(null, 'A Youtube Post', null, 'https://www.youtube.com/embed/9D-QD_HIfjA', '2013-09-06', 3, 1),
#4
(null, 'A Slider Post', null, 'img/slider.jpeg', '2013-09-06', 3, 1),
#5
(null, 'A Vimeo Post', null, null, '2013-09-06', 4, 1),
#6
(null, 'A Regular Post', null, null, '2013-09-06', 5, 1);

#select * from tag;

insert into tag (sifra, naziv) values
#1
(null, 'Art'),
#2
(null, 'Design'),
#3
(null, 'Fashion Wear'),
#4
(null, 'Filmography'),
#5
(null, 'Illustration'),
#6
(null, 'Photography');

#select * from tag_post;

insert into tag_post (sifra_post, sifra_tag) values
#1
(1,1),
#2
(2,2),
#3
(3,3),
#4
(4,4),
#5
(5,5),
#6
(6,6);


select a.ime, a.prezime, b.naslov as post
from autor a inner join post b
on a.sifra=b.autor_sifra
order by 2;

select a.naslov, a.clanak, b.naziv as tag
from post a inner join tag b
on a.sifra=b.sifra;