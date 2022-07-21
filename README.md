
<h1 align="center">BitBag Academy Project</h1>

<p align="center">This is project made in Sylius for BitBag Academy</p>

About
-----

Project containes additional functionalities such as:

* Supplier entity which can be chosen during creating or editing a product
* Color entity which can be chosen during creating or editing a product
* Supplier has trust state field. If Supplier was marked as trusted, they get email notification
* Weight-based Shipping Calculator which sets price of shipping according to weight of order
* Time-based channel 'Night' automatically is being set after 12pm and is activated until 6am
* Supplier and Color tabs in admin menu to add supplier/color
* After adding color to a product, the color is visible on store page in product details near size field

Installation: 

Open your terminal and change to choosen directory

```bash
$ git clone https://github.com/gabriela-lubkowska/BitBagAcademy.git
$ cd BitBagAcademy
$ composer install
$ yarn install
$ yarn build
$ yarn install
```
Next open your .env file in project directory and set your database url for example:

```bash
DATABASE_URL=mysql://root:root@127.0.0.1/example_db
```
Go back to your terminal

```bash
$ bin/console doctrine:database:create
$ bin/console sylius:fixtures:load
$ bin/console doctrine:schema:update --force
$ symfony serve -d
```
Now open [localhost](https://localhost:8000)

Authors
-------

Made by Gabriela Łubkowska for BitBag Academy 
