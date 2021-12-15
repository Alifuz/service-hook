<?php


namespace Alifshop\Hooks\Http;

use Alifshop\Hooks\HookData;
use Illuminate\Support\Facades\Http;

class ServiceHook
{
    private $data;

    public function __construct(HookData $data)
    {
        $this->data = $data;
    }

    public function store()
    {
        $response = self::http()->post('hooks', (array)$this->data)->throw();
        return $response->json();
    }

    protected static function http()
    {
        return Http::baseUrl(config('hook.domain') . '/')
            ->withHeaders([
                'Accept' => 'application/json',
                'Access-Token' => config('hook.access_token'),
                'Content-Type' => 'application/json'
            ])->acceptJson();
    }
}
