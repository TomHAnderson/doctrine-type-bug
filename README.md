## Steps to reproduce
1. Clone the repository
2. Run `composer install` and `vendor/bin/sail up`
3. Create a new database called `second_database`
4. Run `php artisan migrate:fresh --database=mysql --path=database/migrations/ --env=testing` and `php artisan migrate:fresh --database=secondConnection --path=database/migrations/second/ --env=testing`
5. Run tests with `php artisan test`
6. See an error message like `SQLSTATE[08004] [1040] Too many connections`
7. Check out `fixed` branch
8. Run tests again, and see OK message.

Failing screenshot:

![image](https://user-images.githubusercontent.com/1574232/148552400-3d0fe303-fd1c-4f52-a683-28937526d715.png)
