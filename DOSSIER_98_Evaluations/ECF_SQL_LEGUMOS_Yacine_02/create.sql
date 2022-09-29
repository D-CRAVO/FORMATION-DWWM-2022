DROP TABLE IF EXISTS Vegetables CASCADE;
DROP TABLE IF EXISTS Sales CASCADE;

/*
CREATE TABLE Vegetables(
    id int,
    Name varchar(50) not null,
    variety varchar(50)not null,
    PrimaryColor varchar(20),
    LifeTime int not null,
    Fresh int not null,
    PRIMARY KEY (id)
);
*/

CREATE TABLE Vegetables(
    id int NOT NULL UNIQUE,
    Name varchar(50) not null,
    variety varchar(50)not null,
    PrimaryColor varchar(20),
    LifeTime int not null,
    Fresh int not null,
    PRIMARY KEY (id)
);

CREATE TABLE Sales(
    Saleld int,
    SaleDate date not null,
    SaleWeight int not null,
    SaleUnitPrice decimal(5,2) not null,
    SaleActive int not null,
	id int not null,
    PRIMARY KEY (Saleld),
    FOREIGN KEY (id) references Vegetables(id)
)