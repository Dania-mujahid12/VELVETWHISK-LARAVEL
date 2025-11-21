<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cake;

class CakeSeeder extends Seeder
{
    public function run()
    {
        $cakes = [
            // Birthday
            ['name' => 'Birthday Cake', 'price' => 3000, 'category' => 'birthday', 'image' => '/images/birth2.jpg', 'description' => 'Celebrate every milestone with fresh, flavorful cakes.'],
            ['name' => 'Rainbow Theme Birthday', 'price' => 2800, 'category' => 'birthday', 'image' => '/images/birth1.jpg', 'description' => 'A rich, decadent chocolate cake.'],
            ['name' => 'Vanilla Sprinkle Blast', 'price' => 2500, 'category' => 'birthday', 'image' => '/images/birth3.jpg', 'description' => 'A fun and festive vanilla cake loaded with colorful sprinkles.'],
            ['name' => 'Pink Delight', 'price' => 3200, 'category' => 'birthday', 'image' => '/images/birth4.jpg', 'description' => 'Our signature red velvet cake with cream cheese frosting.'],
            ['name' => 'Unicorn Fantasy', 'price' => 4000, 'category' => 'birthday', 'image' => '/images/birth5.jpg', 'description' => 'A magical unicorn-themed cake with pastel swirls.'],
            ['name' => 'Barbie Theme', 'price' => 3800, 'category' => 'birthday', 'image' => '/images/birth6.jpg', 'description' => 'A custom cake featuring your favorite barbie.'],

            // Wedding
            ['name' => 'Wedding Cake', 'price' => 4500, 'category' => 'wedding', 'image' => '/images/bridal.jpg', 'description' => 'A beautiful symbol of love and new beginnings.'],
            ['name' => 'Grand Tiered Wedding', 'price' => 3500, 'category' => 'wedding', 'image' => '/images/wed1.jpg', 'description' => 'A breathtaking four-tiered masterpiece.'],
            ['name' => 'Rustic Wedding', 'price' => 5000, 'category' => 'wedding', 'image' => '/images/wed2.jpg', 'description' => 'A trendy cake with minimal frosting and fresh berries.'],
            ['name' => 'Elegant Floral', 'price' => 4000, 'category' => 'wedding', 'image' => '/images/wed3.jpg', 'description' => 'A classic white wedding cake featuring delicate sugar flowers.'],
            ['name' => 'Modern Geometric', 'price' => 7000, 'category' => 'wedding', 'image' => '/images/wed44.jpg', 'description' => 'A chic, contemporary cake with sharp edges.'],
            ['name' => 'Vintage Lace', 'price' => 3000, 'category' => 'wedding', 'image' => '/images/wed5.jpg', 'description' => 'A romantic cake design inspired by vintage lace.'],

            // Bridal Shower
            ['name' => 'Bridal Shower Cake', 'price' => 5600, 'category' => 'bridal shower', 'image' => '/images/bride.jpg', 'description' => 'Soft, romantic, and delicately styled for the bride-to-be.'],
            ['name' => 'Blush & Gold', 'price' => 4800, 'category' => 'bridal shower', 'image' => '/images/bri1.jpg', 'description' => 'An elegant cake in blush pink featuring gold drip.'],
            ['name' => 'Bride Themed', 'price' => 4500, 'category' => 'bridal shower', 'image' => '/images/bri2.jpg', 'description' => 'A whimsical cake designed to look like a stack of teacups.'],
            ['name' => 'She Said Yes!', 'price' => 4200, 'category' => 'bridal shower', 'image' => '/images/bri3.jpg', 'description' => 'Celebrate the big YES with this beautiful cake.'],
            ['name' => 'Floral Wreath', 'price' => 5000, 'category' => 'bridal shower', 'image' => '/images/bri4.jpg', 'description' => 'A simple, elegant cake encircled by a wreath of flowers.'],
            ['name' => 'Lingerie-Themed', 'price' => 4600, 'category' => 'bridal shower', 'image' => '/images/bri5.jpg', 'description' => 'A fun and cheeky cake for a bachelorette party.'],

            // Party
            ['name' => 'Party Cake', 'price' => 1800, 'category' => 'party', 'image' => '/images/party.jpg', 'description' => 'Vibrant, colorful, and full of life perfect for any occasion.'],
            ['name' => 'Confetti Pop', 'price' => 2200, 'category' => 'party', 'image' => '/images/part1.jpg', 'description' => 'A party in a cake! Vanilla buttercream covered in confetti.'],
            ['name' => 'Cookies & Cream', 'price' => 2900, 'category' => 'party', 'image' => '/images/part2.jpg', 'description' => 'Layers of chocolate cake and cookies & cream frosting.'],
            ['name' => 'Tropical Luau', 'price' => 3400, 'category' => 'party', 'image' => '/images/part3.jpg', 'description' => 'A taste of the tropics with coconut and pineapple flavors.'],
            ['name' => 'Casino Night', 'price' => 3700, 'category' => 'party', 'image' => '/images/part6.jpg', 'description' => 'Perfect for a casino-themed party.'],
            ['name' => 'Midnight Fudge', 'price' => 3000, 'category' => 'party', 'image' => '/images/part5.jpg', 'description' => 'For the ultimate chocolate lover. Dark, moist fudge cake.'],

            // Graduation
            ['name' => 'Graduation Cake', 'price' => 3500, 'category' => 'graduation', 'image' => '/images/grad6.jpg', 'description' => 'Celebrate achievements and new beginnings with pride.'],
            ['name' => 'Cap & Diploma', 'price' => 3800, 'category' => 'graduation', 'image' => '/images/grad1.jpg', 'description' => 'The classic graduation cake topped with a cap.'],
            ['name' => 'School Colors', 'price' => 4000, 'category' => 'graduation', 'image' => '/images/grad2.jpg', 'description' => 'Show your school spirit! Customized with your colors.'],
            ['name' => 'Future is Bright', 'price' => 3600, 'category' => 'graduation', 'image' => '/images/grad3.jpg', 'description' => 'An inspiring cake decorated with stars and lightbulbs.'],
            ['name' => 'Book Stack', 'price' => 4500, 'category' => 'graduation', 'image' => '/images/grad4.jpg', 'description' => 'A creatively designed cake that looks like textbooks.'],
            ['name' => 'Class of 2025', 'price' => 3300, 'category' => 'graduation', 'image' => '/images/grad5.jpg', 'description' => 'A sleek and simple cake announcing the graduating year.'],

            // Gender Reveal
            ['name' => 'Gender Reveal Cake', 'price' => 3000, 'category' => 'gender reveal', 'image' => '/images/BS6.jpg', 'description' => 'Filled with excitement, adding joy to your special moment.'],
            ['name' => 'Pink or Blue?', 'price' => 3200, 'category' => 'gender reveal', 'image' => '/images/BS3.jpg', 'description' => 'A beautiful white cake hiding the secret color inside.'],
            ['name' => 'Twinkle Twinkle', 'price' => 3500, 'category' => 'gender reveal', 'image' => '/images/BS2.jpg', 'description' => 'A lovely theme cake with gold stars and a moon.'],
            ['name' => 'He or She Drip', 'price' => 3700, 'category' => 'gender reveal', 'image' => '/images/BS5.jpg', 'description' => 'A modern cake with pink and blue drips.'],
            ['name' => 'Baby Shoes', 'price' => 4000, 'category' => 'gender reveal', 'image' => '/images/BS4.jpg', 'description' => 'Adorable cake topped with tiny handcrafted baby shoes.'],
            ['name' => 'Question Mark', 'price' => 3000, 'category' => 'gender reveal', 'image' => '/images/BS1.jpg', 'description' => 'A fun cake covered in colorful question marks.'],
        ];

        foreach ($cakes as $cake) {
            Cake::create($cake);
        }
    }
}