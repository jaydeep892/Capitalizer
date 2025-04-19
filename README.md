# Capitalizer# 🔠 String Uppercase - Laravel Package

Convert any string to uppercase easily using this simple Laravel package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jacmac/string-uppercase.svg?style=flat-square)](https://packagist.org/packages/jacmac/string-uppercase)
[![Total Downloads](https://img.shields.io/packagist/dt/jacmac/string-uppercase.svg?style=flat-square)](https://packagist.org/packages/jacmac/string-uppercase)

---

## 🚀 Installation

You can install the package via Composer:

```bash
composer require jacmac/string-uppercase

## Usage

Use the facade to convert any string to uppercase:

```bash
use Jacmac\StringUppercase\Facades\Uppercase;

Uppercase::make('hello world'); // returns "HELLO WORLD"

If you're using Laravel's auto-discovery, you can even skip the 'use' statement:

```bash
Uppercase::make('laravel rules'); // returns "LARAVEL RULES"

