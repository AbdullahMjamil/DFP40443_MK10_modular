# Biskut Klasik Ordering System (Modular PHP Project)

This project is a simple PHP web application that allows customers to order traditional cookies (Biskut Klasik).  
The system allows users to select products, place an order, and generate an invoice.

## Features

- Product gallery display
- Cookie ordering form
- Automatic invoice generation
- Invoice printing
- Session-based order storage
- Modular PHP structure

## Modularization Changes

The original project had repeated HTML and data inside `index.php`.  
The project was refactored to make the structure more modular.

The following changes were made:

- Header separated into `includes/header.php`
- Navigation separated into `includes/nav.php`
- Footer separated into `includes/footer.php`
- Product data separated into `data/products.php`

This reduces code duplication and makes the project easier to maintain.

## Project Structure

DFP40443_MK10_modular

data/  
└── products.php  

includes/  
├── header.php  
├── nav.php  
└── footer.php  

gambar/  
├── kuih_semperit.png  
├── biskut_mazola.png  
├── buah_pinggang.jpg  
└── tart_nanas.png  

index.php  
README.md  

## Technologies Used

- PHP
- HTML
- CSS
- JavaScript
- Git & GitHub

## Author

Sabri bin Saep