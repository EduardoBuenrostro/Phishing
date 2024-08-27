# Phishing

El proyecto es un ejemplo de un script de phishing básico programado en PHP que captura las credenciales ingresadas en un formulario de inicio de sesión clonado. El script recibe el nombre de usuario y la contraseña del formulario, y los guarda en un archivo de texto generado automáticamente en el servidor.

## Sitio a clonar y Vector inicial: Mensaje de Texto (SMS)

Para este ejemplo de phishing, el vector inicial es un mensaje de texto (SMS) que simula una alerta de seguridad de la tienda Liverpool. El mensaje está diseñado para asustar a la víctima haciéndole creer que ha habido un intento de compra fraudulento con su tarjeta de Liverpool, instándola a verificar su cuenta a través de un enlace proporcionado en el mensaje.

**Mensaje de Texto Utilizado:**
"LIVERPOOL - Intento de compra RECHAZADA con tu Tarjeta Liverpool en Tienda Antara CDMX por un monto de $3850.87. Si no fuiste tú, corrobora tu información ingresando a tu cuenta en el siguiente 'ENLACE'"

**Explicación:**
1. **Simulación de Alerta:** El mensaje simula una alerta legítima de la tienda Liverpool, indicando un intento de compra rechazado.
2. **Inducción al Pánico:** Al mencionar un monto considerable y una ubicación específica, el mensaje induce al usuario a preocuparse por la seguridad de su cuenta.
3. **Llamado a la Acción:** El mensaje urge a la víctima a "corroborar su información" haciendo clic en un enlace que supuestamente la llevará a la página oficial de inicio de sesión de Liverpool, pero en realidad, redirige al formulario de phishing.

## Descripción

1. **Captura de Credenciales:** El script PHP recibe los datos del formulario de inicio de sesión enviados mediante el método POST.
2. **Validación de Datos:** Verifica que los campos de nombre de usuario y contraseña no estén vacíos antes de proceder a guardar los datos.
3. **Registro de Credenciales:** Las credenciales capturadas se almacenan en un archivo de texto, el cual se genera automáticamente con un nombre único basado en la fecha y hora en que se recibieron los datos.

## Instrucciones

1. **Clona o copia los archivos del proyecto en tu servidor.**
2. **Clona o copia los archivos del sitio web que se desea clonar.**
   - Ya sea que lo repliques desde cero o guardes el código fuente desde el sitio web.
4. **Modifica el formulario HTML:** 
   - Cambia la acción del formulario ```<form action="URL_DESTINO" method="post">``` para que apunte al archivo ```login.php``` que contiene el código PHP proporcionado.
   - Ejemplo de una modificación:
     ```html
     <form action="login.php" method="post">
     ```
   - **Nota:** Asegúrate de que el nombre de los campos de entrada (`login` y `password`) coincidan con los nombres en el script PHP.
   
5. **Sube los archivos al servidor:** 
   - Si estás usando un entorno de desarrollo local, asegúrate de que el servidor web (Apache, Nginx, etc.) esté configurado correctamente para ejecutar scripts PHP.
   - Una manera sencilla de probarlo en un servidor local en tu sistema linux es con el siguiente comando:
      ```
        php -S localhost:8000

      ```
      Toma en cuenta que se usa el puerto 8000 para este ejemplo, pero puedes usar el que tú decidas siempre y cuando no se encuentre reservado o en uso.
   
6. **Accede al formulario clonado:**
   - Navega hasta la URL donde se encuentra el formulario clonado.
   - Introduce un nombre de usuario y una contraseña de prueba, y envía el formulario.

7. **Revisa el archivo de registro:**
   - Después de enviar el formulario, revisa el directorio donde se encuentra el archivo ```login.php```. Debería haberse generado un archivo ```.txt``` con un nombre basado en la fecha y hora en que se enviaron las credenciales.
   - El archivo contendrá las credenciales capturadas en el formato:
     ```
     Nombre de Usuario: ejemplo_usuario
     Contraseña: ejemplo_contraseña
     ```

## Supuestos del Programa

* **Entorno de Desarrollo:** Se asume que el script se ejecuta en un entorno controlado, ya sea en un servidor local o remoto con soporte para PHP.
* **Permisos de Archivo:** El servidor debe tener los permisos necesarios para crear y escribir archivos en el directorio donde se ejecuta el script PHP.

## Casos de Uso

* **Pruebas de Seguridad:** Este script puede ser utilizado en un entorno controlado para demostrar técnicas de phishing y educar sobre los riesgos de ataques de ingeniería social.
* **Demostración Educativa:** Útil para clases o talleres de seguridad informática, donde se quiera mostrar cómo se implementan y cómo funcionan los ataques de phishing a nivel básico.

## Autores

* **EDUARDO ALBERTO BUENROSTRO PARDO**
