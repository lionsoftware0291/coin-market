document.addEventListener('DOMContentLoaded', () => {
    const langSwitcher = document.getElementById("langSwitcher");
    const localeSwitcher = document.getElementById("localeSwitcher");
    const profileTrigger = document.getElementById("profileTrigger");
    const loginTrigger = document.getElementById("loginTrigger");
    const settingsTrigger = document.getElementById("settingsTrigger");

    let currentLang = 'ur';

    langSwitcher?.addEventListener('click', () => {
        if (currentLang === 'ur') {
            alert("Switched to English");
            langSwitcher.textContent = 'EN';
            currentLang = 'en';
        } else {
            alert("زبان اردو میں تبدیل ہوگئی۔");
            langSwitcher.textContent = 'اردو';
            currentLang = 'ur';
        }
    });

    localeSwitcher?.addEventListener('click', () => {
        alert("Language switcher clicked (add your logic)");
    });

    profileTrigger?.addEventListener('click', () => {
        alert("User profile clicked");
    });

    loginTrigger?.addEventListener('click', () => {
        openModal('loginModal');
    });

    settingsTrigger?.addEventListener('click', () => {
        openModal('settingsModal');
    });

    window.openModal = function (id) {
        document.getElementById(id)?.classList.remove('hidden');
    }

    window.closeModal = function (id) {
        document.getElementById(id)?.classList.add('hidden');
    }
});
