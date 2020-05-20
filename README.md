## Installation
```
composer require rmaysak/fibonacci
```
```json
{
    "require": {
        "rmaysak/fibonacci": "~1.0.0"
    }
}
```

## Example
```php
use RM\Fibonacci;

$fibonacci = new Fibonacci();

$fibonacciNumber = $fibonacci->getNumber(10);
$fibonacciSeries = $fibonacci->getSeries(20);
$fibonacci->showSeries(20);
```

## Methods
#### getNumber(int $position)
Returns the number in Fibonacci sequence by position

#### getSeries(int $count)
Returns array with Fibonacci sequence by count

#### showSeries(int $count)
Shows Fibonacci sequence by count
