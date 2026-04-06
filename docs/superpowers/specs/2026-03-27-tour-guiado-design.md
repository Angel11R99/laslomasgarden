# Tour Guiado "Entra a Las Lomas" — Diseño

**Fecha:** 2026-03-27
**Proyecto:** Las Lomas Serenas — landing page
**Objetivo:** Convicción emocional (pertenencia + prestigio) para compradores locales e internacionales

---

## Concepto

El tour deja de ser una galería 360° navegable y se convierte en una **experiencia de entrada al proyecto**: el visitante primero ve el master plan, elige a dónde entrar, hace zoom hacia el apartamento, y dentro del 360° encuentra un modo guía con texto emocional y specs por escena. Al terminar, una pantalla de cierre lo invita a contactar.

---

## Flujo de experiencia

1. **Botón "Explorar el proyecto"** en el hero → abre el modal del tour
2. **Pantalla de mapa** (estado inicial del modal) — imagen `Master Plan & Ocean.webp` con 3 puntos superpuestos:
   - Dorado: Apartamento → activa el tour 360°
   - Azul (Piscina) y Blanco (Lobby): deshabilitados en v1, preparados para v2
3. **Transición zoom-in** al hacer clic en el punto dorado:
   - El punto escala hasta cubrir la pantalla (GSAP `scale`)
   - Fade a negro (~400ms)
   - Aparece la escena 360° de A-Frame
4. **Tour 360° enriquecido**:
   - Hotspots existentes con popup de nombre + specs al hacer clic
   - Botón "✦ Guía" flotante a la izquierda activa el panel lateral
   - Panel lateral toggle con `guideText` (texto emocional) + `specs[]` por escena
   - Botón "← Mapa" para volver a la pantalla del master plan
5. **Pantalla de cierre emocional** al terminar el recorrido o pulsar "Finalizar":
   - Fondo verde oscuro degradado
   - Texto: *"Tu espacio te está esperando."*
   - CTA primario: "Quiero más información →" (abre el survey/formulario existente)
   - CTA secundario: "← Volver al recorrido"

---

## Arquitectura

### Archivos modificados
- `index.html` — único archivo a modificar (HTML + CSS + JS inline)

### Dependencias nuevas
- **GSAP** vía CDN (`https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js`) — solo para la transición zoom-in

### Activos existentes usados
- `Master Plan & Ocean.webp` — imagen del mapa de entrada
- `img/apartament360.png` y demás panoramas 360° — sin cambios

---

## Modelo de datos

### tourScenes ampliado

Cada objeto en `tourScenes[]` gana dos campos:

```js
{
  // campos existentes: id, title, description, image, mobileImage, rotation, hotspots
  guideText: '"Texto emocional del guía para esta escena."',
  specs: [
    'Spec 1',
    'Spec 2',
    'Spec 3'
  ]
}
```

**Contenido por escena:**

| Escena | guideText | specs |
|--------|-----------|-------|
| Sala Principal | "Techos a 2.8m. El último rayo de sol entra por el balcón a las 5pm y baña toda la sala." | 38 m² sala-comedor, Ventanas floor-to-ceiling, Piso madera ingeniería |
| Dormitorio | "El silencio por la mañana aquí es absoluto. Solo el mar a lo lejos." | Dormitorio principal, Closet integrado, Luz natural directa |
| Cocina | "Diseñada para cocinar de verdad. O para pedir delivery con estilo." | Mesón cuarzo, Gabinetes piso a techo, Electrodomésticos incluidos |
| Baño | "Acabados de hotel cinco estrellas. Cada mañana." | Ducha walk-in, Grifería premium, Porcelanato 60×60 |
| Balcón | "Aquí termina el recorrido. Aquí es donde todo empieza." | Vista directa al océano, Piso porcelanato exterior, Baranda de vidrio |

### mapZones

```js
const mapZones = [
  { id: 'apartment', label: 'Apartamento', x: 45, y: 38, color: '#d4af37', leadsTo: 'apartment-panorama', enabled: true },
  { id: 'pool',      label: 'Piscina',     x: 25, y: 65, color: '#0db4b4', leadsTo: null, enabled: false },
  { id: 'lobby',     label: 'Lobby',       x: 70, y: 20, color: '#ffffff', leadsTo: null, enabled: false },
]
```

Las posiciones `x`/`y` son porcentajes sobre la imagen del master plan y se ajustan visualmente tras la implementación.

---

## Componentes UI nuevos

### `#tourMapScreen`
- `position: absolute; inset: 0` dentro de `tour-shell`
- Imagen del master plan como fondo (`object-fit: cover`)
- Puntos superpuestos: `position: absolute` con `left: {x}%; top: {y}%`
- Punto activo (dorado): pulso animado con CSS `@keyframes`
- Puntos inactivos: opacidad 40%, sin cursor pointer, sin click handler

### `#tourGuidePanel`
- `position: absolute; right: 0; top: 0; bottom: 0; width: 200px`
- `background: rgba(5,15,10,0.97)` con `border-left: 1px solid rgba(212,175,55,0.2)`
- Toggle via clase `.open` — transición `transform: translateX(100%)` ↔ `translateX(0)`
- Botón "✦ Guía": `position: absolute; left: -36px; top: 50%` — visible siempre

### Hotspot popup
- `<div id="tourHotspotPopup">` posicionado sobre el canvas A-Frame
- Aparece al hacer clic en un hotspot (evento `click` en A-Frame)
- Se oculta al mover la cámara o hacer clic fuera
- Contenido: nombre del destino + descripción breve del hotspot

### `#tourEndScreen`
- `position: absolute; inset: 0; z-index: 20` dentro de `tour-shell`
- Fondo: `linear-gradient(135deg, #0f3d2e, #1a6b4a)`
- Se activa: tras hacer clic en "Finalizar tour" (botón en el panel inferior)
- CTA primario llama a `openSurvey()` (función existente) y cierra el tour

---

## Estados del modal

```
modal cerrado
  → abre → estado "map"
               → clic punto dorado → transición zoom → estado "tour"
                                                          → clic "Finalizar" → estado "end"
                                                          → clic "← Mapa"   → estado "map"
               → clic ×           → modal cerrado
```

---

## Comportamiento mobile

- Panel lateral `#tourGuidePanel` no existe en mobile (< 768px); en su lugar, el guideText aparece en el panel inferior existente (`tour-panel`) como texto adicional
- Los specs se muestran colapsados con un "Ver detalles ▸" expandible
- El mapa en mobile muestra solo el punto dorado (los otros se ocultan) con texto "Toca para entrar al apartamento"
- La transición zoom-in se simplifica: fade directo sin scale (mejor rendimiento)

---

## Lo que NO cambia

- Estructura A-Frame existente (`<a-scene>`, `<a-sky>`, hotspots)
- Lógica de navegación entre escenas (prev/next/pills)
- Walk mode y Guide btn existentes
- Sistema del survey/formulario
- CSS variables y sistema de diseño

---

## Criterios de éxito

- El visitante comprende la escala del proyecto antes de entrar al 360°
- La transición zoom-in se siente premium (sin saltos ni parpadeos)
- El Modo Guía activa texto emocional relevante en cada escena
- La pantalla de cierre dispara al menos un clic en el CTA de contacto
- Funciona correctamente en Chrome/Safari desktop y mobile
