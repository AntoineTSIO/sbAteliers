USE sbateliers ;

INSERT INTO Client (numero, civilite, nom, prenom, date_de_naissance, adresse_electronique, mot_de_passe, adresse_postale, code_postal, ville, numero_de_telephone) VALUES 
(0,'Monsieur','TEST','test','2000-01-01','test@test.fr','azerty','55 Rue du Faubourg Saint-Honoré','75008','Paris','0601020304'),
(1,'Monsieur','LAGRANDE','Gaspar','1989-08-14','GasparLaGrande@jourrapide.com','azerty','7 Rue Marie de Médicis','59400','Cambrai','03.33.02.21.37'),
(2,'Madame','COUPART','Yolande','1952-09-15','YolandeCoupart@teleworm.us','azerty','81 Chemin Du Lavarin Sud','94230','Cachan','01.65.70.43.39'),
(3,'Madame','VOISINE','Susanne','1988-02-02','SusanneVoisine@dayrep.com','azerty','43 rue Gontier-Patin','47000','Agen','05.63.85.75.48'),
(4,'Monsieur','RICHARD','Clovis','1959-08-17','ClovisRichard@dayrep.com','azerty','45 Rue du Général Ailleret','97139','Les Abymes','05.32.36.84.49');

INSERT INTO Responsable_Ateliers (numero, nom_de_connexion, nom, prenom, mot_de_passe) VALUES 
(0,'usertest','TEST','test','azerty1234'),
(1,'anolan','ALMOSNI','Nolan','azerty'),
(2,'gclement','GALVEZ','Clement','azerty'), 
(3,'dshugo','DA SILVA','Hugo','azerty'),
(4,'rstella','RICHAL','Stella','azerty'), 
(5,'jtheo','JEAN','Theo','azerty');

INSERT INTO Atelier (numero, responsable, date_enregistrement, date_et_heure_programmees, duree, nombre_de_places, theme) VALUES
(1, 1, '2021-10-10', '2021-10-17 09:00:00', '00:30:00', 10, "Accueil des nouveaux clients"),
(2, 2, '2021-10-11', '2021-10-18 09:00:00', '00:45:00', 20, "Explications sur l'initiative de Sanaya Bio"),
(3, 5, '2021-10-12', '2021-10-19 09:00:00', '01:30:00', 5, "Conception de Parfums");

INSERT INTO Participation (date_inscription, client, atelier) VALUES
('2021-10-15',1,1),
('2021-10-15',2,1),
('2021-10-16',3,2),
('2021-10-16',4,2),
('2021-10-17',1,2),
('2021-10-17',2,3),
('2021-10-18',3,3),
('2021-10-18',4,3),
('2021-10-18',1,3);

