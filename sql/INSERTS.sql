Chequear: Los Studs no parecen ser lo que aqui se escribio.
Santiago tiene un ejemplo de como deben ser los inserts de Lugar, hay algunos, pero podrian haber mas.
Santiago tiene un ejemplo de como deben ser los inserts de propietario. Hay 2 por referencia. Deben haber mas.
Dayana tiene un ejemplo de como deben ser los inserts de Jinete. Hay 2 por referencia.
La tabla taquilla debe tener un FK de Lugar o algo que las diferencia. Porque si no, no se ve la diferencia entre las taquillas, mas que el ID, y por ahi como las van a diferenciar?
Hay que subir la cantidad de varhar de la descripcion de enfermedad.
En Caballeriza ya se puede poner nombre del veterinario y entrenador para que busque la FK
Faltan Inserts de Traqueo. Ya Dayi sabe lo que tiene que arreglar.
Los inserts de Usuario deberia tener campos en null. O es jinete, o es propieario o etc. Ya se le dijo a Dayi.
Las foraneas de la tabla ROUS deben tener los nombres de los roles y de los usuarios.
Hay que poner los nombres de los lugares en la consulta de los inserts de HARA
Hay que poner los nombres de los veterinarios y entrenadores en la consulta de los inserts de CABALLERIZA
Hay que poner los nombres de las caballerizas en la consulta de los inserts de PUESTO
Hay que chequear el formato de fecha de EJEMPLAR
Todos los ejemplares son masculinos?
Todas las razas son: raza?
Hay que poner los nombres de los padres para el ejemplar, si no tiene padres va a null en cualquiera de los dos casos.
Hay que poner los nombres de las HARAS y PUESTO en los inserts de EJEMPLAR.
Los formatos de fecha de los isnerts de HORA estan mal y en todos falta el valor del ultimo campo.
Las mismas enfermedades que hay en ENCA tienes que estar en ENVE.
Los inserts de piso estan mal, porque la consulta devolveria toda la tabla y los nombres de las areas tienen que coincidir con los que estan en los inserts de area.



//INSERTS DE RESTAURANTE
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Alamo');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Wendys');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Juanchis Burger');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'McDonals');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Burger King');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Mama Nostra');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Shawarma Mix');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Budare');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Toque Zuliano');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Fridays');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Avila Burger');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Migas');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Heladeria 4D');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Hong Fung');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Salon Canton');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Arturos');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Danubio');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Alazan');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'La Estancia');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Cookies');
INSERT INTO RESTAURANTE VALUES (SQ_REST_codigo.nextval,'Buono');

//INSERTS DE AREA
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'paddock','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'circulo de ganadores','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'grada central','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'tribuna','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'estacionamiento','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'butaca','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'playa','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'pasillo','Capacidad para 300 personas');
INSERT INTO AREA VALUES (SQ_AREA_codigo.nextval,300,'palco','Capacidad para 300 personas');

//INSERTS DE PISO


//INSERTS DE RESA
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='paddock'),(select REST_codigo from RESTAURANTE where REST_nombre='Alamo'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='paddock'),(select REST_codigo from RESTAURANTE where REST_nombre='Wendys'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='paddock'),(select REST_codigo from RESTAURANTE where REST_nombre='Juanchis Burger'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='paddock'),(select REST_codigo from RESTAURANTE where REST_nombre='McDonals'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='circulo de ganadores'),(select REST_codigo from RESTAURANTE where REST_nombre='Burger King'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='circulo de ganadores'),(select REST_codigo from RESTAURANTE where REST_nombre='Mama Nostra'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='circulo de ganadores'),(select REST_codigo from RESTAURANTE where REST_nombre='Shawarma Mix'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='circulo de ganadores'),(select REST_codigo from RESTAURANTE where REST_nombre='Budare'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='grada central'),(select REST_codigo from RESTAURANTE where REST_nombre='Toque Zuliano'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='grada central'),(select REST_codigo from RESTAURANTE where REST_nombre='Fridays'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='grada central'),(select REST_codigo from RESTAURANTE where REST_nombre='Avila Burger'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='grada central'),(select REST_codigo from RESTAURANTE where REST_nombre='Migas'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='tribuna'),(select REST_codigo from RESTAURANTE where REST_nombre='Heladeria 4D'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='tribuna'),(select REST_codigo from RESTAURANTE where REST_nombre='Hong Fung'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='tribuna'),(select REST_codigo from RESTAURANTE where REST_nombre='Salon Canton'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='tribuna'),(select REST_codigo from RESTAURANTE where REST_nombre='Arturos'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='butaca'),(select REST_codigo from RESTAURANTE where REST_nombre='Danubio'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='butaca'),(select REST_codigo from RESTAURANTE where REST_nombre='Alazan'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='butaca'),(select REST_codigo from RESTAURANTE where REST_nombre='La Estancia'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='butaca'),(select REST_codigo from RESTAURANTE where REST_nombre='Cookies'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='playa'),(select REST_codigo from RESTAURANTE where REST_nombre='Alamo'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='playa'),(select REST_codigo from RESTAURANTE where REST_nombre='Wendys'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='playa'),(select REST_codigo from RESTAURANTE where REST_nombre='Juanchis Burger'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='playa'),(select REST_codigo from RESTAURANTE where REST_nombre='Buono'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='pasillo'),(select REST_codigo from RESTAURANTE where REST_nombre='McDonals'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='pasillo'),(select REST_codigo from RESTAURANTE where REST_nombre='Burger King'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='pasillo'),(select REST_codigo from RESTAURANTE where REST_nombre='Mama Nostra'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='pasillo'),(select REST_codigo from RESTAURANTE where REST_nombre='Shawarma Mix'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='palco'),(select REST_codigo from RESTAURANTE where REST_nombre='Budare'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='palco'),(select REST_codigo from RESTAURANTE where REST_nombre='Toque Zuliano'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='palco'),(select REST_codigo from RESTAURANTE where REST_nombre='Fridays'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='palco'),(select REST_codigo from RESTAURANTE where REST_nombre='Avila Burger'));

//INSERTS DE COLOR
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Azul');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Rojo');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Morado');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Naranja');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Rosado');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Negro');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Blanco');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Amarillo');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Marron');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Verde');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Turquesa');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Vinotinto');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Lila');
INSERT INTO COLOR VALUES (SQ_COLO_codigo.nextval,'Gris');

//INSERTS DE PISTA
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1200,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1800,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1600,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1400,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1500,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1300,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1100,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,1000,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,800,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,900,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,700,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,600,200);
INSERT INTO PISTA VALUES (SQ_PIST_codigo.nextval,500,200);

//INSERTS DE MATERIAL
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1800));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1600));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1500));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1400));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1300));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Cesped',(select PIST_codigo from PISTA where PIST_longitud = 1200));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 1100));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Cesped',(select PIST_codigo from PISTA where PIST_longitud = 1000));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 900));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Cesped',(select PIST_codigo from PISTA where PIST_longitud = 800));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 700));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Cesped',(select PIST_codigo from PISTA where PIST_longitud = 600));
INSERT INTO MATERIAL VALUES (SQ_MATE_codigo.nextval,'Arena',(select PIST_codigo from PISTA where PIST_longitud = 500));

//INSERS DE STUD
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Nero','11/11/1996');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Peter','10/03/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Uriel','22/01/1994');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Timothy','25/11/2003');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Brett','04/05/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Tyrone','23/06/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Brendan','15/12/1997');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Elliott','14/11/1994');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Jameson','24/12/1997');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Marshall','13/01/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Clark','23/08/2007');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Cedric','24/01/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Cain','04/01/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Nathan','17/10/2005');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Kuame','07/06/2007');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Tobias','12/04/2013');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Uriah','08/12/2001');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Allistair','13/01/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Garrett','07/08/2009');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Isaiah','25/07/2015');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Nash','27/08/1995');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Duncan','08/12/1995');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Orson','30/08/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Brody','19/04/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Leroy','02/05/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Prescott','19/05/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Rogan','12/03/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Ulric','16/03/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Ulysses','04/01/2009');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Tiger','23/04/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Upton','01/10/1994');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Drew','01/07/2008');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Christian','27/06/2010');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Harrison','03/09/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Prescott','19/08/2013');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Craig','25/01/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Axel','02/07/2001');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Griffith','04/10/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Dane','04/07/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Ulysses','22/03/2012');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Hamilton','31/12/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Prescott','05/02/2011');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Finn','28/03/1996');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Solomon','16/05/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Mark','05/08/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Daquan','08/11/2001');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Fritz','03/02/2005');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Joshua','08/05/2011');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Timothy','29/08/2004');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Holmes','19/09/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Joshua','09/09/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Tad','18/11/2003');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Baxter','10/03/2007');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Jerry','28/11/1997');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Chase','08/06/2001');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Edward','29/06/2011');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Carson','19/12/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Daquan','10/01/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Theodore','09/04/2010');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Abbot','15/12/2013');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Clayton','27/08/1994');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Arthur','09/10/1993');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Gareth','12/12/2007');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Lamar','30/11/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Honorato','22/04/2013');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Macon','17/07/2010');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Berk','08/12/2006');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Edan','21/03/1992');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Clayton','25/11/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Xanthus','16/10/2001');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Justin','12/12/1999');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Elton','07/03/2014');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Emery','06/08/2015');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Tiger','21/02/1994');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Wayne','11/02/2011');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Len','30/03/1997');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Vaughan','20/03/2014');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Gray','04/10/1998');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Rooney','29/05/2006');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Stone','19/08/2003');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Gregory','26/07/2011');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Hamilton','14/03/2008');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Phillip','31/10/2002');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Levi','31/03/2013');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Scott','05/03/1995');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Avram','15/05/2015');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Wing','21/09/1991');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Addison','08/04/2012');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Paul','01/11/2007');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Jacob','12/09/2000');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Dane','01/11/1996');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Fuller','11/10/2014');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Gannon','04/05/1997');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Dustin','31/12/2006');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Talon','09/12/1996');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Louis','10/09/1995');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Ethan','20/01/2008');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Noble','08/10/2003');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Drew','25/12/2003');
INSERT INTO STUD VALUES (SQ_STUD_codigo.nextval,'Reed','02/04/2015');

//INSERTS DE LUGAR
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Venezuela','pais',null);
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Colombia','pais',null);
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Peru','pais',null);
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Ecuador','pais',null);
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Panama','pais',null);
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Argentina','pais',null);

INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Distrito Capital','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Miranda','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Anzoategui','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Merida','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Cojedes','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Portuguesa','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Monagas','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Zulia','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Lara','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Vargas','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Aragua','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Carabobo','estado',(select LUGA_codigo from LUGAR where LUGA_nombre='Venezuela'));

INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Libertador','municipio',(select LUGA_codigo from LUGAR where LUGA_nombre='Distrito Capital'));
INSERT INTO LUGAR VALUES (SQ_LUGA_codigo.nextval,'Baruta','municipio',(select LUGA_codigo from LUGAR where LUGA_nombre='Miranda'));


//INSERTS DE PROPIETARIO
INSERT INTO PROPIETARIO VALUES (SQ_PROP_codigo.nextval,'Caleb','Murphy',21424696,(TO_DATE('2003/01/28')),'ipsum.Suspendisse@duinectempus.com',(select LUGA_codigo from LUGAR where LUGA_tipo=''));
INSERT INTO PROPIETARIO VALUES (SQ_PROP_codigo.nextval,'Quentin','Lynch',14020474,(TO_DATE('2010/12/13')),'et.commodo.at@ametornare.edu',(select LUGA_codigo from LUGAR where LUGA_tipo=''));

//INSERTS DE TELEFONO

//INSERTS DE ENTRENADOR
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval'Lenín','Cruz');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Ramón','García M');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Gilberto','Atencio');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Morris','Salswach');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Ernesto','Ochoa');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Fernando','Parilli');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Asdrúbal J','Medina');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Fernando','Parilli T');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'José G','Querales');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Miguel','Contini');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Rubén','Lanz');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Alexis','Delgado');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Jose F','D Ángelo');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Cesar','Perez');
INSERT INTO ENTRENADOR VALUES(SQ_ENTRENADOR_codigo.nextval,'Humberto','Correia');

//INSERTS DE VETERINARIO
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Ana','Rivas');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Carolina','Oliveira');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Daniela','Belfort');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Alexandra','Contreras');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Jesus','Atay');
INSERT INTO VETERINARIO VALUES(SQ_VETE_codigo.nextval,'Alejandro','Rodriguez');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Gabriela','Murrillo');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Samuel','Gonzalez');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Miguel','Mendoza');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Ana','Miranda');
INSERT INTO VETERINARIO  VALUES(SQ_VETE_codigo.nextval,'Thais','Bonilla');

//INSERTS DE JINETE
INSERT INTO JINETE VALUES(SQ_JINE_codigo.nextval,'Eduardo','Gutiérrez',(TO_DATE(1974/11/23)),12345695,1.48,'true');
INSERT INTO JINETE VALUES(SQ_JINE_codigo.nextval,'Carlos','Rojas',(TO_DATE(1985/11/12)),19293430,1.52,'true');

//INSERTS DE INVITADO
INSERT INTO INVITADO VALUES(SQ_INVI_codigo.nextval,'Nacho','Nacho','artista');
INSERT INTO INVITADO VALUES(SQ_INVI_codigo.nextval,'Carlos','Rodriguez','opinion');
INSERT INTO INVITADO VALUES(SQ_INVI_codigo.nextval,'Salomon','Rondon','deportista');
INSERT INTO INVITADO VALUES(SQ_INVI_codigo.nextval,'SixtoRein','Rein','artista');
INSERT INTO INVITADO VALUES(SQ_INVI_codigo.nextval,'Daniel','Pestana','opinion');

//INSERTS DE TAQUILLA
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'apuesta');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');
INSERT INTO TAQUILLA VALUES(SQ_TAQU_codigo.nextval,'boleto');

//INSERTS DE IMPLEMENTO
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Gríngolas',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Lengua Amarrada',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Bozal',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Bozal Lenguero',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Bozal Blanco',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Martingala Pretal',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Guayo',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Vendas',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Orejas Tapadas',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Látigo',null);
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Herradura Aluminio','CC');
INSERT INTO IMPLEMENTO  VALUES(SQ_IMPL_codigo.nextval,'Herradura Aluminio','CH');

//INSERTS DE POSTE
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Buta');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Lasix');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Legend');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Arterol');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Artrocon');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Salix');
INSERT INTO MEDICAMENTO VALUES(SQ_MEDI_codigo.nextval,'Uronort');

//INSERTS DE ENFERMEDAD
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Cañeras','Es una lesíon en la membrana que cubre el hueso de los metacarpos ');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Esparavanes','Es una dolencia que se localiza en los miembros posteriores');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Carpitis','Se produe en una importante articulacion que representa en el humano la muñeca');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Tendonitis','Se presenta con inflamacion en los tendones ');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Castracion','No resulta de mucho Problema');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Miositis','Es una inflamacion en las paletas que produce intenso dolor ');
INSERT INTO ENFERMEDAD VALUES(SQ_ENFE_codigo.nextval,'Erlichosis','Es una sobre carga téorica de parásitos especificos ');

//INSERTS DE CABALLERIZA
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,1 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,2 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,3 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,4 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,5 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,6 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,7 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,8 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,9 ,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,10,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,11,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,12,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,13,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,14,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,15,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,16,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,17,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,18,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,19,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,20,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,21,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));
INSERT INTO CABALLERIZA VALUES(SQ_CABA_codigo.nextval,22,(select VETE_codigo from veterinario where VETE_nombre=''),(select ENTR_codigo from ENTRENADO where ENTR_nombre=''));

//INSERTS DE TRAQUEO

//INSERTS DE USUARIO

//INSERTS DE ROL
INSERT INTO ROL VALUES(SQ_ROL_codigo.nextval,'Jinete','LE');
INSERT INTO ROL VALUES(SQ_ROL_codigo.nextval,'Propietario','BLEM');
INSERT INTO ROL VALUES(SQ_ROL_codigo.nextval,'Invitado','LE');
INSERT INTO ROL VALUES(SQ_ROL_codigo.nextval,'Entrenador','BLM');
INSERT INTO ROL VALUES(SQ_ROL_codigo.nextval,'Veterinario','LE');

//INSERTS DE APUESTA
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'El 5 y 6 ',null,'Vale par las seis ultimas carreras del viernes y domingo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'5 y 6 Electrónico',null,'Es valido para las seis últimas carreras de cada programa,se escoge cualquier numero de caballos, se van multiplicando y luego me multiplica por 100');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Ganador',5,'5 mínimo por cada bs 100 jugados a cada caballo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Placé',5,'Se juega cuando hay mas de diez caballo en la carrera , paga el primero o el segundo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Trifecta Sencilla',200,'Se juegan tres caballos y se gana si llegas en el mismo orden en que se jugaron ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Trifecta Combinada',1200,'Son tres Caballos en cualquier orden');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Superfecta Sencilla',200,'Son cuatro caballos en el orden estricto de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Superfecta Combinada',2400,'Son cuatro caballos en cualquier orden de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Loto Hípico',200,'Se juega en las diez ultimas carreras de cada reunion. Gana si llega del primero al tercero. se escoje un cabballo por carrera');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Exacta Sencilla',200,'Se gana con el primero y el segundo en el orden de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Exacta Combinada',400,'Dos caballos que lleguen primero y segundo, no imrpota el orden ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Doble Perfecta',200,'Las carreras las escoge el hipodromo,normalmente son dos carreras consecutivas.Gana si el caballos llega como se jugó');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Pool de Cuatro',200,'Cuatro carreras consecutivas ganando');

//INSERTS DE ROUS
INSERT INTO ROUS   VALUES (SQ_ROUS_codigo.nextval,(select   USUA_codigo from USUARIO WHERE  USUA_nombre='') ,(select ROL_codigo from ROL WHERE ROL_nombre=''));
INSERT INTO ROUS   VALUES (SQ_ROUS_codigo.nextval,(select   USUA_codigo from USUARIO WHERE  USUA_nombre='') ,(select ROL_codigo from ROL WHERE ROL_nombre=''));
INSERT INTO ROUS   VALUES (SQ_ROUS_codigo.nextval,(select   USUA_codigo from USUARIO WHERE  USUA_nombre='') ,(select ROL_codigo from ROL WHERE ROL_nombre=''));
INSERT INTO ROUS   VALUES (SQ_ROUS_codigo.nextval,(select   USUA_codigo from USUARIO WHERE  USUA_nombre='') ,(select ROL_codigo from ROL WHERE ROL_nombre=''));
INSERT INTO ROUS   VALUES (SQ_ROUS_codigo.nextval,(select   USUA_codigo from USUARIO WHERE  USUA_nombre='') ,(select ROL_codigo from ROL WHERE ROL_nombre=''));

//INSERTS DE HARA
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'Mamoncito', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'San Pablo', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'La Quinta', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'Estados Unidos', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'San Gregorio', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'La Montaña', (select LUGA_codigo from LUGAR where LUGA_nombre = '');
INSERT INTO HARAS VALUES(SQ_HARA_codigo.nextval,'Urama', (select LUGA_codigo from LUGAR where LUGA_nombre = '');

//INSERTS DE UNIFORME
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Camisa');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Gorra');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Pantalon');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Casco');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Botas');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Fusta');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Breech');
INSERT INTO UNIFORME VALUES(SQ_UNIF_codigo.nextval,'Blazer');

//INSERTS DE CABALLERIZA


//INSERTS DE PUESTO
INSERT INTO PUESTO  VALUES (SQ_TAAP_codigo.nextval,(TO_DATE('2015/12/14')),(TO_DATE('2015/12/17')),13,(select CABA_codigo from  CABALLERIZA WHERE CABA_numero=numero));
INSERT INTO PUESTO  VALUES (SQ_TAAP_codigo.nextval,(TO_DATE('2015/12/15')),(TO_DATE('2015/12/17')),13,(select CABA_codigo from  CABALLERIZA WHERE CABA_numero=numero));
INSERT INTO PUESTO  VALUES (SQ_TAAP_codigo.nextval,(TO_DATE('2015/12/16')),(TO_DATE('2015/12/17')),1,(select CABA_codigo from  CABALLERIZA WHERE CABA_numero=numero));

//INSERTS DE EJEMPLAR
INSERT INTO EJEMPLAR VALUES (SQ_EJEM_codigo.nextval,'A Rod Parts','Castano','08/08/1982','Masculino','L5Y 2K7','Raza',(select EJEM_codigo from EJEMPLAR where EJEM_nombre='' and EJEM_fecha_nac=''),(select EJEM_codigo from EJEMPLAR where EJEM_nombre='' and EJEM_fecha_nac=''),(select HARA_codigo from HARAS where HARA_nombre=''),(select PUES_codigo from PUESTO where PUES_numero=  and FK_CABA = ));

//INSERTS DE HORA

//INSERTS CARRERA

//INSERTS DE PREMIO

//INSERTS DE CAEJ

//INSERTS DE PESO

//INSERTS DE IMCA

//INTERS DE POCA

//INSERTS DE EJTR

//INSERTS DE CAME

//INSERTS DE ENCA

//INSERTS DE ENVE

//INSERTS DE COMENTARIO

//INSERTS DE ARTA

//INSERTS DE TAAP

//INSERTS DE CAAP

//INSERTS DE HORE

//INSERTS DE PEAR

//INSERTS DE COST

//INSERTS DE PRST
