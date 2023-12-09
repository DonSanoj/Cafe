// Login page and Register page
function togglePassword() {
    const passwordInput = document.getElementById('password-input');
    const togglePassword = document.getElementById('toggle-password');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
    } else {
        passwordInput.type = 'password';
        togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }
}

// Register Page confirm password
function toggleConfirmPassword() {
    const passwordInput = document.getElementById('confirm-password-input');
    const togglePassword = document.getElementById('toggle-confirm-password');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
    } else {
        passwordInput.type = 'password';
        togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }
}