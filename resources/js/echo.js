import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

// Get CSRF token
const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
    authEndpoint: '/broadcasting/auth',
    auth: {
        headers: csrfToken ? {
            'X-CSRF-TOKEN': csrfToken
        } : {}
    }
});

// Error handling for Echo
window.Echo.connector.pusher.connection.bind('error', (err) => {
    console.error('Echo connection error:', err);
});

window.Echo.connector.pusher.connection.bind('disconnected', () => {
    console.warn('Echo disconnected');
});

window.Echo.connector.pusher.connection.bind('connected', () => {
    console.log('Echo connected');
});
