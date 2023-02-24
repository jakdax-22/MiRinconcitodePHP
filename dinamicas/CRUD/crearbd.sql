
DROP DATABASE IF EXISTS PreguntasRespuestas;

CREATE DATABASE PreguntasRespuestas;
USE PreguntasRespuestas;

CREATE TABLE PreguntasRespuestas (
id INT AUTO_INCREMENT PRIMARY KEY,
preguntas MEDIUMTEXT NOT NULL,
respuestas MEDIUMTEXT NOT NULL
);
INSERT INTO PreguntasRespuestas (preguntas,respuestas) VALUES ('1. Cómo activar las funciones de trazabilidad de productos por lotes','Habría que acceder a Utilidades>Parámetros y en la nueva ventana nos aparecerán todos los parámetros del sistema, clickamos sobre la pestaña V.Defecto y en la parte inferior derecha marcamos la casilla Activar Trazabilidad. A partir de ahora si accedemos a Auxiliares estarán disponibles los botones Lotes, Tipos de Lote y Lotes Seguimiento.');
INSERT INTO PreguntasRespuestas (preguntas,respuestas) VALUES ('2. Cómo hacer que no se visualice un vendedor en el TPV','Habría que acceder a Maestros>Personal y una vez dentro, en la nueva pestaña nos aparecerá  una lista con el personal de la empresa, seleccionamos el que queramos y clickamos sobre la pestaña Datos y desmarcamos la casilla Visualizar en TPV de la parte inferior derecha.');
