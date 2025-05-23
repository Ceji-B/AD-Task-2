document.addEventListener('DOMContentLoaded', () => {
    console.log("Le tumbler site loaded.");

    // Example array in JavaScript
    const colors = ['Red', 'Green', 'Blue', 'Yellow'];

    // Example dictionary (object) in JavaScript
    const productSpecs = {
        material: 'Stainless Steel',
        capacity: '500ml',
        weight: '350g'
    };

    // Function to display colors
    function displayColors(arr) {
        console.log("Available colors:");
        arr.forEach(color => console.log(color));
    }

    // Function to display product specs
    function displaySpecs(specs) {
        console.log("Product Specifications:");
        for (const key in specs) {
            if (specs.hasOwnProperty(key)) {
                console.log(`${key}: ${specs[key]}`);
            }
        }
    }

    // Call the functions
    displayColors(colors);
    displaySpecs(productSpecs);
});
