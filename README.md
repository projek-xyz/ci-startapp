# Codeigniter 3.x Application Starter Kit

[![Build Status](https://magnum.travis-ci.com/feryardiant/ci-skeleton.svg?token=WqjEd4zrvPgAhQsuHzmE&style=flat-square)](https://magnum.travis-ci.com/feryardiant/ci-skeleton)
[![Gittip Donate](http://img.shields.io/gratipay/feryardiant.svg?style=flat-square)](https://www.gratipay.com/feryardiant/ "Donate using Gittip")
[![PayPal Donate](https://img.shields.io/badge/paypal-donate-orange.svg?style=flat-square)](http://j.mp/1Qp9MUT "Donate using Paypal")

CodeIgniter-based Project Starter Kit

**NOTE**: This project is only used for my personal needs, but feel free to use it as yours.

## Key Features

1. **Testable** provided by [Fernando Piancastelli](http://github.com/fmalk/codeigniter-phpunit)
1. **HMVC** provided by [Jens Segers](https://github.com/jenssegers/codeigniter-hmvc-modules)
1. **Better CLI Interaction**
1. Soon..

## Prerequisites

- PHP 5.5.x or newer.
- HTTP Server, e.g. NginX or Apache either.
- MySQL Server 5.x or newer for main database.
- Redis Server for cache database.

## Installation

I've make this project available to install via [Composer](https://getcomposer.org/) with following command:

```bash
$ composer create-project -s dev projek-xyz/ci-startapp my-app
```

now enter `my-app` directory you just create then copy and rename `env.txt` file to `.env` under **app** directory.

```bash
$ cp app/env.txt app/.env
```

then edit contents of `app/.env` file as you wish. When everything is done, let's start the server.

```bash
$ php -S 0.0.0.0:8888 -t public public/index.php
```

Now, you should open [http://localhost:8888](http://localhost:8888) in your favorite web browser.

**NOTE**: Make sure your Redis server already running.

## Directory and File Structures

* [**app**](app): Previously it is `application` directory defined with `APPPATH` constant. Inside it still remain the same as default CI APPPATH but without some _unused_ directories, which are **cache**, **hooks** and **third_party**.
* [**asset**](asset): Containts source of static assets (sass, js and images).
* [**asset/data**](asset/data): Containts migration files.
* [**public**](public): This is the webroot of your application.
* [**tests**](tests): Containts all tests units for your application.
* [**creasi**](creasi): This is the command line interface for your application. You could use it to `install`, `migrate` database and so on.

## Testing

Currently this project only use PHPUnit as testing framework, another framework like PHPSpec, Behat etc will be implemented soon. The PHPUnit configuration is located inside [tests](tests) directory, so you could run the tests with following command.

```bash
$ phpunit -c tests/phpunit.xml
```

**NOTE**: I only provide dummy tests, so you could create and use your own :grin:

## Credits

1. [CodeIgniter](http://codeigniter.com) and their contributors

## Lisence

MIT © [Fery Wardiyanto](http://feryardiant.me). Please see [License File](LICENSE.md) for more information.
