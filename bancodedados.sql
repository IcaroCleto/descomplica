create table pessoas (
    id int primary key not null auto_increment,
    nome varchar(50),
    email varchar(50),
    data_cad DATETIME,
    ip varchar(30)
);