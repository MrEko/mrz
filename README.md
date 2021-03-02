# mrz

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


Machine Readable Zone generator, inspired by: https://github.com/Arg0s1080/mrz


## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require mreko/mrz
```

## Usage

``` php
$mrz = new Mrz("id", "BRA", "9234", "870322", "M", "130724", "BRA", "Kondrat", "Evandro");
echo $mrz->TD1CodeGenerator();
```

## Testing

``` bash
$ composer test
```

## Credits

- [Evandro Kondrat][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mreko/mrz.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mreko/mrz/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mreko/mrz.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mreko/mrz.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mreko/mrz.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mreko/mrz
[link-travis]: https://travis-ci.org/mreko/mrz
[link-scrutinizer]: https://scrutinizer-ci.com/g/mreko/mrz/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mreko/mrz
[link-downloads]: https://packagist.org/packages/mreko/mrz
[link-author]: https://github.com/mreko
[link-contributors]: ../../contributors
