# text-to-image-generator-
This repository hosts a lightweight, ready-to-use Text-to-Image Generator script that converts textual prompts into AI-generated images without requiring a database. The project is designed for quick deployment, making it ideal for developers, hobbyists, or anyone exploring AI-powered image generation. 

## API Key Requirement
This application requires a valid RapidAPI key to function properly.

1. **Get Your API Key:**
   - Please get an API key from: 

     https://rapidapi.com/devify/api/text-to-image-generator-api-ai-image

   - The application WILL NOT WORK without a valid API key

2. **Configure Your API Key:**
   - After purchasing your API key:
   - Navigate to: includes/config.php
   - Update the following line with your actual API key:
     ```php
     $rapidapi_key = "YOUR_NEW_API_KEY_HERE";
     ```
3. **Setup**
   - visit includes/config.php
   - update all details like Domain, Email, Country Name, Whatsapp Number


## Customizing Website Content
To modify the front-end content, titles, and SEO elements:
- Edit the file: seo.php
- This file contains the index page content


## Troubleshooting
If you encounter any issues:
1. Verify your API key is correctly entered in config.php
2. Ensure there are no extra spaces or characters in the API key
3. Check that your RapidAPI subscription is active
