-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2024 a las 17:34:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` date NOT NULL,
  `visto` tinyint(1) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `terminado` tinyint(1) NOT NULL,
  `favorito` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animes`
--

INSERT INTO `animes` (`id`, `nombre`, `descripcion`, `fecha`, `visto`, `foto`, `observaciones`, `terminado`, `favorito`) VALUES
(1, 'One Piece', 'One Piece es un épico manga y anime creado por Eiichiro Oda. La historia sigue a Monkey D. Luffy y su tripulación mientras buscan el tesoro supremo, el One Piece, en el vasto y peligroso Grand Line. Luffy posee poderes de la Fruta del Diablo que le otorgan elasticidad. A lo largo de su viaje, enfrenta a poderosos enemigos, forja amistades duraderas y descubre los secretos del mundo. La serie destaca por su narrativa emocionante, personajes carismáticos y exploración de temas como la amistad, la aventura y la búsqueda de sueños.', '1997-07-22', 1, 'https://tse3.mm.bing.net/th?id=OIP.khAil8AQFdjUbAS1jon9LwHaGH&pid=Api&P=0&h=180', 'One Piece de momento es mi anime favorito.', 0, 1),
(2, 'Ao no Orchesta', 'Hajime Aono, un niño que solía ganar muchos premios en concursos de violín, dejó de tocar el violín por circunstancias familiares. Después de eso, se une al club de orquesta en la escuela secundaria, donde conoce a Nao Saeki, quien ha logrado el puntaje más alto en la competencia, y compite por habilidades de violín.', '2017-04-25', 1, 'https://tse2.mm.bing.net/th?id=OIP.zjsKqjhzETN1HyrO-5uMUQHaIT&pid=Api&P=0&h=180', 'Uno de los animes de música que mas me gustan', 0, 1),
(3, 'The Eminence in Shadow (1ª Temporada)', '\r\nEn el Japón actual, Minoru Kageno, un joven con aspiraciones clandestinas, renace en un reino fantástico como Cid Kagenou después de un accidente fatal. Adopta la identidad de Shadow, líder de Shadow Garden, una organización que combate al Culto de Diablos. Cid teje una narrativa ficticia, reclutando a Alpha, una niña elfa, para luchar contra las amenazas reales del Culto. Mientras lucha por liderar Shadow Garden, Cid se enfrenta a desafíos, desdibujando las líneas entre su invención y la cruda realidad del mundo de fantasía. La trama gira en torno a su evolución de aspirante a líder en la lucha contra las fuerzas oscuras.', '2018-11-05', 1, 'https://tse2.mm.bing.net/th?id=OIP.4t_IW3tCXz2xR2J7lWH62gHaEK&pid=Api&P=0&h=180', 'Un anime que me encanta', 1, 0),
(4, 'The Eminence in Shadow (2ª Temporada)', '\r\nEn el Japón actual, Minoru Kageno, un joven con aspiraciones clandestinas, renace en un reino fantástico como Cid Kagenou después de un accidente fatal. Adopta la identidad de Shadow, líder de Shadow Garden, una organización que combate al Culto de Diablos. Cid teje una narrativa ficticia, reclutando a Alpha, una niña elfa, para luchar contra las amenazas reales del Culto. Mientras lucha por liderar Shadow Garden, Cid se enfrenta a desafíos, desdibujando las líneas entre su invención y la cruda realidad del mundo de fantasía. La trama gira en torno a su evolución de aspirante a líder en la lucha contra las fuerzas oscuras.', '2023-10-04', 1, 'https://tse2.mm.bing.net/th?id=OIP.4t_IW3tCXz2xR2J7lWH62gHaEK&pid=Api&P=0&h=180', 'Segunda parte igual de increíble que la primera', 0, 0),
(5, 'Death Parade', 'Cada vez que alguien muere, las almas de las personas son enviadas a uno de los muchos bares misteriosos, administrados por camareros que sirven como árbitros dentro de una torre en el más allá. Allí, deben participar en los Juegos de la Muerte, poniendo sus almas en juego, cuyos resultados revelan qué secretos los llevaron a su situación y cuál será su destino después, con los árbitros juzgando si sus almas serán enviadas para la reencarnación o desterradas dentro del vacío. La serie sigue a Decim, el barman solitario del bar, donde se envía a las personas que murieron al mismo tiempo, conocido como el bar Quindecim, cuyo papel es juzgar a estas almas, esto cambia al conocer a una curiosa mujer de cabello negro.', '2013-03-02', 1, 'https://tse4.mm.bing.net/th?id=OIP.d-a6fCHYzRMV3TAfUvT1CwHaEd&pid=Api&P=0&h=180', 'Un muy buen anime, ha sido una muy buena experiencia', 1, 0),
(6, 'Erased', 'Año 2006. Satoru Fujinuma es un autor de manga frustrado que trabaja como repartidor de pizzas para llegar a final de mes. Lo que no sabe nadie es que posee un don excepcional: cada vez que tiene lugar alguna tragedia cerca de él es proyectado unos minutos hacia atrás en el tiempo para tratar de impedirla. Precisamente, uno de estos episodios hace aflorar los recuerdos reprimidos de su infancia traumática, lo que acaba teniendo consecuencias demoledoras y trágicas en su presente. Una vez más, sufre una de sus regresiones, solo que esta vez lo lleva hasta el año 1988, justo antes de que su compañera de clase Kayo Hinazuki se convirtiera en la primera víctima de un secuestrador en serie. ¿Será el Satoru de 11 años capaz de reparar el pasado para cambiar el presente?', '2012-06-04', 1, 'https://tse4.mm.bing.net/th?id=OIP.An3wUBFUPYvxLZFaEHsOUQHaE_&pid=Api&P=0&h=180', 'Un anime muy entretenido', 1, 0),
(7, 'Dance Dance Danseur', 'Al principio nos muestra su gran pasión por el ballet pero debido a la muerte repentina de su padre se obliga así mismo a dejar el ballet y encontrar un deporte más \" varonil\". En secundaria conoce a Miyako, la cual lo anima a entrar en las clases de su madre debido a que lo ha visto realizando un paso de bailet en su clase diciendo que era una patada voladora. Este pensando que está enamorada de él la sigue al estudio de su madre.Al principio, tiene algo de rechazo debido a su trauma pero poco a poco va entrando e una espiral de emoción que lo va enganchando al ballet.', '2015-09-14', 1, 'https://tse4.mm.bing.net/th?id=OIP.Sp-JNQ4AHUWh6YJsJowgFQHaEq&pid=Api&P=0&h=180', 'Un anime de danza el cual no creía que me fuese ha gustar, pero me causó una gran impresión', 1, 0),
(8, 'Gakuen Babysitters', 'Tras la repentina muerte de sus padres, el estudiante de secundaria Ryūichi Kashima y su hermano menor, Kotarō (un niño en edad preescolar), quedan huérfanos y sin ningún lugar al cual llamar hogar. La presidenta de la prestigiosa Academia Morinomiya ofrece tomar a ambos niños bajo su cuidado, junto con un nuevo hogar y una matrícula escolar gratuita, bajo la condición de que Ryūichi ayude con la guardería de la escuela y trabaje allí como niñero mientras también asiste a clases durante el horario escolar.', '2009-11-10', 1, 'https://tse4.mm.bing.net/th?id=OIP.BMISO3vGpUvxnjWbmRn08QHaEK&pid=Api&P=0&h=180', 'Un anime muy tierno', 1, 0),
(9, 'Horimiya (1ª Temporada)', 'Kyouko Hori podría parecer una adolescente normal, pero es una persona completamente distinta después de clases. En la ausencia de sus padres trabajadores, Hori ha sido como una madre para su pequeño hermano desde que ambos eran pequeños; entre cuidar a su hermano, cocinar para ambos y los quehaceres de la casa, ella no tiene mucho tiempo para tener la normal vida social de un adolescente. Un día, conoce a alguien el cual tampoco muestra su verdadero ser en el instituto, un tranquilo y taciturno chico llamado Izumi Miyamura. Ella había asumido que Izumi era un ratón de biblioteca, y posiblemente un otaku, pero no podría haber estado más equivocada. Fuera del instituto, Izumi es un sujeto amigable con gran cantidad de perforaciones corporales y tatuajes, y no es muy bueno en lo académico. Ahora ambos tienen una persona a la cual le pueden mostrar ambos lados de sus vidas.', '2008-10-22', 1, 'https://tse3.mm.bing.net/th?id=OIP.OneYRKqVeGL8qjBq5eTvSQHaEK&pid=Api&P=0&h=180', 'Un anime de romance muy entretenido', 1, 0),
(10, 'Horimiya (2ª Temporada)', 'Kyouko Hori podría parecer una adolescente normal, pero es una persona completamente distinta después de clases. En la ausencia de sus padres trabajadores, Hori ha sido como una madre para su pequeño hermano desde que ambos eran pequeños; entre cuidar a su hermano, cocinar para ambos y los quehaceres de la casa, ella no tiene mucho tiempo para tener la normal vida social de un adolescente. Un día, conoce a alguien el cual tampoco muestra su verdadero ser en el instituto, un tranquilo y taciturno chico llamado Izumi Miyamura. Ella había asumido que Izumi era un ratón de biblioteca, y posiblemente un otaku, pero no podría haber estado más equivocada. Fuera del instituto, Izumi es un sujeto amigable con gran cantidad de perforaciones corporales y tatuajes, y no es muy bueno en lo académico. Ahora ambos tienen una persona a la cual le pueden mostrar ambos lados de sus vidas.', '2011-12-22', 1, 'https://tse3.mm.bing.net/th?id=OIP.OneYRKqVeGL8qjBq5eTvSQHaEK&pid=Api&P=0&h=180', 'Lo mismo que la primera', 1, 0),
(11, 'Your Lie in April', 'Kōsei Arima, un talentoso pianista infantil, pierde la capacidad de escuchar el sonido del piano tras la muerte de su madre, su instructora. Sumido en un colapso mental, se retira de la música. Dos años después, su vida cambia al conocer a Kaori Miyazono, una vibrante violinista de catorce años. Kaori lo inspira a regresar al mundo de la música, mostrándole la importancia de la libertad y la expresión emocional en la interpretación musical. A través de su relación, Kōsei redescubre la alegría y el color en su vida, aprendiendo a romper con las estructuras rígidas del pasado.', '2014-10-10', 1, 'https://www.intoxianime.com/wp-content/uploads/2016/12/maxresdefault-2-1.jpg', 'Mi anime de musica/romance favorito', 1, 1),
(16, 'Mushoku Tensei: Isekai Ittara Honki Dasu (1ª Temporada)', 'Un otaku de 34 años es expulsado de su hogar por ser un \"NEET\" y hikkikomori, encontrándose en mal estado de salud, sin atractivo y sin dinero. Lamentando sus decisiones pasadas, se enfrenta a un callejón sin salida. Mientras intenta salvar a tres estudiantes de secundaria de un accidente, es atropellado y muere. Sin embargo, renace en un mundo medieval fantástico como Rudeus Greyrat. Decidido a vivir sin arrepentimientos, comienza su viaje para reiniciar su vida y superar su pasado en este nuevo mundo.', '2019-03-15', 1, 'https://wallpapercave.com/wp/wp8662867.jpg', 'Un muy buen Isekai', 1, 1),
(17, 'Mushoku Tensei: Isekai Ittara Honki Dasu (2ª Temporada)', 'Un otaku de 34 años es expulsado de su hogar por ser un \"NEET\" y hikkikomori, encontrándose en mal estado de salud, sin atractivo y sin dinero. Lamentando sus decisiones pasadas, se enfrenta a un callejón sin salida. Mientras intenta salvar a tres estudiantes de secundaria de un accidente, es atropellado y muere. Sin embargo, renace en un mundo medieval fantástico como Rudeus Greyrat. Decidido a vivir sin arrepentimientos, comienza su viaje para reiniciar su vida y superar su pasado en este nuevo mundo.', '2021-10-04', 1, 'https://wallpapercave.com/wp/wp8662867.jpg', 'Un muy buen Isekai', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
