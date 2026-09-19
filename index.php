<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lyra UI</title>
</head>
<body>
    <div class="page-shell">
        <header class="topbar">
            <div class="brand">Lyra</div>
            <nav class="nav">
                <a href="#">Overview</a>
                <a href="#">Projects</a>
                <a href="#">Reports</a>
                <a href="#">Settings</a>
            </nav>
            <button class="primary-btn">New Project</button>
        </header>

        <main class="dashboard">
            <section class="hero card">
                <div class="hero-copy">
                    <p class="eyebrow">Creative workspace</p>
                    <h1>Build your next idea with clarity.</h1>
                    <p class="subtitle">A simple place to plan, track, and launch your work with confidence.</p>
                    <div class="cta-row">
                        <button class="primary-btn">Get Started</button>
                        <button class="secondary-btn">View Demo</button>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="mini-card large">
                        <span>Progress</span>
                        <strong>78%</strong>
                        <div class="progress-bar"><i></i></div>
                    </div>
                    <div class="mini-card small">
                        <span>Tasks</span>
                        <strong>24</strong>
                    </div>
                    <div class="mini-card small accent">
                        <span>Revenue</span>
                        <strong>$8.4k</strong>
                    </div>
                </div>
            </section>

            <section class="stats">
                <div class="stat-card card">
                    <span>Active Users</span>
                    <strong>12.4k</strong>
                    <small>+18.2% this month</small>
                </div>
                <div class="stat-card card">
                    <span>Efficiency</span>
                    <strong>92%</strong>
                    <small>Up from last week</small>
                </div>
                <div class="stat-card card">
                    <span>Launches</span>
                    <strong>36</strong>
                    <small>Across 5 teams</small>
                </div>
            </section>

            <section class="content-grid">
                <div class="card panel tasks-panel">
                    <div class="panel-header">
                        <h2>Recent Tasks</h2>
                        <a href="#">See all</a>
                    </div>
                    <ul class="task-list">
                        <li>
                            <div>
                                <strong>Design system refresh</strong>
                                <span>UI review</span>
                            </div>
                            <em>In progress</em>
                        </li>
                        <li>
                            <div>
                                <strong>Brand launch assets</strong>
                                <span>Marketing team</span>
                            </div>
                            <em>Review</em>
                        </li>
                        <li>
                            <div>
                                <strong>Customer onboarding</strong>
                                <span>Expansion</span>
                            </div>
                            <em>Ready</em>
                        </li>
                    </ul>
                </div>

                <div class="card panel summary-panel">
                    <div class="panel-header">
                        <h2>Overview</h2>
                    </div>
                    <div class="summary-box">
                        <div class="ring">
                            <span>84%</span>
                        </div>
                        <div class="summary-copy">
                            <strong>Quarter goal</strong>
                            <p>Everything is on track for a strong finish this cycle.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
