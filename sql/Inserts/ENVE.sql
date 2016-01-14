INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Ana'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Esparavanes'));
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Carolina'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Cañeras'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Daniela'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Carpitis'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Thais'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Cañeras'));
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Alexandra'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Tendonitis'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Jesus'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Castracion'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Alejandro'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Miositis'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Gabriela')	,(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Cañeras'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Samuel'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Tendonitis'));
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Ana'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Erlichosis'));	
INSERT INTO ENVE 	VALUES	(SQ_ENVE_codigo.nextval	,(select VETE_codigo from Veterinario where VETE_nombre='Thais'),(select  ENFE_codigo from ENFERMEDAD  where ENFE_nombre='Cañeras'));	


//delete from enve;