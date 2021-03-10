# Laravel form builder Tailwind2


This package extends the [Laravel form builder](https://github.com/kristijanhusak/laravel-form-builder) with tailwind 2 templates.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

[Laravel form builder](https://github.com/kristijanhusak/laravel-form-builder) must be installed.

Via Composer

```bash
composer require stfr/laravel-form-builder-tailwind2
```

Publish config & templates (Will overwrite the Laravel form builder's original config and views)

```bash
php artisan vendor:publish --tag=laravel-form-builder-tailwind2
```

Or publish horizontal form

```bash
php artisan vendor:publish --tag=laravel-form-builder-tailwind2-horizontal
```

> If it doesn't work, you can add `--force` attribute. BUT, the original Laravel form builder's config and views in your repository CAN NOT be retrieved. Please think twice.

[ico-version]: https://img.shields.io/packagist/v/stfr/laravel-form-builder-tailwind2.svg?style=flat
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat
[ico-downloads]: https://img.shields.io/packagist/dt/stfr/laravel-form-builder-tailwind2.svg?style=flat

[link-packagist]: https://packagist.org/packages/stfr/laravel-form-builder-tailwind2
[link-downloads]: https://packagist.org/packages/stfr/laravel-form-builder-tailwind2
