# Tailwhen

Inspired by Laravel Blade's @class directive. What if you could just use that in any PHP? With composer autoloading you can:

```php
<span class="<?= tailwhen([
    'bg-red-800', // always
    'text-white' => is_string('yes'), // condition is true, so style is applied
    'font-bold' => is_numeric('no') // condition is false, so style is not applied
])?>">some text</span>
```

Results in:

```html
<span class="bg-red-800 text-white">some text</span>
```

The `tailwhen()` function takes in an array of classes, optionally with conditionals. Classes without conditions like the `bg-red-800` are always outputted. Classes with a condition are only outputted if the condition evaluates to true.

## Setup

```bash
composer require corrivate/tailwhen
```

This installs the `tailwhen()` helper function and sets up autoload for it.

## Corrivate
(en.wiktionary.org)

Etymology

From Latin *corrivatus*, past participle of *corrivare* ("to corrivate").

### Verb

**corrivate** (*third-person singular simple present* **corrivates**, *present participle* **corrivating**, *simple past and past participle* **corrivated**)

(*obsolete*) To cause to flow together, as water drawn from several streams. 

