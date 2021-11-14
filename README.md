## About Game
This trivia game has 20 questions about numbers and each of them has 4 answers.<br>
Only one answer is correct and game ends in case of a wrong answer.<br>
When game ends you can start over with different questions.<br>
User must register and login to start game.<br>

## How To Run Project
Open project and from terminal run `composer install` and after that run `npm install`.<br>
Connect database by editing `.env.example` file and rename it to `.env`.<br>
Then from terminal run following commands: <br>
1.`php artisan key:generate`<br>
2.`php artisan migrate`<br>
3.`php artisan serve`

Finally, in browser open http://127.0.0.1:8000/ .<br> 
There can be other port if :8000 port is already in use. 




