# SVG for PHP

SVG library for PHP. _In progress..._

```php
$svg = new Svg;
$svg->version('1.1');
$svg->viewBox(0, 0, 50, 50);

$group = new Svg\Group;

$a = new Svg\Circle;
$a
    ->center(25, 25)
    ->radius(15)
    ->fill('yellow');

$b = new Svg\Circle;
$b
    ->center(20, 20)
    ->radius(2)
    ->fill('black');

$c = new Svg\Circle;
$c
    ->center(30, 20)
    ->radius(2)
    ->fill('black');

$d = new Svg\Path;
$d
    ->moveTo(15, 25)
    ->arcTo(20, 20, 0, 0, 1, 35, 25)
    ->fill('none')
    ->stroke('black')
    ->strokeWidth(2);

$group
    ->appendChild($a)
    ->appendChild($b)
    ->appendChild($c)
    ->appendChild($d);

$svg->appendChild($group);

$svg->toXMLString('UTF-8'); /* outputs:

<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <g>
        <circle cx="25" cy="25" r="15" fill="yellow"/>
        <circle cx="20" cy="20" r="2" fill="black"/>
        <circle cx="30" cy="20" r="2" fill="black"/>
        <path d="M15 25A20 20 0 0 1 35 25" fill="none" stroke="black" stroke-width="2"/>
    </g>
</svg>

*/
```