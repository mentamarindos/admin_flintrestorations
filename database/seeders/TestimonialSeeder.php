<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Brenda Collins',
                'feedback' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.",
                'stars' => 5,
                'image' => 'storage/testimonials/3UPHglaHHDRrOtQTyZ52x61n9ZDsR2ciHMHYblC0.jpg',
                'feedback_date' => '2005-04-17',
                'show' => true,
            ],
            [
                'name' => 'Zorita Ferguson',
                'feedback' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
                'stars' => 5,
                'image' => 'storage/testimonials/BzAiiw4cIPv2NFvWZ5dpcFdmZjMGxum2OzE1EwiB.jpg',
                'feedback_date' => '1984-08-24',
                'show' => true,
            ],
            [
                'name' => 'Axel Farrell',
                'feedback' => "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
                'stars' => 4,
                'image' => 'storage/testimonials/auUyQTTx7c5IJDOrDzuYFPyq9QEgKq4tQEzT6m0J.jpg',
                'feedback_date' => '2004-10-21',
                'show' => true,
            ],
            [
                'name' => 'Sandra Spears',
                'feedback' => "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                'stars' => 5,
                'image' => 'storage/testimonials/WfkhHQ7CZwbDLgYagaigAqg45ct4KdwlMY28Wkvw.jpg',
                'feedback_date' => '1992-10-16',
                'show' => true,
            ],
            [
                'name' => 'Buffy Burks',
                'feedback' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.",
                'stars' => 5,
                'image' => 'storage/testimonials/CpSaD3tePvOCUxbV6l75mgL2wUP7reWtkFgz2ri2.jpg',
                'feedback_date' => '1977-07-08',
                'show' => true,
            ],

        ];

        Testimonial::insert($testimonials);
    }
}
