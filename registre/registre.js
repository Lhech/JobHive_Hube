function hashPassword() {
    var passwordInput = document.getElementById("password");
    
    bcrypt.hash(passwordInput.value, 10, function(err, hash) {
        if (!err) {
            passwordInput.value = hash;
        } else {
            console.error("Error hashing password:", err);
        }
    });
}
