CREATE TABLE tb_usuarios(
    id                      INT  (11) not null AUTO_INCREMENT PRIMARY KEY,
    nombres                 VARCHAR (255) NULL,
    email                   VARCHAR (255) NULL,
    email_verificado        VARCHAR (255) NULL,
    password_user           VARCHAR (255) NULL,
    token                   VARCHAR (255) NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eleminacion         DATETIME NULL,
    estado                  VARCHAR (10)
);