<?php
include ('../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
echo '<html>
<head>
<meta name="author" content="Cryptorius">
<title>Guia</title>
</head>
<body>';
echo '<div style="background-color: black; text-align:left; padding: 10px 10px 10px 20px;">Editado el 09/12/2009<br>
<p>Guía para el Usuario
      El usuario o jugador se puede encontrar numerosas actividades (exploración, luchas, intercambio de ítem, etc.), pero el enfoque fundamental del juego es entretener a jugadores con sus personajes, divertirse con amigos y encontrar nuevas aventuras, todo esto se puede encontrar en estas secciones.
      
* ¿Por dónde empezar?
Creándote una cuenta de usuario, y así poder acceder al juego para crearte tus personajes.
" ¿Cómo crear una cuenta?
Hay 2 formas:
-Ingresando a web: En la sección de REGISTRACION, tienes un formulario para completar.
-Recibiendo una invitación de un Personaje registrado: Esta invitación te lleva al formulario de registración, solo tienes que completarlo, y así convertirte automáticamente en el "Alumno" del personaje que te invito, hay muchos beneficios para alumnos y para "Dueños de Dojo". 
" ¿Qué tengo que poner en el formulario?
En el formulario encontraras una serie de datos para completar
* Nombre de usuario
Cuando ingresas el nombre usuario que deseas usar, recuerda de no poner el nombre del Personaje que vas a crear por un tema de seguridad, puedes verificar si algún otro usuario lo está usando.
NOTA: Recuerda que NO puede ser cambiado.
* Contraseña y re-contraseña
Cuando Ingresas la contraseña deseada (mínimo 11 caracteres), y la vuelves a escribir para su verificación (consejo: no usar nada que esté relacionado con tu personaje y cuando crees una contraseña lo ideal es usar letras, números y signos). 
NOTA: Un miembro del STAFF del juego JAMAS te pedirá tu contraseña. La contraseña sólo se utilizara para reconocer tu acceso. Los miembros del STAFF ya tienen acceso a esta información y jamás la necesitarán.
NOTA: Puede ser cambiado, después de una serie de verificaciones.
* Fecha de Nacimiento
Cuando Ingresas la fecha de nacimiento, ten en cuenta que se usara para determinar tu Signo Zodiacal, dándote beneficios en algunas "Zonas" y para que puedas recibir la invitación de algún "Evento" en particular (EJ.: "Torneo de Acuario", participaran todos lo del signo ACUARIO). 
NOTA: Recuerda que NO puede ser cambiada.
* Sexo
Cuando elijas tu Sexo, entre Masculino o Femenino, Esto determinara el sexo de los personajes que creas, hay "Eventos" que te lo pedirán como requisito (EJ.: "Torneo Amazona", en este torneo se requiere que seas FEMENINO para su participación).
NOTA: Recuerda que NO puede ser cambiado.
* E-Mail
Cuando ingreses el E-mail, este se usara para que te llegue un link de comprobación para ver si existe ese correo, y puede que te llegue la invitación para inscribirte a un "Evento", también se te enviara las notificaciones del server (EJ.: "Ultimas Actualizaciones", etc.).
NOTA: Puede ser cambiado, después de una serie de verificaciones y el proceso tardaría 1 mes en completarse.
* Maestro de Dojo
Cuando Ingresas el nombre del "Maestro de Dojo",  ten en cuenta que al ingresar un nombre te conviertes automáticamente en sus "Alumno" de ese "Maestro de Dojo", no importa si lo dejas vacio ya que luego podrás agregar un nombre.
NOTA: Cuando tengas la posibilidad de poner un nombre, recuerda que NO puede ser cambiado.
* Finalmente solo tienes que aceptar el reglamento del juego.
   El reglamento del juego está para que no se desequilibre el juego. 
Luego solo tienes que identificarte como usuario y entraras al juego.
Guía del Personaje
      Cuando te has identificarte como usuario, te aparecerá los distintos "Menús" que te permitirán hacer desde crearte un personaje hasta luchar con tu personaje, así que lo primero en tener cuenta es la creación de tu personaje.
      
* ¿Cómo Creas un Personaje?
   Busca en el "Menú" donde dice, "Personajes" y selecciona la sección "Crear Personaje", te aparece una pantalla divida en 3 partes, en cada parte te aparecerá la opción "Crear" o el Nombre del personaje que creaste con anterioridad, para Crear un personaje tienes que escribir el nombre del personaje, mirar si la casilla de verificación aparece como aprobado, si no es así ese nombre está siendo usado por otro personaje, luego de aprobado has Click en la opción "Crear" y listo.
* ¿Cómo borrar un Personaje?
   Busca en el "Menú" donde dice, "Personajes" y selecciona la sección "Borrar Personaje", te aparece una pantalla divida en 3 partes, en cada parte habrá un personaje que creaste con anterioridad o bien aparecer la palabra "Vacio", si te aparece un personaje, mira al lado del nombre, ahí te aparecerá la opción "Borrar", has Click ahí, automáticamente se te enviara una notificación a tu email,  luego de confirmar el link, tendrás que espera una semana para volver a usar esa parte con otro personaje.
* ¿Cómo entro con mi Personaje?
   Busca en el "Menú" donde dice, "Personajes" y selecciona la sección "Entrar",  te aparece una pantalla divida en 3 partes, en cada parte habrá un personaje, ordenado desde el nivel más alto hasta nivel más bajo, solo tienes que hacer Click en el nombre y automáticamente ingresaras al juego identificado con el nombre del personaje.
* ¿Por dónde comienzo con mi Personaje?
   Cuando has ingresado con tu personaje, puedes empezar por dialogar con los ("PNJ") de la zona que te encuentras, entrando a las "Ciudades" disponibles, estos te darán "Misiones" y te ayudaran con varios aspectos de tu personaje. Después puedes aumentar las "Cualidades" que tiene tu personaje para que tu lucha no sea tan difícil.
" ¿Qué es un ("PNJ") y como dialogo con uno?
   Los ("PNJ"), son como sus siglas lo indican, "Personaje no Jugador", es decir un personaje que es controlado por el servidor y no por un usuario. Podrás dialogar con un ("PNJ") cuando ingresas a una "Ciudad" determinada y seleccionar un "lugar", en ese momento aparecerá un ("PNJ") con sus distintas opciones.
" ¿Cómo entro a una ciudad?
   Busca en el "Menú" donde dice, "Acciones", y selecciona una opción de las "Ciudad X" que aparece. En la pantalla del medio aparecerá un menú con los distintos "Lugares" habilitados de esa "Ciudad".
" ¿Qué tipo de lugares existen dentro de una ciudad?
Puede encontrar estos:
* La Plaza.
   Encontraras a todos los personajes que se encuentran en esa "Ciudad", Esta ordenado de mayor a menor por cantidad de experiencia que poseen, puedes seleccionar la opción "Luchar" o "Enviar mensaje". Podrás también seleccionar un de esos personajes y  consultar sus "Características".
* El Hospital.
Encontraras un ("PNJ"), identificado como a la/el enfermera/o, quien te preguntara que desea hacer:
   -¿una misión?: Entonces, la/el enfermera/o te preguntara cual de las distintas "Misiones" disponibles deseas hacer, todas las "Misiones" que son asignadas acá son para obtener los distintos "Libros de Técnicas" que existen.
   -¿Necesitas "Puntos de Poder"?: Entonces, convierte tus "Puntos de Entrenamiento", a "Puntos de Poder", estos puntos se utilizan para activar las "Habilidades" disponibles de tu personaje, algunas requieren de una cantidad determinada de "Puntos de Poder" para poder usarse.
   -¿Curarte?: Entonces, dependiendo de la cantidad determinada "Vida" que deseas curar, vas a perder esa cantidad de experiencia. Recuerda que tu personaje recupera "Vida" muy lentamente, si no deseas perder experiencia.
* El Dojo Guardián
   Encontrara Al Clan ganador del "Torneo Clan de la Ciudad", El Clan se convierte en el Protector de esa Ciudad. Al ser el "Dojo Guardián" o "Clan Guardián" de la ciudad, recibe beneficios en algunos ("PNJ") y podrá decidir que descuento darán los ("PNJ"), la totalidad de esos descuentos los tendrá que pagar el "Clan".
* La Herrería
Encontraras un ("PNJ"), identificado como el/la Herrero/a, quien te preguntara que desea hacer:
   -¿una misión?: Entonces, el/la Herrero/a te preguntara cual de las distintas "Misiones" disponibles deseas hacer, todas las "Misiones" que son asignadas acá son para obtener los distintos "Libros de Habilidades" que existen
   -¿Reconstruir una Armadura?: Entonces, te dará una lista de las armaduras que podrás reconstruir de acuerdo a tu nivel, para Reconstruir una Armadura, necesitaras los "Restos de Batallas", cada Armadura tiene una cantidad determinada de este elemento. Recuerda podrás conseguir "Resto de Batalla" cuando "Exploras" un "Sector".
   -¿Reparar Armadura?: Entonces, para reparar una Armadura, necesitaras ciertos requisitos, pero para todas las armaduras se te descontara un punto de vida por cada punto de reparación, puedes reparar que lleva puesta tu personaje o alguna de las armaduras que tengas guardadas.
* El Mercado
Podrás intercambiar los distintos "Libros" o "Mapas",  por "Resto de Armaduras" o "Puntos de Entrenamiento".
* El Puerto
Encontraras un ("PNJ"), identificado como el/la Pescador/a, quien te preguntara que desea hacer:
   -¿Viajar?: Entonces, necesitar el "Mapa" de la "Zona" que quieres ir, cada Puerto te da 3 opciones a donde ir y cada viaje que hagas te inmoviliza por un tiempo determinado.
   -¿Mapas?: Entonces, el/la Pescador/a te preguntara cual de las distintas "Misiones" disponibles deseas hacer, todas las "Misiones" que son asignadas acá son para obtener los distintos "Mapas" disponibles en la zona.
* El Callejón
Encontraras 3 formas de buscar a tus Contrincantes para luchar:
   -Por nombre: Al buscar al personaje por su nombre, te dirá si tiene penalización de tiempo o no, esta penalización ocurre cuando el contrincante se encuentra en otra zona que no sea la nuestra.
   -Por nuestra experiencia: de forma automática te mostrara 6 contrincantes (según tu nivel y tu experiencia), desde el que esta 3 puesto más arriba que tu personaje y hasta el que esta 3 puestos más abajo.
   -Por "Tipo": Te aparecerá una lista de contrincantes, según tu nivel y el "Tipo" seleccionado, puede ser "Físico", "Hibrido", "Cósmico". 
* El Monumento
Encontraras las últimas noticias y las novedades de los "Eventos" de esa ciudad.
* La Biblioteca
Encontraras un ("PNJ"), identificado como el/la Bibliotecario/a, quien te preguntara que desea hacer:
   -¿Misión?: Entonces, el/la Bibliotecario/a te preguntara cual de las distintas "Misiones" disponibles deseas hacer, todas las "Misiones" que son asignadas acá son para obtener distinto tipo de ítems o para poder desbloquear a un "Maestro de Dojo".
* ¿Cómo mejorar a mi Personaje?
   Puedes mejorar las "Cualidades" de tu personaje por medio de entrenamiento, por haber usado un ítem determinado y por haber completado una "Misión".
" ¿Qué son las "Cualidades" de mi Personaje?
   Busca en el "Menú" donde dice, "Cualidades" te aparecerá en pantalla 3 sectores: 
* En el Sector de tus Características
Cuenta con 9 parte, algunas parte pueden mejorar o hacer que disminuya otra, así que ten bien en cuenta donde por tus "Puntos de Cualidad". Este conjunto de partes es lo que se utilizara al momento de evaluar tu comportamiento en la "Lucha" o para tu "Exploración". 
1. Vida: 
2. Cosmo:
3. Velocidad de Ataque:
4. Velocidad de Movimiento:
5. Fuerza:
Aumenta: La vida, cada 2 puntos de Fuerza 1 de vida.
Disminuye: La Agilidad, cada 2 puntos de Fuerza 1 de Agilidad.
6. Inteligencia:
Aumenta: El cosmo, cada 2 puntos de Inteligencia 1 de cosmo.
Disminuye: La Resistencia, cada 2 puntos de inteligencia 1 de Resistencia.
7. Agilidad:
Aumenta: La velocidad de ataque, cada 2 puntos de Agilidad 1 de Velocidad de ataque.
Disminuye: La Destreza, cada 2 puntos de Agilidad 1 de Destreza.
8. Destreza:
Aumenta la velocidad de movimiento: cada 2 puntos de Destreza 1 de velocidad de movimiento.
Disminuye: La Agilidad, cada 2 puntos de Destreza 1 de Agilidad.
9. Resistencia: 
Aumenta la velocidad de Ataque: cada 4 puntos de Resistencia 1 de velocidad de Ataque.
Aumenta la velocidad de movimiento: cada 4 puntos de Resistencia 1 de velocidad de movimiento.
Disminuye: La Agilidad, cada 4 puntos de Resistencia 1 de Agilidad.
Disminuye: La Destreza, cada 4 puntos de Resistencia 1 de Destreza.

* En el Sector de las "Técnicas" y de "Habilidad"
   En este sector se visualizaran, todas las "Técnicas" y las "Habilidad" que posee tu personaje, con sus puntos de rendimiento. Recuerda que para subir el rendimiento tienes que entrenarlas. 
" ¿Cómo entrenar a mi Personaje?
   Busca en el "Menú" donde dice, "Entrenador", y veras que hay 4 secciones: "Estudiando", "Entrenando Características", "Entrenando Técnicas" y "Entrenando Habilidades". Dependiendo que selecciones te aparecerá un menú distinto.
* Sección "Estudiando" 
   En esta sección encontraras la forma de que tu personaje pueda aprender nuevas "Técnicas" o "Habilidades", recuerda necesitaras el "libro" de lo que quieras aprender, pero para poder aprenderlo tendrás que pagar su valor de aprendizaje en "Puntos de Poder".
   Nota: Los "Libro de Habilidad" o "Libro de Técnica", se consiguen cuando completas una "Misión" otorgada por la/el enfermera/o del Hospital ("Libro de Técnicas") o por el/la Herrero/a de la Herrería ("Libro de Habilidades"), también lo consigues intercambiando por "Puntos de Entrenamiento" en el "Mercado" de la ciudad.
* Sección "Entrenando Características"
   En esta sección encontraras, la forma de distribuir tus "Puntos de Cualidades", por cada punto que quieras distribuir, necesitaras una cantidad determinada de "Puntos de Entrenamiento", esa cantidad de incrementar junto con tu nivel. (La formula seria: [Nivel * (Nivel/2)] * 1.5 = Costo).
   Nota: Los "Puntos de Cualidad", se obtienen cuando subís de nivel, la cantidad que obtienes es igual al nivel que pasaste. Los "Puntos de Entrenamiento", se obtiene ganado los combates contra "Enemigos" y/o otros Personajes de usuarios.
* Sección "Entrenando Técnicas"
   En esta sección encontraras, la forma de mejorar tu "Técnicas", las cuales van desde el 0% hasta el 100%. Lo único que necesitas hacer es seleccionar 1 de las 10 opciones que te aparecen (están oculto sus resultados), recuerda que necesitas "Puntos de entrenamiento" para seleccionar.
   Las opciones que puedes encontrar son:
- No pegas: obtuviste 0.1% de lo que entrenaste.
- Pegaste sin ver: obtuviste 0.2% de lo que entrenaste.
- Pegaste sin concentrarte: obtuviste 0.3% de lo que entrenaste.
- Pegaste sin fuerza: obtuviste 0.4% de lo que entrenaste. 
- Pegaste sin destreza: obtuviste 0.5% de lo que entrenaste.
- Pegaste con concentrado: obtuviste 0.6% de lo que entrenaste.
- Pegaste con fuerza: obtuviste 0.7% de lo que entrenaste.
- Pegaste con destreza: obtuviste 0.8% de lo que entrenaste.
- Pegaste perfecto: obtuviste 0.9% de lo que entrenaste.
- Pegaste con efectos: obtuviste 1% de lo que entrenaste.
   Nota: Los "Puntos de Entrenamiento", se obtiene ganado los combates contra "Enemigos" y/o otros Personajes de usuarios.
* Sección "Entrenando Habilidades"
   En esta sección encontraras, En esta sección encontraras, la forma de mejorar tu "Habilidades", las cuales van desde el 0 hasta completar el total. Lo único que necesitas hacer es seleccionar 1 de las 8 opciones que te aparecen (están oculto sus resultados), recuerda que necesitas "Puntos de entrenamiento" para seleccionar.
   Las opciones que puedes encontrar son:
- Desastroso: obtuviste 0.1 puntos de lo que entrenaste.
- Muy Malo: obtuviste 0.2 puntos de lo que entrenaste.
- Malo: obtuviste 0.3 puntos de lo que entrenaste.
- Normal: obtuviste 0.5 puntos de lo que entrenaste.
- Bueno: obtuviste 0.6 puntos de lo que entrenaste.
- Muy Bueno: obtuviste 0.8 puntos de lo que entrenaste.
- Excelente: obtuviste 0.9 puntos de lo que entrenaste.
- Maravilloso: obtuviste 1 puntos de lo que entrenaste.
   Nota: Los "Puntos de Entrenamiento", se obtiene ganado los combates contra "Enemigos" y/o otros Personajes de usuarios.
" ¿Cómo uso un "Ítem"?
   Busca en el "Menú" donde dice, "inventario", en pantalla aparecerán varias secciones, una de ella se titula "Bolso", ahí estarán todos tus "ítem", al lado de cada nombre que surja veras las opciones de "Usar" o "Tirar",  siempre y cuando el ítem sea de uso inmediato (Ej.: Las "pociones"), sino aparecerá la opción "Bloqueado" (Ej.: Los "Libros").
" ¿Cómo completo una "Misión"?
   Busca en el "Menú" donde dice, "inventario", en pantalla aparecerán varias secciones, una de ella se titula "Misiones", te aparecerán todos los títulos de las misiones disponibles hasta tu nivel, al lado de cada título te aparecerá escrito "Incompleta" o "Completada", para completar "Misiones" tienes que hablar con los ("PNJ") en la ciudad ellos te asignan "Misiones", entonces cuando hayas cumplido con los requisitos te darán la "Misión" como "Completada".
* ¿Qué más puedo hacer con  mi Personaje?
   Puedes poner a tu personaje a "Explorar", "Luchar", 
" ¿Cómo explorar con mi personaje?
   Busca en el "Menú" donde dice, "Acciones" y selecciona "Explorar", se te mostrara en pantalla 4 "Sectores", debajo de cada uno aparecerá un selector de "Tiempo" y uno selector de "Objetivo".
" ¿Qué hace cada Sector?
   Los "Sectores", son la forma que uno tiene para determinar el nivel de tu "Objetivo" que encontraras, y la cantidad de porcentaje que tengo para poder encontrar "Resto de Batalla". (Ej.: Busco un Enemigo o Caballero de Dojo,  de nivel "Novato", si lo hago en el sector "por los Alrededores", es muy probable que lo encuentre, pero si lo hago en el sector "por la Provincia" es muy probable que encontrare un Enemigo o Caballero de Dojo del nivel "Maestro").
* Por los Alrededores
Puedes encontrarte con un Enemigo o Caballero de Dojo de nivel "Novato" y tu probabilidad de encontrar es de "0%".
* Por el Barrio
Puedes encontrarte con un Enemigo o Caballero de Dojo de nivel "Normal" y tu probabilidad de encontrar es de "10%".
* Por  la Ciudad
Puedes encontrarte con un Enemigo o Caballero de Dojo de nivel "Experto" y tu probabilidad de encontrar es  de "50%".
* Por la Provincia
Puedes encontrarte con un Enemigo o Caballero de Dojo de nivel "Maestro" y tu probabilidad de encontrar es de "100%".
" ¿Qué hacen los selectores de "Tiempo" y el de "Objetivo"?
Los selectores, se utilizan para darle una mejor orientación y probabilidad de encontrar lo que estas explorando. Cada selector tiene una propiedad distinta:
* Selector de "Tiempo"
   El Selector de "Tiempo", se utiliza para obtener una cantidad determinada de "Resto de Armadura", también cuanto más tiempo explore más probabilidades tienes de encontrar tu "Objetivo". Recuerda que tienes la opción de dejar explorando un "Sector" sin límite de tiempo, pero que no te da "Resto de Armadura", el "Tiempo" explorado es acumulado por "Zona" y es te dará un "Dios" de forma automática.
- Pre-definidos:
10 Minutos: Obtienes 5 piezas de "Restos de Armadura"
20 Minutos: Obtienes 10 piezas de "Restos de Armadura"
30 Minutos: Obtienes 15 piezas de "Restos de Armadura"
- Sin Límite de Tiempo.
No obtienes piezas de "Restos de Armadura".
Nota: En algunos casos el tiempo acumulado, te desbloque ciertos Enemigo o Caballero de Dojo.
* Selector de "Objetivo"
   El Selector de "Objetivo", se utiliza para saber que estas buscando si un "Enemigo" o un "Maestro de Dojo".
" ¿Qué es un "Dios"?
El "Dioses", son para beneficiarte en la "Lucha", dependiendo de qué dios te haya tocado son los beneficios que te darán.
" ¿Puedo cambiar de "Dios"?
Si, puede cambiar de dios, solo tienes que ir a explorar otra zona, hasta hacer que esa zona a la que viajaste sea la que mayor tiempo explorado posea, y de forma automática se te asignara el nuevo "Dios", de esa "Zona".
" ¿Contra qué puedo "Luchar"?
Solo tienes que saber contra qué tipo de oponente quieres "Luchar", pueden ser contra otros Personajes de usuario, contra "Enemigos" o contra "Maestros de Dojo", cada tipo de oponente lo encuentras en distintos lugares, pero también obtienes distintos beneficios.
" Contra otros Personajes
   Busca en la "Ciudad" el sector del Callejón, o en el sector de la Plaza, ahí puedes buscar oponentes de tipo Personaje. Cuando luchas contra otros personajes, lo que se obtienen son "Puntos de Entrenamientos", de acuerdo a la diferencia de los personajes es lo que se gana.
   -Si el oponente es menor en nivel a mi personaje, no se obtiene "Puntos de Entrenamiento".
   -Si el oponente es igual en nivel a mi personaje, obtienen 1 "Punto de Entrenamiento".
-Si el oponente es mayor en nivel a mi personaje, obtienes la diferencia de nivel en "Puntos de Entrenamiento" (Ej.: "jugador 1" tiene un nivel 10, y el "jugador 2" tiene un nivel 13, el "jugador 1" gana el combate,  obtiene 3 "Puntos de Entrenamiento".)
" Contra "Enemigos" o "Contra Caballeros de Dojos" ("PNJ")
Cuando "Exploras" puedes elegir que encontrar con selector de "Objetivo", y de acuerdo a que "Sector" hayas explorado, eso te dará el "Nivel" de este tipo de oponente, si en tu exploración llegas a encontrar un oponente ("PNJ"), encontraras un link para luchar contra ese ("PNJ") en la sección "Historial".
NOTA: En  algunos casos cuando te asignaron una "Misión", se te pedirá que luches contra Enemigos o Caballero de Dojo, como se te a indicado o en entregar tantos ítems como se precisan. Al completarlas de forma exitosa, logras ver a algunos "Caballeros de Dojo" que antes estaban ocultos
" ¿Cuánto niveles encuentro?
Para ambos tipo de lucha se caracterizan por tener 4 "niveles" de combate, los cuales se diferencian por sus características y sus beneficios. Si decides luchar contra un "Enemigos", ten en cuenta que este tipo de combates sirve para medir tus cualidades, mientras que si decides luchar contra un "Caballero de Dojo", este tipo de combates sirve para obtener Armaduras. Los beneficios de este tipo de lucha son "Experiencia" (ambos casos), "Puntos de Dojo" y "Puntos de Entrenamiento" (Contra Enemigos) o "Armadura" (contra Caballeros de Dojo).
NOTA: Recuerda que los "Enemigos", NO son "Caballeros de Dojo", lo que significa que no obtendrás Armadura de ellos, pero te dan "Puntos de Dojo" para poder retar al "Caballero de Dojo" de esa zona. Cada "Caballero de Dojo" posee una cantidad de "Puntos de Dojo" determinada, que al completarlo logras acceder a la posibilidad de luchar contra ellos y en algunos casos tienes que completar "Misiones", para poder verlos.
* Nivel "Novato"
- Contra Enemigos:
Este tipo de oponente posee: 1 técnicas al 50% y 1 Habilidades al 50%.
Puedes obtener: 1 "Punto de Dojo", 2 "Puntos de Entrenamiento" y desde un 10% hasta 30% de la experiencia ganada. (Cuanta más vida perdiste más va a ser el porcentaje).
- Contra Caballeros de Dojos:
Este tipo de oponente posee: no posee técnicas y no posee Habilidades.
Este tipo de oponente puede darte como Armadura: La Armadura "X" Acolchada, La Armadura "X" Reforzada, La Armadura "X" con Incrustaciones.
Puedes obtener: La Armadura del oponente y un 10% de la experiencia ganada.
* Nivel "Normal"
- Contra Enemigos:
Este tipo de enemigo posee: 2 técnicas al 75% y 2 Habilidades al 75%.
Puedes obtener: 3 "Punto de Dojo", 6 "Puntos de Entrenamiento" y desde un 30% hasta 50% de la experiencia ganada. (Cuanta más vida perdiste más va a ser el porcentaje).
- Contra Caballeros de Dojos:
Este tipo de enemigo posee: 1 técnicas al 50% y 1 Habilidades al 50%.
Este tipo de enemigo puede darte como Armadura: La Armadura "X" Anillada, La Armadura "X" Escamada, La Armadura "X" con Cota de malla.
Puedes obtener: La Armadura del oponente y un 30% de la experiencia ganada.
* Nivel "Experto"
- Contra Enemigos:
Este tipo de enemigo posee: 3 técnicas al 100% y 3 Habilidades al 100%.
Puedes obtener: 7 "Punto de Dojo", 14 "Puntos de Entrenamiento" y desde un 50% hasta 70% de la experiencia ganada. (Cuanta más vida perdiste más va a ser el porcentaje).
-  Contra Caballeros de Dojos:
Este tipo de enemigo posee: 2 técnicas al 75% y 3 Habilidades al Habilidades 75%.
Este tipo de enemigo puede darte como Armadura: La Armadura "X" cota de varilla, La Armadura "X" cota de bandas, La Armadura "X" de Placas.
Puedes obtener: La Armadura del oponente y un 50% de la experiencia ganada.
* Nivel "Maestro"
- Contra Enemigos:
Este tipo de enemigo posee: 5 técnicas al 100% y 5 Habilidades al 100%.
Puedes obtener: 10 "Punto de Dojo", 20 "Puntos de Entrenamiento" y desde un 70% hasta 100% de la experiencia ganada. (Cuanta más vida perdiste más va a ser el porcentaje).
- Contra Caballeros de Dojos:
Este tipo de enemigo posee: 3 técnicas al 100% y 6 Habilidades al Habilidades 100%.
Este tipo de enemigo puede darte como Armadura: La Armadura "X" (La original).
Puedes obtener: La Armadura del oponente y un 70% de la experiencia ganada.
" Contra Personajes en un Torneo
   Este tipo de lucha se solicita una inscripción previa, en la inscripción se te pide que selecciones una serie de opciones, se toman tus datos al momento de la inscripción, los cuales se guardan y apartan, es decir que tu puedes seguir subiendo de nivel, sin problema, pero lo que se gane en el torneo se te dará (experiencia, ítem, etc.), el día en que finalicé dicho torneo. Hay torneos de todo tipo, así que si no logras ganar en uno no te preocupes que ganaras en otro, (Ej.: "Torneo por Armadura", "Torneo por Constelación", "Torneo de Devoción" (por dioses), "Torneo por Zona",  etc.).
" ¿Qué es el "inventario de mi Personaje"?
   Busca en el "Menú" donde dice, "inventario", aparecerá en pantalla 4 secciones: "Armaduras", "Triunfos", "Bolso" y "Misiones". Dependiendo que selecciones te aparecerá un menú distinto. </p>';
echo '<br><br><br><br></div>';
echo '</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>