document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#show-login").addEventListener("click", function(){
        document.querySelector(".popup-signup").classList.remove("active");
        document.querySelector(".popup").classList.add("active");
    });

    document.querySelector(".popup .close-btn").addEventListener("click", function(){
        document.querySelector(".popup").classList.remove("active");
    });

    document.querySelector("#show-signup").addEventListener("click", function(){
        document.querySelector(".popup").classList.remove("active");
        document.querySelector(".popup-signup").classList.add("active");
    });

    document.querySelector(".popup-signup .close-btn").addEventListener("click", function(){
        document.querySelector(".popup-signup").classList.remove("active");
    });

    const params = new URLSearchParams(window.location.search);
            const loginSuccess = params.get('login');
            if (loginSuccess === 'success') {
                // Tampilkan pop-up "Login berhasil" di sini
                alert("Login berhasil!");
            }   
});