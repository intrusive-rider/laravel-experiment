<?php

use App\Models\Company;
use App\Models\Job;
use App\Models\Region;

it('belongs to an company', function () {
    $company = Company::factory()->create();
    $job = Job::factory()->create([
        'company_id' => $company->id,
    ]);

    expect($job->Company->is($company))->toBeTrue();
});

it('belongs to a region', function () {
    $region = Region::factory()->create();
    $job = Job::factory()->create([
        'region_id' => $region->id,
    ]);

    expect($job->region->is($region))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
