<?php

class ExtensionDetector
{
    public const PNG_FAMILY = ['PNG', 'png'];
    public const JPEG_FAMILY = ['jpeg', 'jpg', 'JPG'];

    public function getExtension(string $extension): string
    {
        if (in_array($extension, self::JPEG_FAMILY, true)) {
            return 'jpeg';
        }

        if (in_array($extension, self::PNG_FAMILY, true)) {
            return 'png';
        }

        return $extension;
    }

    public function isValidType(string $extension): bool
    {
        $validExtensions = array_merge(self::JPEG_FAMILY, self::PNG_FAMILY);
        return in_array($extension, $validExtensions, true);
    }
}
