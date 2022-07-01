# Laravel Country

Several methods for searching timezones, continent by country code and subdivision code by subdivision name in IP2Location.

[![Packagist](https://img.shields.io/packagist/v/rovereto/country.svg?label=Packagist&style=flat-square)](https://packagist.org/packages/rovereto/country)
[![License](https://img.shields.io/packagist/l/rovereto/country.svg?label=License&style=flat-square)](https://github.com/ilyutkin/country/blob/master/LICENSE.md)
[![Packagist Downloads](https://img.shields.io/packagist/dt/rovereto/country?style=flat-square)](https://packagist.org/packages/rovereto/country)

## Installation

Install the package via composer:

   ```shell
   composer require rovereto/country
   ```

## Usage

1. Determining the time zone for the country and subdivision

It takes as parameters the code of the country and subdivision according to the ISO-3166 standard.

```php
use Rovereto\Country\Concerns\TimeZone;

class MyClass
{
    use TimeZone;
    ...
}

$myClass = new MyClass();
//find time zone for Trentino-Alto Adige, Italy
//return "Europe/Rome"
$myClass->getTimeZone("IT", "IT-32");
//or
$myClass->getTimeZone("IT");

```

If there are several time zones in the country, when passing only the country code, returns the capital time zone.

```php
use Rovereto\Country\Concerns\TimeZone;

class MyClass
{
    use TimeZone;
    ...
}

$myClass = new MyClass();
//find time zone for Canada
$myClass->getTimeZone("CA");
//return "America/Toronto"

```

2. Determining the continent by country code

It takes as parameters the code of the country according to the ISO-3166 standard.

```php
use Rovereto\Country\Concerns\Continent;

class MyClass
{
    use Continent;
    ...
}

$myClass = new MyClass();
//find continent for Italy
$myClass->getContinentByCountry("IT");
//return "Europe"

//find continent code for Italy
$myClass->getContinentCodeByCountry("IT");
//return "EU"

//find continent by continent code
$myClass->getContinentByCode("SA");
//return "South America"

```

But not all countries are on the same continent (part of the world). Russia is located in Europe and Asia. The second 
optional parameter with the subdivision code will allow you to define the continent for the Russian subdivision. 
Without a parameter, "EU" will be returned. Example:

```php
use Rovereto\Country\Concerns\Continent;

class MyClass
{
    use Continent;
    ...
}

$myClass = new MyClass();
//find continent for Russia
$myClass->getContinentCodeByCountry("RU");
//return "EU"

//find continent for Moscow, Russia
$myClass->getContinentByCountry("RU", "RU-MOW");
//return "Europe"

//find continent for Novosibirskaya oblast', Russia
$myClass->getContinentByCountry("RU", "RU-NVS");
//return "Asia"

//find continent code for Moscow, Russia
$myClass->getContinentCodeByCountry("RU", "RU-MOW");
//return "EU"

//find continent code for Novosibirskaya oblast', Russia
$myClass->getContinentCodeByCountry("RU", "RU-NVS");
//return "AS"

```

3. Map Ip2Location a subdivision name onto the code of the subdivision

Free IP geolocation database "IP2Location™ LITE" does not return ISO-3166 subdivision code.
The method getSubdivisionCode finds the code subdivision by country code and subdivision name in IP2Location.

```php
use Rovereto\Country\Concerns\Subdivision;

class MyClass
{
    use Subdivision;
    ...
}

$myClass = new MyClass();
//find subdivision code for Trentino-Alto Adige, Italy 
$myClass->getSubdivisionCode("IT", "Trentino-Alto Adige");
//return "IT-32"

```

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code
of conduct, and the process for submitting pull requests to us.

## Versioning

We use [Semantic Versioning](http://semver.org/) for versioning. For the versions
available, see the [tags on this repository](https://github.com/Ilyutkin/Country/tags).

## Changelog

Refer to the [Changelog](CHANGELOG.md) for a full history of the project.

## Support

The following support channels are available at your fingertips:

- [Help on Email](mailto:alexander@ilyutkin.ru)

## Author

- **Alexander Ilyutkin** [Ilyutkin](https://github.com/Ilyutkin)

See also the list of
[contributors](https://github.com/ilyutkin/country/contributors)
who participated in this project.

## License

This project is licensed under the [The MIT License (MIT)](LICENSE.md)
Massachusetts Institute of Technology License - see the [LICENSE.md](LICENSE.md) file for
details
