CREATE  DATABASE CALC_MEDIA_PROJ;

CREATE TABLE ALUNO(
    IDALUNO INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(30) NOT NULL,
    NOTA_1 VARCHAR(10) NOT NULL,
     NOTA_2 VARCHAR(10) NOT NULL,
      NOTA_3 VARCHAR(10) NOT NULL,
       NOTA_4 VARCHAR(10) NOT NULL,
        NOTA_5 VARCHAR(10) NOT NULL,
        MEDIA VARCHAR(10) NOT NULL);






CREATE TABLE NOTAS(
    IDNOTAS INT PRIMARY KEY AUTO_INCREMENT,
    NOTA_1 VARCHAR(10) NOT NULL,
     NOTA_2 VARCHAR(10) NOT NULL,
      NOTA_3 VARCHAR(10) NOT NULL,
       NOTA_4 VARCHAR(10) NOT NULL,
        NOTA_5 VARCHAR(10) NOT NULL);


      

