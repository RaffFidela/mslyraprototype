const themeToggle = document.getElementById('theme-toggle');

if (themeToggle) {
    const savedTheme = localStorage.getItem('themeMode');
    const shouldUseLight = savedTheme === 'light';

    themeToggle.checked = shouldUseLight;

    const applyTheme = () => {
        const isLight = themeToggle.checked;
        document.body.classList.toggle('light-mode', isLight);
        localStorage.setItem('themeMode', isLight ? 'light' : 'dark');
    };

    applyTheme();
    themeToggle.addEventListener('change', applyTheme);
}

