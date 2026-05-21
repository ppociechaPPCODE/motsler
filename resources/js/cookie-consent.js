const STORAGE_KEY = 'motsler_cookie_consent';

function loadGtag(id) {
    if (!id || window.__motslerGtagLoaded) {
        return;
    }
    window.__motslerGtagLoaded = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = function gtag() {
        window.dataLayer.push(arguments);
    };
    const s = document.createElement('script');
    s.async = true;
    s.src = `https://www.googletagmanager.com/gtag/js?id=${encodeURIComponent(id)}`;
    document.head.appendChild(s);
    window.gtag('js', new Date());
    window.gtag('config', id);
}

function clearOptionalAnalyticsCookies() {
    const expire = 'Thu, 01 Jan 1970 00:00:00 GMT';
    const host = window.location.hostname;
    const names = new Set(['_ga', '_gid', '_gat', '_gcl_au']);
    document.cookie.split(';').forEach((row) => {
        const name = row.split('=')[0].trim();
        if (
            name.startsWith('_ga') ||
            name.startsWith('_gid') ||
            name.startsWith('_gat') ||
            name.startsWith('_gcl_')
        ) {
            names.add(name);
        }
    });
    const paths = ['/', window.location.pathname];
    const domains = ['', host, `.${host}`];
    names.forEach((name) => {
        paths.forEach((path) => {
            domains.forEach((domain) => {
                let c = `${name}=;expires=${expire};path=${path};SameSite=Lax`;
                if (domain) c += `;domain=${domain}`;
                document.cookie = c;
            });
        });
    });
}

function initCookieConsent() {
    const bar = document.getElementById('cookie-consent');
    if (!bar) {
        return;
    }
    const gtagId = (bar.dataset.gtagId || '').trim();
    if (!gtagId) {
        return;
    }

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const showBar = () => {
        bar.classList.remove('hidden');
        bar.classList.remove('translate-y-0', 'opacity-100');
        bar.classList.add('translate-y-3', 'opacity-0');
        if (reduceMotion) {
            bar.classList.remove('translate-y-3', 'opacity-0');
            bar.classList.add('translate-y-0', 'opacity-100');
        } else {
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    bar.classList.remove('translate-y-3', 'opacity-0');
                    bar.classList.add('translate-y-0', 'opacity-100');
                });
            });
        }
        document.body.classList.add('motsler-cookie-bar-visible');
    };

    const hideBar = () => {
        if (reduceMotion) {
            bar.classList.add('hidden');
            bar.classList.remove('translate-y-0', 'opacity-100');
            bar.classList.add('translate-y-3', 'opacity-0');
        } else {
            bar.classList.remove('translate-y-0', 'opacity-100');
            bar.classList.add('translate-y-3', 'opacity-0');
            window.setTimeout(() => {
                bar.classList.add('hidden');
            }, 280);
        }
        document.body.classList.remove('motsler-cookie-bar-visible');
    };

    const acceptBtn = document.getElementById('cookie-consent-accept');
    const rejectBtn = document.getElementById('cookie-consent-reject');

    acceptBtn?.addEventListener('click', () => {
        window.localStorage.setItem(STORAGE_KEY, 'accept');
        loadGtag(gtagId);
        hideBar();
    });

    rejectBtn?.addEventListener('click', () => {
        window.localStorage.setItem(STORAGE_KEY, 'reject');
        clearOptionalAnalyticsCookies();
        hideBar();
    });

    document.querySelectorAll('[data-cookie-consent-open]').forEach((el) => {
        el.addEventListener('click', () => {
            showBar();
        });
    });

    const stored = window.localStorage.getItem(STORAGE_KEY);
    if (stored === 'accept') {
        loadGtag(gtagId);
    }
    if (stored !== 'accept' && stored !== 'reject') {
        showBar();
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCookieConsent);
} else {
    initCookieConsent();
}
