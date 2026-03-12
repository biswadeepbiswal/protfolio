<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $about->name }} | Professional Portfolio</title>
    <meta name="description" content="{{ Str::limit($about->bio, 160) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-color: #0f172a;
            --card-bg: rgba(255, 255, 255, 0.05);
            --accent-color: #38bdf8;
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Nav */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--glass-border);
        }

        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        /* Hero */
        section {
            padding: 8rem 0 4rem;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 20%;
            left: 10%;
            width: 300px;
            height: 300px;
            background: var(--accent-color);
            filter: blur(150px);
            opacity: 0.1;
            z-index: -1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #fff, var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-content p {
            font-size: 1.25rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: var(--accent-color);
            color: var(--bg-color);
            text-decoration: none;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(56, 189, 248, 0.3);
        }

        /* Glass Cards */
        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 1rem;
            padding: 2rem;
            transition: transform 0.3s;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent-color);
        }

        /* Grid */
        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 4rem;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card h3 {
            margin: 1rem 0;
            color: var(--accent-color);
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tag {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.2rem 0.8rem;
            border-radius: 2rem;
            font-size: 0.8rem;
            color: var(--accent-color);
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item {
            padding: 2rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1rem;
            top: 2.5rem;
            width: 10px;
            height: 10px;
            background: var(--accent-color);
            border-radius: 50%;
        }

        .timeline-item h4 {
            color: var(--accent-color);
            margin-bottom: 0.5rem;
        }

        .timeline-meta {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        /* Skills */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .skill-group {
            min-width: 250px;
        }

        .skill-group h5 {
            margin-bottom: 1rem;
            color: var(--accent-color);
            border-bottom: 1px solid var(--glass-border);
            padding-bottom: 0.5rem;
        }

        footer {
            padding: 4rem 0;
            text-align: center;
            border-top: 1px solid var(--glass-border);
            color: var(--text-secondary);
        }

        .social-links {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .social-links a {
            color: var(--text-secondary);
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">Portfolio.</div>
            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#skills">Skills</a>
                <a href="/admin">Login</a>
            </div>
        </div>
    </nav>

    <section class="hero" id="about">
        <div class="container hero-content" style="display: flex; align-items: center; gap: 4rem; flex-wrap: wrap-reverse;">
            <div style="flex: 1; min-width: 300px;">
                <h1>Hi, I'm {{ $about->name }}</h1>
                <p>{{ $about->bio }}</p>
                <div class="social-links" style="justify-content: flex-start; margin-bottom: 2rem;">
                    <a href="mailto:{{ $about->email }}"><i class="fas fa-envelope"></i></a>
                    @if($about->github_url)
                        <a href="{{ $about->github_url }}" target="_blank"><i class="fab fa-github"></i></a>
                    @endif
                    @if($about->linkedin_url)
                        <a href="{{ $about->linkedin_url }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                    @endif
                </div>
                <a href="#projects" class="btn">View My Work</a>
            </div>
            <div class="profile-img-container" style="flex: 0 0 400px; display: flex; justify-content: center;">
                <div style="position: relative; width: 350px; height: 350px;">
                    <div style="position: absolute; top: 10px; left: 10px; right: -10px; bottom: -10px; border: 2px solid var(--accent-color); border-radius: 2rem; z-index: -1;"></div>
                    <img src="{{ $about->profile_path ? asset('storage/' . $about->profile_path) : 'https://via.placeholder.com/350x350' }}" 
                         alt="{{ $about->name }}" 
                         style="width: 100%; height: 100%; object-fit: cover; border-radius: 2rem; border: 1px solid var(--glass-border); background: var(--card-bg);">
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                @foreach($projects as $project)
                <div class="glass-card project-card">
                    @if($project->image_path)
                        <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" style="width: 100%; border-radius: 0.5rem; margin-bottom: 1rem;">
                    @endif
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <div class="tech-tags">
                        @foreach($project->tech_stack as $tech)
                            <span class="tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <h2 class="section-title">Work Experience</h2>
            <div class="timeline">
                @foreach($experiences as $exp)
                <div class="glass-card timeline-item">
                    <h4>{{ $exp->job_title }}</h4>
                    <div class="timeline-meta">{{ $exp->company }} | {{ $exp->duration }}</div>
                    <p>{{ $exp->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <h2 class="section-title">Education</h2>
            <div class="timeline">
                @foreach($educations as $edu)
                <div class="glass-card timeline-item">
                    <h4>{{ $edu->degree }}</h4>
                    <div class="timeline-meta">{{ $edu->institution }} | {{ $edu->duration }}</div>
                    <p>{{ $edu->result }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <h2 class="section-title">Technical Skills</h2>
            <div class="skills-container">
                @foreach($skills as $skill)
                <div class="glass-card skill-group">
                    <h5>{{ $skill->category }}</h5>
                    <div class="tech-tags">
                        @foreach($skill->skills as $s)
                            <span class="tag">{{ $s }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} {{ $about->name }}. All rights reserved.</p>
            <div class="social-links">
                <a href="mailto:{{ $about->email }}"><i class="fas fa-envelope"></i></a>
                @if($about->github_url)
                    <a href="{{ $about->github_url }}" target="_blank"><i class="fab fa-github"></i></a>
                @endif
            </div>
        </div>
    </footer>
</body>
</html>
