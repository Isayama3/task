<?php

namespace App\Observers;

use App\Models\Country;
use App\Services\WebhookService;

class CountryObserver
{
    private $webhookService;

    public function __construct(WebhookService $webhookService)
    {
        $this->webhookService = $webhookService;
    }

    public function created(Country $country): void
    {
        $this->webhookService->call('create', [], $country->toArray());
    }

    public function updated(Country $country): void
    {
        $this->webhookService->call('update', $country->getOriginal(), $country->toArray());
    }
}
