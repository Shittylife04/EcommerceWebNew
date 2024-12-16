function searchProducts() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let products = document.querySelectorAll(".product-item");
    
    products.forEach(function(product) {
        let productName = product.getAttribute("data-name").toLowerCase();
        
        if (productName.includes(input)) {
            product.style.display = "block"; 
        } else {
            product.style.display = "none"; 
        }
    });
}