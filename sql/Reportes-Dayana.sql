%LISTO-Listado de Usuarios con sus roles .%
SELECT u.USUA_NOMBRE , r.rol_nombre from  usuario u,rol r , rous where fk_usua = u.usua_codigo and fk_rol = r.rol_codigo

%LISTO-Listado de Studs con la descripción de su camisa y gorra.%
select s.stud_nombre,u.unif_parte, c.COLO_NOMBRE   from stud s , uniforme u , color c, cost cos 
where cos.FK_STUD=s.stud_codigo and cos.FK_UNIF=u.unif_codigo and cos.FK_COLO=c.colo_codigo 
order by Stud;

%LISTO-Listado de Studs con sus propietarios y porcentajes%
select stud_nombre stud, prop_nombre ||' '|| prop_apellido propietario, prst_porcentaje porcentaje
from stud, propietario, prst p
where p.fk_stud=stud_codigo and p.fk_prop=prop_codigo
order by stud;

%LISTO-Listados de Studs con sus ejemplares y propietarios.%
select stud_nombre stud, prop_nombre ||' '|| prop_apellido propietario, ejem_nombre ejemplar
from stud, propietario, prst p, ejemplar
where p.fk_stud=stud_codigo and p.fk_prop=prop_codigo and p.fk_ejem=ejem_codigo
order by stud;

%LISTO-Listado de ejemplares, con sexo y tipo de pelaje : clasificados por edad%
SELECT E.EJEM_NOMBRE Ejemplar , E.EJEM_SEXO Sexo, E.EJEM_PELAJE Pelaje, trunc((SYSDATE - to_date(EJEM_FECHA_NAC,'dd/mm/rrrr'))/365,0) Nacimiento FROM EJEMPLAR E  ORDER BY ejem_fecha_nac;

%LISTO-Listado de ejemplares ganadores de clásicos.%
select ejem_nombre ejemplar
from caej ca,ejemplar,carrera
where ca.fk_carr=carr_codigo and ca.fk_ejem=ejem_codigo and caej_posicion=1 and carr_categoria='clasico'
order by ejemplar;

%Revisar-LISTO-Listado de ejemplares ganadores de las ultimas 15 carreras del programa, agrupadas por tipo de carrera. %
select c.CARR_CODIGO,e.ejem_nombre ejemplar,c.carr_nombre carrera,CARR_TIPO tipo
from ejemplar e,carrera c, caej ce 
where ce.caej_posicion=1 and ce.fk_ejem=e.EJEM_CODIGO and  ce.fk_carr=c.carr_codigo and ROWNUM <=15
group by carr_tipo,ejem_nombre,carr_nombre,carr_codigo
order by carr_codigo desc; 

%LISTO-Listados de implementos.%
SELECT impl_nombre Implemento, impl_tipo Iniciales from implemento;

%LISTO-Listado de Entrenadores, indicando su cuadra.%
select e.entr_nombre ||' '|| entr_apellido entrenador,  c.caba_numero cuadra
from entrenador e , caballeriza c 
WHERE C.FK_ENTR = e.entr_codigo 
order by entrenador;

%LISTO-Listado de Jinete%
select j.jine_nombre ||' '|| jine_apellido Jinetes from jinete j order by jinetes;

--LISTO-Historia de jinete con que ejemplar a ganado y cual carrera 
select J.jine_nombre||' '||jine_apellido jinete,c.carr_nombre carrera, e.EJEM_NOMBRE ejemplar
from jinete j ,ejemplar e,carrera c, caej ce 
where  ce.caej_posicion=1 and ce.fk_ejem=e.EJEM_CODIGO and  ce.fk_carr=c.carr_codigo and ce.fk_jine=j.jine_codigo 
order by jinete;

--LISTO-Estadistica del ejemplar combinado jinete y entrenador 
select E.ejem_nombre Ejemplar,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion between 1 and 3) as GANADAS,
(select count(caej_posicion) from caej where fk_ejem=E.ejem_codigo and caej_posicion > 3) as PERDIDAS,
jine_nombre ||' '|| jine_apellido jinete,entr_nombre ||' '|| entr_apellido entrenador
from ejemplar E, jinete j, entrenador e, caej ca, caballeriza c, puesto p
where ejem_codigo=ca.fk_ejem and ca.fk_jine=jine_codigo and E.fk_pues=pues_codigo and p.fk_caba=caba_codigo and c.fk_entr=entr_codigo
order by ejem_nombre;

--LISTO-Total de apuestas por taquilla por tipo de apuestas 
select taqu_codigo taquilla, SUM(ta.TAAP_PRECIO) total, apue_nombre apuesta
from TAQUILLA T, taap ta, apuesta a
where T.TAQU_tipo='apuesta' and ta.fk_taqu=taqu_codigo and ta.fk_apue=apue_codigo
group by taqu_codigo, apue_nombre;

--LISTO-total pagado por taquilla por carrera y por tipo de apuestas 
select apue_nombre apuesta, taqu_codigo taquilla, carr_nombre carrera, SUM(c.caap_monto) monto
from caap c , taap t , taquilla ta, carrera car , caej  cae, apuesta a
where cae.fk_carr=carr_codigo and c.FK_CAEJ=cae.CAEJ_CODIGO and c.fk_taap=t.taap_codigo 
and ta.TAQU_tipo='apuesta' and t.fk_taqu=taqu_codigo and t.fk_apue=apue_codigo
group by taqu_codigo, carr_nombre, apue_nombre
order by apuesta;

--LISTO-Indicar cuales son los implementos mas utilizados en las carreras de mayor a menos  segun su porcentaje de uso 
select to_char((count(I.fk_impl)/(select count(fk_impl) from imca, implemento where fk_impl=impl_codigo)) * 100,'999.99') porcentaje, IMPL_tipo implemento
from IMPLEMENTO IM, IMCA I, CAEJ CJ, CARRERA C
where IM.IMPL_codigo=I.FK_IMPL and I.FK_CAEJ=CJ.CAEJ_codigo and CJ.FK_CARR=C.CARR_codigo and impl_tipo is not null
group by impl_tipo;

--Revisar-LISTO-el promedio de ejemplares que corrieron en las ultimas 50 carreras segun su pelaje 
select to_char(count(E.ejem_pelaje)/(select count(*) from EJEMPLAR E, CAEJ CJ, CARRERA CARR where E.EJEM_codigo=CJ.FK_EJEM and CJ.FK_CARR=CARR_codigo and carr_nombre=C.carr_nombre),'999.99') promedio, E.ejem_pelaje pelaje, carr_nombre carrera
from EJEMPLAR E, CAEJ CJ, CARRERA C
where E.EJEM_codigo=CJ.FK_EJEM and CJ.FK_CARR=C.CARR_codigo
group by E.ejem_pelaje, carr_nombre, carr_codigo
order by carr_codigo;