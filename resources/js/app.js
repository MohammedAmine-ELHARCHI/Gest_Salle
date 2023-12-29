import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import jQuery from 'jquery';
window.$ = jQuery;
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
