/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  21/06/2022 10:08:04                      */
/*==============================================================*/


drop table if exists ADRESSE;

drop table if exists AVOIR;

drop table if exists AVOIR_CONTACT;

drop table if exists CANDIDATER;

drop table if exists DIPLOME;

drop table if exists ENTREPRISE;

drop table if exists ETUDIANT;

drop table if exists FORMATION;

drop table if exists PARENT;

drop table if exists PIECE_JOINTE;

drop table if exists PORTER_SUR;

drop table if exists POSSEDER;

drop table if exists STAGE;

drop table if exists THEME;

/*==============================================================*/
/* Table : ADRESSE                                              */
/*==============================================================*/
create table ADRESSE
(
   ID                   int not null,
   VILLE                longtext,
   CODEPOSTALE          int,
   MAIL                 longtext,
   TEL                  int,
   primary key (ID)
);

/*==============================================================*/
/* Table : AVOIR                                                */
/*==============================================================*/
create table AVOIR
(
   ID                   int not null,
   PAR_ID               int not null,
   primary key (ID, PAR_ID)
);

/*==============================================================*/
/* Table : AVOIR_CONTACT                                        */
/*==============================================================*/
create table AVOIR_CONTACT
(
   ID                   int not null,
   ENT_ID               int not null,
   primary key (ID, ENT_ID)
);

/*==============================================================*/
/* Table : CANDIDATER                                           */
/*==============================================================*/
create table CANDIDATER
(
   ETU_ID               int not null,
   ID                   int not null,
   DATE                 date,
   primary key (ETU_ID, ID)
);

/*==============================================================*/
/* Table : DIPLOME                                              */
/*==============================================================*/
create table DIPLOME
(
   ID                   int not null,
   SERIE                longtext,
   INTITULE             longtext,
   MENTION              varchar(1024),
   ANNEE                int,
   LIEU                 longtext,
   MOYENNE              decimal,
   primary key (ID)
);

/*==============================================================*/
/* Table : ENTREPRISE                                           */
/*==============================================================*/
create table ENTREPRISE
(
   ID                   int not null,
   NOM                  longtext,
   PROPOSITION_FERME    bool,
   primary key (ID)
);

/*==============================================================*/
/* Table : ETUDIANT                                             */
/*==============================================================*/
create table ETUDIANT
(
   ID                   int not null,
   ADR_ID               int not null,
   NOM                  longtext,
   PRENOM               text,
   NOM_JEUNE_FILLE      text,
   DDN                  date,
   primary key (ID)
);

/*==============================================================*/
/* Table : FORMATION                                            */
/*==============================================================*/
create table FORMATION
(
   ID                   int not null,
   INTITULE             longtext,
   primary key (ID)
);

/*==============================================================*/
/* Table : PARENT                                               */
/*==============================================================*/
create table PARENT
(
   ID                   int not null,
   ADR_ID               int not null,
   NOM                  longtext,
   PRENOM               text,
   DDN                  date,
   primary key (ID)
);

/*==============================================================*/
/* Table : PIECE_JOINTE                                         */
/*==============================================================*/
create table PIECE_JOINTE
(
   ID                   int not null,
   NUMERO               int,
   NOM                  longtext,
   TAILLE               int,
   TYPE                 longtext,
   BIN                  longblob
);

/*==============================================================*/
/* Table : PORTER_SUR                                           */
/*==============================================================*/
create table PORTER_SUR
(
   ID                   int not null,
   THE_ID               int not null,
   primary key (ID, THE_ID)
);

/*==============================================================*/
/* Table : POSSEDER                                             */
/*==============================================================*/
create table POSSEDER
(
   ID                   int not null,
   DIP_ID               int not null,
   primary key (ID, DIP_ID)
);

/*==============================================================*/
/* Table : STAGE                                                */
/*==============================================================*/
create table STAGE
(
   ID                   int not null,
   ENT_ID               int not null,
   ETU_ID               int not null,
   ANNEE                int,
   primary key (ID)
);

/*==============================================================*/
/* Table : THEME                                                */
/*==============================================================*/
create table THEME
(
   ID                   int not null,
   LIBELLE              text,
   primary key (ID)
);

alter table AVOIR add constraint FK_AVOIR foreign key (ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

alter table AVOIR add constraint FK_AVOIR2 foreign key (PAR_ID)
      references PARENT (ID) on delete restrict on update restrict;

alter table AVOIR_CONTACT add constraint FK_AVOIR_CONTACT foreign key (ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

alter table AVOIR_CONTACT add constraint FK_AVOIR_CONTACT2 foreign key (ENT_ID)
      references ENTREPRISE (ID) on delete restrict on update restrict;

alter table CANDIDATER add constraint FK_CANDIDATER foreign key (ETU_ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

alter table CANDIDATER add constraint FK_CANDIDATER2 foreign key (ID)
      references FORMATION (ID) on delete restrict on update restrict;

alter table ETUDIANT add constraint FK_RESIDER foreign key (ADR_ID)
      references ADRESSE (ID) on delete restrict on update restrict;

alter table PARENT add constraint FK_HABITER foreign key (ADR_ID)
      references ADRESSE (ID) on delete restrict on update restrict;

alter table PIECE_JOINTE add constraint FK_RATTACHER foreign key (ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

alter table PORTER_SUR add constraint FK_PORTER_SUR foreign key (ID)
      references STAGE (ID) on delete restrict on update restrict;

alter table PORTER_SUR add constraint FK_PORTER_SUR2 foreign key (THE_ID)
      references THEME (ID) on delete restrict on update restrict;

alter table POSSEDER add constraint FK_POSSEDER foreign key (ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

alter table POSSEDER add constraint FK_POSSEDER2 foreign key (DIP_ID)
      references DIPLOME (ID) on delete restrict on update restrict;

alter table STAGE add constraint FK_AVOIR_LIEU foreign key (ENT_ID)
      references ENTREPRISE (ID) on delete restrict on update restrict;

alter table STAGE add constraint FK_EFFECTUER foreign key (ETU_ID)
      references ETUDIANT (ID) on delete restrict on update restrict;

