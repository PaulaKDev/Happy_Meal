document.addEventListener("DOMContentLoaded", () => {

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  const badge = document.getElementById("cart-count");
  const itemsContainer = document.getElementById("cart-items");
  const totalEl = document.getElementById("cart-total");
  const panel = document.getElementById("cart-panel");
  const cartIcon = document.querySelector(".cart");
  const clearCartBtn = document.getElementById("clear-cart");

  // TOGGLE PANEL
  if (cartIcon) {
    cartIcon.addEventListener("click", () => {
      if (panel) panel.classList.toggle("active");
    });
  }

  // AÑADIR PRODUCTO
  document.querySelectorAll(".add-to-cart").forEach(button => {

    button.addEventListener("click", () => {

      const name = button.dataset.name;
      const price = parseFloat(button.dataset.price);

      if (!name || isNaN(price)) return;

      cart.push({ name, price });

      localStorage.setItem("cart", JSON.stringify(cart));

      updateCart();

      if (panel) panel.classList.add("active");
    });

  });

  // LIMPIAR CARRITO
  if (clearCartBtn) {
    clearCartBtn.addEventListener("click", () => {
      cart = [];
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCart();
      if (panel) panel.classList.remove("active");
    });
  }

  function updateCart() {

    if (!itemsContainer || !badge || !totalEl) return;

    itemsContainer.innerHTML = "";
    let total = 0;

    cart.forEach((item, index) => {

      total += item.price;

      const div = document.createElement("div");
      div.classList.add("cart-item");

      div.innerHTML = `
        <span>${item.name}</span>
        <button data-index="${index}">✕</button>
      `;

      itemsContainer.appendChild(div);
    });

    badge.textContent = cart.length;
    totalEl.textContent = total.toFixed(2) + "€";

    // ELIMINAR
    itemsContainer.querySelectorAll("button").forEach(btn => {
      btn.addEventListener("click", () => {
        const i = parseInt(btn.dataset.index);
        cart.splice(i, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCart();
      });
    });
  }

  // Cerrar al hacer click fuera
  document.addEventListener("click", (e) => {
    if (
      panel &&
      cartIcon &&
      !panel.contains(e.target) &&
      !cartIcon.contains(e.target)
    ) {
      panel.classList.remove("active");
    }
  });

  updateCart();

});