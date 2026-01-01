<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    public function test_job_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();

        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        // $employer = Employer::factory()->create();
        $job = Job::factory()->create();
        $job->tag('frontend');
        $this->assertCount(1, $job->tags);
    }
}

