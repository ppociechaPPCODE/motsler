import './bootstrap';
import './cookie-consent';

document.documentElement.classList.add('js');

const techSection = document.getElementById('technologie-motsler');
if (techSection) {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduceMotion) {
        techSection.classList.add('is-revealed');
    } else {
        const io = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        io.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.05 }
        );
        io.observe(techSection);
    }
}

const homeDpfTiles = document.getElementById('home-dpf-tiles');
const homeDpfA = document.getElementById('home-dpf-blend-a');
const homeDpfB = document.getElementById('home-dpf-blend-b');
if (homeDpfTiles && homeDpfA && homeDpfB) {
    const homeDpfMqlLg = window.matchMedia('(min-width: 1024px)');
    let homeDpfTicking = false;
    const homeDpfBlend = () => {
        const articles = homeDpfTiles.querySelectorAll('article');
        if (articles.length < 4) return;
        const vh = window.innerHeight;
        const center = vh * 0.5;
        const first = articles[0].getBoundingClientRect();
        const last = articles[articles.length - 1].getBoundingClientRect();

        const zoneTop = first.top;
        const zoneBottom = last.bottom;
        const zh = zoneBottom - zoneTop;
        const blendStart = zoneTop + zh * 0.5;

        if (center <= blendStart) {
            homeDpfA.style.opacity = '1';
            homeDpfB.style.opacity = '0';
            return;
        }

        let p = (center - blendStart) / (zoneBottom - blendStart);
        if (p < 0) p = 0;
        else if (p > 1) p = 1;
        p = p * p * (3 - 2 * p);
        homeDpfA.style.opacity = String(1 - p);
        homeDpfB.style.opacity = String(p);
    };
    const homeDpfOnScroll = () => {
        if (!homeDpfTicking) {
            homeDpfTicking = true;
            requestAnimationFrame(() => {
                homeDpfTicking = false;
                homeDpfBlend();
            });
        }
    };
    window.addEventListener('scroll', homeDpfOnScroll, { passive: true });
    window.addEventListener('resize', homeDpfOnScroll);
    homeDpfMqlLg.addEventListener('change', homeDpfOnScroll);
    homeDpfBlend();
}

const homeContactForm = document.getElementById('home-contact-form');
if (homeContactForm) {
    const homeCeDs = homeContactForm.dataset;
    const homeCeSummary = document.getElementById('home-ce-js-summary');
    const homeCeSuccess = document.getElementById('home-ce-js-success');
    const homeCeError = document.getElementById('home-ce-js-error');
    const homeCeName = document.getElementById('home-ce-name');
    const homeCeEmail = document.getElementById('home-ce-email');
    const homeCeMessage = document.getElementById('home-ce-message');
    const homeCePrivacy = document.getElementById('home-ce-privacy');
    const homeCeErrName = document.getElementById('home-ce-js-err-name');
    const homeCeErrEmail = document.getElementById('home-ce-js-err-email');
    const homeCeErrMessage = document.getElementById('home-ce-js-err-message');
    const homeCeErrPrivacy = document.getElementById('home-ce-js-err-privacy');
    const homeCeSubmit = homeContactForm.querySelector('[type="submit"]');
    const homeCeInvalid = ['border-red-500', 'ring-2', 'ring-red-500/30'];

    const homeCeClearField = (input, errEl) => {
        if (!input) return;
        input.classList.remove(...homeCeInvalid);
        input.removeAttribute('aria-invalid');
        if (errEl) {
            errEl.textContent = '';
            errEl.classList.add('hidden');
        }
    };

    const homeCeShowField = (input, errEl, msg) => {
        if (!input || !errEl) return;
        errEl.textContent = msg;
        errEl.classList.remove('hidden');
        input.classList.add(...homeCeInvalid);
        input.setAttribute('aria-invalid', 'true');
    };

    const homeCeHideStatus = () => {
        if (homeCeSuccess) {
            homeCeSuccess.textContent = '';
            homeCeSuccess.classList.add('hidden');
        }
        if (homeCeError) {
            homeCeError.textContent = '';
            homeCeError.classList.add('hidden');
        }
    };

    const homeCeShowSuccess = (msg) => {
        homeCeHideStatus();
        if (homeCeSummary) {
            homeCeSummary.textContent = '';
            homeCeSummary.classList.add('hidden');
        }
        if (homeCeSuccess) {
            homeCeSuccess.textContent = msg;
            homeCeSuccess.classList.remove('hidden');
            homeCeSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    };

    const homeCeShowError = (msg) => {
        homeCeHideStatus();
        if (homeCeError) {
            homeCeError.textContent = msg;
            homeCeError.classList.remove('hidden');
            homeCeError.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    };

    const homeCeValidate = () => {
        homeCeClearField(homeCeName, homeCeErrName);
        homeCeClearField(homeCeEmail, homeCeErrEmail);
        homeCeClearField(homeCeMessage, homeCeErrMessage);
        homeCeClearField(homeCePrivacy, homeCeErrPrivacy);
        if (homeCeSummary) {
            homeCeSummary.textContent = '';
            homeCeSummary.classList.add('hidden');
        }

        const nameVal = homeCeName ? homeCeName.value.trim() : '';
        const emailVal = homeCeEmail ? homeCeEmail.value.trim() : '';
        const messageVal = homeCeMessage ? homeCeMessage.value.trim() : '';
        const privacyOk = homeCePrivacy && homeCePrivacy.checked;
        const emailOk =
            emailVal.length > 0 && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailVal);

        let valid = true;
        if (!nameVal || nameVal.length > 200) {
            homeCeShowField(homeCeName, homeCeErrName, homeCeDs.ceMsgRequired || '');
            valid = false;
        }
        if (!emailVal) {
            homeCeShowField(homeCeEmail, homeCeErrEmail, homeCeDs.ceMsgRequired || '');
            valid = false;
        } else if (!emailOk) {
            homeCeShowField(homeCeEmail, homeCeErrEmail, homeCeDs.ceMsgEmailInvalid || '');
            valid = false;
        }
        if (!messageVal) {
            homeCeShowField(homeCeMessage, homeCeErrMessage, homeCeDs.ceMsgRequired || '');
            valid = false;
        } else if (messageVal.length > 5000) {
            homeCeShowField(homeCeMessage, homeCeErrMessage, homeCeDs.ceMsgMessageMax || '');
            valid = false;
        }
        if (!privacyOk) {
            homeCeShowField(homeCePrivacy, homeCeErrPrivacy, homeCeDs.ceMsgPrivacy || '');
            valid = false;
        }

        if (!valid && homeCeSummary && homeCeDs.ceMsgSummary) {
            homeCeSummary.textContent = homeCeDs.ceMsgSummary;
            homeCeSummary.classList.remove('hidden');
            const firstInv = homeContactForm.querySelector('[aria-invalid="true"]');
            if (firstInv) {
                firstInv.focus({ preventScroll: true });
                firstInv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        return valid;
    };

    const homeCeApplyServerErrors = (errors) => {
        const fieldMap = {
            name: [homeCeName, homeCeErrName],
            email: [homeCeEmail, homeCeErrEmail],
            message: [homeCeMessage, homeCeErrMessage],
            privacy_accept: [homeCePrivacy, homeCeErrPrivacy],
        };

        Object.entries(errors).forEach(([field, messages]) => {
            const mapping = fieldMap[field];
            if (mapping && Array.isArray(messages) && messages[0]) {
                homeCeShowField(mapping[0], mapping[1], messages[0]);
            }
        });

        if (homeCeSummary && homeCeDs.ceMsgSummary) {
            homeCeSummary.textContent = homeCeDs.ceMsgSummary;
            homeCeSummary.classList.remove('hidden');
        }
    };

    homeContactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        homeCeHideStatus();

        if (!homeCeValidate()) {
            return;
        }

        if (homeCeSubmit) {
            homeCeSubmit.disabled = true;
        }

        try {
            const response = await fetch(homeContactForm.action, {
                method: 'POST',
                body: new FormData(homeContactForm),
                headers: {
                    Accept: 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                },
            });

            if (response.ok) {
                const payload = await response.json().catch(() => ({}));
                homeContactForm.reset();
                homeCeShowSuccess(payload.message || homeCeDs.ceMsgSent || '');
                return;
            }

            if (response.status === 422) {
                const payload = await response.json().catch(() => ({}));
                if (payload.errors) {
                    homeCeApplyServerErrors(payload.errors);
                }
                return;
            }

            const payload = await response.json().catch(() => ({}));
            homeCeShowError(payload.message || homeCeDs.ceMsgError || '');
        } catch {
            homeCeShowError(homeCeDs.ceMsgError || '');
        } finally {
            if (homeCeSubmit) {
                homeCeSubmit.disabled = false;
            }
        }
    });

    if (homeCeName && homeCeErrName) {
        homeCeName.addEventListener('input', () => {
            if (homeCeName.getAttribute('aria-invalid') === 'true')
                homeCeClearField(homeCeName, homeCeErrName);
            homeCeHideStatus();
        });
    }
    if (homeCeEmail && homeCeErrEmail) {
        homeCeEmail.addEventListener('input', () => {
            if (homeCeEmail.getAttribute('aria-invalid') === 'true')
                homeCeClearField(homeCeEmail, homeCeErrEmail);
            homeCeHideStatus();
        });
    }
    if (homeCeMessage && homeCeErrMessage) {
        homeCeMessage.addEventListener('input', () => {
            if (homeCeMessage.getAttribute('aria-invalid') === 'true')
                homeCeClearField(homeCeMessage, homeCeErrMessage);
            homeCeHideStatus();
        });
    }
    if (homeCePrivacy && homeCeErrPrivacy) {
        homeCePrivacy.addEventListener('change', () => {
            if (homeCePrivacy.getAttribute('aria-invalid') === 'true')
                homeCeClearField(homeCePrivacy, homeCeErrPrivacy);
            homeCeHideStatus();
        });
    }
}
