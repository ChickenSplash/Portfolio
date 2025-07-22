## Recommendation to run locally:

- Run Apache and MySQL using [XAMPP](https://www.apachefriends.org/download.html).
- Download and unzip this repo, set the Apache config file to run the server on the root of this repo.
- Create a new database and import [portfolio.sql](portfolio.sql) using [TablePlus](https://tableplus.com/).
- [includes/.env.example](includes/.env.example) is to be renamed to `.env`, the value of each line corresponds to the respective connection detail to the database or mailloader.
- Sign in/Register to [Mailtrap]([url](https://mailtrap.io/)), the credentials found in your account are to be inputted into the `.env` file.