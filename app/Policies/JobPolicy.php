<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    /**
     * Determine whether the user can modify the model.
     */
    public function modify(User $user, Job $job): bool
    {
        return $job->company?->user?->is($user) ?? false;
    }
}
