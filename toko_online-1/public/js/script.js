document.addEventListener('DOMContentLoaded', function() {
    // Example function to handle form submissions
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            // Perform form validation and submission logic here
            console.log('Form submitted!');
        });
    }

    // Example function to fetch and display products
    function fetchProducts() {
        fetch('/api/products') // Adjust the API endpoint as necessary
            .then(response => response.json())
            .then(data => {
                const productList = document.getElementById('product-list');
                productList.innerHTML = '';
                data.forEach(product => {
                    const item = document.createElement('li');
                    item.textContent = product.name; // Adjust based on your product structure
                    productList.appendChild(item);
                });
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    // Call fetchProducts on page load
    fetchProducts();
});