// Get the form element
const form = document.querySelector('form');

// Listen for form submission
form.addEventListener('submit', function(event) {
  // Prevent the default form submission
  event.preventDefault();

  // Get the crop name from the input element
  const cropName = document.querySelector('#crop-name').value;

  // Call the API to get the market prices for the crop
  fetch(`https://api.example.com/marketprices?crop=${cropName}`)
    .then(response => response.json())
    .then(data => {
      // Display the market prices in the market-prices div
      const marketPrices = document.querySelector('#market-prices');
      marketPrices.innerHTML = `<p>The current market prices for ${cropName} are:</p><ul>`;
      data.prices.forEach(price => {
        marketPrices.innerHTML += `<li>${price}</li>`;
      });
      marketPrices.innerHTML += `</ul>`;
    })
    .catch(error => {
      console.error(error);
    });
});