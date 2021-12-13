<?php
declare(strict_types=1);

namespace App\Service;

/**
 * Interface App
 * @package App\Service
 */
interface App
{
    /**
     * 应用商店地址
     */
    const APP_URL = "https://store.acged.cc";

    /**
     * @return array
     */
    public function getVersions(): array;

    /**
     * 升级
     */
    public function update(): void;

    /**
     *
     */
    public function upload(array $data): array;


    /**
     * @return array
     */
    public function ad(): array;

    /**
     *
     */
    public function install(): void;


    /**
     * @param string $type
     * @return array
     */
    public function captcha(string $type): array;

    /**
     * @param string $username
     * @param string $password
     * @param string $captcha
     * @param array $cookie
     * @return array
     */
    public function register(string $username, string $password, string $captcha, array $cookie): array;

    /**
     * @param string $username
     * @param string $password
     * @return array
     */
    public function login(string $username, string $password): array;

    /**
     * @param array $data
     * @return array
     */
    public function plugins(array $data): array;

    /**
     * @param int $type
     * @param int $pluginId
     * @param int $payType
     * @return array
     */
    public function purchase(int $type, int $pluginId, int $payType): array;

    /**
     * @param string $key
     * @param int $type
     * @param int $pluginId
     * @return void
     */
    public function installPlugin(string $key, int $type, int $pluginId): void;

    /**
     * @param string $key
     * @param int $type
     * @param int $pluginId
     */
    public function updatePlugin(string $key, int $type, int $pluginId): void;

    /**
     * @param string $key
     * @param int $type
     */
    public function uninstallPlugin(string $key, int $type): void;

    /**
     * @param array $data
     * @return array
     */
    public function developerPlugins(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    public function developerCreatePlugin(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    public function developerCreateKit(array $data): array;

    /**
     * 删除自己的插件
     * @param array $data
     * @return array
     */
    public function developerDeletePlugin(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    public function developerUpdatePlugin(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    public function developerPluginPriceSet(array $data): array;
}