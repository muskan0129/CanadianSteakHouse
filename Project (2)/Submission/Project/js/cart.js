
// JavaScript code for the cart
const cartItems = [];
let cartTotal = 0;
let quantity = 10; // Initial quantity

function addToCart(itemName, itemPrice) {
    // Check if the quantity is greater than 0 before adding to cart
    if (quantity > 0) {
        cartItems.push({ name: itemName, price: itemPrice });
        cartTotal += itemPrice;
        quantity--; // Decrease quantity
        updateCart();
    } else {
        alert("You cannot add more items. Maximum quantity reached.");
    }
}

function removefromcart(itemName, itemPrice) {
    const index = cartItems.findIndex(item => item.name === itemName && item.price === itemPrice);
    if (index !== -1) {
        cartItems.splice(index, 1);
        cartTotal -= itemPrice;
        quantity++; // Increase quantity
        updateCart();
    }
}

function updateCart() {
    const cartCount = document.getElementById("cart-count");
    cartCount.innerText = cartItems.length; // Update cart count

    // Update quantity display
    const quantityDisplay = document.getElementById("quantity");
    quantityDisplay.innerText = quantity; // Update quantity display

}


function viewCart() {
    let totalPrice = 0;
    let cartDetails = "";

    // Calculate total price and build cart details string
    for (let i = 0; i < cartItems.length; i++) {
        totalPrice += cartItems[i].price;
        cartDetails += `${cartItems[i].name}: $${cartItems[i].price.toFixed(2)}\n`;
    }

    // Convert total price to dollars
    const totalPriceInDollars = totalPrice.toFixed(2);

    // Display total price and cart details in an alert
    alert("Total Price in Cart: $" + totalPriceInDollars + "\n\nItems in Cart:\n" + cartDetails);
}


