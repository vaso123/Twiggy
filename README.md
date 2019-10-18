# Twiggy

Roundcube plugin to use twig template engine instead roundcube template in your plugin.

## Install

Download the files into your `[path_to_roundcube]/plugins/twiggy/` directory.

From this directory run `composer install`.

Finally enable `twiggy` in `the config.inc.php`.

## Story

I need to develop a roundcube site and I was very unpleased with the roundcube template engine.

There are only a couple of possibilities, IDE always show warnings about `<roundcube:anytaghere />`, it can not be handle nested conditions, so you need to convert everything to objects. Great, you need to register your object, create the method what returns HTML code from PHP, what is one of the worst solution.

You can not declare a variable inside the template, and so on.

Finally, I've decided that I will use [twig](https://twig.symfony.com/). 

I hope this will help some of you.