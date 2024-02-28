
CREATE TABLE Furnizori(

    IDF varchar (10) NOT NULL,
    NUMEF varchar (10) NOT NULL,
    STARE int NOT NULL,
    ORAS varchar (10) NOT NULL);


CREATE TABLE Componente(

    IDC varchar (10) NOT NULL,
    NUMEC varchar (10) NOT NULL,
    CULOARE varchar (10) NOT NULL,
    MASA int NOT NULL,
    ORAS varchar (10) NOT NULL);
    
CREATE TABLE Proiecte(

    IDP varchar (10) NOT NULL,
    NUMEP varchar (10) NOT NULL,
    ORAS varchar (10) NOT NULL);
    
    
CREATE TABLE Livrari(

    IDF varchar (10) NOT NULL,
    IDP varchar (10) NOT NULL,
    IDC varchar (10) NOT NULL,
    CANTITATE int NOT NULL);

ALTER TABLE Furnizori ADD CONSTRAINT PK_Furnizori PRIMARY KEY(IDF);
ALTER TABLE Componente ADD CONSTRAINT PK_Componente PRIMARY KEY(IDC);
ALTER TABLE Proiecte ADD CONSTRAINT PK_Proiecte PRIMARY KEY(IDP);
ALTER TABLE Livrari ADD CONSTRAINT PK_Livrari PRIMARY KEY(IDF,IDC,IDP);


ALTER TABLE Livrari ADD CONSTRAINT FK_Furnizori_Livrari FOREIGN KEY(IDF) REFERENCES Furnizori(IDF);
ALTER TABLE Livrari ADD CONSTRAINT FK_Componente_Livrari FOREIGN KEY(IDC) REFERENCES Componente(IDC);
ALTER TABLE Livrari ADD CONSTRAINT FK_Proiecte_Livrari FOREIGN KEY(IDP) REFERENCES Proiecte(IDP);
ALTER TABLE Livrari ADD um varchar (10) NOT NULL;




insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F1','NVIDIA','1','BUCURESTI');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F2','AMD','2','BAIA MARE');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F3','INTEL','3','CLUJ');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F4','RADEON','4','CRAIOVA');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F5','DACIA','5','MIOVENI');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F7','PAGINI','7','Blaj');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F8','MAPE','8','Lugoj');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F9','SCHNEIDER','8','Timisoara');
insert into Furnizori(IDF,NUMEF,STARE,ORAS) values('F10','PIGNA','10','Bacau');




insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C1','PROCESOR','albastru','20','Cluj');
insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C2','GRAPHIC','rosu','100','BRASOV');
insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C3','SOCKET','alb','25','IASI');
insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C4','THREADS','negru','15','PITESTI');
insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C9','STILOURI','galben','15','Timisoara');
insert into Componente(IDC,NUMEC,CULOARE,MASA,ORAS) values('C10','CAIETE','verde','85','Bacau');

insert into PROIECTE(IDP,NUMEP,ORAS) values ('P1','HARDWARE','TULCEA');
insert into PROIECTE(IDP,NUMEP,ORAS) values ('P2','SOFTWARE','BAIA SPRIE');
insert into PROIECTE(IDP,NUMEP,ORAS) values ('P3','BAZA DATE','SOMCUTA');
insert into PROIECTE(IDP,NUMEP,ORAS) values ('P9','SCRIERI','Timisoara');
insert into PROIECTE(IDP,NUMEP,ORAS) values ('P10','CITIRI','Bacau');

insert into Livrari (IDF,IDP,IDC,CANTITATE,UM) values ('F1','P1','C2','100','GHZ');
insert into Livrari (IDF,IDP,IDC,CANTITATE,UM) values ('F2','P2','C2','100','GHZ');
insert into Livrari (IDF,IDP,IDC,CANTITATE,UM) values ('F3','P1','C1','200','GHZ');
insert into Livrari (IDF,IDP,IDC,CANTITATE,UM) values ('F9','P9','C1','300','K');
insert into Livrari (IDF,IDP,IDC,CANTITATE,UM) values ('F10','P10','C10','500','Y');



CREATE PROCEDURE int3a()
SELECT *FROM Furnizori
WHERE ORAS LIKE '%j%'
ORDER BY NUMEF;



