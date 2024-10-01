## Información Personal

**Nombre:** Daniel Samael Gámez Garza  
**Matrícula:** AL02976026  
**Carrera:** Ingenieria de Desarrollo de Software  
**Semestre:** Octavo Semestre 

## Información de la Asignatura

**Nombre de la asignatura:** Diseño de Aplicaciones Web  
**Profesor:** Jesús Garza Guerrero  

##  Opciones de etiquetado formato Markdown:

- **Encabezados:** Se crean usando el símbolo `#`. Ejemplo: `# Encabezado 1`, `## Encabezado 2`.
- **Negritas:** Se usan dos asteriscos `**` o guiones bajos `__`. Ejemplo: `**texto en negrita**`.
- **Cursivas:** Se usa un asterisco `*` o guión bajo `_`. Ejemplo: `*texto en cursiva*`.
- **Listas:** Las listas ordenadas usan números, y las listas no ordenadas usan guiones `-` o asteriscos `*`.
- **Citas:** Se crean usando el símbolo `>`. Ejemplo: `> Esto es una cita`.
- **Enlaces:** Se crean usando `[texto](URL)`. Ejemplo: `[GitHub](https://github.com)`.
- **Imágenes:** Se insertan con `![alt text](URL de la imagen)`. Ejemplo: `![Logo](https://url.com/logo.png)`.

## Comandos de Git

A continuación se listan algunos comandos útiles de Git:

1. **Revisar el estado de un repositorio local:**
   ```bash
   git status

2. **Añadir Archivos Individuales:**
    ```bash
     git add <archivo>

3. **Añadir Todos los Archivos:**
    ```bash
     git add .

4. **Agregar comentarios al commit:**
    ```bash
    git commit -m "Mensaje del commit"

5. **Subir cambios al repositorio remoto:**
    ```bash
    git push origin <rama>

6. **Crear Nueva Rama:**
    ```bash 
    git branch <nombre-de-la-rama>

7. **Cambiar de rama:**
    ```bash 
    git checkout <nombre-de-la-rama>

8. **Eliminar una rama:**
    ```bash
    git branch -d <nombre-de-la-rama>

9. **Hacer rollback a un commit específico:**
    ```bash
    git reset --hard <ID-del-commit>

# Actividad 6: Gestión de Productos en Laravel

Se creo una carpeta llamada products dentro de resoures/views
creando 3 archivos tipo php con estos mismos formatos:

1. **view.blade.php:**
   ```bash
    <!DOCTYPE html>
    <html>
    <head>
        <title>Product View</title>
    </head>
    <body>
        <!--CONTENIDO-->
    </body>
    </html>

2. **edit.blade.php:**
   ```bash
    <!DOCTYPE html>
    <html>
    <head>
        <title>Product Editing</title>
    </head>
    <body>
        <!--CONTENIDO-->
    </body>
    </html>

3. **create.blade.php:**
   ```bash
    <!DOCTYPE html>
    <html>
    <head>
        <title>New Product Creation</title>
    </head>
    <body>
        <!--CONTENIDO-->
    </body>
    </html>

# Proyecto Activity 7

## Nombre del Proyecto
Sistema de Gestión para Escuela de Robótica

## Descripción del Proyecto
Este proyecto es un sistema de gestión para una pequeña escuela de robótica que permite a los profesores gestionar cursos, a los estudiantes inscribirse en grupos, y a los administradores supervisar la plataforma.

## Diagrama ER
![Diagrama ER](Application-Web-Design/activity7/Diagrama ER.png)

El esquema de la base de datos incluye entidades como usuarios, grupos, cursos y materiales didácticos. También soporta múltiples roles: estudiantes, profesores y administradores.

## Instalación
1. Clona el repositorio.
2. Ejecuta `composer install`.
3. Configura tu archivo `.env`.
4. Ejecuta las migraciones: `php artisan migrate`.
5. Población de la base de datos: `php artisan db:seed`.
6. Inicia el servidor: `php artisan serve`.

## Usuarios registrados de prueba
- **Administrador:**
  - Usuario: Admon
  - Correo: admon@robotics.com
  - Contraseña: Adm@2022
- **Profesor:**
  - Usuario: Tecmilenio
  - Correo: tecmilenio@robotics.com
  - Contraseña: Adm@2022
- **Estudiante:**
  - Usuario: Student
  - Correo: student@robotics.com
  - Contraseña: Adm@2022