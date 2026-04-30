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
    <title>Mantenimiento - Servicio en Construcción</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .maintenance-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 50px 40px;
            max-width: 600px;
            text-align: center;
        }

        .maintenance-icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.7;
                transform: scale(1.05);
            }
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 15px;
        }

        .subtitle {
            color: #666;
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .message {
            color: #555;
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 30px;
            padding: 20px;
            background: #f5f5f5;
            border-left: 4px solid #667eea;
            border-radius: 4px;
        }

        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0f0f0;
        }

        .contact-info p {
            color: #666;
            font-size: 0.95em;
            margin: 10px 0;
        }

        .email-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .email-link:hover {
            text-decoration: underline;
        }

        .timestamp {
            color: #999;
            font-size: 0.85em;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #f0f0f0;
        }

        @media (max-width: 600px) {
            .maintenance-container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 1.8em;
            }

            .maintenance-icon {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <div class="maintenance-icon">🔧</div>
        
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
            <p><strong>¿Necesita ayuda?</strong></p>
            <p>Si tiene consultas urgentes, puede contactarnos en:</p>
            <p>
                <a href="mailto:soporte@ejemplo.com" class="email-link">soporte@ejemplo.com</a>
            </p>
        </div>

        <div class="timestamp">
            <p>Última actualización: <?php echo date('d/m/Y H:i'); ?> (Hora del servidor)</p>
        </div>
    </div>
</body>
</html>
