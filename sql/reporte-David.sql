/*Estadísticas de Ejemplar en la cantidad de carrera corridas*/
select E.ejem_nombre Ejemplar,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion between 1 and 3) as GANADAS,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion > 3) as PERDIDAS
from ejemplar E
order by ejem_nombre;

/*Programa oficial de carreras*/

/*Resultados de Carreras cumpliendo con las especificaciones indicadas.*/
/*parte1*/
select carr_num_carrera NC, carr_nombre Carrera, to_char(carr_fecha,'dd/mm/yyyy') Fecha, hora_inicio Hora, carr_distancia Distancia, carr_tipo Tipo, SUM(p.prem_monto) Premio, pr.prem_monto primer, s.prem_monto segundo, t.prem_monto tercer, cu.prem_monto cuarto, qu.prem_monto quinto
from carrera C, hora H, premio p, premio pr, premio s, premio t, premio cu, premio qu
where C.fk_hora=hora_codigo and p.fk_carr=carr_codigo and pr.fk_carr=carr_codigo and s.fk_carr=carr_codigo and t.fk_carr=carr_codigo and cu.fk_carr=carr_codigo and qu.fk_carr=carr_codigo
and pr.prem_lugar = 1 and s.prem_lugar = 2 and t.prem_lugar = 3 and cu.prem_lugar = 4 and qu.prem_lugar = 5 and carr_nombre='Carrera1'
group by carr_num_carrera, carr_nombre, to_char(carr_fecha,'dd/mm/yyyy'), hora_inicio, carr_distancia, carr_tipo, pr.prem_monto, s.prem_monto, t.prem_monto, cu.prem_monto, qu.prem_monto
order by NC,Carrera;

/*parte2*/
select G.apue_nombre, SUM(CP.caap_monto)
from carrera C, caej CA, caap CP, taap TP, apuesta G
where CA.fk_carr=carr_codigo and CP.fk_caej=caej_codigo and CP.fk_taap=taap_codigo and TP.fk_apue=G.apue_codigo
and carr_nombre='Carrera1'
group by G.apue_nombre;

/*parte3*/
select caej_posicion NoL, caej_num_ejemplar NoE, ejem_nombre Ejemplar, caej_puesto_partida PP, jine_nombre ||' '|| jine_apellido jinete, peso_peso KgJ, entr_nombre ||' '|| entr_apellido entrenador
from carrera C,caej CA,ejemplar E,jinete J, peso p, entrenador EN, puesto PU, caballeriza CAB
where CA.fk_carr=carr_codigo and CA.fk_ejem=ejem_codigo and CA.fk_jine=jine_codigo and p.fk_caej=caej_codigo and E.fk_pues=pues_codigo and PU.fk_caba=caba_codigo and CAB.fk_entr=entr_codigo
and peso_tipo='jinete' and carr_nombre='Carrera1'
order by caej_posicion;

/*Construcción de la gaceta hípica indicando los favoritos en cada carrera según su historial, además de las estadísticas de combinación ejemplar – jinete – entrenador.Restaurantes del hipódromo.*/

/*Indicar el peso promedio de los jinetes para las 25 últimas carreras.*/

/*Se quiere conocer cuales son los mejores ejemplares rematadores de todas las carreras según su desempeño en los últimos 400 mts de cada carrera.*/

/*Se quiere conocer cuales son las mejores hembras y machos en base a la cantidad de hijos ganadores.*/
