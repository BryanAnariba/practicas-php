<?php
    //Base de Datos:
    /*MYSQL: GESTOR DE BBDD RELACIONAL, MUTIHILO Y MULTIUSUARIO
    

        -RELACIONAL: la informacion esta relacionada en varias tablas entre si
        -MULTIHILO: Por que soporta varios procesos a la vez o hilos a la vez o consultas a la vez
        -MULTIUSUARIO: Puede haber varios usuarios usando la base de datos ya sea modificando o consultando dicha BD

        Caracteristicas de BD: ES LIBRE
        *no se paga por este gestor de base de datos
        *se puede descargar el codigo fuente del gestor


        /*Servidores MYSQL:
            -ISP----- para hacer una plataforma donde todos se conecten
            -LOCAL--- para pruebas en el ordenador al ver que funciona se pasa a remoto

            
        */
    /*Acceso al servidor MYSQL
        desde 
            -Consola
            -phpmyadmin
    */


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                //CREAR UNA BASE DE DATOS DESDE PHPMYADMIN////////////////////////////////
                                                /*
                                                    1-Vamos al menu phpmyadmin
                                                    2-Damos click en Base de Datos "Muestra las bases existentes"
                                                    3-Crear base de datos con:
                                                        nombre: nombre_base_datos
                                                        cotejamiento: de momento_no
                                                    4-pulsamos crear y sale mensaje base de datos a sido creada
                                                    
                                                */
                                //ELIMINAR UNA BASE DE DATOS///////////////////////////////////////////////
                                                //EN NUEVA BASE DE DATOS Y A LA IZQUIERDA ESTA EL BOTON ELIMINAR

                                /*
                                    
                                //CREAR UNA BASE DE DATOS DESDE LA CONSOLA
                                                buscas el directorio en donde se encuentra mysql "Aqui varia del ordenador y ademas debes tener conocimiento de cmd"
                                                -con la linea
                                                create database nombre_base_datos;
                                                "Listo das enter y tu base de datos sera creada"

                                //ELIMINAR UNA BASE DE DATOS DESDE LA CONSOLA
                                                drop database nombre_base_datos;
                                                "Al dar enter se borrada de inmediato"
                                
                                // VER LAS BASES DE DATOS DE NUESTRO GESTOR:
                                                -show databases; 
                                */
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*CREANDO Y ELIMINANDO TABLAS MYSQL
    PRIMERO APRENDER SQL-SERVER;
    *Querys o consulta:
        
        -Concepto de tabla: las columnas=campos,filas=registros
        -cada campo debe tener un nombre.
        -cada campo debe definir el tipo de datos que va a almacenar cada campo

    Como crear una Tabla:
    * PARA ENTRAR A LA TABLA EN LA QUE VAS A TRABAJAR

        --------------> use usuarios;
    *------------------------------------------------------------------CREAR LA TABLA:------------------------------------------------------------------
                                            create table nombre_tabla (nombre_campo1 varchar(30) , nombre_campo2 varchar(10));

    -------------------------------------------------------------------------------------------------------------------------------------------------------------------
    varchar = tipo de dato leer documento.
    varchar(longitud); en numero que es lo maximo de caracteres que permite
    ------------------------------------------------------------------------------------------------------------------------------------------------------------------

    -------------------------------------------------------------------------------------------------------------------------------------------------------------------
    ESTRUCUTRA DE UN BD
    BBDD
        TABLAS 
            INFORMACION
    -------------------------------------------------------------------------------------------------------------------------------------------------------------------

    *------------------------------------------------------------------Eliminar una tabla------------------------------------------------------------------
                                                                    DROP TABLE NOMBRE_TABLA;


    *------------------------------------------------------------------COMANDO PARA VER TABLAS:--------------------------------------------------
                                                                    DESCRIBE NOMBRE_TABLA;


    *------------------------------------------------------------------COMANDO BORRAR UN CAMPO DE LA TABLA TABLAS:--------------------------------------------------
                                                                    ALTER TABLE NOMBRE_TABLA DROP CAMPO_A_ELIMINAR;


    *------------------------------------------------------------------COMANDO CREAR UN CAMPO DE LA TABLA TABLAS:--------------------------------------------------
                                                                    ALTER TABLE NOMBRE_TABLA ADD COLUMN NOMBRE_CAMPO(TAMAÑO_CAMPO)


    *------------------------------------------------------------------COMANDO INSERTAR UN CAMPO EN LA TABLA TABLAS:--------------------------------------------------
                                                        INSERT INTO NOMBRE_TABLA(CAMPO_1 , ... , CAMPO_N) VALUES (VALOR_CAMPO_1 , ... , VALOR_CAMPO_N);

     *------------------------------------------------------------------CONECTANDO A ALA WEB LA BBDD:--------------------------------------------------
    /*
        REQUISITOS PARA CONECTAR LA BASE A LA WEB:: 
            -DIRECCION DE LA BBDD:::::::LOCALHOST
            -NOMBRE DE LA BBDD::::::::PRUEBAS
            -USUARIO DE LA BBDD:::::::::ROOT
            -CONTRASEÑA BBDD::::::::::::""
            EN ESTE CASO COO TRABAJAMOS LOCAL PERO TAMBIEN SE PAGA PARA SUBIR A INTERNET LA BBDD



            MODOS::::::::::
            POR:    
                    POO                              O                       PORPROCEDIMIENTOS
                CLASE Mysqli                                          mysqli_connect(OBSOLETA PERO SIRVE)

    */      
?>