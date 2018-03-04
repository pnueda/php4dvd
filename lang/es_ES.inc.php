<?php
defined('DIRECTACCESS') OR exit('No direct script access allowed');
/**
 * This is the language file for Spanish, contrib from Paco Nueda, pnueda at gmail
 * March 4th 2018
 */

/**
 * Title
 */
define("_TITLE",									"Catálogo de películas");

/**
 * Menu
 */
define("MY_COLLECTION",					  "Catálogo");
define("HOME",										"Inicio");
define("BACK",                    "Atrás");
define("SETTINGS",                "Configuración");
define("MY_PROFILE",							"Mi cuenta");
define("USER_MANAGEMENT",					"Gestión de usuarios");
define("LOG_IN", 									"Iniciar sesión");
define("LOG_OUT",									"Finalizar sesión");
define("ARE_YOU_SURE_YOU_WANT_TO_LOG_OUT",			"¿Finalizar la sesión?");

/**
 * Log in page
 */
define("USER_NAME",									"Nombre de usuario");
define("PASSWORD",									"Contraseña");
define("INCORRECT_USERNAME_OR_PASSWORD",			"Nombre de usuario o contraseña incorrectos");
define("REMEMBER_ME",               "Recuérdame");

/**
 * Home
 */
// Menu
define("ADD_MOVIE",									"Añadir película");
define("UPDATE_ALL_MOVIE_INFORMATION",				"Actualizar todas");
define("EXPORT_TO_CSV",								"Exportar");
// Search
define("SEARCH_DEFAULT_TEXT",						"Buscar películas...");
define("CATEGORIES",                "Categorías");
define("ALL_CATEGORIES",							"Todo género");
define("FORMATS",                           "Formatos");
define("ALL_FORMATS",               "Todos los formatos");
define("SORT_BY",									"Ordenar por");
define("LAYOUT",                            "Vista");
define("nameorder asc",									"nombre (A-Z)");
define("nameorder desc",									"nombre (Z-A)");
define("year asc",									"año (0-9)");
define("year desc",									"año (9-0)");
define("rating asc",								"puntuación (0-9)");
define("rating desc",								"puntuación (9-0)");
define("votes asc",                     "Votos (0-9)");
define("votes desc",                "Votos (9-0)");
define("format asc",								"formato (A-Z)");
define("format desc",								"formato (Z-A)");
define("seen asc",									"no vistas primero");
define("seen desc",									"vistas primero");
define("own asc",									"no poseo primero");
define("own desc",									"poseo primero");
define("added asc",									"f.alta asc");
define("added desc",								"f.alta desc");
define("loaned asc",								"f.préstamo asc");
define("loaned desc",								"f.préstamo desc");
define("ALL", 										"Todas");
define("RESULTS_PER_PAGE",							"por página");
define("FILTER_BY",                         "Filtrar por");
// Results
define("NO_RESULTS_FOUND",							"No hay películas.");
define("NO_COVER",									"Sin portada");
define("NUMBER_OF_TITLES",            "Número de títulos");
define("STATISTICS",                "Estadísticas");

/**
 * Movie
 */
// Menu
define("VISIT_IMDB",								"Visitar IMDb");
define("VIEW_TRAILER",								"Ver trailer");
define("DOWNLOAD_COVER",							"Descargar carátula");
define("FAVOURITE",                         "Favorito");
define("NOT_FAVOURITE",          "No favorito");
define("OWN",										"Poseo");
define("NOT_OWN",									"No poseo");
define("DO_YOU_OWN_THIS",        "¿Posees ésta?");
define("SEEN",										"Vistas");
define("UNSEEN",									"No vistas");
define("HAVE_YOU_SEEN_THIS",      "¿Has visto ésta?");
define("EDIT",										"Editar");
define("REMOVE",									"Borrar");
// Movie information
define("LOANED_OUT",								"Prestada");
define("TO",										"a");
define("ON",										"en");
//define("MINUTES",									"minutos");

/**
* Add/edit movie
*/
// Menu
define("SAVE",										"Guardar");
define("SAVE_AND_ADD_ANOTHER",     "Guardar y añadir otra");
define("UPDATE",									"Cargar de IMDb");
define("REMOVE_COVER",								"Borrar carátula");
// IMDb search
define("ADD_FROM_IMDB",								"Añadir desde IMDb");
define("SEARCH",									"Buscar");
define("RESULTS_FROM_IMDB",							"Resultados de IMDb");
// Movie information
define("MOVIE_INFORMATION",							"Información de la película");
define("IMDB_NUMBER",								"Código IMDb");
define("TITLE",										"Título original");
define("TITLE_ORDER",            "Ordenar por título");
define("AKA_TITLES",								"Otros títulos");
define("YEAR",										"Año");
define("DURATION",                          "Duración");
define("MINUTES",                           "minutos");
define("DURATION_MINUTES",							"Duración (minutos)");
define("RATING",									"Puntuación");
define("VOTES",                         "Votos");
define("FORMAT",									"Formato");
define("DVD",										"DVD");
define("BLU_RAY",                           "Blu-ray");
define("PARENTAL_GUIDANCE",    "Calificación por edades");
define("PARENTAL_GUIDANCE_AGE",    "años");
//define("I_HAVE_SEEN_THIS_MOVIE",					"He visto esta película");
//define("I_OWN_THIS_MOVIE",							"Poseo esta película");
define("LOANED_OUT_TO",								"Prestada a");
define("LOANED_OUT_SINCE",							"Prestada desde");
define("MOVIE",                             "Película");
define("TV_SERIES",                         "TV Series");
define("SEASONS",                           "Temporadas");
define("YES",										"Sí");
define("NO",										"No");
define("COVER",										"Portada");
define("SEARCH_FOR_COVER",							"Buscar portada");
define("PHOTO",                             "Póster");
define("SEARCH_FOR_PHOTO",       "Buscar póster");
define("PHOTO_FROM_IMDB",        "Póster (IMDb)");
define("DOWNLOAD_FROM_IMDB",    "Descargar desde IMDb");
define("TRAILER_URL",								"Trailer o artículo");
define("SEARCH_FOR_TRAILER",						"Buscar trailer");
define("PERSONAL_NOTES",							"Notas personales");
define("TAGLINES",									"Frase destacada o subtítulo");
define("PLOT_OUTLINE",								"Resumen de la trama");
define("PLOTS",										"Sinopsis ampliada");
define("LANGUAGES",									"Idiomas");
define("SUBTITLES",									"Subtítulos");
define("AUDIO",										"Audio");
define("VIDEO",										"Video");
define("COUNTRY",									"País");
define("GENRES",									"Géneros");
define("MPAA",                     "MPAA");
define("DIRECTOR",									"Director");
define("WRITER",									"Escritor");
define("PRODUCER",									"Productor");
define("MUSIC",										"Música");
define("CAST",										"Reparto");
// Automatic update
define("AUTOUPDATE_INFO",							"Sus películas se están actualizando automáticamente desde IMDb. Puede llevar unos segundos para cada título, por favor sea paciente...");
define("STOP_UPDATE",								"Detener actualización");

/**
* User management
*/
define("NEW_USER",									"Nuevo usuario");
define("EMAIL",										"E-mail");
define("AGAIN",										"repetir");
define("ROLE",										"Rol");
define("GUEST",										"Invitado (solo ver)");
define("EDITOR",									"Editor");
define("ADMIN",										"Administrador");
define("USERS",										"Usuarios");
define("LAST_LOGGED_IN",							"Última sesión");
define("DUPLICATE_USER_NAME_OR_EMAIL",				"¡Ya existe un usuario con el mismo nombre o dirección de correo electrónico!");

/**
 * Messages
 */
define("REMOVE_INSTALL_DIR",						"Por motivos de seguridad, elimine el directorio install/");
define("CONFIRM_REMOVE",							"¿Eliminar esto?");
define("CONFIRM_REMOVE_COVER",						"¿Eliminar portada?");
// Validation
define("VALIDATOR_REQUIRED",						"Dato obligatorio");
define("VALIDATOR_NUMBER",							"Por favor introduzca un número válido");
define("VALIDATOR_DIGITS",							"Por favor introduzca un número válido");
define("VALIDATOR_EMAIL",							"Por favor introduzca una dirección de correo válida");
define("VALIDATOR_URL",								"Por favor introduzca una dirección url válida (http://...)");
define("VALIDATOR_DATE",							"Por favor introduzca una fecha válida (yyyy-mm-dd)");
define("VALIDATOR_ACCEPT_JPG",						"Por favor introduzca un tipo de imagen válido (jpg)");
define("VALIDATOR_EQUAL_TO",						"Ambos valores deben coincidir");
define("VALIDATOR_USERNAME",         "Por favor introduzca un nombre de usuario válido. (A–Z, 0–9, .)\nde entre 5-50 caracteres.");

/**
 * Installer
 */
define("INSTALLATION",								"Instalación");
define("WELCOME",									"Bienvenido");
define("WELCOME_TEXT",								"Bienvenido al asistente de instalación. Continúe para instalar php4dvd.");
define("NEXT",										"Siguiente");
define("PREVIOUS",                          "Anterior");
define("PERMISSIONS",								"Permisos");
define("PERMISSIONS_TEXT",							"Los siguientes directorios y ficheros deben ser creados y necesitan permisos de escritura:");
define("OK",										"ok");
define("FAILED",									"fallo");
define("FIX_PERMISSIONS",							"Chmod (777) estos directorios o ficheros con un programa FTP.");
define("REFRESH",									"Refrescar");
define("CONFIGURATION",								"Configuración");
define("CONFIGURATION_TEXT",						"Rellene este formulario para configurar php4dvd en su servidor.");
define("DATABASE",									"Base de datos");
define("HOST",										"Host");
define("PORT",										"Puerto");
define("WEBSITE",									"Sitio web");
define("URL",										"Url");
define("TEMPLATE",									"Plantilla");
define("LANGUAGE",									"Idioma");
define("GUEST_USERS_CAN_SEE_COLLECTION",			"Los visitantes solamente pueden visualizar el catálogo");
define("FAILED_TO_WRITE_FILE",						"No ha sido posible guardar el fichero");
define("DATABASE_NEW_TEXT",							"Una nueva versión de la base de datos será instalad. ¡Todas las tablas antiguas serán borradas!");
define("DATABASE_UPGRADE_TEXT",						"Su base de datos será actualizada a la última versión. No se borrará ningún dato. No obstante, es mejor hacer una copia de seguridad previamente.");
define("ACCEPT",									"Acepto");
define("FINISHED",									"Finalizado");
define("FINISHED_TEXT",								"Su instalación casi ha terminado. Pulse sobre el botón inferior \'Terminar\'.");
define("FINISH",									"Terminar");
?>
