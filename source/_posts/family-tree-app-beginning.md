---
extends: _layouts.post
section: content
title: The humble beginnings of the Family Tree app
date: 2019-04-20
description: I've been thinking about building this app for a while. About two years, to be exact. But it wasn't until recently that...
cover_image: /assets/images/tree.jpg
categories: [laravel]
---
I've been thinking about building this app for a while. About two years, to be exact. But it wasn't until recently that I started feeling _sort of_ ready actually to build it. I believe my Googling skills are good enough to get me through this now.

So, what is the Family Tree app? 

It is a web app that allows a user to create an account, log in, and build their own family's tree. They will be able to add more family members to the tree, add information about them, and even create a timeline depicting a person's journey through life. Users will be able to invite other family members to view or edit their tree, to export the tree or to share a link to it.

There are still so many things I need to consider, but this is a general idea, and this is where I will begin.

I will be using [Laravel](https://www.laravel.com), which, I think, is the perfect framework for this. Partly because it is a PHP framework, a language I am the most comfortable with, but partly because it is so developer friendly; the Laravel ecosystem and community are just awesome.

Today I run the `laravel new family-tree` command in my terminal, which was very exciting! If you are not familiar with this command, it creates a fresh Laravel installation in my chosen directory called `family-tree`. 

My local Laravel development environment is [Laravel Valet](https://laravel.com/docs/5.8/valet), which I cannot praise highly enough for its simplicity and functionality. It is lightweight, very fast, and once installed, it just works.

My top-level domain is set to `*.test` and because I called the project `family-tree`, my local URL will be `www.family-tree.test`. 

By the way, if I wanted to change the URL to be something else than the project/folder name, I could use the `valet link` command to give my project a different name. Running this command in the terminal (from inside the project's folder) `valet link my-fancy-app` will instruct Valet to create a symbolic link between the project folder and the new name, and it will result in the URL `www.my-fancy-app.test`. 

And if I wanted to change the top-level domain from `.test` to `.dev`, I could run `valet tld dev`, and Valet would start serving my projects at `*.dev`. Very easy!

But that's not what I want right now so I will leave my top-level domain at `.test`, I will unlink the `my-fancy-app` name by running `valet unlink`, and the local URL will be back to the original `www.family-tree.test`. 

Today's work was just a small step in this long journey I'm about to embark on. All I have is the welcome Laravel screen:

![laravel welcome screen](../../assets/images/laravel-welcome.png)

But Rome wasn't built in a day, and I had to start somewhere. If you want to follow me while I build this app, don't forget to check back here or connect with me on [Twitter](https://www.twitter.com/zk433). 
