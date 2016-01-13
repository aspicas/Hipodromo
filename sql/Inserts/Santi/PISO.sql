INSERT INTO PISO VALUES (SQ_PISO_codigo.nextval,'Nivel 1',(select AREA_codigo from AREA where AREA_tipo='gradas' or AREA_tipo='Tribuna' or AREA_tipo='Mezzanina' or AREA_tipo='Palco'));
INSERT INTO PISO VALUES (SQ_PISO_codigo.nextval,'Nivel 2',(select AREA_codigo from AREA where AREA_tipo='gradas' or AREA_tipo='Tribuna' or AREA_tipo='Mezzanina' or AREA_tipo='Palco'));
INSERT INTO PISO VALUES (SQ_PISO_codigo.nextval,'Mezzanina',(select AREA_codigo from AREA where AREA_tipo='gradas' or AREA_tipo='Tribuna' or AREA_tipo='Mezzanina' or AREA_tipo='Palco'));
INSERT INTO PISO VALUES (SQ_PISO_codigo.nextval,'Palco',(select AREA_codigo from AREA where AREA_tipo='gradas' or AREA_tipo='Tribuna' or AREA_tipo='Mezzanina' or AREA_tipo='Palco'));
