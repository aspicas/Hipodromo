INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,50,(select APUE_codigo from apuesta where apue_nombre='el 5 y 6'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,100,(select APUE_codigo from apuesta where apue_nombre='5 y 6 Electrónico'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,5,(select APUE_codigo from apuesta where apue_nombre='Ganador'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,5,(select APUE_codigo from apuesta where apue_nombre='Placé'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Trifecta Sencilla'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,1200,(select APUE_codigo from apuesta where apue_nombre='Trifecta Combinada'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Superfecta Sencilla'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,2400,(select APUE_codigo from apuesta where apue_nombre='Superfecta Combinada'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Loto Hípico'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Exacta Sencilla'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,400,(select APUE_codigo from apuesta where apue_nombre='Exacta Combinada'),(select taqu_codigo from taquilla where  taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Doble Perfecta'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));
INSERT INTO TAAP VALUES(SQ_TAAP_codigo.nextval,200,(select APUE_codigo from apuesta where apue_nombre='Pool de Cuatro'),(select taqu_codigo from taquilla where taq_tipo='Apuesta'));









