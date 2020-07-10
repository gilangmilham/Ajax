create database ajax;

use ajax;

create table siswa(
	id_siswa int primary key auto_increment,
	nis varchar(11) unique not null,
	nama varchar(50) not null
);

insert into siswa values
	('null' , '1001' , 'Asep'),
	('null' , '1002' , 'Ani'),
	('null' , '1003' , 'Arip'),
	('null' , '1004' , 'Budi'),
	('null' , '1005' , 'Cindy'),
	('null' , '1006' , 'Dadi'),
	('null' , '1007' , 'Dani'),
	('null' , '1008' , 'David'),
	('null' , '1009' , 'Ujang'),
	('null' , '1010' , 'VIna');