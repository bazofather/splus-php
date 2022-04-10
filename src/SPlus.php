<?php

namespace Bazofather\SPlus;

class SPlus
{

    /**
     * Bale bot current version
     *
     * @var string
     */
    private $version = '0.1.0';

    /**
     * Bale bot object
     *
     * @var object
     */
    private $botInstance;

    /**
     * Bale bot api token
     *
     * @var string
     */
    private $token;

    /**
     * Bale bot api url
     *
     * @var string
     */
    private $base_api_url = 'https://hi.splus.ir/developer/';

    /**
     * Bale bot file api url
     * for download - upload files
     *
     * @var string
     */
    private $base_file_url  = 'https://hi.splus.ir/developer/file/';

    private $actions = [
        'sendMessage',
        'editMessageText',
        'deleteMessage',
        'getupdates',
        'setWebhook',
        'deleteWebhook',
        'getme',
        'SendPhoto',
        'Sendaudio',
        'Senddocument',
        'Sendvideo',
        'Sendvoice',
        'sendLocation',
        'sendContact',
        'getfile',
        'getchat',
        'getChatAdministrators',
        'getChatMembersCount',
        'getChatMember',
        'sendInvoice',
        'getChatMembersCount',
        'getChatMembersCount',
        'getChatMembersCount',
    ];

    public function __construct()
    {
    }

    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }

    public function token(): string
    {
        return $this->token;
    }

    public function sendMessage()
    {
        $url = $this->url('sendMessage');
    }

    public function url($action): string
    {
        $acts = $this->validateAction($action);
        return "$this->base_api_url/bot$this->token/$acts";
    }

    public function validateAction(string $action): bool
    {
        return in_array($action, $this->actions);
    }
}
