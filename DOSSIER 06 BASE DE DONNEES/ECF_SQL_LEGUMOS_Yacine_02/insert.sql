TRUNCATE TABLE Vegetables CASCADE;
TRUNCATE TABLE Sales CASCADE;

insert into Vegetables (id,Name,variety,PrimaryColor,LifeTime,Fresh)
values (1,'apple','golden','green',90,0),
        (2,'banana','cavendish','yellow',10,0),
        (3,'blueberries','bluecrop','green',8,0),
        (4,'cabbage','broccoli','green',60,0),
        (5,'carrot','de colmar','orange',60,0),
        (6,'cherry','moreau','darkred',20,0),
        (7,'coconut','palmyre','brown',30,0),
        (8,'grape','aladin','green',10,0),
        (9,'kiwi','hayward','green',40,0),
        (10,'lemon','eureka','green',30,0),
        (11,'onion','Stuttgart','white',90,0);
		
insert into Sales(Saleld,SaleDate,SaleWeight,SaleUnitPrice,SaleActive,id)

values (1,'2001-01-12',10,2.5,1,1),
       (2,'2002-02-13',10,3.99,0,2),
       (3,'2003-03-14',10,2.99,1,3),
       (4,'2004-04-15',10,2.99,0,3),
       (5,'2005-05-16',10,1.59,0,5),
       (6,'2006-06-17',10,1.99,0,6),
       (7,'2007-07-18',10,3.95,1,7),
       (8,'2008-08-19',10,1.95,1,8),
       (9,'2009-09-20',10,2.45,1,9),
       (10,'2010-10-21',10,3.15,1,10),
       (11,'2011-11-22',10,1.25,1,11);
		