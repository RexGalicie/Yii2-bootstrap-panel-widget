Yii2 Bootstrap Panel
===================
Yii2 Bootstrap Panel

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist amass/yii2-bootstrap-panel-widget "dev-master"
```

or add

```
"amass/yii2-bootstrap-panel-widget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :


```php
<?= \amass\panel\Panel::widget([
         'title' => true, // show header or false not showing
         'headerTitle' => 'title', // Title text can use tag
         'content' => '' // some content in body
         'footer' => false, // show footer or false not showing
         'footerTitle' => 'text', // Title for footer
         'type' => true, // get style for panel \amass\panel::TYPE_DEFAULT  default
]); ?>

Or can use begin end widget


<?= \amass\panel\Panel::begin([
         'title' => true, // show header or false not showing
         'headerTitle' => 'title', // Title text can use tag
         'content' => '' // some content in body
         'footer' => false, // show footer or false not showing
         'footerTitle' => 'text', // Title for footer
         'type' => true, // get style for panel \amass\panel::TYPE_DEFAULT  default
]); ?>

...
...
...


<?= \amass\panel\Panel::end(); ?>