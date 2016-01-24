/*LISTO-TOTAL DE VENTAS EN ENTRADAS AL RECINTO*/
select SUM(A.arta_precio)
from TAQUILLA T, arta A
where T.TAQU_tipo='boleto' and A.fk_taqu=taqu_codigo;

/*LISTO-TOTAL DE APUESTAS POR TAQUILLA*/
select count(TP.fk_taqu) apuestas, taqu_codigo taquilla, SUM(taap_precio) Monto
from TAQUILLA T, taap TP
where T.TAQU_tipo='apuesta' and TP.fk_taqu=taqu_codigo
group by taqu_codigo;

/*LISTO-ESTADISTICAS DEL JINETE BASADO EN LA CANTIDAD DE CARRERAS CORRIDAS*/
select J.JINE_nombre ||' '|| jine_apellido jinete,
(select count(CAEJ_posicion) from CAEJ where FK_JINE=J.JINE_codigo and CAEJ_posicion between 1 and 3) as GANADA,
(select count(CAEJ_posicion) from CAEJ where FK_JINE=J.JINE_codigo and CAEJ_posicion > 3) as PERDIDA
from JINETE J
order by JINE_nombre;

/*LISTO-PROMEDIO DEL USO DE LOS IMPLEMENTOS EN LAS ULTIMAS 25 CARRERAS*/
select carr_codigo,IMPL_tipo implemento, carr_nombre carrera, avg(I.fk_impl) promedio
from IMPLEMENTO IM, IMCA I, CAEJ CJ, CARRERA C
where IM.IMPL_codigo=I.FK_IMPL and I.FK_CAEJ=CJ.CAEJ_codigo and CJ.FK_CARR=C.CARR_codigo and impl_tipo is not null
group by impl_tipo, carr_nombre, carr_codigo
order by carr_codigo desc;

/*LISTO-INDICAR CUALES SON LAS CARRERAS MAS FRECUENTES SEGUN SU TIPO*/
select count(carr_tipo) frecuencia, carr_tipo tipo
from carrera, caej
where carr_codigo=fk_carr
group by carr_tipo
order by frecuencia desc;

/*LISTO-EL PROMEDIO DE EJEMPLARES QUE CORRIERON EN LAS ULTIMAS 50 CARRERAS SEGUN SU SEXO */
select to_char(count(E.ejem_sexo)/(select count(*) from EJEMPLAR E, CAEJ CJ, CARRERA CARR where E.EJEM_codigo=CJ.FK_EJEM and CJ.FK_CARR=CARR_codigo and carr_nombre=C.carr_nombre),'999.99') promedio, E.ejem_sexo sexo, carr_nombre carrera
from EJEMPLAR E, CAEJ CJ, CARRERA C
where E.EJEM_codigo=CJ.FK_EJEM and CJ.FK_CARR=C.CARR_codigo
group by E.ejem_sexo, carr_nombre, carr_codigo
order by carr_codigo;
