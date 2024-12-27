import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

setHeader('Content-Security-Policy', 'frame-ancestors *;');
