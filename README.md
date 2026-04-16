# Las Lomas Gardens - Lujo Asequible

Las Lomas Gardens es un exclusivo desarrollo inmobiliario multifamiliar ubicado en una privilegiada parcela de 58,000 m² en Sosúa, Puerto Plata. El proyecto redefine el concepto de vida moderna, priorizando la sostenibilidad, la baja densidad y la armonía con el entorno natural.

## 🌿 Características del Proyecto

- **Baja Densidad**: Edificaciones de un máximo de 3 niveles para preservar la privacidad y las vistas panorámicas a las montañas.
- **Sostenibilidad**: Más de 39,000 m² de áreas verdes protegidas, garantizando aire puro y un entorno saludable.
- **Arquitectura Moderna**: Un diseño que combina la estética contemporánea con la majestuosidad del paisaje natural.

## 🏊‍♂️ Estilo de Vida y Amenidades

Espacios diseñados para el bienestar, el deporte y la recreación familiar:

- **Áreas Sociales**: Piscinas y casas de huéspedes (Guest Houses).
- **Deportes**: Instalaciones para deportes de raqueta.
- **Naturaleza**: Senderos para caminar y andar en bicicleta.
- **Seguridad**: Entorno tranquilo y seguro con infraestructura de acceso directo desde la vía principal.

## 🏠 Modelos de Unidades

El proyecto cuenta con 40 bloques para un total de 240 unidades de lujo:

| Modelo     | Habitaciones   | Características                                                      |
| :--------- | :------------- | :------------------------------------------------------------------- |
| **Tipo A** | 3 Habitaciones | Espacios amplios, enfoque en confort familiar y ventilación cruzada. |
| **Tipo B** | 2 Habitaciones | Diseño moderno, acabados de primera y vistas impresionantes.         |

## 📍 Ubicación

Situado en el municipio de **Sosúa, Puerto Plata**, República Dominicana (Parcela 37).

- Entorno de montaña a pocos minutos de los servicios urbanos.
- Cercanía a las playas de aguas cristalinas de Sosúa.
- Amplia disponibilidad de estacionamiento (316 plazas en total).

---

## 💻 Información del Desarrollador

Este sitio web ha sido construido utilizando tecnologías web modernas:

- **Frontend**: HTML5, CSS3 (Variables personalizadas, diseño responsivo), JavaScript.
- **Backend**: PHP para la gestión de componentes y envíos de formularios.
- **Infraestructura**: Despliegue automatizado mediante GitHub Actions.

## Configuración de Correo en cPanel

Para evitar que el deploy borre la configuración del formulario de contacto, no dependas únicamente de `public_html/.env`.

Rutas persistentes soportadas por el backend:

- `$HOME/.env`
- `$HOME/laslomas.env`
- `$HOME/.laslomasserenas.env`
- la ruta absoluta definida en `LAS_LOMAS_ENV_FILE`

Ejemplo recomendado en cPanel:

```env
BREVO_API_KEY=tu_api_key
BREVO_SENDER_EMAIL=no-reply@laslomasserenas.com
BREVO_SENDER_NAME=Las Lomas Serenas
CONTACT_RECIPIENT_EMAIL=info@laslomasserenas.com
```

Guardalo fuera del directorio desplegado, por ejemplo en `/home/tu_usuario_cpanel/.laslomasserenas.env`.

© 2025 Las Lomas Gardens. Todos los derechos reservados.
