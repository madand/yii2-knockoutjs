# knockout asset for Yii2
Provides the asset bundle for easy integration of [knockoutjs](http://knockoutjs.com/) into your Yii2 application.


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist "madand/yii2-knockoutjs:*"
```

or add

```
"madand/yii2-knockoutjs": "*"
```

to the `require` section of your `composer.json` file.

You may also specify the version of Knockout to install (e.g. 3.2), starting from 3.1:

```bash
# this will install the latest revision in 3.1 branch (e.g. 3.1.0)
composer require --prefer-dist "madand/yii2-knockoutjs:3.1"
```

## Usage

In the view file register the asset:

```php
\madand\knockoutjs\KnockoutAsset::register($this);
```


## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
