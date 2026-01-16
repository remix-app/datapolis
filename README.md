# Datapolis - Sitio Web PHP

Sitio web corporativo para **Datapolis**, una startup de Inteligencia Artificial enfocada en soluciones para PyMEs en Chile.

## 🚀 Stack Tecnológico

- **PHP 8+** con patrón includes
- **Tailwind CSS v3** (CDN)
- **Font Awesome 6** (CDN)
- **Google Fonts**: Space Grotesk + Inter

## 📁 Estructura de Archivos

```
datapolis/
├── index.php          # Página principal
├── servicios.php      # Catálogo de servicios
├── contacto.php       # Formulario de contacto
├── includes/
│   ├── header.php     # Encabezado y navegación
│   └── footer.php     # Pie de página
├── images/            # Imágenes del sitio
├── .htaccess          # Configuración Apache
└── README.md          # Este archivo
```

## 🎨 Paleta de Colores

| Color | Hex | Uso |
|-------|-----|-----|
| Primary | `#0a1628` | Fondos oscuros |
| Secondary | `#1e3a5f` | Fondos secundarios |
| Accent | `#00d4ff` | CTAs, highlights |
| Accent 2 | `#7c3aed` | Detalles, badges |
| Light | `#f1f5f9` | Secciones claras |

## 🔧 Instalación

1. Clonar o copiar archivos al servidor web:
   ```bash
   cp -r datapolis/ /var/www/html/
   ```

2. Asegurarse de que Apache tenga `mod_rewrite` habilitado:
   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

3. Verificar permisos:
   ```bash
   chmod -R 755 datapolis/
   ```

## 💻 Desarrollo Local

Ejecutar servidor PHP integrado:

```bash
cd datapolis
php -S localhost:8000
```

Visitar `http://localhost:8000` en el navegador.

## 📝 Personalización

### Cambiar información de contacto
Editar `includes/footer.php` y `contacto.php`.

### Modificar servicios
Editar `servicios.php` y la sección de servicios en `index.php`.

### Cambiar colores
Modificar la configuración de Tailwind en `includes/header.php`:

```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#tu-color',
                accent: '#tu-accent',
                // ...
            }
        }
    }
}
```

## ⚠️ Notas

- Las imágenes generadas son placeholders de IA
- El formulario de contacto requiere backend PHP para envío de emails
- El mapa de Google Maps requiere API key válida para producción

## 📄 Licencia

Desarrollado por Datapolis © 2026
