# Price converter field for filament admin panel
![PriceConverterFieldHeader](https://raw.githubusercontent.com/34ML/Filament-Price-Converter-Field/main/resources/images/Filament-Price-Converter-Image.jpg)

## Installation

You can install the package via composer:

```bash
composer require 34ml/filament-price-coverter-field
```

## Usage
Add the field in your resource, view, create or edit pages inside the form function
```php
    use _34ML\FilamentPriceConverterField\FilamentPriceConverterField;
    
    FilamentPriceConverterField::make('price')->required(),
```
Also if you want to use it inside a table for the list page 
```php
    use _34ML\FilamentPriceConverterField\FilamentPriceConverterColumn;
    
    FilamentPriceConverterColumn::make('price')->label('Sale Price'),
```

## Credits

- [Mostafa Hassan](https://github.com/MostafaHassan1)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
