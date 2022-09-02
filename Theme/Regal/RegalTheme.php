<?php


namespace Themes\Regal;


use ClientX\Theme\ThemeInterface;

class RegalTheme implements ThemeInterface
{


    const DEFINITIONS = __DIR__ . '/config.php';
    public function getName(): string
    {
        return "Regal";
    }

    public function getViewsPath(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '/Views';
    }


    public function getAssetsPath(): string
    {
        return '/Regal/assets';
    }

    public function getPluginsPath(): ?string
    {
        return '/Regal/vendors';
    }

    public function getTemplatesPath(): string
    {
        return __DIR__;
    }

    public function getComponentPath(): ?string
    {
        return null;
    }

    public function getContacts(): ?array
    {
        return [
            'discord' => 'clientxcms.com/discord',
            'email' => 'contact@clientxcms.com',
            'twitter' => "@ClientXCMS",
        ];
    }


    public function getVersion(): ?string
    {
        return "1.0";
    }

    public function getAuthor(): ?string
    {
        return "MartinDev";
    }
    /**
     * @inheritDoc
     */
    public function getScreenshots()
    {
        return [];
    }
}