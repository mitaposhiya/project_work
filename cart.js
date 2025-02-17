// Function to display cart items
function displayCartItems() {
    const cartContainer = document.getElementById('cart-items');
    cartContainer.innerHTML = ''; 
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    let totalPrice = 0;

    if (cartItems.length === 0) {
        cartContainer.innerHTML = '<h1>Your cart is empty.</h1>';
        return;
    }

    cartItems.forEach((item, index) => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
        <img src="${item.image}">
            <h2>${item.name}</h2>
            <p>Price: ₹${item.price}</p>
            <p>Quantity: ${item.quantity}</p>
            <p>Total: ₹${item.price * item.quantity}</p>
            <button onclick="removeFromCart(${index})">Remove</button>
        `;
        cartContainer.appendChild(itemDiv);
        totalPrice += item.price * item.quantity;
    });

    document.getElementById('total-price').innerText = totalPrice;
}

// Function to remove an item from the cart
function removeFromCart(index) {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    cartItems.splice(index, 1); // Remove the item at the specified index
    localStorage.setItem('cartItems', JSON.stringify(cartItems)); // Update local storage
    displayCartItems(); // Refresh the cart display
}

// Call the function to display items on page load
displayCartItems();

// Checkout button functionality
document.getElementById('checkout-button').addEventListener('click', () => {
    alert('Proceeding to checkout...');
    // Here you would typically redirect to a checkout page or process the order
});
