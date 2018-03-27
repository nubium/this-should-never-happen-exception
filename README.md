# ThisShouldNeverHappenException

[![Build Status](https://travis-ci.org/nubium/this-should-never-happen-exception.svg?branch=master)](https://travis-ci.org/nubium/this-should-never-happen-exception)
[![Downloads this Month](https://img.shields.io/packagist/dm/nubium/this-should-never-happen-exception.svg)](https://packagist.org/packages/nubium/this-should-never-happen-exception)
[![Latest Stable Version](https://poser.pugx.org/nubium/this-should-never-happen-exception/v/stable)](https://github.com/nubium/this-should-never-happen-exception/releases)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/nubium/this-should-never-happen-exception/blob/master/LICENSE)

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
