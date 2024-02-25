![](https://user-images.githubusercontent.com/970858/63474771-d6734700-c469-11e9-83bb-9429da563909.png)

# PHP | Object-Oriented Programming Intro

## Introduction

Today we have learned about the basics of Object-Oriented Programming in PHP. We are going to practice all these concepts by creating the structure for an online store.

Ready? Let's start

## Requirements

- [Learn how to fork this repo](https://guides.github.com/activities/forking/)
- Clone this repo into your code/labs folder

## Introduction

You are tasked with creating a simple online store using object-oriented programming in PHP. The store should have the following features:

1. A list of products with their names, prices, and descriptions.
2. The ability to add a product to a shopping cart.
3. The ability to view the shopping cart with a list of the products that have been added to it, along with their prices and quantities.
4. The ability to remove a product from the shopping cart.
5. The ability to calculate the total price of the items in the shopping cart.
6. To complete this exercise, follow these steps:

## Iteration 1 - Create Product class

Create a Product class with the following properties:

- $name (string) - The name of the product.
- $price (float) - The price of the product.
- $description (string) - A brief description of the product.
The class should have the following methods:

- __construct($name, $price, $description) - Initializes the product with the given name, price, and description.
- getName() - Returns the name of the product.
- getPrice() - Returns the price of the product.
- getDescription() - Returns the description of the product.

## Iteration 2 - Create a ShoppingCart class

Create a ShoppingCart class with the following properties:

- $items (array) - An array of Product objects.

The class should have the following methods:

- __construct() - Initializes the shopping cart with an empty array of items and a total of zero.
- addItem($product) - Adds a product to the cart.
- removeItem($product) - Removes a product from the cart.
- getItems() - Returns an array of Product objects in the cart.


Add five products to the Cart and remove two to make sure everything works.

## Iteration 3 - Calculate the total price

Modify the **ShoppingCart** class to add a **total** property.

Modify **addItem()** and **removeItem()** so that whenever a product is added or remved from the shopping cart its price is added or removed to/from the total.

Add a **getTotal()** method to **ShoopingCart** that returns the total.

## Iteration 4 - Quantities

Modify the array **items** on **ShoppingCart** so that it stores both products and quantities. When adding a product to the the cart, if it already exists in **items** the quantity will increase.

## Iteration 5 - Sorting

Add a **sort()** method to ShoppinCart. When called, all products in items will be sorted alphabetically by name.


## BONUS 1

Add a **search($name)** method to ShoppingCart, that lists products and descriptions where their name matches totally or partially with `$name`.

## BONUS 2

Add a **save()** method to Product that stores the product information to a MySQL database.

## Submission

Upon completion, run the following commands:

```
$ git add .
$ git commit -m "done"
$ git push origin main
```

Then create a Pull Request!!

![happy_coding](https://user-images.githubusercontent.com/970858/63899010-c23fc480-c9ea-11e9-84a2-542907e42362.png)
