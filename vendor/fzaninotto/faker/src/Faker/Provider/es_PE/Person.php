<?php

namespace Faker\Provider\es_PE;

class Person extends \Faker\Provider\Person {
	protected static $maleNameFormats = array(
		'{{firstNameMale}} {{lastName}} {{lastName}}',
		'{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
		'{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
		'{{titleMale}} {{firstNameMale}} {{lastName}}',
		'{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
		'{{firstNameMale}} {{lastName}} {{suffix}}',
		'{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}} {{suffix}}',
	);

	protected static $femaleNameFormats = array(
		'{{firstNameFemale}} {{lastName}} {{lastName}}',
		'{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
		'{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
		'{{titleFemale}} {{firstNameFemale}} {{lastName}}',
		'{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
		'{{firstNameFemale}} {{lastName}} {{suffix}}',
		'{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} {{suffix}}',
	);

	protected static $firstNameMale = array(
		'Aarón', 'Adrián', 'Agustin', 'Alan', 'Alejandro', 'Alex', 'Alexander', 'Alonso', 'Andrés', 'Anthony', 'Antonio', 'Axel', 'Benjamin',
		'Bruno', 'Camilo', 'Carlos', 'Christian', 'Christopher', 'Cristóbal', 'Damián', 'Daniel', 'Dante', 'David', 'Diego', 'Diego Alejandro',
		'Dylan', 'Eduardo', 'Elias', 'Emiliano', 'Emilio', 'Emmanuel', 'Esteban', 'Facundo', 'Felipe', 'Fernando', 'Francisco', 'Franco',
		'Gabriel', 'Gael', 'Hipólito', 'Horacio', 'Hugo', 'Ian', 'Ignacio', 'Isaac', 'Ivan', 'Jacobo', 'Javier', 'Jerónimo',
		'Jesús', 'Joaquin', 'Jorge', 'Joshua', 'Josué', 'José', 'Juan', 'Juan David', 'Juan Diego', 'Juan José', 'Juan Manuel', 'Juan Martin',
		'Juan Pablo', 'Juan Sebastián', 'Julián', 'Kevin', 'Lautaro', 'Leonardo', 'Lorenzo', 'Lucas', 'Luciano', 'Luis', 'Manuel', 'Mario',
		'Martin', 'Mateo', 'Matthew', 'Matias', 'Maximiliano', 'Miguel', 'Miguel Ángel', 'Máximo', 'Nahuel', 'Pablo', 'Pedro', 'Rafael',
		'Ricardo', 'Rodrigo', 'Samuel', 'Santiago', 'Santino', 'Sebastián', 'Sergio', 'Simón', 'Thiago', 'Tomas', 'Valentino', 'Valentin',
		'Vicente', 'Bautista', 'Hidalgo', 'Juan Esteban',
	);

	protected static $firstNameFemale = array(
		'Abigail', 'Abril', 'Adriana', 'Agustina', 'Alejandra', 'Alessandra', 'Alexa', 'Allison', 'Alma', 'Amanda', 'Amelia', 'Ana', 'Ana Paula',
		'Ana Sofia', 'Andrea', 'Antonella', 'Antonia', 'Ariadna', 'Ariana', 'Ashley', 'Bianca', 'Camila', 'Carla', 'Carolina', 'Catalina',
		'Clara', 'Constanza', 'Daniela', 'Delfina', 'Elena ', 'Elizabeth', 'Emilia', 'Emily', 'Emma', 'Fabiana', 'Florencia', 'Fátima ',
		'Gabriela', 'Guadalupe', 'Irene', 'Isabel', 'Isabella', 'Isidora', 'Ivanna', 'Jazmin', 'Josefa', 'Josefina', 'Juana', 'Julia',
		'Juliana', 'Julieta', 'Laura', 'Lola', 'Luana', 'Luciana', 'Lucia', 'Luna', 'Magdalena', 'Maite', 'Malena', 'Manuela',
		'Mariana', 'Mariangel', 'Martina', 'Maria', 'Maria Alejandra', 'Maria Camila', 'Maria Fernanda', 'Maria José', 'Maria Paula', 'Micaela', 'Michelle', 'Miranda',
		'Montserrat', 'Mia', 'Nadia', 'Natalia', 'Nicole', 'Oliva', 'Olivia', 'Ornela', 'Paula', 'Paulina', 'Rafaela', 'Rebeca',
		'Regina', 'Renata', 'Romina', 'Salomé', 'Samantha', 'Sara', 'Silvana ', 'Sofia', 'Sophie', 'Valentina', 'Valeria', 'Valery ',
		'Victoria', 'Violeta', 'Zoe', 'Aitana', 'Sara Sofia', 'Ximena', 'Jimena',
	);

	protected static $lastName = array(
		'Acevedo', 'Acosta', 'Acuña', 'Aguayo', 'Águilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcántar', 'Alcaraz', 'Alejandro', 'Alemán', 'Alfaro', 'Alicea', 'Almanza', 'Almaraz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Álvarez', 'Amador', 'Amaya', 'Anaya', 'Anguiano', 'Angulo', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Araña', 'Aranda', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arroyo', 'Arteaga', 'Atencio', 'Ávalos', 'Ávila', 'Avilés', 'Ayala',
		'Baca', 'Ballesteros', 'Banda', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Batista', 'Becerra', 'Beltrán', 'Benavides', 'Benavidez', 'Benitez', 'Bermúdez', 'Bernal', 'Berrios', 'Bétancourt', 'Blanco', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos',
		'Caballero', 'Cabán', 'Cabrera', 'Cadena', 'Caldera', 'Calderón', 'Camacho', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Cardenas', 'Cardona', 'Carmona', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carrillo', 'Carrion', 'Carvajal', 'Casanova', 'Casares', 'Casárez', 'Casas', 'Casillas', 'Castañeda', 'Castellanos', 'Castillo', 'Castro', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarria', 'Chávez', 'Cisneros', 'Collado', 'Collazo', 'Colón', 'Concepción', 'Contreras', 'Cordero', 'Córdova', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Crespo', 'Cruz', 'Cuellar',
		'Dávila', 'de Jesús', 'De La Crúz', 'De La Fuente', 'De La Rosa', 'De La Torre', 'De León', 'Delgadillo', 'Delgado', 'Del Rio', 'Del Valle', 'Diaz', 'Dominguez', 'Dominquez', 'Duarte', 'Dueñas', 'Duran',
		'Echevarria', 'Enriquez', 'Escalante', 'Escobar', 'Escobedo', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Estévez', 'Estrada',
		'Fajardo', 'Farias', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Franco', 'Frias', 'Fuentes',
		'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallegos', 'Galván', 'Gálvez', 'Gamboa', 'Gamez', 'Gaona', 'Garay', 'Garcia', 'Garrido', 'Garza', 'Gaytán', 'Gil', 'Girón', 'Godinez', 'Godoy', 'Gómez', 'Gonzales', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gutiérrez', 'Guzmán',
		'Henriquez', 'Heredia', 'Hernádez', 'Hernandes', 'Hernández', 'Herrera', 'Hidalgo', 'Hinojosa', 'Holguin', 'Huerta', 'Hurtado',
		'Ibarra', 'Iglesias',
		'Jaramillo', 'Jiménez', 'Juárez', 'Jurado',
		'Lara', 'Laureano', 'Leal', 'Ledesma', 'Leiva', 'León', 'Leyva', 'Limón', 'Linares', 'Lira', 'Llamas', 'López', 'Lovato', 'Lozada', 'Lozano', 'Lugo', 'Luján', 'Luna',
		'Macias', 'Madera', 'Madrid', 'Madrigal', 'Maldonado', 'Manzanares', 'Marin', 'Márquez', 'Marroquin', 'Martinez', 'Mata', 'Mateo', 'Matias', 'Matos', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejia', 'Meléndez', 'Melgar', 'Mena', 'Méndez', 'Mendoza', 'Menéndez', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miranda', 'Molina', 'Mondragón', 'Montalvo', 'Montañez', 'Montaño', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Morales', 'Moreno', 'Mota', 'Moya', 'Muñiz', 'Muñoz', 'Murillo', 'Muro',
		'Nájera', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Nazario', 'Negrete', 'Negrón', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Núñez',
		'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Olivares', 'Olivárez', 'Olivas', 'Olivera', 'Olivo', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Ortega', 'Ortiz', 'Osorio', 'Otero', 'Ozuna',
		'Pacheco', 'Padilla', 'Páez', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Paredes', 'Parra', 'Partida', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peña', 'Perales', 'Peralta', 'Perea', 'Peres', 'Pérez', 'Pichardo', 'Piña', 'Pineda', 'Pizarro', 'Polanco', 'Ponce', 'Porras', 'Portillo', 'Posada', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Pulido',
		'Quesada', 'Quezada', 'Quiñones', 'Quiñónez', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz',
		'Rael', 'Ramirez', 'Ramón', 'Ramos', 'Rangel', 'Raya', 'Razo', 'Regalado', 'Rendón', 'Renteria', 'Reséndez', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Rincón', 'Riojas', 'Rios', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Rocha', 'Rodarte', 'Rodrigez', 'Rodriguez', 'Rodriquez', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Roque', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Ruelas', 'Ruiz', 'Ruvalcaba',
		'Saavedra', 'Sáenz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Samaniego', 'Sanabria', 'Sanches', 'Sánchez', 'Sandoval', 'Santacruz', 'Santana', 'Santiago', 'Santillán', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Sisneros', 'Solano', 'Solis', 'Soliz', 'Solorio', 'Solorzano', 'Soria', 'Sosa', 'Sotelo', 'Soto', 'Suárez',
		'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Téllez', 'Tello', 'Terán', 'Terrazas', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tórrez', 'Tovar', 'Trejo', 'Treviño', 'Trujillo',
		'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Urias', 'Uribe', 'Urrutia',
		'Vaca', 'Valadez', 'Valdés', 'Valdez', 'Valdivia', 'Valencia', 'Valentin', 'Valenzuela', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vásquez', 'Vázquez', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Vélez', 'Véliz', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Viera', 'Vigil', 'Villa', 'Villagómez', 'Villalobos', 'Villalpando', 'Villanueva', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas',
		'Yáñez', 'Ybarra',
		'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga',
	);

	protected static $titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

	protected static $titleFemale = array('Sra.', 'Srta.', 'Dra.', 'Lic.', 'Ing.');

	protected static $suffix = array('Hijo');

	/**
	 * @example 'Hijo'
	 */
	public static function suffix() {
		return static::randomElement(static::$suffix);
	}
}
