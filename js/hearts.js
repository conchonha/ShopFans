var hearts = document.querySelectorAll('.cart_details  .far')
hearts.forEach(heart => heart.addEventListener('click', function() {
    heart.classList.toggle('fa');
    heart.style.color = 'red'
}))