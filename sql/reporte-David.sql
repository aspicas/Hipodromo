/*Estadísticas de Ejemplar en la cantidad de carrera corridas*/
select E.ejem_nombre,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion between 1 and 3) as GANADA,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion > 3) as PERDIDA
from ejemplar E
order by ejem_nombre;

/*Programa oficial de carreras*/

/*Resultados de Carreras cumpliendo con las especificaciones indicadas.*/
/*parte1*/

/*parte2*/
select caej_posicion NoL, caej_num_ejemplar NE, ejem_nombre ejemplar, caej_puesto_partida PP, jine_nombre ||' '|| jine_apellido jinete, peso_peso KgJ, entr_nombre ||' '|| entr_apellido entrenador
from carrera C,caej CA,ejemplar E,jinete J, peso p, entrenador EN, puesto PU, caballeriza CAB
where CA.fk_carr=carr_codigo and CA.fk_ejem=ejem_codigo and CA.fk_jine=jine_codigo and p.fk_caej=caej_codigo and E.fk_pues=pues_codigo and PU.fk_caba=caba_codigo and CAB.fk_entr=entr_codigo
and peso_tipo='jinete' and carr_nombre='Carrera1'
order by caej_posicion;

/*Construcción de la gaceta hípica indicando los favoritos en cada carrera según su historial, además de las estadísticas de combinación ejemplar – jinete – entrenador.Restaurantes del hipódromo.*/

/*Indicar el peso promedio de los jinetes para las 25 últimas carreras.*/

/*Se quiere conocer cuales son los mejores ejemplares rematadores de todas las carreras según su desempeño en los últimos 400 mts de cada carrera.*/

/*Se quiere conocer cuales son las mejores hembras y machos en base a la cantidad de hijos ganadores.*/
