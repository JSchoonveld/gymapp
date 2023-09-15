# Project setup instructions

- Clone the repo

## Backend
- composer install in the root folder
- cp .env.example .env
- php artisan key:generate
- create a database and edit .env file with your database credentials
- php artisan migrate --seed
- php artisan serve or use valet/herd

## Frontend
- cd to resources/js/frontend
- npm install
- ionic serve

## Debugging on Android with live reload
- Install JDK 17
- Find out what your device number is with `adb devices`
- Make sure it is authorized
- Build the app with `npm run build`
- Expose the api with Expose or Ngrok
- Set the APP_URL in .env to the external you get from the previous command
- ionic capacitor run android --target <deviceNR> --livereload --external
- Set the EXTERNAL_APP_URL in .env to the external you get from the previous command
