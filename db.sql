
create table informations (id int(8) primary key auto_increment, Name varchar(32), Email varchar(32), Age int(8), Phone varchar(32), gender ENUM("MALE","FEMALE"));
 
 alter table informations add (password varchar(32));