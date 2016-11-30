Nette Slidee Example
====================

A simple example showing how to use a Nette Slidee. Little thing for making web sites in the oldschool style.

Many credits to David Grudl and Nette Foundation (https://doc.nette.org).

The points is, you are not creating any complex abstractions as many software guys nowdays like to do.
It is more simply, one webpage is one template.

But when you need, you can add whatever: components, servises, and all those timey wimey stuff by useing DI container.

Start:

    git clone https://github.com/tacoberu/nette-slidee-example.git app
    cd app
    mkdir -p var/log
    mkdir -p temp
    composer install
    mv app/config.local.neon-example app/config.local.neon
    php -S localhost:8001 -t document_root

Modify or add: app/pages/*.latte. Every page is actually page with templating system support and container.





