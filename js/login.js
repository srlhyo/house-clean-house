document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('login-form');
    const passwordToggle = document.getElementById('password-toggle');
    const passwordInput = document.getElementById('password');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const password = passwordInput.value;
        console.log('Login attempted with:', { email, password });
        // Here you would typically send this data to your server
    });

    passwordToggle.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordToggle.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
    });
});