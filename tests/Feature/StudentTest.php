<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_contains_empty_table(): void
    {
        $response = $this->get('/students');
        $response->assertStatus(200);
        // $response->assertSee('No products found');
        $response->assertSee(value: 'Add new student');
    }

    public function test_homepage_contains_non_empty_table(): void
    {
        $student = Student::create([
            'name' => "Student 1",
            'address' => "Some address",
            'mobile' => "123123123"
        ]);

        $response = $this->get('/students');
        $response->assertStatus(200);
        $response->assertSee('Student 1');
        // $response->assertDontSee('No products found');
        // $response->assertSee(value: 'New product');

        $response->assertViewHas('all_students', function($collection) use($student) {
            return $collection->contains($student);
        });
    }

}
