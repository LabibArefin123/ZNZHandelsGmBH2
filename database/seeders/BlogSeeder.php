<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Building Reliable Textile Supply Chains Across Borders',
                'category' => 'Global Sourcing',
                'excerpt' => 'A strong textile supply chain brings together trusted partners, careful planning and consistent communication across every market.',
                'content' => 'International textile sourcing is built on more than finding the right product. It requires dependable partnerships, clear communication, careful planning and a strong understanding of different production markets.',
                'image' => 'images/blog_page/blog-1.jpg',
                'published_at' => '2025-01-16',
            ],
            [
                'title' => 'From Fabric Selection to Finished Collection',
                'category' => 'Textile Insights',
                'excerpt' => 'The journey from an initial fabric idea to a finished collection depends on thoughtful material selection and attention to detail.',
                'content' => 'Every successful collection starts with the right materials. Fabric quality, construction, appearance and performance all play an important role in creating products that meet expectations.',
                'image' => 'images/blog_page/blog-2.jpg',
                'published_at' => '2025-02-12',
            ],
            [
                'title' => 'Why Quality Control Matters in Modern Fashion',
                'category' => 'Quality',
                'excerpt' => 'Consistent quality is one of the foundations of a successful long-term relationship between brands, suppliers and customers.',
                'content' => 'Quality control needs to be considered throughout the production process. Careful inspections and reliable procedures help ensure that finished products meet agreed standards.',
                'image' => 'images/blog_page/blog-3.jpg',
                'published_at' => '2025-03-08',
            ],
            [
                'title' => 'Connecting European Markets with Global Production',
                'category' => 'International Trade',
                'excerpt' => 'International sourcing creates opportunities when market knowledge and production expertise come together in the right way.',
                'content' => 'Successful international trade depends on understanding both sides of the supply chain. Strong communication between European customers and production partners creates a smoother path from concept to delivery.',
                'image' => 'images/blog_page/blog-4.jpg',
                'published_at' => '2025-04-21',
            ],
            [
                'title' => 'The Importance of Trusted Production Partners',
                'category' => 'Partnerships',
                'excerpt' => 'Long-term supplier relationships create stability, improve communication and make it easier to develop consistent product quality.',
                'content' => 'Trusted production partners become an important part of a sourcing strategy. Long-term cooperation supports better communication, smoother development and more predictable production.',
                'image' => 'images/blog_page/blog-5.jpg',
                'published_at' => '2025-05-15',
            ],
            [
                'title' => 'Creating Fashion with a Focus on Responsible Sourcing',
                'category' => 'Sustainability',
                'excerpt' => 'Responsible sourcing is becoming an increasingly important part of how modern fashion businesses approach their supply chains.',
                'content' => 'Responsible sourcing begins with understanding production processes, materials and the partners involved. Transparency and thoughtful decision-making can help build stronger supply chains for the future.',
                'image' => 'images/blog_page/blog-6.jpg',
                'published_at' => '2025-06-19',
            ],
            [
                'title' => 'Bangladesh and Its Growing Role in Global Apparel',
                'category' => 'Industry',
                'excerpt' => 'Bangladesh continues to play an important role in the international apparel industry through its strong production capabilities and skilled workforce.',
                'content' => 'Bangladesh has become an important apparel production market for international customers. Its manufacturing expertise and established textile ecosystem create valuable sourcing opportunities.',
                'image' => 'images/blog_page/blog-7.jpg',
                'published_at' => '2025-07-10',
            ],
            [
                'title' => 'Turning Product Ideas into Commercial Collections',
                'category' => 'Product Development',
                'excerpt' => 'Successful product development combines creative direction with practical sourcing, technical knowledge and production planning.',
                'content' => 'Taking an idea from an initial concept to a commercial collection requires cooperation between designers, sourcing teams and production partners. Each stage contributes to the final result.',
                'image' => 'images/blog_page/blog-8.jpg',
                'published_at' => '2025-08-14',
            ],
            [
                'title' => 'Looking Ahead: The Future of International Textile Trade',
                'category' => 'Future of Fashion',
                'excerpt' => 'The future of textile trade will be shaped by stronger partnerships, smarter sourcing decisions and a continued focus on quality.',
                'content' => 'The international textile industry continues to evolve. Businesses that combine market awareness, reliable partnerships and consistent quality will be well positioned for the changing needs of global customers.',
                'image' => 'images/blog_page/blog-9.jpg',
                'published_at' => '2025-09-04',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create([
                'title' => $blog['title'],
                'slug' => Str::slug($blog['title']),
                'category' => $blog['category'],
                'excerpt' => $blog['excerpt'],
                'content' => $blog['content'],
                'image' => $blog['image'],
                'published_at' => $blog['published_at'],
                'status' => 'published',
            ]);
        }
    }
}
