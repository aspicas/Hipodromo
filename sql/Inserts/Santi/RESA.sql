INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='butaca'),(select REST_codigo from RESTAURANTE where REST_nombre='Alamo'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='grada central'),(select REST_codigo from RESTAURANTE where REST_nombre='Budare'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='pasillo'),(select REST_codigo from RESTAURANTE where REST_nombre='Fridays'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='playa'),(select REST_codigo from RESTAURANTE where REST_nombre='Migas'));
INSERT INTO RESA VALUES (SQ_RESA_codigo.nextval,(select AREA_codigo from AREA where AREA_tipo='palco'),(select REST_codigo from RESTAURANTE where REST_nombre='Arturos'));