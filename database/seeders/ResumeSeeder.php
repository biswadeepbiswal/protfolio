<?php

namespace Database\Seeders;

use App\Models\AboutSetting;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    public function run(): void
    {
        // Only seed if no data exists yet
        if (\App\Models\AboutSetting::count() > 0) {
            return;
        }

        AboutSetting::create([
            'name' => 'BISWADEEP BISWAL',
            'email' => 'Biswadeepb81@gmail.com',
            'phone' => '+91 8658839856',
            'location' => 'Bhubaneswar Odisha, India',
            'bio' => 'Results-driven MCA graduate and Software Development Intern with hands-on experience in Laravel, PHP, and Python. Proven ability to build scalable backend systems, manage databases with PostgreSQL, and integrate modern admin interfaces like Filament. Eager to leverage technical expertise to contribute to a high-performing engineering team.',
            'github_url' => 'https://github.com/BiswadeepBiswal',
            'linkedin_url' => '',
            'profile_path' => 'profile.jpg',
        ]);

        Education::create([
            'degree' => 'Master of Computer Applications (MCA)',
            'institution' => 'Maharaja Purna Chandra Autonomous College, University of Maharaja Shri Rama Chandra Bhanja Deo',
            'duration' => '2023–2024',
            'result' => 'Result: 71%',
            'sort_order' => 1,
        ]);

        Education::create([
            'degree' => 'Bachelor of Commerce (B.Com)',
            'institution' => 'Dayavihar Degree College, Utkal University',
            'duration' => '2018–2021',
            'result' => 'CGPA: 7.15',
            'sort_order' => 2,
        ]);

        Education::create([
            'degree' => '12th (Commerce)',
            'institution' => 'Dayavihar Junior College, Utkal University',
            'duration' => '2016–2018',
            'result' => 'Percentage: 53%',
            'sort_order' => 3,
        ]);

        Education::create([
            'degree' => '10th',
            'institution' => 'Odisha Special Army Police High School',
            'duration' => '2015–2016',
            'result' => 'Percentage: 52%',
            'sort_order' => 4,
        ]);

        Experience::create([
            'job_title' => 'Software Development Intern',
            'company' => 'Hyscaler, Bhubaneswar',
            'location' => 'Bhubaneswar',
            'duration' => '3 Months',
            'description' => 'Contributed to the development of a high-traffic Online Test Platform using Laravel. Built and optimized backend features following strict MVC architecture principles. Designed and implemented comprehensive User and Subject management modules with full CRUD functionality. Integrated Filament Admin Panel, reducing administrative task time through a streamlined UI. Collaborated on bug fixing and performance tuning to ensure 99% application stability.',
            'sort_order' => 1,
        ]);

        Project::create([
            'title' => 'Online Test Management System',
            'description' => 'Designed and implemented a Laravel-based backend following MVC best practices. Developed CRUD operations for managing subjects and users. Integrated Filament Admin Panel for a secure and user-friendly admin dashboard. Implemented authentication and authorization for role-based access control. Used Eloquent ORM for database interactions and optimized queries. Managed environment configurations using .env for secure deployment. Ensured clean code structure and maintainability using Laravel conventions.',
            'tech_stack' => ['Laravel', 'Filament', 'Eloquent ORM', 'MVC'],
            'sort_order' => 1,
        ]);

        Skill::create([
            'category' => 'Backend Technologies',
            'skills' => ['Laravel', 'PHP', 'Python'],
            'sort_order' => 1,
        ]);

        Skill::create([
            'category' => 'Admin & UI Tools',
            'skills' => ['Filament'],
            'sort_order' => 2,
        ]);

        Skill::create([
            'category' => 'APIs & Integrations',
            'skills' => ['OpenRouter API'],
            'sort_order' => 3,
        ]);

        Skill::create([
            'category' => 'Frontend',
            'skills' => ['HTML', 'CSS'],
            'sort_order' => 4,
        ]);

        Skill::create([
            'category' => 'Database',
            'skills' => ['PostgreSQL'],
            'sort_order' => 5,
        ]);

        Skill::create([
            'category' => 'Tools',
            'skills' => ['VS Code', 'GitHub'],
            'sort_order' => 6,
        ]);
    }
}
