<?php

declare(strict_types=1);

namespace Singurix\Webpconverter;

class Convertor
{
    private var $srcPath;
    private var $destPath;

    public function setSrcPath(string $srcPath): Convertor
    {
        $this->srcPath = $srcPath;
        return $this;
    }

    public function setDestPath(string $destPath): Convertor
    {
        $this->destPath = $destPath;
        return $this;
    }

    public function convert(): void
    {
        switch (mime_content_type($this->srcPath)) {
            case 'image/jpeg':
                $this->convertJpg();
                break;
            case 'image/png':
                $this->convertPng();
                break;
        }
    }

    private function convertJpg(): void
    {
        $img = imageCreateFromJpeg($this->srcPath);
        imagewebp($img, $this->destPath);
    }

    private function convertPng(): void
    {
        $img = imagecreatefrompng($this->srcPath);
        imagewebp($img, $this->destPath);
    }
}