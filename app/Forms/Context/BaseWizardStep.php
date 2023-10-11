<?php

namespace App\Forms\Context;

use App\Forms\Contracts\HasWizardStep;
use Illuminate\Database\Eloquent\Model;

class BaseWizardStep
{
    public function wizardStep(
        HasWizardStep $hasWizardStep,
        Model $model,
        int | null $tokenId,
        int $integrationId,
        array | null $settings,
        int $step,
        string $type
    ) {
        return $hasWizardStep->wizardStep($model, $tokenId, $integrationId, $settings, $step, $type);
    }
}
