<?php
/**
 * Script de Mantenimiento
 * Muestra un cartel informando que el servicio está en mantenimiento
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mantenimiento - Servicio en Construcción</title>
</head>
<body>
    <div class="maintenance-container">
        <div class="maintenance-icon"><i class="fas fa-tools"></i></div>
        
        <h1>Servicio en Mantenimiento</h1>
        <p class="subtitle">Estamos mejorando nuestros servicios</p>
        
        <div class="message">
            <p>
                Nos encontramos realizando tareas de mantenimiento y actualización. 
                El servicio estará disponible nuevamente <strong>en breve</strong>.
            </p>
            <p style="margin-top: 15px; font-size: 0.95em;">
                Agradecemos su paciencia y comprensión.
            </p>
        </div>

        <div class="contact-info">
            <p><strong><i class="fas fa-life-ring"></i> ¿Necesita ayuda?</strong></p>
            <p>Si tiene consultas urgentes, puede contactarnos en:</p>
            <p>
                <a href="mailto:soporte@ejemplo.com" class="email-link"><i class="fas fa-envelope"></i> catastro@aref.gob.ar</a>
            </p>
        </div>

        <div class="timestamp">
            <p>Última actualización: <?php echo date('d/m/Y H:i'); ?> (Hora del servidor)</p>
        </div>
    </div>
</body>
</html>
