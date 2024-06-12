
# Dawit- Contact Form Backend

## Project Overview

This project is the backend prototype for a new contact form feature to be integrated into Dawit Insurance Agency's existing web application. The backend is developed using Laravel and provides RESTful API endpoints to handle incoming contact form submissions. It also implements validation for the contact form fields, stores the submitted inquiries in a database, implements error handling for invalid requests and database operations, and ensures API security through basic authentication.

## Implemented Features

- **RESTful API Endpoint**: Handles incoming contact form submissions.
- **Validation**: Validates the contact form fields (e.g., name, email, message).
- **Database Storage**: Stores the submitted inquiries in a database.
- **Error Handling**: Implements error handling for invalid requests and database operations.
- **API Security**: Ensures API security through basic authentication.

## Project Setup Instructions

### Prerequisites

- PHP >= 7.3
- Composer
- MySQL

### Installation

1. **Clone the Repository**:
   
   git clone https://github.com/Njokimary/Contact-Inquiry.git
   
   cd Contact-Inquiry

## Install Dependencies:


composer install

## Set Up Environment Variables:

Rename the .env.example file to .env.

Update the API_USERNAME and API_PASSWORD variables with your desired credentials.

## Generate Application Key:



php artisan key:generate

## Database Setup:

Create a MySQL database for the project.

Update the .env file with your database credentials.

## Run Migrations:

php artisan migrate

## Start the Development Server:

php artisan serve

## API Endpoint
GET /contact: Returns a message indicating that the contact endpoint exists. Use POST method to submit inquiries.

POST /contact: Submits a contact inquiry.

## Running the Application Locally
You can run the Laravel backend locally by starting the development server using the php artisan serve command.

## Contributing

Contributions to enhance the contact form backend are welcome. If you'd like to contribute, please fork this repository, make your changes, and submit a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.