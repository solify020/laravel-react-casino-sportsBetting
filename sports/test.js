// Import the required modules
import Axios from "axios";

// The URL of the API endpoint (e.g., for getting odds)
const API_URL = 'https://api.b365api.com/v1/1xbet/odds'; // Replace with the actual endpoint

// Your API key or authentication token
const API_KEY = '94644-aVgFz4CwkgNN1R'; // Replace with your actual API key

// Function to get odds
async function getOdds() {
    try {
        // Make a GET request to the odds endpoint
        const response = await Axios.get(API_URL, {
            headers: {
                'Authorization': `Bearer ${API_KEY}`, // Include authorization if required
            },
            params: {
                // Optional parameters, e.g., sport, event, etc.
                // 'sport': 'football', // Uncomment and specify if needed
            }
        });
        
        // Log the odds data
        console.log('Odds Data:', response.data);
    } catch (error) {
        // Handle errors
        console.error('Error fetching odds:', error.response ? error.response.data : error.message);
    }
}

// Call the function to get odds
getOdds();