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

%Listado de ejemplares ganadores de las ultimas 15 carreras del programa, agrupadas por tipo de carrera.%
select c.CARR_CODIGO,e.ejem_nombre ejemplar,c.carr_nombre carrera,CARR_TIPO tipo
from ejemplar e,carrera c, caej ce 
where ce.caej_posicion=1 and ce.fk_ejem=e.EJEM_CODIGO and  ce.fk_carr=c.carr_codigo and ROWNUM <=15
group by carr_tipo,ejem_nombre,carr_nombre,carr_codigo
order by carr_codigo desc; 

%Listados de implementos.%
SELECT impl_nombre Implemento, impl_tipo Iniciales from implemento;

%Listado de Entrenadores, indicando su cuadra.%
select e.entr_nombre ||' '|| entr_apellido entrenador,  c.caba_numero cuadra
from entrenador e , caballeriza c 
WHERE C.FK_ENTR = e.entr_codigo ;

%Listado de Jinete%
select j.jine_nombre ||' '|| jine_apellido Jinestes from jinete j;
