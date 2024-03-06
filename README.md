# Random NASA Image
This code demonstrates a simple PHP page that displays a random image from the NASA Astronomy Picture of the Day (APOD) archive using the NASA API. The website is styled using the Tailwind CSS framework.

## Features
Fetches a random image from the NASA APOD archive using the NASA API
Displays the image along with its title and explanation
Responsive design using Tailwind CSS utility classes
Error handling for failed API requests
Prerequisites
To run this code, you need the following:

PHP installed on your web server
NASA API key (sign up at https://api.nasa.gov/)
Installation
Clone the repository or download the code files.
Replace 'YOUR_NASA_API_KEY' in the code with your actual NASA API key.
Save the file with a .php extension.
Upload the file to your PHP-enabled web server.
Usage
Open the PHP file in a web browser.
The website will display a random image from the NASA APOD archive along with its title and explanation.
Refresh the page to fetch and display a new random image.
Code Structure
The code consists of the following main parts:

HTML structure: Defines the basic structure of the web page using HTML tags.
Tailwind CSS: The code includes a link to the Tailwind CSS CDN for styling the web page.
PHP code: Fetches a random image from the NASA APOD archive using the NASA API.
The NASA API key is stored in the $apiKey variable.
The API URL is constructed by appending the API key and setting the count parameter to 1.
cURL is used to send a GET request to the API URL and retrieve the response.
The JSON response is decoded into an associative array using json_decode().
If the API response contains valid data, the image URL, title, and explanation are extracted and displayed on the web page.
If the API request fails or the response doesn't contain the expected data, an error message is displayed.
Styling
The code uses Tailwind CSS utility classes for styling the web page. The main styles applied are:

## Credits
NASA API: https://api.nasa.gov/
Tailwind CSS: https://tailwindcss.com/
