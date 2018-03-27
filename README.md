# ThisShouldNeverHappenException

There is something which should never happen in every application :)

## Usage

``` php
switch (3) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    default:
        throw new ThisShouldNeverHappenException('Unexpected input.');
}
```
