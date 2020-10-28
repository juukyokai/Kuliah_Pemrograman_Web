/*=========================================*/
/* DBMS     Rabu, 2020-10-28  20:51:50     */
/*=========================================*/

/*=========================================*/
/*            CLEANING DB SPACE            */
/*=========================================*/

DROP TABLE IF EXISTS profil;
DROP TABLE IF EXISTS skill;
DROP TABLE IF EXISTS education;

/*=========================================*/
/*        CREATING TABLE profil            */
/*=========================================*/
CREATE TABLE profil(
    NPM bigint(11) NOT NULL,
    NAMA varchar(255) NOT NULL,
    ALAMAT varchar(255),
    TELP bigint(11),
    MAIL varchar(255),
    GITHUB varchar(255),
    CONSTRAINT  PK_PROFIL PRIMARY KEY (NPM) 
);

/*=========================================*/
/*        CREATING TABLE skill             */
/*=========================================*/
CREATE TABLE skill(
    ID int NOT NULL AUTO_INCREMENT,
    NAMA varchar(255),
    JENIS varchar(255),
    MASTERY int,
    CONSTRAINT PK_SKILL PRIMARY KEY (ID)
);

/*=========================================*/
/*       CREATING TABLE education          */
/*=========================================*/
CREATE TABLE education(
    ID int NOTNULL AUTO_INCREMENT, 
    NAMA varchar(255),
    Y_BEGIN varchar(5),
    Y_END varchar(5),
    CONSTRAINT PK_EDUCATION PRIMARY KEY (ID)
);

