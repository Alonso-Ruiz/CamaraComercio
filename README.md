# Camara-Comercio
# Chat Ejercicio

Este proyecto es una aplicación de chat simple que utiliza WebSockets con Node.js y PHP para enviar datos entre el servidor y el cliente.

## Estructura del Proyecto

- `index.html`: Página web principal con el diseño y funcionalidad del chat.
- `index.js`: Servidor de Node.js que maneja las conexiones WebSocket y el envío/recepción de mensajes.
- `send_data.php`: Script PHP para enviar datos al servidor WebSocket.

## Requisitos

- [Node.js](https://nodejs.org/) (versión 16 o superior recomendada)
- [XAMPP](https://www.apachefriends.org/index.html) (o cualquier servidor web compatible con PHP)
- Paquete `socket.io` para Node.js
- Paquete `express` para Node.js

### Una vez tengas los archivos en tu editos favorito comenzamos con los comandos 
- En el cmd te diriges a tu proyecto guardado en la carpeta xampp del htdocs
- Una vez dentro colocas el comando 
  npm install express@4 socket.io
  npm install express socket.io
- Este comando sirve para instalar los componentes necesarios para el proyecto
- Teniendo todo eso podras correr el proyecto con el comando
  node index.js
- Y se abrira en el portal 3000 - localhost:3000
- Ahora para el llamado del archivo PHP
  (send_data)
- Ese archivo no tiene que estar dentro de tu carpeta principal de trabajo si no fuera pero dentro del htdocs
  puedes crear una carpeta como (PHP_Scripts) para tener todo mas ordenado 
- Con eso activas tu XAMPP y pones la URL llamando al archivo PHP
  http://localhost/send_data.php
- Con eso podras tener el chat de la conversacion y el archivo PHP con la hora actual corriendo
- Para ejcutar todo seria
  node index.js (En el CMD)
  http://localhost/send_data.php (Pegarlo en el navegador)

- Con eso tenemos el proyecto cargado y se tendria que ver asi 

![image](https://github.com/user-attachments/assets/dbacf2f9-11ae-43cd-aa6f-9e77ed859aa9)

Y esta es la vista del PHP

![image](https://github.com/user-attachments/assets/e713dd0c-1ec6-4418-aee1-0caeceb3327e)


 
  
  
