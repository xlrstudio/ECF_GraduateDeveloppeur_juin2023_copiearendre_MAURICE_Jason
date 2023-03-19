# Title :

Quai Antique - Restaurant - ECF

## Description :

Here is the application created via the Symfony.
This is the fictitious site of a new restaurant called the ''Quai Antique''

In this application we can see the description of the restaurant, its menus, book a table and register as a user


# For this project, you will mainly need
- Git
- Symfony version 6 software
- Composer
- IDE like PHP Storm


# Run Locally

Install XAMMP
https://www.apachefriends.org/fr/index.html

Create a repository on your local machine

```
cd C:\xampp\
mkdir apps
cd apps
```

Clone the project into your "apps" directory

```bash
  git clone https://github.com/xlrstudio/ECF_GraduateDeveloppeur_juin2023_copiearendre_MAURICE_Jason.git
```

### Serve your application with XAMPP
We will then configure Apache to access our website. For this we will open the "C:\xampp\apache\conf\extra\httpd-vhosts.conf" file with a text editor and add the following lines:

```
<VirtualHost *:80>
    ServerName symfony.localhost

    DocumentRoot "C:/xampp/apps/symfony/public"
    DirectoryIndex index.php

    <Directory "C:/xampp/apps/symfony/public">
        Require all granted

        FallbackResource /index.php
    </Directory>
</VirtualHost>
```

Run XAMMP :
- Launch Apache
- Launch SQL

Click on apache -> admin
You should see the apps on local server

Click on SQL -> admin
You should see the apps on local server with PhpMyAdmin


### database configuration / connect to the database

Creation of database an administrator for the back-office of the web application

If it is not already installed in our project, to install Doctrine and all the additional features, just run this command:
```
compose req orm
```
All that remains is to configure our database connection in the .env file at the root of our project by replacing the values ​​between {}:

```
DATABASE_URL="mysql://{db_user:db_password}@127.0.0.1:3306/{db_name}"
```
If the database has not already been created, Symfony can do it for us with a command.

```
php bin/console doctrine:database:create
```
If the command says that the password is not good and you are working with XAMPP with the default configuration of MySQL, the DATABASE_URL parameter should be:

```
DATABASE_URL="mysql://root@127.0.0.1:3306/{db_name}"
```
Replace {db_name} with the name of the database you want to create.

For update the database you can use
```
php bin/console make:migration 
php bin/console doctrine:migrations:migrate
```
or
```
Import SQL script on phpmyadmin
```
You can also write a SQL and create a backoffice use like this code below:
```
INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `tel`, `allergies`, `couverts`, `confidentialite`) VALUES
(33, 'admin@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$rtFnsGiOyUuUIhdM7Uf6ROdVZPXqAxZvYV0aTP1GYXIekBuXmcs8K', '', '', '', '', '', ''),
```

This use can acces to the backoffice of the website and manage "form", "User" and "message"



## Install Symfony

Installing & Setting up the Symfony Framework
https://symfony.com/doc/current/setup.html

Serveur Web local Symfony
https://symfony.com/doc/current/setup/symfony_server.html

## Install Php Storm
PhpStorm provides coding assistance and navigation facilities for developing applications with the Symfony framework.

https://www.jetbrains.com/help/phpstorm/symfony-support.html

# Setting up an Existing Symfony Project
In addition to creating new Symfony projects, you will also work on projects already created by other developers. In that case, you only need to get the project code and install the dependencies with Composer. Assuming your team uses Git, setup your project with the following commands:

```
cd projects/
git clone ...
```

```
cd my-project/
composer install
```

You'll probably also need to customize your .env file and do a few other project-specific tasks (e.g. creating a database). When working on a existing Symfony application for the first time, it may be useful to run this command which displays information about the project:

```
php bin/console about
```

More informations : https://symfony.com/doc/current/setup.html
# Deployment on Heroku

Install the Heroku CLI
Download and install the Heroku CLI.
https://devcenter.heroku.com/articles/heroku-cli

If you haven't already, log in to your Heroku account and follow the prompts to create a new SSH public key.

```
$ heroku login
```

Clone the repository
Use Git to clone studi's source code to your local machine.

```
$ heroku git:clone -a studi 
$ cd studi
```

Deploy your changes
Make some changes to the code you just cloned and deploy them to Heroku using Git.

```
$ git add .
$ git commit -am "make it better"
$ git push heroku master
```

You can now change your main deploy branch from "master" to "main" for both manual and automatic deploys, please follow the instructions here.

### A Heroku server

The machines use a distribution called Cedar, which is based on Ubuntu, and one can configure an application to use Cedar 14.04 or Cedar 16.04 (the latest Ubuntu LTS).

Applications are executed in Linux containers called **Dynos**.

There are three types of Dynos: `web`, `worker` and `one-off` and they are configured by a file named `Procfile`.

* The `web` dynos are run persistently and are configured by your `Procfile` and are the only ones to receive HTTP requests sent to your application.
* `Worker` dynos are scripts configured in your `Procfile` and are mostly used for background tasks, like Queues.
* `One-off` dynos are temporary dynos that you can create, for example by manually running command line scripts with `heroku run {script...}`. They are also used when deploying a release (this prevents a 10-minute deployment from being deducted from your free time...), but also by the `Heroku Scheduler` to orchestrate background tasks ( similar to `crontab`).

Whether your application is `web`, `worker` or otherwise, the execution will always be done in a Dyno.

### Customize our server

As a user, **we don't have access to the distribution**. So we cannot modify the packages of the machine.

On the other hand, to overcome this, Heroku uses a system of **buildpacks** and **add-ons** which, themselves, will be able to execute commands in the machine in order to install certain packages.

#### Buildpacks

Buildpacks include a set of scripts with several responsibilities:

* Detect the "type" of your application (Ruby, PHP, Javascript, etc.).
* Compile your application by running scripts (install dependencies, etc.).
* Update your Heroku configuration after installation, such as installing add-ons or changing the default script to run on a dyno.

For example, the **PHP** buildpack is automatically detected if a `composer.json` file is present at the root of your project.

It is also able to install PHP extensions if these are present in the `require` section of your `composer.json`, like `"require": { "ext-intl": "*" }` for example .

Buildpacks are essential for the basic configuration of an application. Unless you only run scripts in bash...

#### Addons

Add-ons are generally there to integrate external services into your project, such as databases, log reports, profiling or an email sending system.

Most add-ons are paid but offer a free option with limited services and performance.

They have several advantages:

* They are often able to automatically add environment variables to your configuration so that you can use it in your project.
* They make it possible to detach the application from its services (for example, by putting the database on an external server), which greatly facilitates maintenance and allows us to completely dispense with outsourcing on all these services.
* And as with other _cloud computing_ services (like [SensioCloud](https://sensio.cloud)), this combines very well with the latest Symfony best practices which recommend the use of environment variables.

In general, you will almost always need addons, if only for the database and the sending of emails, and the free offers are more than enough for simple projects that do not consume a lot of resources.

## Creating a Symfony 6 project with Flex

Come on, now that we know what the tools we're going to use are, let's use them!

First, we create the project somewhere on our machine:

```
$ composer create-project symfony/skeleton:"6.2.*"
```

The `symfony/skeleton` package contains only one thing: a `composer.json` file determining some dependencies to create a web project with Symfony, including Flex.

The main dependencies that allow us to facilitate all this are the following:

* `symfony/flex`: The Composer plugin we talked about at the beginning of this article.
* `symfony/lts`: A simple composer package to define which major version of Symfony we are going to use. This package simply sets version conflicts with the higher major version.
* `symfony/framework-bundle`: The main package that allows us to create a web project with Symfony.

The advantage is that this last package has a [Flex recipe](https://github.com/symfony/recipes/tree/master/symfony/framework-bundle/3.3) which will initialize a whole bunch of tools in our project:

* The default framework configuration in the `config/` folder.
* A front-controller in a `public/` folder.
* A preconfigured micro-kernel in `src/Kernel.php`.
* Environment variables and `.env` and `.env.dist` files to configure our project.
* A ready-to-use `.gitignore` file.
* Composer scripts to clear cache and install assets on every `composer install/update`

And since `symfony/console` is now a core dependency of `symfony/skeleton`, Flex will also follow the [recipe](https://github.com/symfony/recipes/tree/master/symfony/console /3.3) from this package and install a `bin/console` file as we love it in Symfony!

All these actions are defined in the different **recipes** of the packages in question, and the advantage is that thanks to Flex, if we delete a package, everything that was previously installed and configured by this recipe will be deleted ! No need to worry about manual deletions if you want to delete a package!

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file


## Authors

- [@JasonMaurice](https://git.heroku.com/studi.git)









# 🚀 Welcome to your new awesome project!

This project has been created using **webpack-cli**, you can now run

```
npm run build
```

or

```
yarn build
```

to bundle your application
