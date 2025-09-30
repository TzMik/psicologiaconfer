# Usar la imagen oficial de PHP 8.2 con Apache como base
FROM php:8.2-apache

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar los archivos de la aplicación (el . indica el directorio actual)
# al directorio de trabajo en el contenedor.
COPY . .

# Habilitar el módulo rewrite de Apache para nuestras URLs amigables (.htaccess)
RUN a2enmod rewrite

# Exponer el puerto 80 para que podamos acceder desde fuera del contenedor
EXPOSE 80