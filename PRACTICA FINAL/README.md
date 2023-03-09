# Proyecto Final IAW
## 1.- Introducción
Una empresa llamada AnyCompany Power se dedica a instalar medidores inteligentes
de energía en las casas para recopilar información sobre el consumo de energía a
escala mundial. Los medidores se conectan a la web y proporcionan datos sobre el
aumento o disminución del consumo de energía. La empresa necesita almacenar y
analizar este inmenso volumen de datos para detectar patrones de consumo energético
que puedan mejorar la eficiencia y reducir el despilfarro.
## 2.- Objetivos y requisitos del proyecto
Deberemos desarrollar un entorno en AWS que pueda dar soporte a la web de la compañia AnyCompany. Para ello vamos a crear en la práctica una máquina EC2 que almacenará los archivos necesarios de la web y tendrá todos los programas y modulos necesarios para el correcto funcionamiento de la misma.

En un entorno real podríamos utilizar un cluster proxy que nos permitiría realizar balanceo de carga sobre un cluster de máquinas EC2 web, las cuales tendrían su almacenamiento en un bucket S3 o en un sistema EFS, que dependerá de lo que busque la empresa, y tendría un cluster de base de datos en producción para almacenar los datos necesarios para el correcto funcionamiento de la web.
## 3.- Estudio previo
### 3.1.- Estado actual
Iniciamos el proyecto desde 0, ya que no existe ninguna infraestructura previa sobre la que trabajar. Creamos las instancias de EC2 y RDS, configuramos VPC privada con 4 subredes (dos privadas sin acceso desde el exterior) y dos públicas (con acceso a desde Internet)
Fijamos la IP de acceso a la web, siendo accesible desde [AnyCompanyPower](http://18.233.3.187)
### 3.2.- Estudio de soluciones existentes
Se han utilizado todas (o gran parte de ellas) las soluciones estudiadas durante el curso, en las prácticas anteriores

## 4.- Plan de trabajo
Para planificar este proyecto, nos conectaremos a AWS y crearemos unas VPC propias; una vez creadas, estableceremos los grupos de seguridad para las máquinas que se vayan a implantar, este paso podemos hacerlo poco a poco y solo implementar los grupos de seguridad que vayamos a utilizar en el proyecto inicial y no en el ampliable.
## 5.- Diseño
### 5.1.- Diseño general
Página Web donde gestionar los equipos de medida, y acceder a los datos qu éstos remiten de forma automática
### 5.2.- Diseño detallado
En la página web se crean varios formularios (ampliables según las necesidades y requerimientos del cliente). Se definen formulario de alta de dispositivos, y en futuras ampliaciones se realizarán las bajas y modificaciones de los mismos.

Se ha creado un formulario donde se simula la recepción de datos de los medidores, para poder realizar el listado de alguno de ellos.

Formulario donde se listan todas las lecturas comunicadas por un determinado medidor.

## 6.- Implantación
En primer lugar es necesario crear la infraestructura:
- Máquina EC2 LAMP donde se alojará la página web
- Máquina RDS donde se alojará la Base de Datos
- VPC propia (10.255.0.0/16) con cuatro subredes (Públicas A y B: 10.255.1.0/24 y 10.255.3.0/24 y Privadas A y B: 10.255.2.0/24 y 10.255.4.0/24)
- IP Elástica (18.233.3.187) asignada a la EC2
- Grupo de seguridad para la EC2 con acceso por SSH (protegido por archivo de clave privada) y puerto 80 desde el exterior. La EC2 se ubica en una de las redes públicas
- Grupo de seguridad para la RDS con acceso sólo desde el grupo de seguridad de la EC2. Con esto aislamos la BBDD del exterior, siendo imposible su conexión si no es a través de la EC2. La RDS se ubica en las redes privadas, como una Multi-AZ, aunque sin llegar a confiusrarla debido al elevado coste

## 7.- Recursos

### 7.1.- Herramientas hardware

Las herramientas Hardware utilizadas para este proyecto han sido:
- Equipo portatil
- Infraestructura AWS (EC2 y RDS)

### 7.2.- Herramientas software

Las herramientas software utilizadas son:

- Apache2
- PHP con sus modulos correspondientes para mysql
- MySQL
- MySQL phpMyAdmin
- Sistemas operativos Ubuntu

### 7.3.- Personal

- José Francisco Mejías Bendala como SysAdmin y Desarrollador Web

### 7.4.- Presupuesto

Para la implantanción del proyecto actual tenemos unos gastos mínimos por el uso de las capas gratuitas de AWS, que nos otorgan un presupuesto en el laboratorio de prácticas de 100 $

Para la implantanción del proyecto final, tendremos unos gastos mayores debido a su estado en producción, que dependerá de la cantidad de datos necesarios a guardar, el tráfico generado, etc...

## 8.- Conclusiones
### 8.1.- Grado de consecución de objetivos
La web es funcional, se puede simular la carga de datos de los medidores en la base de datos y la consulta de los mismos. Falta desarrollar más consultas (por localidad, por provincia...)
### 8.2.- Problemas encontrados
En cuanto al montaje de la infraestructura, siguiendo los manuales y clases aportadas, no hay problemas reseñables. En cuanto al diseño web, al no ser el campo al que nos dedicamos los administradores de sistemas, es manifiestamente mejorable. Se ha intentado presentar una web funcional, sin estridencias y sobria.
### 8.3.- Futuras mejoras
Contratar a un Desarrollador Web para concertar con el cliente las necesidades reales de las consultas necesarias
## 9.- Referencias / bibliografía
https://getbootstrap.com/docs/5.3/getting-started/introduction/

## 10.- Anexos
- Se adjuntan los ficheros de la web como [anexo1](./WEB/)
- Información de la Base de Datos como [anexo2](./DATABASE/)
