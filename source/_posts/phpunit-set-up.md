---
extends: _layouts.post
section: content
title: PHPUnit set up
date: 2019-05-12
description: This weekend I have been learning about PHPUnit to start using Test Driven Development (TDD) a bit more...
categories: [development]
---
This weekend I have been learning about PHPUnit to, _hopefully_, start using [Test Driven Development (TDD)](https://en.wikipedia.org/wiki/Test-driven_development) a bit more.

TDD is a programming practice where the developer first writes the tests, which will fail, and then writes the code to pass these tests. In all honesty, it has been difficult practice to adopt, because it turns everything I have been doing until now on its head.

What I usually do is write the code first, and then test and debug it - and I am not ashamed to admit that my testing involves a whole lot of `console.log()`s and `var_dump()`s. However, since I started to _really_ get to know Laravel, I do try to learn the best development practices as well. 

The goal of TDD is to write code that is cleaner, simpler and bug-free, so it makes sense to at least try to write code in this way, even if it isn't easy at first.

Laravel ships with PHPUnit, so I've been spending some time getting to know how it works. I decided to write this little cheat sheet that lists the steps required to install PHPUnit, set it up, ready to use.

<h3>PHPUnit Set Up</h3>

1. CD into my project folder
2. Install the PHPUnit package via [Composer](https://getcomposer.org/): `composer require --dev phpunit/phpunit`
3. Create folders for tests and for the source code: `mkdir tests && mkdir src` 
4. Add autoload section in my composer.json file: 
    ```
    "autoload" : {
        "psr-4" : {
            "" : "src"
        }
    }
```
5. Generate the autoload script by running `composer dump-autoload` in the terminal
6. Create the phpunit.xml file in the root directory of my project folder
7. To make life easier for me, create an alias for the phpunit command so that I don't need to write `./vendor/phpunit/phpunit/phpunit` every time I run a test: <br>
In the terminal, I run `alias phpunit="./vendor/phpunit/phpunit/phpunit"` <br>
Now, all I need to type is `phpunit` to run tests.
8. Configure the phpunit.xml file:
    ```
        <?xml version="1.0" encoding="UTF-8" ?>
        <phpunit colors="true" verbose="true" bootstrap="vendor/autoload.php">
            <testsuite name="Test Suite">
                <directory>tests</directory>
            </testsuite>
        </phpunit>
    ```
This is a very barebones configuration, but it is all I need for now.

And this is all there is to it. My PHPUnit is all set up, ready for me to write some tests. 

I do need to add that, except for the alias, there is no need to set anything up when using PHPUnit in a Laravel project. Everything is already done! 

Laravel does make development so much easier :slightly_smiling_face:.