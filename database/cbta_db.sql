-- =====================================================
-- Estructura de Base de Datos
-- 24/09/14
-- BD creada para almacenar la información que sera 
-- utilizada en el sitio del CBTa 188
-- =====================================================

-- ------------------------------------------------
-- AlumnoEntity 
-- ------------------------------------------------
DROP TABLE IF EXISTS AlumnoEntity;
CREATE TABLE IF NOT EXISTS AlumnoEntity (
	no_control VARCHAR(15) NOT NULL,
	email VARCHAR(100) NOT NULL,
	curp VARCHAR(18) NOT NULL,
	edad INT(3),
	PRIMARY KEY (no_control)
) COMMENT = 'Se usa para el logueo de usuarios';

-- ------------------------------------------------
-- Profesor
-- ------------------------------------------------
DROP TABLE IF EXISTS Profesor;
CREATE TABLE IF NOT EXISTS Profesor (
	id_docente VARCHAR(15) NOT NULL,
	password VARCHAR(100) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	PRIMARY KEY (id_docente)
) COMMENT = 'Contiene la informacion necesaria para identificar a los profesores';

-- ------------------------------------------------
-- Informacion del Profesor
-- ------------------------------------------------
DROP TABLE IF EXISTS ProfesorData;
CREATE TABLE IF NOT EXISTS ProfesorData (
	id_docente VARCHAR(15) NOT NULL,
	edad INT(3),
	profesion VARCHAR(100),
	certificaciones VARCHAR(150),
	intereses VARCHAR(150),
	citas VARCHAR(150),
	detalles VARCHAR(200),
	url VARCHAR(200),
	PRIMARY KEY (id_docente)
) COMMENT = 'Contiene la informacion adicional de los profesores';

-- ------------------------------------------------
-- Materia
-- ------------------------------------------------
DROP TABLE IF EXISTS Materia;
CREATE TABLE IF NOT EXISTS Materia (
	clave CHAR(10) NOT NULL,
	nombre VARCHAR(80) NOT NULL,
	PRIMARY KEY (clave)
) COMMENT = 'Contiene las materias impartidas';

-- ------------------------------------------------
-- Grupo
-- ------------------------------------------------
DROP TABLE IF EXISTS Grupo;
CREATE TABLE IF NOT EXISTS Grupo (
	clave CHAR(10) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	semestre VARCHAR(30),
	PRIMARY KEY (clave)
) COMMENT = 'Contiene los grupos existentes';

-- ------------------------------------------------
-- AlumnoData
-- ------------------------------------------------
DROP TABLE IF EXISTS AlumnoData;
CREATE TABLE IF NOT EXISTS AlumnoData (
	no_control VARCHAR(15) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	apaterno VARCHAR(100) NOT NULL,
	amaterno VARCHAR(100),
	grupo CHAR(10) NOT NULL REFERENCES Grupo(clave),
	PRIMARY KEY (no_control)
) COMMENT = 'Contiene la informacion de los ALUMNOS';

-- ------------------------------------------------
-- HorarioDocente
-- ------------------------------------------------
DROP TABLE IF EXISTS HorarioDocente;
CREATE TABLE IF NOT EXISTS HorarioDocente (
	id_registro INT NOT NULL AUTO_INCREMENT,
	docente VARCHAR(100) NOT NULL REFERENCES Profesor(id_docente),
	grupo CHAR(10) NOT NULL REFERENCES Grupo(clave),
	materia CHAR(10) NOT NULL REFERENCES Materia(clave),
	PRIMARY KEY(id_registro)
) COMMENT = 'Contiene el horario de los docentes (grupo, materia)';


-- ------------------------------------------------
-- Calificaciones
-- ------------------------------------------------
DROP TABLE IF EXISTS Calificaciones;
CREATE TABLE IF NOT EXISTS Calificaciones (
	id_calificacion INT AUTO_INCREMENT,
	alumno VARCHAR(15) NOT NULL REFERENCES AlumnoData(no_control),
	materia CHAR(10) NOT NULL REFERENCES Materia(clave),
	docente VARCHAR(100) NOT NULL REFERENCES Profesor(id_docente),
	calificacion DECIMAL(3,1) NOT NULL,
	PRIMARY KEY(id_calificacion)
) COMMENT = 'Contiene todas las calificaciones registradas';

