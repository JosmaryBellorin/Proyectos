📘 Proyecto: Gestor de Contactos con Indexación

Este proyecto fue desarrollado para la materia Técnicas de Programación III.

El sistema permite gestionar contactos de manera sencilla utilizando Java, aplicando Programación Orientada a Objetos, el patrón de arquitectura MVC (Modelo–Vista–Controlador), una interfaz gráfica en Swing y un sistema de indexación con HashMap para búsquedas eficientes.

✅ ¿Qué hace el programa?

Registrar nuevos contactos
Editar contactos existentes
Eliminar contactos del sistema
Buscar contactos por nombre
Mostrar todos los contactos registrados
Mostrar la información completa de un contacto seleccionado
Cargar contactos iniciales al iniciar el programa
Mantener la lista de contactos ordenada alfabéticamente
Validar los datos ingresados por el usuario
Separar completamente la lógica del negocio, el control y la interfaz gráfica (MVC)
Utilizar indexación mediante HashMap para búsquedas rápidas

🧠 Arquitectura utilizada:

El proyecto sigue el patrón Modelo–Vista–Controlador (MVC):

Modelo (Logica)
Encapsula los datos y las reglas de negocio.
Incluye validaciones, manejo de duplicados y estructura interna de almacenamiento.

Controlador (Controlador)
Actúa como intermediario entre la vista y el modelo.
Procesa las acciones del usuario y gestiona los errores de forma controlada.

Vista (Interfaz)
Contiene la interfaz gráfica en Swing.
Se encarga únicamente de mostrar información y capturar eventos del usuario.

Clase Main:
Se encuentra separada de la vista y se encarga de inicializar el sistema, crear las instancias del modelo y controlador, cargar los contactos iniciales y lanzar la interfaz gráfica.

🛠 Requisitos:

Para ejecutar el proyecto necesitas:

Java JDK 8 o superior

Apache NetBeans 12 o superior

Sistema operativo: Windows, Linux o macOS

⚙️ Instalación y configuración:

Entra al repositorio en GitHub.

Descarga el proyecto en formato ZIP.

Extrae el archivo en tu computadora.

Abre Apache NetBeans.

Ve a File → Open Project.

Selecciona la carpeta del proyecto y ábrelo.

▶️ Ejecutar el programa:

Abre el proyecto en NetBeans.

Ubica la clase Main (clase principal del proyecto).

Ejecuta el proyecto presionando Run Project.

🔄 Uso en otros IDEs

Este proyecto fue creado en NetBeans, pero puede ejecutarse en otros IDEs compatibles con Java.

Descarga el ZIP del repositorio.

Abre tu IDE (IntelliJ IDEA, Eclipse, etc.).

Selecciona Import Project → Java Project with Existing Sources.

Elige la carpeta del proyecto.

Configura el JDK (8 o superior).

Ejecuta la clase principal (Main).

📂 Estructura del proyecto

Logica:

Contacto → representa un contacto individual y valida su estado
GestorContactos → administra la lista de contactos, las reglas de negocio y la indexación

Controlador:
ControladorContactos → intermediario entre la vista y el modelo

Interfaz:
VentanaPrincipal → ventana principal del sistema

DialogoAgregarContacto → diálogo para agregar y editar contactos

Main:
Clase Main → punto de entrada de la aplicación

Iconos:
Contiene las imágenes utilizadas en los botones de la interfaz gráfica

🎨 Íconos de la Interfaz:

La aplicación utiliza íconos para mejorar la experiencia del usuario.
Los íconos se encuentran en el paquete Iconos y se cargan mediante ImageIcon.

Estos íconos representan acciones como:
Añadir contacto
Editar contacto
Buscar contacto
Eliminar contacto
Mostrar contactos

👨‍🎓 Autores:

Ronny Muñoz
Josmary Bellorin
