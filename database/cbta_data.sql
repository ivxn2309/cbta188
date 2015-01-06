-- =====================================================
-- Volcado de datos generales para la BD del CBTa
-- Actulizada 22/Nov/14
-- =====================================================

-- ------------------------------------------------
-- Insercion de datos
-- ------------------------------------------------
INSERT INTO Profesor VALUES("alfl@cbta188","1234567890","LETICIA ALVARADO FELIX");
INSERT INTO Profesor VALUES("chcs@cbta188","1234567890","SERGIO CHAIREZ COLUNGA");
INSERT INTO Profesor VALUES("gotr@cbta188","1234567890","RUBEN GONZALEZ TRIANA");
INSERT INTO Profesor VALUES("nurb@cbta188","1234567890","BERMUNDO NUÑEZ REVELES");
INSERT INTO Profesor VALUES("mamj@cbta188","1234567890","JOSÉ LUIS MARTINEZ MARTINEZ");
INSERT INTO Profesor VALUES("vevp@cbta188","1234567890","PEDRO VELAZQUEZ VALLE");
INSERT INTO Profesor VALUES("cacm@cbta188","1234567890","MARTINA CABRERA CORVERA");
INSERT INTO Profesor VALUES("raar@cbta188","1234567890","RAFAEL RADA ALANIZ");
INSERT INTO Profesor VALUES("ceoa@cbta188","1234567890","ANDRES FERNANDO CERROS ORTEGA");
INSERT INTO Profesor VALUES("robp@cbta188","1234567890","PAMELA RODRIGUEZ BOTELLO");
INSERT INTO Profesor VALUES("almj@cbta188","1234567890","JOSE BALTAZAR ALVARADO MARTINEZ");
INSERT INTO Profesor VALUES("vadg@cbta188","1234567890","GUADALUPE VARGAS DIAZ");
INSERT INTO Profesor VALUES("rasj@cbta188","1234567890","JANETH ALEJANDRA RAYGOZA SOLIS");
INSERT INTO Profesor VALUES("marx@cbta188","1234567890","XOCHITL MARTINEZ RAMIREZ");
INSERT INTO Profesor VALUES("aglb@cbta188","1234567890","BERNARDO AGUILAR LOZANO");
INSERT INTO Profesor VALUES("bara@cbta188","1234567890","AMANDA BARAJAS RODRIGUEZ");
INSERT INTO Profesor VALUES("bamm@cbta188","1234567890","MARIO ALBERTO BAZALDUA MACIAS");
INSERT INTO Profesor VALUES("brri@cbta188","1234567890","ISRAEL BRITO REVELES");
INSERT INTO Profesor VALUES("sagm@cbta188","1234567890","MA. CONCEPCION SANCHEZ GONZALEZ");
INSERT INTO Profesor VALUES("elbb@cbta188","1234567890","BRENDA E. ELIAS  BENAVIDES");
INSERT INTO Profesor VALUES("aral@cbta188","1234567890","LIZBETH A. ARROLLO ARIAS");
INSERT INTO Profesor VALUES("orsj@cbta188","1234567890","JUAN RAMON ORTIZ SANCHEZ");
INSERT INTO Profesor VALUES("macb@cbta188","1234567890","BLANCA SILVIA MARQUEZ CASAS");
INSERT INTO Profesor VALUES("lovj@cbta188","1234567890","JAVIER DE JESUS LOERA VILLASANA");

-- ------------------------------------------------
-- Materia
-- ------------------------------------------------
INSERT INTO Materia VALUES("QUI1", "QUIMICA I");
INSERT INTO Materia VALUES("ALG", "ALGEBRA");
INSERT INTO Materia VALUES("ING1", "INGLES I");
INSERT INTO Materia VALUES("LOG", "LOGICA");
INSERT INTO Materia VALUES("LEO", "LECTURA EXPRESION ORAL Y ESCRITA I");
INSERT INTO Materia VALUES("TIC", "TECNOLOGIAS DE LA INFORMACION Y LA COMUNICACION");
INSERT INTO Materia VALUES("GEO", "GEOMETRIA ANALITICA");
INSERT INTO Materia VALUES("BIO", "BIOLOGIA");
INSERT INTO Materia VALUES("ETI", "ETICA");
INSERT INTO Materia VALUES("ING3", "INGLES III");
INSERT INTO Materia VALUES("FIS2", "FISICA II");
INSERT INTO Materia VALUES("PYE", "PROBABILIDAD Y ESTADISTICA");
INSERT INTO Materia VALUES("ING5", "INGLES V");
INSERT INTO Materia VALUES("CTS3", "CIENCIA TECNOLOGIA SOCIEDAD Y VALORES");

INSERT INTO Materia VALUES("TAM2S1", "SUB1: MANEJO DEL AGUA Y EL SUELO");
INSERT INTO Materia VALUES("TAM2S2", "SUB2: PRODUCE PLANTAS PARA LAS ACTIVIDADES AGRICOLAS");
INSERT INTO Materia VALUES("TAM2S3", "SUB3: CULTIVAR PLANTAS REGIONALES");

INSERT INTO Materia VALUES("TAM4S1", "SUB1: ELABORA PRODUCTOS HORTOFRUTICOLAS");
INSERT INTO Materia VALUES("TAM4S2", "SUB2: ELABORA PRODUCTOS LACTEOS");
INSERT INTO Materia VALUES("TAM4S3", "SUB3: ELABORA PRODUCTOS CARNICOS");

INSERT INTO Materia VALUES("TEM2S1", "SUB1: IDENTIFICA OPORTUNIDADES DE NEGOCIO");
INSERT INTO Materia VALUES("TEM2S2", "SUB2: IMPULSA IDEAS FACTIBLES DE NEGOCIO");

INSERT INTO Materia VALUES("TEM4S1", "SUB1: TEC. EN ADMON. SUBMODULO 1");
INSERT INTO Materia VALUES("TEM4S2", "SUB1: TEC. EN ADMON. SUBMODULO 2");

INSERT INTO Materia VALUES("TIM2S1", "UTILIZACION DE SOFTWARE DE DISEÑO PARA EL MANEJO DE GRAFICOS");
INSERT INTO Materia VALUES("TIM2S2", "PRODUCCION DE ANIMACION CON ELEMENTOS MULTIMEDIA");
INSERT INTO Materia VALUES("TIM2S3", "ELABORACION DE PAGINAS WEB");

INSERT INTO Materia VALUES("TIM4S1", "ENSAMBLAR Y CONFIGURAR EQUIPO DE COMPUTO");
INSERT INTO Materia VALUES("TIM4S2", "APLICA MANTENIMIENTO CORRECTIVO A EQUIPO DE COMPUTO");

-- ------------------------------------------------
-- Grupo
-- ------------------------------------------------
INSERT INTO Grupo VALUES("1A", "1º 'A'", "1er Semestre");
INSERT INTO Grupo VALUES("1B", "1º 'B'", "1er Semestre");
INSERT INTO Grupo VALUES("1C", "1º 'C'", "1er Semestre");
INSERT INTO Grupo VALUES("1D", "1º 'D'", "1er Semestre");

INSERT INTO Grupo VALUES("3TAA", "Tecnico Agropecuario", "3er Semestre");
INSERT INTO Grupo VALUES("3TIA", "Tecnico en Informatica Grupo A", "3er Semestre");
INSERT INTO Grupo VALUES("3TIB", "Tecnico en Informatica Grupo B", "3er Semestre");
INSERT INTO Grupo VALUES("3TADA", "Tecnico en Administracion para el Emprendimiento Agropecuario", "3er Semestre");

INSERT INTO Grupo VALUES("5TAA", "Tecnico Agropecuario", "5to Semestre");
INSERT INTO Grupo VALUES("5TIA", "Tecnico en Informatica Grupo A", "5to Semestre");
INSERT INTO Grupo VALUES("5TIB", "Tecnico en Informatica Grupo B", "5to Semestre");
INSERT INTO Grupo VALUES("5TADA", "Tecnico en Administracion para el Emprendimiento Agropecuario", "5to Semestre");

-- ------------------------------------------------
-- HorarioDocente
-- ------------------------------------------------
-- Formacion basica
INSERT INTO HorarioDocente VALUES (NULL, "alfl@cbta188", "1A", "QUI1");
INSERT INTO HorarioDocente VALUES (NULL, "alfl@cbta188", "1B", "QUI1");

INSERT INTO HorarioDocente VALUES (NULL, "chcs@cbta188", "1C", "QUI1");
INSERT INTO HorarioDocente VALUES (NULL, "chcs@cbta188", "1D", "QUI1");

INSERT INTO HorarioDocente VALUES (NULL, "ceoa@cbta188", "1A", "ALG");
INSERT INTO HorarioDocente VALUES (NULL, "ceoa@cbta188", "1B", "ALG");

INSERT INTO HorarioDocente VALUES (NULL, "gotr@cbta188", "1C", "ALG");
INSERT INTO HorarioDocente VALUES (NULL, "nurb@cbta188", "1D", "ALG");

INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "1A", "ING1");
INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "1B", "ING1");

INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "1C", "ING1");
INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "1D", "ING1");

INSERT INTO HorarioDocente VALUES (NULL, "vadg@cbta188", "1A", "LOG");
INSERT INTO HorarioDocente VALUES (NULL, "vadg@cbta188", "1B", "LOG");

INSERT INTO HorarioDocente VALUES (NULL, "rasj@cbta188", "1C", "LOG");
INSERT INTO HorarioDocente VALUES (NULL, "rasj@cbta188", "1D", "LOG");

INSERT INTO HorarioDocente VALUES (NULL, "cacm@cbta188", "1A", "LEO");
INSERT INTO HorarioDocente VALUES (NULL, "cacm@cbta188", "1B", "LEO");
INSERT INTO HorarioDocente VALUES (NULL, "cacm@cbta188", "1C", "LEO");
INSERT INTO HorarioDocente VALUES (NULL, "cacm@cbta188", "1D", "LEO");

INSERT INTO HorarioDocente VALUES (NULL, "raar@cbta188", "1A", "TIC");
INSERT INTO HorarioDocente VALUES (NULL, "raar@cbta188", "1B", "TIC");
INSERT INTO HorarioDocente VALUES (NULL, "raar@cbta188", "1C", "TIC");
INSERT INTO HorarioDocente VALUES (NULL, "raar@cbta188", "1D", "TIC");

INSERT INTO HorarioDocente VALUES (NULL, "ceoa@cbta188", "3TAA", "GEO");
INSERT INTO HorarioDocente VALUES (NULL, "ceoa@cbta188", "3TIA", "GEO");

INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TIB", "GEO");
INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TADA", "GEO");

INSERT INTO HorarioDocente VALUES (NULL, "almj@cbta188", "3TAA", "BIO");
INSERT INTO HorarioDocente VALUES (NULL, "almj@cbta188", "3TIA", "BIO");
INSERT INTO HorarioDocente VALUES (NULL, "almj@cbta188", "3TIB", "BIO");
INSERT INTO HorarioDocente VALUES (NULL, "almj@cbta188", "3TADA", "BIO");

INSERT INTO HorarioDocente VALUES (NULL, "vadg@cbta188", "3TAA", "ETI");
INSERT INTO HorarioDocente VALUES (NULL, "vadg@cbta188", "3TIA", "ETI");
INSERT INTO HorarioDocente VALUES (NULL, "rasj@cbta188", "3TIB", "ETI");
INSERT INTO HorarioDocente VALUES (NULL, "marx@cbta188", "3TADA", "ETI");

INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "3TAA", "ING3");
INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "3TIA", "ING3");
INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "3TIB", "ING3");
INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "3TADA", "ING3");

INSERT INTO HorarioDocente VALUES (NULL, "chcs@cbta188", "3TAA", "FIS2");
INSERT INTO HorarioDocente VALUES (NULL, "chcs@cbta188", "3TIA", "FIS2");
INSERT INTO HorarioDocente VALUES (NULL, "gotr@cbta188", "3TIB", "FIS2");
INSERT INTO HorarioDocente VALUES (NULL, "gotr@cbta188", "3TADA", "FIS2");

INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TAA", "PYE");
INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TIA", "PYE");
INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TIB", "PYE");
INSERT INTO HorarioDocente VALUES (NULL, "robp@cbta188", "3TADA", "PYE");

INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "3TAA", "ING5");
INSERT INTO HorarioDocente VALUES (NULL, "mamj@cbta188", "3TIA", "ING5");
INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "3TIB", "ING5");
INSERT INTO HorarioDocente VALUES (NULL, "vevp@cbta188", "3TADA", "ING5");

INSERT INTO HorarioDocente VALUES (NULL, "vadg@cbta188", "3TAA", "CTS3");
INSERT INTO HorarioDocente VALUES (NULL, "aglb@cbta188", "3TIA", "CTS3");
INSERT INTO HorarioDocente VALUES (NULL, "aglb@cbta188", "3TIB", "CTS3");
INSERT INTO HorarioDocente VALUES (NULL, "aglb@cbta188", "3TADA", "CTS3");

-- Componentes de Formacion Profesional
-- Agropecuario
INSERT INTO HorarioDocente VALUES (NULL, "bara@cbta188", "3TAA", "TAM2S1");
INSERT INTO HorarioDocente VALUES (NULL, "chcs@cbta188", "3TAA", "TAM2S2");
INSERT INTO HorarioDocente VALUES (NULL, "nurb@cbta188", "3TAA", "TAM2S3");

INSERT INTO HorarioDocente VALUES (NULL, "bamm@cbta188", "5TAA", "TAM4S1");
INSERT INTO HorarioDocente VALUES (NULL, "bamm@cbta188", "5TAA", "TAM4S2");
INSERT INTO HorarioDocente VALUES (NULL, "brri@cbta188", "5TAA", "TAM4S3");

-- Administracion
INSERT INTO HorarioDocente VALUES (NULL, "sagm@cbta188", "3TADA", "TEM2S1");
INSERT INTO HorarioDocente VALUES (NULL, "elbb@cbta188", "3TADA", "TEM2S2");

INSERT INTO HorarioDocente VALUES (NULL, "sagm@cbta188", "5TADA", "TEM4S1");
INSERT INTO HorarioDocente VALUES (NULL, "sagm@cbta188", "5TADA", "TEM4S2");

-- Informatica A
INSERT INTO HorarioDocente VALUES (NULL, "aral@cbta188", "3TIA", "TIM2S1");
INSERT INTO HorarioDocente VALUES (NULL, "aral@cbta188", "3TIA", "TIM2S2");
INSERT INTO HorarioDocente VALUES (NULL, "aral@cbta188", "3TIA", "TIM2S3");

INSERT INTO HorarioDocente VALUES (NULL, "orsj@cbta188", "5TIA", "TIM4S1");
INSERT INTO HorarioDocente VALUES (NULL, "orsj@cbta188", "5TIA", "TIM4S2");

-- Informatica B
INSERT INTO HorarioDocente VALUES (NULL, "macb@cbta188", "3TIB", "TIM2S1");
INSERT INTO HorarioDocente VALUES (NULL, "lovj@cbta188", "3TIB", "TIM2S2");
INSERT INTO HorarioDocente VALUES (NULL, "lovj@cbta188", "3TIB", "TIM2S3");

INSERT INTO HorarioDocente VALUES (NULL, "macb@cbta188", "5TIB", "TIM4S1");
INSERT INTO HorarioDocente VALUES (NULL, "macb@cbta188", "5TIB", "TIM4S2");

