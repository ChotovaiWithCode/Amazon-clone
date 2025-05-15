const priceRange = document.getElementById('priceRange');
const priceValue = document.getElementById('priceValue');
const products = document.querySelectorAll('.product');

// Update the displayed price range value
priceRange.addEventListener('input', () => {
  const maxPrice = parseFloat(priceRange.value);
  priceValue.textContent = `${maxPrice}`;
  filterProducts(maxPrice);
});

// Function to filter products based on the price range
function filterProducts(maxPrice) {
  products.forEach(product => {
    const price = parseFloat(product.getAttribute('price'));
   
    if (price <= maxPrice) {
      product.classList.remove('hidden');
    } else {
      product.classList.add('hidden');
    }
  });
}

// Initialize the filter to show all products within the default price range
filterProducts(priceRange.value);