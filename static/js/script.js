



document.querySelectorAll('.faq').forEach((faq) => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('active');
    });
});




document.getElementById('open-register').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('register-modal').style.display = 'flex';
});


document.getElementById('close-register').addEventListener('click', function () {
    document.getElementById('register-modal').style.display = 'none';
});


window.addEventListener('click', function (event) {
    if (event.target === document.getElementById('register-modal')) {
        document.getElementById('register-modal').style.display = 'none';
    }
});

