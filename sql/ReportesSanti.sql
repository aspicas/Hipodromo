/*TOTAL DE VENTAS EN ENTRADAS AL RECINTO*/
select SUM(A.arta_precio)
from TAQUILLA T, arta A
where T.TAQU_tipo='boleto' and A.fk_taqu=taqu_codigo;

/*TOTAL DE APUESTAS POR TAQUILLA*/
select count(TP.fk_taqu) apuestas, taqu_codigo taquilla
from TAQUILLA T, taap TP
where T.TAQU_tipo='apuesta' and TP.fk_taqu=taqu_codigo
group by taqu_codigo;

/*ESTADISTICAS DEL JINETE BASADO EN LA CANTIDAD DE CARRERAS CORRIDAS*/
select J.JINE_nombre,
(select count(CAEJ_posicion) from CAEJ where FK_JINE=J.JINE_codigo and CAEJ_posicion between 1 and 3) as GANADA,
(select count(CAEJ_posicion) from CAEJ where FK_JINE=J.JINE_codigo and CAEJ_posicion > 3) as PERDIDA
from JINETE J
order by JINE_nombre;


/*PROMEDIO DEL USO DE LOS IMPLEMENTOS EN LAS ULTIMAS 25 CARRERAS*/
select carr_codigo,IMPL_tipo implemento, carr_nombre carrera, avg(I.fk_impl) promedio
from IMPLEMENTO IM, IMCA I, CAEJ CJ, CARRERA C
where IM.IMPL_codigo=I.FK_IMPL and I.FK_CAEJ=CJ.CAEJ_codigo and CJ.FK_CARR=C.CARR_codigo and impl_tipo is not null
group by impl_tipo, carr_nombre, carr_codigo
order by carr_codigo desc;


/*INDICAR CUALES SON LAS CARRERAS MAS FRECUENTES SEGUN SU TIPO*/





/*EL PROMEDIO DE EJEMPLARES QUE CORRIERON EN LAS ULTIMAS 50 CARRERAS SEGUN SU SEXO */
//HEMBRA-YEGUA
select avg(E.EJEM_codigo)
from EJEMPLAR E, CAEJ CJ, CARRERA C
where E.EJEM_codigo=CJ.FK_EJEM and
CJ.FK_CARR=C.CARR_codigo and
E.EJEM_sexo='Y';


//MACHO-CABALLO
select avg(E.EJEM_codigo)
from EJEMPLAR E, CAEJ CJ, CARRERA C
where E.EJEM_codigo=CJ.FK_EJEM and
CJ.FK_CARR=C.CARR_codigo and
E.EJEM_sexo='C';



