-- Création du Schéma Golf Sainte Croix du Verdon --
CREATE SCHEMA IF NOT EXISTS `GolfSainteCroix` 
DEFAULT CHARACTER SET utf8;
USE `GolfSainteCroix`;

-- Création de la table STAGE --
DROP TABLE IF EXISTS GolfSainteCroix.Stage;
CREATE TABLE IF NOT EXISTS GolfSainteCroix.Stage ( 
	 NUMERO_STAGE INT PRIMARY KEY auto_increment,
	 DATE_DEBUT DATE not null,
	 TIME_STAGE TIME not null ,
	 TARIF_STAGE FLOAT(8,2) not null
 );

-- REQUETES TEST --
-- INSERT INTO Stage(DATE_DEBUT, NOM_STAGE, TARIF_STAGE) VALUES ("2018-09-24", "09:30:00", 18);
-- SELECT * FROM stage;
