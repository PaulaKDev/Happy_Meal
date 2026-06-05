document.addEventListener('DOMContentLoaded', () => {

    let count = localStorage.getItem('cartCount') || 0;
    const badge =document.getElementById('cart-count');

    //mostrar valor inicial
    badge.textContent = count;

    //botones
    const buttons = document.querySelectorAll('.add-to-cart');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            count++;
            localStorage.setItem('cartCount', count);
            badge.textContent = count;

            //animación
            badge.classList.add('bump');
            setTimeout(() => {
                badge.classList.remove('bump');
            }, 200);

        });
    });
});