# wkhtmltopdf

This repository contains the static compiled binaries from the wkhtmltopdf project on arm64 and amd64 system.

Tested on Debian with amd64 and arm64(M1) CPU

## Installation

```
php composer.phar require eugenekkh/wkhtmltopdf "0.12.*"
```

***Debian users*** you need to do

```
apt-get install libxrender1 libxext6
```

## Usage

```
$path = \Eugenekkh\WKHTMLToPDF\WKHTMLToPDF::getPath();
```
