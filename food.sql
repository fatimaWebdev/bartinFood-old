CREATE TABLE food (
	a_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    a_doner varchar(265) not null ,
    a_Burger varchar(265) not null ,
    a_kahvalti varchar(265) not null ,
    a_Pizza varchar(265) not null ,
    a_cigKofte varchar(265) not null ,
    a_Cafe varchar(265) not null ,
    a_Balik varchar(265) not null ,
    a_pide varchar(265) not null ,
    a_lahmacun varchar(265) not null 

  
);
/*

CREATE TABLE food (
	a_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    a_doner varchar(265) not null ,
    a_Burger varchar(265) not null ,
    a_kahvalti varchar(265) not null ,
    a_Pizza varchar(265) not null ,
    a_cigKofte varchar(265) not null ,
    a_Cafe varchar(265) not null ,
    a_Balik varchar(265) not null ,
    a_pide varchar(265) not null ,
    a_lahmacun varchar(265) not null 

  
);



CREATE TABLE search1 (
	a_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    a_tıtle varchar(265) not null ,
    a_title varchar(265) not null 
    );
*/

INSERT into food (a_doner ,a_Burger ,a_kahvalti, a_Pizza ,a_cigKofte, a_Cafe , a_Balik , a_pide ,a_lahmacun )
VALUES ('doner' , 'Burger' , 'kahvaltı', 'Pizza' , ' ÇiğKöfte ' , 'Cafe' , 'Balık' , 'pide' , 'lahmacun' );

INSERT into food (a_doner ,a_Burger ,a_kahvalti, a_Pizza ,a_cigKofte, a_Cafe , a_Balik , a_pide ,a_lahmacun ) 
VALUES ('Döner' , 'Burger' , 'kahvalti', 'Pızza' , ' Cigkofte ' , 'Kafe' , 'Balik' , 'Pıde' , 'Lahmacün' );

/* pizza */
INSERT into food (a_Pizza) 
VALUES ('Dominos pizza ');

INSERT into food (a_Pizza) 
VALUES ('Pasaport pizza');

INSERT into food (a_Pizza) 
VALUES ('pizza Fetta');

/* burger */
INSERT into food (a_Burger) 
VALUES (' Burger King ');

INSERT into food (a_Burger) 
VALUES ('Burger Evi');

INSERT into food (a_Burger) 
VALUES (' Naddet Burger ');

INSERT into food (a_Burger) 
VALUES (' MAŞHA BURGER ');

INSERT into food (a_Burger) 
VALUES (' FACE FOOD ');

