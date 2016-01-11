/*Claves primarias*/
alter table HORA add constraint HORA_pk primary key(HORA_codigo);
alter table HORE add constraint HORE_pk primary key(HORE_codigo);
alter table RESTAURANTE add constraint RESTAURANTE_pk primary key(REST_codigo);
alter table RESA add constraint RESA_pk primary key(RESA_codigo);
alter table COMENTARIO add constraint COMENTARIO_pk primary key(COME_codigo);
alter table AREA add constraint AREA_pk primary key(AREA_codigo);
alter table PEAR add constraint PEAR_pk primary key(PEAR_codigo);
alter table MATERIAL add constraint MATERIAL_pk primary key(MATE_codigo);
alter table PISTA add constraint PISTA_pk primary key(PIST_codigo);
alter table COLOR add constraint COLOR_pk primary key(COLO_codigo);
alter table COST add constraint COST_pk primary key(COST_codigo);
alter table CARRERA add constraint CARRERA_pk primary key(CARR_codigo);
alter table STUD add constraint STUD_pk primary key(STUD_codigo);
alter table PRST add constraint PRST_pk primary key(PRST_codigo);
alter table LUGAR add constraint LUGAR_pk primary key(LUGA_codigo);
alter table TELEFONO add constraint TELEFONO_pk primary key(TELE_codigo);
alter table ARTA add constraint ARTA_pk primary key(ARTA_codigo);
alter table PISO add constraint PISO_pk primary key(PISO_codigo);
alter table CAEJ add constraint CAEJ_pk primary key(CAEJ_codigo);
alter table EJEMPLAR add constraint EJEMPLAR_pk primary key(EJEM_codigo);
alter table PROPIETARIO add constraint PROPIETARIO_pk primary key(PROP_codigo);
alter table ENTRENADOR add constraint ENTRENADOR_pk primary key(ENTR_codigo);
alter table VETERINARIO add constraint VETERINARIO_pk primary key(VETE_codigo);
alter table JINETE add constraint JINETE_pk primary key(JINE_codigo);
alter table INVITADO add constraint INVITADO_pk primary key(INVI_codigo);
alter table TAQUILLA add constraint TAQUILLA_pk primary key(TAQU_codigo);
alter table IMCA add constraint IMCA_pk primary key(IMCA_codigo);
alter table IMPLEMENTO add constraint IMPLEMENTO_pk primary key(IMPL_codigo);
alter table POCA add constraint POCA_pk primary key(POCA_codigo);
alter table POSTE add constraint POSTE_pk primary key(POST_codigo);
alter table CAME add constraint CAME_pk primary key(CAME_codigo);
alter table MEDICAMENTO add constraint MEDICAMENTO_pk primary key(MEDI_codigo);
alter table ENCA add constraint ENCA_pk primary key(ENCA_codigo);
alter table ENFERMEDAD add constraint ENFERMEDAD_pk primary key(ENFE_codigo);
alter table PUESTO add constraint PUESTO_pk primary key(PUES_codigo);
alter table CABALLERIZA add constraint CABALLERIZA_pk primary key(CABA_codigo);
alter table EJTR add constraint EJTR_pk primary key(EJTR_codigo);
alter table TRAQUEO add constraint TRAQUEO_pk primary key(TRAQ_codigo);
alter table ENVE add constraint ENVE_pk primary key(ENVE_codigo);
alter table CAAP add constraint CAAP_pk primary key(CAAP_codigo);
alter table USUARIO add constraint USUARIO_pk primary key(USUA_codigo);
alter table ROL add constraint ROL_pk primary key(ROL_codigo);
alter table TAAP add constraint TAAP_pk primary key(TAAP_codigo);
alter table APUESTA add constraint APUESTA_pk primary key(APUE_codigo);
alter table ROUS add constraint ROUS_pk primary key(ROUS_codigo);
alter table HARAS add constraint HARAS_pk primary key(HARA_codigo);
alter table UNIFORME add constraint UNIFORME_pk primary key(UNIF_codigo);
alter table PREMIO add constraint PREMIO_pk primary key(PREM_codigo);
alter table PESO add constraint PESO_pk primary key(PESO_codigo);

/*Claves foraneas*/
alter table HORE add constraint FK_rest_hore foreign key (FK_REST) references RESTAURANTE(REST_codigo) ON DELETE CASCADE;
alter table HORE add constraint FK_hora_hore foreign key (FK_HORA) references HORA(HORA_codigo) ON DELETE CASCADE;
alter table RESA add constraint FK_area_resa foreign key (FK_AREA) references AREA(AREA_codigo) ON DELETE CASCADE;
alter table RESA add constraint FK_rest_resa foreign key (FK_REST) references RESTAURANTE(REST_codigo) ON DELETE CASCADE;
alter table COMENTARIO add constraint FK_caej_come foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table COMENTARIO add constraint FK_invi_come foreign key (FK_INVI) references INVITADO(INVI_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_prop_pear foreign key (FK_PROP) references PROPIETARIO(PROP_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_entr_pear foreign key (FK_ENTR) references ENTRENADOR(ENTR_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_vete_pear foreign key (FK_VETE) references VETERINARIO(VETE_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_jine_pear foreign key (FK_JINE) references JINETE(JINE_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_invi_pear foreign key (FK_INVI) references INVITADO(INVI_codigo) ON DELETE CASCADE;
alter table PEAR add constraint FK_area_pear foreign key (FK_AREA) references AREA(AREA_codigo) ON DELETE CASCADE;
alter table MATERIAL add constraint FK_pist_mate foreign key (FK_PIST) references PISTA(PIST_codigo) ON DELETE CASCADE;
alter table COST add constraint FK_stud_cost foreign key (FK_STUD) references STUD(STUD_codigo) ON DELETE CASCADE;
alter table COST add constraint FK_colo_cost foreign key (FK_COLO) references COLOR(COLO_codigo) ON DELETE CASCADE;
alter table COST add constraint FK_unif_cost foreign key (FK_UNIF) references UNIFORME(UNIF_codigo) ON DELETE CASCADE;
alter table CARRERA add constraint FK_pist_carr foreign key (FK_PIST) references PISTA(PIST_codigo) ON DELETE CASCADE;
alter table CARRERA add constraint FK_hora_carr foreign key (FK_HORA) references HORA(HORA_codigo) ON DELETE CASCADE;
alter table PRST add constraint FK_prop_prst foreign key (FK_PROP) references PROPIETARIO(PROP_codigo) ON DELETE CASCADE;
alter table PRST add constraint FK_stud_prst foreign key (FK_STUD) references STUD(STUD_codigo) ON DELETE CASCADE;
alter table PRST add constraint FK_ejem_prst foreign key (FK_EJEM) references EJEMPLAR(EJEM_codigo) ON DELETE CASCADE;
alter table LUGAR add constraint FK_luga_luga foreign key (FK_LUGA) references LUGAR(LUGA_codigo) ON DELETE CASCADE;
alter table TELEFONO add constraint FK_prop_tele foreign key (FK_PROP) references PROPIETARIO(PROP_codigo) ON DELETE CASCADE;
alter table ARTA add constraint FK_area_arta foreign key (FK_AREA) references AREA(AREA_codigo) ON DELETE CASCADE;
alter table ARTA add constraint FK_taqu_arta foreign key (FK_TAQU) references TAQUILLA(TAQU_codigo) ON DELETE CASCADE;
alter table PISO add constraint FK_area_piso foreign key (FK_AREA) references AREA(AREA_codigo) ON DELETE CASCADE;
alter table CAEJ add constraint FK_ejem_caej foreign key (FK_EJEM) references EJEMPLAR(EJEM_codigo) ON DELETE CASCADE;
alter table CAEJ add constraint FK_carr_caej foreign key (FK_CARR) references CARRERA(CARR_codigo) ON DELETE CASCADE;
alter table CAEJ add constraint FK_hora_caej foreign key (FK_HORA) references HORA(HORA_codigo) ON DELETE CASCADE;
alter table CAEJ add constraint FK_jine_caej foreign key (FK_JINE) references JINETE(JINE_codigo) ON DELETE CASCADE;
alter table EJEMPLAR add constraint FK_ejemm_ejem foreign key (FK_EJEM_M) references EJEMPLAR(EJEM_codigo) ON DELETE CASCADE;
alter table EJEMPLAR add constraint FK_ejemp_ejem foreign key (FK_EJEM_P) references EJEMPLAR(EJEM_codigo) ON DELETE CASCADE;
alter table EJEMPLAR add constraint FK_hara_ejem foreign key (FK_HARA) references HARAS(HARA_codigo) ON DELETE CASCADE;
alter table EJEMPLAR add constraint FK_pues_ejem foreign key (FK_PUES) references PUESTO(PUES_codigo) ON DELETE CASCADE;
alter table PROPIETARIO add constraint FK_luga_prop foreign key (FK_LUGA) references LUGAR(LUGA_codigo) ON DELETE CASCADE;
alter table IMCA add constraint FK_caej_inca foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table IMCA add constraint FK_impl_inca foreign key (FK_IMPL) references IMPLEMENTO(IMPL_codigo) ON DELETE CASCADE;
alter table POCA add constraint FK_caej_poca foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table POCA add constraint FK_post_poca foreign key (FK_POST) references POSTE(POST_codigo) ON DELETE CASCADE;
alter table CAME add constraint FK_caej_came foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table CAME add constraint FK_medi_came foreign key (FK_MEDI) references MEDICAMENTO(MEDI_codigo) ON DELETE CASCADE;
alter table ENCA add constraint FK_caej_enca foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table ENCA add constraint FK_enfe_enca foreign key (FK_ENFE) references ENFERMEDAD(ENFE_codigo) ON DELETE CASCADE;
alter table PUESTO add constraint FK_caba_pues foreign key (FK_CABA) references CABALLERIZA(CABA_codigo) ON DELETE CASCADE;
alter table CABALLERIZA add constraint FK_vete_caba foreign key (FK_VETE) references VETERINARIO(VETE_codigo) ON DELETE CASCADE;
alter table CABALLERIZA add constraint FK_entr_caba foreign key (FK_ENTR) references ENTRENADOR(ENTR_codigo) ON DELETE CASCADE;
alter table EJTR add constraint FK_ejem_ejtr foreign key (FK_EJEM) references EJEMPLAR(EJEM_codigo) ON DELETE CASCADE;
alter table EJTR add constraint FK_traq_ejtr foreign key (FK_TRAQ) references TRAQUEO(TRAQ_codigo) ON DELETE CASCADE;
alter table EJTR add constraint FK_caej_ejtr foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table ENVE add constraint FK_vete_enve foreign key (FK_VETE) references VETERINARIO(VETE_codigo) ON DELETE CASCADE;
alter table ENVE add constraint FK_enfe_enve foreign key (FK_ENFE) references ENFERMEDAD(ENFE_codigo) ON DELETE CASCADE;
alter table CAAP add constraint FK_caej_caap foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;
alter table CAAP add constraint FK_taap_caap foreign key (FK_TAAP) references TAAP(TAAP_codigo) ON DELETE CASCADE;
alter table USUARIO add constraint FK_prop_usua foreign key (FK_PROP) references PROPIETARIO(PROP_codigo) ON DELETE CASCADE;
alter table USUARIO add constraint FK_entr_usua foreign key (FK_ENTR) references ENTRENADOR(ENTR_codigo) ON DELETE CASCADE;
alter table USUARIO add constraint FK_vete_usua foreign key (FK_VETE) references VETERINARIO(VETE_codigo) ON DELETE CASCADE;
alter table USUARIO add constraint FK_jine_usua foreign key (FK_JINE) references JINETE(JINE_codigo) ON DELETE CASCADE;
alter table USUARIO add constraint FK_invi_usua foreign key (FK_INVI) references INVITADO(INVI_codigo) ON DELETE CASCADE;
alter table TAAP add constraint FK_apue_taap foreign key (FK_APUE) references APUESTA(APUE_codigo) ON DELETE CASCADE;
alter table TAAP add constraint FK_taqu_taap foreign key (FK_TAQU) references TAQUILLA(TAQU_codigo) ON DELETE CASCADE;
alter table ROUS add constraint FK_usua_rous foreign key (FK_USUA) references USUARIO(USUA_codigo) ON DELETE CASCADE;
alter table ROUS add constraint FK_rol_rous foreign key (FK_ROL) references ROL(ROL_codigo) ON DELETE CASCADE;
alter table HARAS add constraint FK_luga_hara foreign key (FK_LUGA) references LUGAR(LUGA_codigo) ON DELETE CASCADE;
alter table PREMIO add constraint FK_carr_prem foreign key (FK_CARR) references CARRERA(CARR_codigo) ON DELETE CASCADE;
alter table PESO add constraint FK_caej_peso foreign key (FK_CAEJ) references CAEJ(CAEJ_codigo) ON DELETE CASCADE;

/*Checks*/
alter table HORA add constraint CH_hora_dia check (HORA_dia IN ('viernes','sabado','domingo'));
alter table AREA add constraint CH_area_tipo check (AREA_tipo IN ('paddock','circulo de ganadores','grada central','tribuna','estacionamiento','butaca','playa','pasillo','palco'));
alter table CARRERA add constraint CH_carr_categoria check (CARR_categoria IN ('clasico','normal','copa'));
alter table LUGAR add constraint CH_luga_tipo check (LUGA_tipo IN ('pais','estado','municipio','parroquia'));
alter table ARTA add constraint CH_arta_puerta check (ARTA_puerta IN ('A','B','C','D','E','F'));
alter table PISO add constraint CH_piso_tipo check (PISO_tipo IN ('nivel 1','nivel 2','mezzanina'));
alter table CAEJ add constraint CH_caej_psto_partida check (CAEJ_puesto_partida IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16));
alter table INVITADO add constraint CH_invi_tipo check (INVI_tipo IN ('artista','deportista','opinion'));
alter table TAQUILLA add constraint CH_taqu_tipo check (TAQU_tipo IN ('apuesta','boleto'));
alter table IMPLEMENTO add constraint CH_impl_tipo check (IMPL_tipo IN ('CC','CH'));
alter table ROL add constraint CH_rol_permiso check (ROL_permiso IN ('B', 'L', 'E', 'M', 'BL', 'BE', 'BM', 'LE', 'LM', 'EM', 'BLE', 'BLM', 'BEM', 'LEM', 'BLEM'));
alter table PESO add constraint CH_peso_tipo check (PESO_tipo IN ('ejemplar', 'jinete'));

/*Unique*/
alter table caballeriza add constraint UN_caba_numero unique (caba_numero);
alter table PROPIETARIO add constraint UN_prop_cedula unique (PROP_cedula);
alter table PROPIETARIO add constraint UN_prop_email unique (PROP_email);
alter table JINETE add constraint UN_jine_cedula unique (JINE_cedula);
/*alter table IMPLEMENTO add constraint UN_impl_nombre unique (IMPL_nombre);*/
alter table MEDICAMENTO add constraint UN_medi_nombre unique (MEDI_nombre);
alter table ENFERMEDAD add constraint UN_enfe_nombre unique (ENFE_nombre);
alter table APUESTA add constraint UN_apue_nombre unique (APUE_nombre);
alter table USUARIO add constraint UN_usua_nombre unique (USUA_nombre);
alter table ROL add constraint UN_rol_nombre unique (ROL_nombre);
alter table puesto add constraint UN_pues_numero_caba unique (pues_numero,fk_caba);
alter table haras add constraint UN_hara_nombre unique (HARA_nombre);
/*alter table hora add constraint UN_hora_inicio_fin_dia unique (hora_inicio,hora_fin,hora_dia);*/
alter table hora add constraint UN_hora_inicio_fin_dia unique (hora_inicio,hora_dia);
alter table pista add constraint UN_pist_longitud unique (pist_longitud);
alter table stud add constraint UN_stud_nombre unique (stud_nombre);
