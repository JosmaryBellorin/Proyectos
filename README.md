📘 Proyecto: Sistema de Detección de puentes y puntos de articulación usando DFS

Este proyecto fue desarrollado para la materia Técnicas de Programación III.
El sistema permite crear y analizar grafos utilizando Java, aplicando Programación Orientada a Objetos, el patrón de arquitectura MVC (Modelo–Vista–Controlador), una interfaz gráfica en Swing y el algoritmo DFS (Depth First Search) para la detección de puentes y puntos de articulación.

✅ ¿Qué hace el programa?

Agregar nuevos vértices al grafo.

Agregar aristas entre vértices existentes.

Mostrar el grafo actual.

Ejecutar el algoritmo DFS.

Detectar puentes del grafo.

Detectar puntos de articulación.

Mostrar resultados en la interfaz gráfica.

Validar entradas del usuario.

Evitar duplicados de vértices y aristas.

Mantener los vértices ordenados alfabéticamente.

Reiniciar completamente el grafo.

Separar la lógica del modelo, el control y la vista (MVC).

🧠 Arquitectura utilizada:
El proyecto sigue el patrón Modelo–Vista–Controlador (MVC):

Modelo (Logica)
Contiene la representación del grafo y la lógica del algoritmo DFS.

Grafo → administra vértices, aristas y ejecuta el análisis DFS
Vertice → representa un nodo del grafo
Arista → representa una conexión entre dos vértices
El modelo utiliza lista de adyacencia y estructuras ordenadas para mantener consistencia en la visualización.

Controlador (Controlador)
ControladorGrafo → Intermediario entre la vista y el modelo
Procesa las acciones del usuario, valida condiciones (como grafo vacío) y gestiona los mensajes de error.

Vista (Interfaz)
Contiene la interfaz gráfica desarrollada en Swing:

VentanaPrincipal → ventana principal del sistema
DialogAgregarVertice → diálogo para ingresar vértices
DialogAgregarArista → diálogo para ingresar aristas
La vista únicamente muestra información y captura eventos del usuario.

Clase Main
La clase Main inicializa el modelo, el controlador y la vista, y lanza la aplicación.

🔍 Algoritmo Implementado:
Se utiliza DFS (Depth First Search) para:

Detectar puentes del grafo
Detectar puntos de articulación
El algoritmo se ejecuta con complejidad O(V + E), donde:
V = número de vértices
E = número de aristas
Se implementa mediante recorrido recursivo y manejo de tiempos de descubrimiento y valores low.

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
Ubica la clase Main.
Ejecuta el proyecto presionando Run Project.

🔄 Uso en otros IDEs:
Este proyecto fue creado en NetBeans, pero puede ejecutarse en otros IDEs compatibles con Java.
Descarga el ZIP del repositorio.
Abre tu IDE (IntelliJ IDEA, Eclipse, etc.).
Selecciona Import Project → Java Project with Existing Sources.
Configura el JDK (8 o superior).
Ejecuta la clase Main.

🎯 Características destacadas:
Implementación real del algoritmo DFS
Detección de puentes y puntos de articulación
Validación de entradas y manejo de errores
Arquitectura limpia basada en MVC
Código estructurado y comentado
Interfaz gráfica amigable

👨‍🎓 Autora:
Josmary Bellorin
