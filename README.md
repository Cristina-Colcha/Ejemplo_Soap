# SOAP PHP Service

This project demonstrates how to create and consume a SOAP web service using PHP. The server provides two methods: `sayHello` and `addNumbers`.

## Features

- SOAP web service implementation in PHP.
- Two methods:
  - `sayHello`: Returns a greeting message.
  - `addNumbers`: Returns the sum of two numbers.
- Simple testing with Postman or PHP client.

## Prerequisites

- PHP 8.1 or higher
- SOAP extension enabled in PHP (verify with `php -m | grep soap`).
- A web server or PHP built-in server (`php -S`).

## Setup Instructions

1. Clone the repository or download the project files.
    Clone this repository:

    https://github.com/Cristina-Colcha/Ejemplo_Soap.git

2. Navigate to the project directory:

3. Start the PHP built-in server:

   php -S localhost:8000

4. Ensure the `server.php` file is accessible at:

   http://localhost:8000/server.php


## Project Structure

soap_project/
|-- client.php       # SOAP client to consume the service
|-- server.php       # SOAP server providing the service

## How to Test

### Using the PHP Client

Run the `client.php` file:
    php client.php

    Expected output:
        Hello, John Doe!
        30

### Using Postman

1. Open Postman.
2. Create a new request with method **POST**.
3. Set the URL to:

   http://localhost:8000/server.php

4. Add the header:

   Content-Type: text/xml

5. Set the body to a SOAP request, for example:
   xml
   <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://localhost/soap">
      <soapenv:Header/>
      <soapenv:Body>
         <web:sayHello>
            <name>Maria</name>
         </web:sayHello>
      </soapenv:Body>
   </soapenv:Envelope>

6. Click **Send** and verify the response.

### Example Responses

#### `sayHello` Method
Request:
 xml
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://localhost/soap">
   <soapenv:Header/>
   <soapenv:Body>
      <web:sayHello>
         <name>Maria</name>
      </web:sayHello>
   </soapenv:Body>
</soapenv:Envelope>
 
Response:
 xml
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Body>
      <sayHelloResponse>
         <return>Hello, Maria!</return>
      </sayHelloResponse>
   </soapenv:Body>
</soapenv:Envelope>
 

#### `addNumbers` Method
Request:
 xml
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://localhost/soap">
   <soapenv:Header/>
   <soapenv:Body>
      <web:addNumbers>
         <a>10</a>
         <b>20</b>
      </web:addNumbers>
   </soapenv:Body>
</soapenv:Envelope>
 
Response:
 xml
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
   <soapenv:Body>
      <addNumbersResponse>
         <return>30</return>
      </addNumbersResponse>
   </soapenv:Body>
</soapenv:Envelope>
 

## Troubleshooting

- **Error: `Error Fetching http headers`**:
  - Ensure the server is running.
  - Verify the `uri` and `location` in the SOAP client configuration.

- **SOAP not enabled**:
  - Check if the SOAP extension is enabled using `php -m | grep soap`.
  - Enable it in the `php.ini` file if necessary.

## Autor
    Cristina Colcha
