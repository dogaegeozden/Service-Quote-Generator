# Application Overview

This is a web application that provides information about a fictional company's services and allows users to request a free quote for their services.

## Features:

- Displays server information
- Lists services (Web Development, Graphic Design, Technical Support) with descriptions and features
- Allows users to request a free quote for each service
- Displays a quote package with details and pricing for each service

## Technologies Used

- HTML
- CSS
- PHP
- NGINX

## How to Use?

1) Update and upgrade your linux server/machine.

	   sudo apt updage && sudo apt upgrade

2) Install dependencies.

	   sudo apt install nginx php-fpm

3) Create a site.

	   sudo nano /etc/nginx/sites-available/service-quote-generator

```
server {
    listen 2000;
    root /home/usernamehere/Desktop/PHP/Exercises/service_quote_generator;
    index index.php index.html;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $request_filename;
        include fastcgi_params;
    }
}
```

4) Enable the site.

	   ln -s /etc/nginx/sites-available/service-quote-generator /etc/nginx/sites-enabled

5) Test nginx conf.

	   sudo nginx -t

6) Start, reload and restart nginx

	   sudo systemctl start nginx && sudo systemctl reload nginx && sudo systemctl restart nginx

### Notes

1) This application is for demonstration purposes only and should not be used for production without further development and testing.
2) This app is developed for nginx version: nginx/1.22.1 and php-fpm8.2