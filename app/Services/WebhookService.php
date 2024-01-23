<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WebhookService
{
    /**
     * webhook that call the dynamic callback api to inform it with the updates
     *
     * @param string $update_type
     * @param array $old_date
     * @param array $new_date
     * @return void
     */
    public function call(string $update_type, array $old_date, array $new_date): void
    {
        $callback = Setting::first()->country_dynamic_callback_url;
        $response = Http::post($callback, [
            'update_type' => $update_type,
            'old_date' => $old_date,
            'new_date' => $new_date,
        ]);

        if ($response->successful()) {
            Log::info('Webhook handled successfully.');
        } else {
            Log::error('Webhook handling failed.');
        }
    }
}
