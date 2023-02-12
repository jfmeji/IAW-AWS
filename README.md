**IAW-AWS**

**José Fco. Mejías Bendala**

En este repositorio se van a subir las diferentes pŕacticas realizadas en Amazon Web Service (AWS) a lo largo del curso 2022-2023 en la asignatura de *Implantación de Aplicaciones Web (IAW)* en el 2º curso de ASIR del IES Gran Capitán



* Práctica 1.2 - En esta pŕactica realizamos el montaje de una pila LAMP en una instancia de AWS. Documento técnico de instalación disponible [aqui](PRACTICA%201.2/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr1.2.pdf)

* Práctica 1.3 - Realizamos el mismo montaje que en la pŕactica anterior, pero utilizando dos niveles, con dos instancias de AWS (separamos la base de datos mysql en una segunda instancia). El documento técnico de instalación está disponible en este [enlace](./PRACTICA%201.3/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr1.3.pdf)

* Práctica 4.1 - En esta práctica veremos cómo utilizar un tipo de instancia de AWS, en concreto RDS, donde instalaremos la base de datos de nuestra aplicación web. Infraestructura en dos niveles. Documento técnico de instalación dipsonible pulsando [aqui](./PRACTICA%204.1/IAWMejiasBendalaJoseFco-Pr4.1.pdf)

* Práctica 4.2 - Ampliación de la páctica anterior, donde añadimos un tercer nivel, instalando una nueva instancia que actuará como balanceador de carga, mejorando la seguridad y comenzando con la Alta Disponibilidad. Integra también RDS. Documento técnico de instalación en este [enlace](./PRACTICA%204.2/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr4.2.pdf)

* Práctica 4.2v2 - Añadimos a la pŕactica anterior una nueva instancia para implementar en nuestra infraestructura NFS en una máquina EC2 nueva. El documento técnico de instalación está disponible [aqui](./PRACTICA%204.2v2/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr4.2v2.pdf)

* Práctica 4.3 - Añadimos Alta Disponibilidad con la creación de máquinas EC2 en zonas de disponibilidad distintas, manteniendo el balanceador de carga, pero añadiendo un nuevo tipo de instancia: EFS, que es el NFS específico creado por AWS para sus instancias. El documento técnico de instalación está disponible en este [enlace](./PRACTICA%204.3/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr4.3.pdf) 

* Práctica 4.4 - Continuamos ampliando la infraestructura. Vamos a añadir en esta práctica una instancia RDS Multi-AZ (un cluster de RDS con una base de datos principal y otra de reserva en una zona de disponibilidad distinta). Añadiremos también a nuestra infraestructura una EC2 con Windows Server al que le instalaremos un cliente SQL (HeidiSQL) para conectarnos a la RDS y configurarla. Configuraremos todos los accesos y grupos de seguridad para que sólo estén expuestos a Internet nuestro balanceador de carga (que actúa como proxy inverso) y la nueva máquina EC2 con Windows. El documento técnico de instalación se puede obtener [aquí](./PRACTICA%204.4/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr4.4.pdf)

* Práctica 4.5 - Finalizamos la infraestructura. Aplicamos en esta práctica, sobre la infraestructura ya creada (balanceador y proxy de dos máquinas EC2 en distinta zona de disponibilidad que montan el directorio donde reside la página web por NFS desde una instancia EFS) un enlace con PHP para realizar donativos, que serán guardados en el cluster RDS. Comprobaremos si se graban o no los datos con nuestra instancia EC2 con Windows Server, ya que la BBDD sólo es accesible desde el interior de AWS, no hay acceso desde el exterior. El documento técnico de instalación está disponible [aqui](./PRACTICA%204.5/IAWMej%C3%ADasBendalaJos%C3%A9Francisco-Pr4.5.pdf)
  