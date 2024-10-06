<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to and Employer' , function (){
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags' , function (){
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->not->toBeEmpty();
});
