<?php

namespace Eugenekkh\WKHTMLToPDF;

class WKHTMLToPDF
{
    public const AMD64 = __DIR__ . '/bin/wkhtmltopdf-amd64';
    public const ARM64 = __DIR__ . '/bin/wkhtmltopdf-arm64';

    public static function getPath(): string
    {
        $architecture = php_uname('m');

        return match ($architecture) {
            'aarch64' => WKHTMLToPDF::ARM64,
            'x86_64' => WKHTMLToPDF::AMD64,
            default => throw new \RuntimeException("Unsupported architecture {$architecture}"),
        };
    }
}
