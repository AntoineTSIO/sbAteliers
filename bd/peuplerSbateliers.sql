USE sbateliers ;
 
INSERT INTO Client (numero, civilite, nom, prenom, date_de_naissance, adresse_electronique, mot_de_passe, adresse_postale, code_postal, ville, numero_de_telephone) VALUES 
(0,'Monsieur',AES_ENCRYPT('TEST',SHA2('password',512)),AES_ENCRYPT('test',SHA2('password',512)),AES_ENCRYPT('2000-01-01',SHA2('password',512)),AES_ENCRYPT('test@test;fr',SHA2('password',512)),'$2y$10$iajv3F9u.YZV5HZIGUVoxOFg7SDv3Ltv1iWNAmh0.6N/YYIi4TJyO',AES_ENCRYPT('55 Rue du Faubourg Saint-Honoré',SHA2('password',512)),'75008','Paris',AES_ENCRYPT('01.02.03.04.05',SHA2('password',512))),
(1,'Monsieur',AES_ENCRYPT('LAGRANDE',SHA2('password',512)),AES_ENCRYPT('Gaspar',SHA2('password',512)),AES_ENCRYPT('1989-08-14',SHA2('password',512)),AES_ENCRYPT('GasparLaGrande@jourrapide.com',SHA2('password',512)),'$2y$10$eBu4zL8n8CyKBZYZaK9UAeLzGHQ07kRZI54Gns.wwnwd6kjSGwvpu',AES_ENCRYPT('7 Rue Marie de Médicis',SHA2('password',512)),'59400','Cambrai',AES_ENCRYPT('03.33.02.21.37',SHA2('password',512))),
(2,'Madame',AES_ENCRYPT('COUPART',SHA2('password',512)),AES_ENCRYPT('Yolande',SHA2('password',512)),AES_ENCRYPT('1952-09-15',SHA2('password',512)),AES_ENCRYPT('YolandeCoupart@teleworm.us',SHA2('password',512)),'$2y$10$vLDOPgsRjX2ydklF58pyKOxjO/15AYWJxtPcnTUHdu2eBWUfFWmmq',AES_ENCRYPT('81 Chemin du Lavarin Sud',SHA2('password',512)),'94230','Cachan',AES_ENCRYPT('01.65.70.43.39',SHA2('password',512))),
(3,'Madame',AES_ENCRYPT('VOISINE',SHA2('password',512)),AES_ENCRYPT('Susanne',SHA2('password',512)),AES_ENCRYPT('1988-02-02',SHA2('password',512)),AES_ENCRYPT('SusanneVoisine@dayrep.com',SHA2('password',512)),'$2y$10$k4ixWOhefuMrOZsZg1f8ieKRIF6sn2IhTHow4JekGO4P6ZOAYaGbe',AES_ENCRYPT('43 Rue Gontier-Patin',SHA2('password',512)),'47000','Agen',AES_ENCRYPT('05.63.85.75.48',SHA2('password',512))),
(4,'Monsieur',AES_ENCRYPT('RICHARD',SHA2('password',512)),AES_ENCRYPT('Clovis',SHA2('password',512)),AES_ENCRYPT('1959-08-17',SHA2('password',512)),AES_ENCRYPT('ClovisRichard@dayrep.com',SHA2('password',512)),'$2y$10$Dn0KxnoEDjROG5RykNAPCOpv387Uk7mskvJNf/o0oVC8v7W1bByNW',AES_ENCRYPT('45 Rue du Général Ailleret',SHA2('password',512)),'97139','Les Abymes',AES_ENCRYPT('05.32.36.84.49',SHA2('password',512)));
 
INSERT INTO Responsable_Ateliers (numero, nom_de_connexion, nom, prenom, mot_de_passe) VALUES 
(0,'usertest',AES_ENCRYPT('TEST',SHA2('password',512)),AES_ENCRYPT('test',SHA2('password',512)),'$2y$10$DL9xdDZ4RQFyAabZ3PEOCuJpENKWHPKJZ4pWBsosmPlkt.wrzmU6u'),
(1,'urudolph',AES_ENCRYPT('UNDERHILL',SHA2('password',512)),AES_ENCRYPT('Rudolph',SHA2('password',512)),'$2y$10$CGc0jDaZIfgox4uJfUttL.vIGHOt2EuW4kzxc20t58PuE4cDjMtSy'),
(2,'sgruffo',AES_ENCRYPT('SANDYMAN',SHA2('password',512)),AES_ENCRYPT('Gruffo',SHA2('password',512)),'$2y$10$pgfYRrYTUnLcpTPwlcyJnuSIFvYU/St587c0BWyxrzPV3xMrfNPHi'), 
(3,'bdiamond',AES_ENCRYPT('BAGGINS',SHA2('password',512)),AES_ENCRYPT('Diamond',SHA2('password',512)),'$2y$10$MaW.yhPtdNM1pScbdjV8NeP5d8ad38y76pk9grBEyA3k8GSwtzKSy'),
(4,'bprisca',AES_ENCRYPT('BUTTON',SHA2('password',512)),AES_ENCRYPT('Prisca',SHA2('password',512)),'$2y$10$nr2wEujdaz7.6/AwMyhyhO5TWGRfaeCx3Xg8jcxWgTsmbzrmwncfG'), 
(5,'bmenegilda',AES_ENCRYPT('BANKS',SHA2('password',512)),AES_ENCRYPT('Menegilda',SHA2('password',512)),'$2y$10$MiPeavVCnwJV2POsOD.fcO80X4Z42p9yyouA/WhQwmskhFq65JuUy');
 
INSERT INTO Atelier (numero, responsable, date_enregistrement, date_et_heure_programmees, duree, nombre_de_places, theme) VALUES
(1, 1, '2021-10-10', '2021-10-17 09:00:00', '00:30:00', 10, "Accueil des nouveaux clients"),
(2, 2, '2021-10-11', '2021-10-18 09:00:00', '00:45:00', 20, "Explications sur l'initiative de Sanaya Bio"),
(3, 5, '2021-10-12', '2021-10-19 09:00:00', '01:30:00', 5, "Conception de Parfums");
 
INSERT INTO Participation (date_inscription,commentaire, client, atelier) VALUES
('2021-10-15','',1,1),
('2021-10-15','',2,1),
('2021-10-16','',3,2),
('2021-10-16','',4,2),
('2021-10-17','',1,2),
('2021-10-17','',2,3),
('2021-10-18','',3,3),
('2021-10-18','',4,3),
('2021-10-18','',1,3);