# Script de Mantenimiento PHP

Cartel informativo profesional para mostrar que tu servicio se encuentra en mantenimiento.

## 📁 Archivos Incluidos

- **index.php** - Página principal de mantenimiento (la que se mostrará a los usuarios)
- **config.php** - Archivo de configuración para personalizar el mensaje y colores
- **.htaccess** - Configuración de Apache para redirigir tráfico (opcional)
- **README.md** - Este archivo

## 🚀 Cómo Usar

### Opción 1: Uso Directo

1. Copia todos los archivos a tu servidor web
2. Accede a `http://tudominio.com/mantenimiento/index.php`
3. Se mostrará el cartel de mantenimiento

### Opción 2: Redirección Global (Recomendado)

Para que **todos** los visitantes vean el cartel de mantenimiento:

1. **Con Apache (.htaccess):**
   - Descomenta la línea `RewriteRule` en el archivo `.htaccess`
   - O copia el contenido de `.htaccess` al `.htaccess` de tu aplicación principal

2. **Con PHP (en tu archivo principal):**
   ```php
   require_once 'mantenimiento/index.php';
   exit;
   ```

3. **Con Nginx:**
   ```nginx
   error_page 503 /mantenimiento/index.php;
   return 503;
   ```

## ⚙️ Personalización

Edita el archivo `config.php` para cambiar:

- ✅ **maintenance_mode**: `true` para activar, `false` para desactivar
- ✅ **title**: Título del cartel
- ✅ **subtitle**: Subtítulo
- ✅ **message**: Mensaje principal
- ✅ **contact_email**: Email de contacto
- ✅ **primary_color**: Color principal (en hexadecimal)
- ✅ **secondary_color**: Color secundario (en hexadecimal)

### Ejemplo:
```php
'maintenance_mode' => false,  // Desactiva el mantenimiento
'contact_email' => 'soporte@miempresa.com',
'primary_color' => '#ff6b6b',
```

## 🎨 Características

✨ **Diseño Responsivo** - Se ve bien en desktop, tablet y móvil  
✨ **Animación Suave** - Ícono con efecto de pulso  
✨ **Gradiente Moderno** - Fondo degradado profesional  
✨ **Información de Contacto** - Email de soporte personalizable  
✨ **Timestamp Dinámico** - Muestra hora del servidor  

## 📱 Vista Previa

El cartel incluye:
- Ícono de herramientas (🔧)
- Título "Servicio en Mantenimiento"
- Mensaje informativo
- Información de contacto
- Hora de última actualización (dinámica desde PHP)

## ⚡ Requisitos

- PHP 5.6 o superior
- Servidor web (Apache, Nginx, etc.)
- Navegador web moderno

## 🔒 Notas de Seguridad

- No publicites información sensible en el cartel
- Cambia el email de contacto por uno real
- Si usas redirección global, asegúrate de permitir acceso a archivos públicos necesarios

## 📝 Licencia

Libre para usar y modificar.

---

**¿Preguntas?** Revisa el código fuente de `index.php` para entender la estructura y realizar cambios adicionales.
