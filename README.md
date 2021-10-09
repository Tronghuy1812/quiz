### Setup

- Step1: copy .env.example -> .env
- Step2: docker-compose up --build -d quiz-web-dev mysql
- Step3: docker exec -it quiz-web-dev bash
- Step4: composer install
- Step5: php artisan key:generate
- Step6: php artisan migrate
