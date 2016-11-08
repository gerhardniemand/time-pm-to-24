# Time AM/PM to 24h

Please read the "Getting Started" section if you are unfamiliar with getting the project going.

### What it's about:

The aim of this repo is to show how to quickly write the AM/PM to 24h fun we had in a framework that lends itself more to extendability and to use more tools out there.

#### Where the code sits:

You can look at two files:
- play.php: This is the file you'll run using `php play.php` to see the code in action.
- src\Time.php: This is the class, exactly as we had before, that holds the code to actually do the conversion. Note that the namespace has changed, so we can refer to the class as `Fun\Time.php`.

#### Testing:

To test, just run: `php play.php` as you did before, and see the results.

### Getting Started / Installing

Before you start, please have a quick read about the following technologies:

- Git: 
    + [Setting up Git - according to Github.com](https://help.github.com/articles/set-up-git/) - *this is a quick guide to set up a Git repository on your localhost (you won't need to do this, but it helps understanding it when you start playing with these repositories)*
    + [Git Tutorial for Beginners 1 What is Git Introduction](https://www.youtube.com/watch?v=_vEPmy31XDE&index=1&list=PLEIPSRdn5KEoLbRZJuS4bLlldQ4wiA5Nf) - *This video series is for those of you who are like I am - I'd rather watch the video than read :)*
        * The cool thing about that video list is, it's a list - so there's much more down the line than just introduction. Have a bit of a browse around.
- Composer
    + Composer, in a few words, is a "package manager". Most of you are familiar with linux, so you do things like "yum" or "apt-get" to install software. Think of composer as being yum or apt-get, but for PHP. 
    + It's as easy telling it that your project will be using something specific, and runnnig an installation for it. You can then start to use those classes and libraries in your code.
    + Read more about it here: [Introduction to Composer](https://getcomposer.org/doc/01-basic-usage.md)

### Right, let's start coding:

You'll have to **Fork** this project (because you won't have access to submit y our code to my repository). Then you'll have to **Clone** it to your local machine. Then you'll have to install all the **dependencies with composer**, so that you can actually start work on it.

- Forking:
    + My repository is read-only to you, so you'll have to "copy" it. In github terms it's called **forking**.
    + Read up about forking [here](https://help.github.com/articles/fork-a-repo/)
- Cloning:
    + You can't work directly on github (well, you can, but you can't run your code there) - so you'll have to copy it down to your local machine. In github / git terms that's called **cloning**.
    + Read up about cloning [here](https://help.github.com/articles/cloning-a-repository/)
- Installing your dependencies:
    + Just run `php bin/composer install` inside your directory on localhost where you cloned it, and you should see a ton of stuff being installed.

### Is it working?
If you run this:

    php play.php

And you get the output:

    It worked! Try giving your own value! :)

It means it's working perfectly :)

Please chat to me or one of the devs if you need more help, and we'll give you a nudge in the right direction.



