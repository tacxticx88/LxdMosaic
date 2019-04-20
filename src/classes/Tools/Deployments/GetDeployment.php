<?php

namespace dhope0000\LXDClient\Tools\Deployments;

use dhope0000\LXDClient\Model\Deployments\CloudConfig\FetchCloudConfigs;

class GetDeployment
{
    public function __construct(FetchCloudConfigs $fetchCloudConfigs)
    {
        $this->fetchCloudConfigs = $fetchCloudConfigs;
    }

    public function get(int $deploymentId)
    {
        $output = [];
        $output["cloudConfigs"] = $this->fetchCloudConfigs->getAll($deploymentId);
        return $output;
    }
}
