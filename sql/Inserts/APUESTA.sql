INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'el 5 y 6 ',50000,'Vale par las seis ultimas carreras del viernes y domingo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'5 y 6 Electrónico',50000,'Es valido para las seis últimas carreras de cada programa,se escoge cualquier numero de caballos, se van multiplicando y luego me multiplica por 100');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Ganador',500,'5 mínimo por cada bs 100 jugados a cada caballo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Placé',500,'Se juega cuando hay mas de diez caballo en la carrera , paga el primero o el segundo ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Trifecta Sencilla',2500000,'Se juegan tres caballos y se gana si llegas en el mismo orden en que se jugaron ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Trifecta Combinada',1200,'Son tres Caballos en cualquier orden');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Superfecta Sencilla',20000,'Son cuatro caballos en el orden estricto de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Superfecta Combinada',10000000,'Son cuatro caballos en cualquier orden de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Loto Hípico',2000000,'Se juega en las diez ultimas carreras de cada reunion. Gana si llega del primero al tercero. se escoje un cabballo por carrera');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Exacta Sencilla',200,'Se gana con el primero y el segundo en el orden de llegada ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Exacta Combinada',400,'Dos caballos que lleguen primero y segundo, no imrpota el orden ');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Doble Perfecta',2500000,'Las carreras las escoge el hipodromo,normalmente son dos carreras consecutivas.Gana si el caballos llega como se jugó');
INSERT INTO APUESTA VALUES(SQ_APUE_codigo.nextval,'Pool de Cuatro',50000000,'Cuatro carreras consecutivas ganando');

alter table apuesta modify apue_regla VARCHAR2(150);
