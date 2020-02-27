# Code Test for Auto1

### To run the frontend

```
cd frontend/src/
open index.html
```

### To run the backend

```
cd backend/skeleton/
php -S localhost:8000 -t public
```

#### General description

The application is made for screens with a 1200x300 dimension onwards, it is not responsive because it is not specified in any of the points of the task.

The application is made with Vanilla Javascript, so you need to open the **index.html** file with your browser.

The php server runs at localhost:8000.
Has a single endpoint at :

```
localhost:8000/cookies/orders
```

and accepts GET and POST.

The database is built with SQLite3 and is inside the backend folder with the name **database.db**.

#### Version 2.0

1.  Make the website responsive
2.  It would be good to check all the html structure, I think I have a
    lot of div and maybe it can be done with less.
3.  Unit tests must be added to check all functions.
4.  Implement React/Vue with a store to save the status in this case
    instead of a database.

I hope you enjoy it! :D
