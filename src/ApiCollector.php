<?php

namespace SSB\Api;

use DebugBar\DataCollector\DataCollector;
use DebugBar\DataCollector\Renderable;

class ApiCollector extends DataCollector implements Renderable
{
    public function add()
    {
    }

    public function getName()
    {
        return 'api';
    }

    public function getWidgets()
    {
        return [
            'api' => [
                'map' => 'api',
                'default' => '[]',
                "icon" => "database",
                "widget" => "PhpDebugBar.Widgets.SQLQueriesWidget",
            ],
            'api:badge' => [
                'map' => 'api.nb_statements',
                'default' => 0,
            ],
        ];
    }

    public function collect()
    {
        $preparedData = [];
        $data = Client::$debugData;

        $totalDuration = 0;
        $apiUrl = config('shopshop-api.apiUrl');

        foreach ($data as $d) {
            $duration = $d['end'] - $d['start'];
            $totalDuration += $duration;

            $url = $apiUrl . '/' . $d['url'];

            $preparedData[] = [
                'sql' => $d['url'],
                'params' => (object)array_merge(
                    ['url' => "<a href='$url' style='border-bottom:1px solid'>Aufrufen</a>"],
                    $d['params']
                ),
                'duration' => $duration,
                'duration_str' => $this->getDataFormatter()->formatDuration($duration),
                'is_success' => true,
            ];
        }

        return [
            'nb_statements' => count($preparedData),
            'statements' => $preparedData,
            'accumulated_duration' => $totalDuration,
            'accumulated_duration_str' => $this->getDataFormatter()->formatDuration($totalDuration),
        ];
    }
}