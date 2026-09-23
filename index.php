<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEM for All</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav-wrap">
            <div class="brand">
                <span class="brand-mark">S</span>
                <span>STEM for All</span>
            </div>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="#mission">Mission</a>
                <a href="#barriers">Challenges</a>
                <a href="#impact">Impact</a>
                <a href="#act">Take Action</a>
            </nav>
            <div class="header-actions">
                <!-- From Uiverse.io by alexruix -->
                <label class="switch" aria-label="Toggle dark mode">
                    <input type="checkbox" id="theme-toggle">
                    <span class="slider"></span>
                </label>
                <a class="nav-cta" href="#act">Support Equality</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow">Equal access. Equal opportunity. Equal futures.</p>
                    <h1>Women deserve the same chance to study, lead, and innovate in STEM.</h1>
                    <p class="lead">
                        When girls and women are included in science, technology, engineering, and math,
                        classrooms become brighter, ideas become bolder, and the future becomes stronger for everyone.
                    </p>
                    <div class="cta-row">
                        <a class="btn btn-primary" href="#mission">Learn More</a>
                        <a class="btn btn-secondary join-button" href="login.php">Join the Movement</a>
                    </div>
                    <ul class="mini-stats" aria-label="Key STEM equality facts">
                        <li><strong>1</strong><span>Future begins in the classroom</span></li>
                        <li><strong>+50%</strong><span>More innovation when teams are diverse</span></li>
                    </ul>
                </div>

                <div class="hero-visual" aria-label="STEM equality illustration">
                    <div class="circle-ring ring-one"></div>
                    <div class="circle-ring ring-two"></div>
                    <div class="floating-card card-main">
                        <span class="card-label">STEM Access</span>
                        <strong>Inclusive Learning</strong>
                        <div class="bars">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="floating-card card-top">
                        <span>Mentorship</span>
                        <strong>Women lead</strong>
                    </div>
                    <div class="floating-card card-bottom">
                        <span>Confidence</span>
                        <strong>+ Growth</strong>
                    </div>
                </div>
            </div>
        </section>

        <section id="mission" class="section section-soft">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">Why it matters</p>
                    <h2>STEM equality helps build a world where talent is not limited by gender.</h2>
                </div>

                <div class="card-grid three-up">
                    <article class="info-card">
                        <div class="icon">🎓</div>
                        <h3>Equal Learning</h3>
                        <p>Girls deserve access to quality science and technology education from the first classroom onward.</p>
                    </article>
                    <article class="info-card">
                        <div class="icon">💡</div>
                        <h3>Fresh Ideas</h3>
                        <p>Diverse teams produce stronger solutions, better designs, and more creative problem-solving.</p>
                    </article>
                    <article class="info-card">
                        <div class="icon">🚀</div>
                        <h3>Fair Opportunity</h3>
                        <p>When women can study STEM without barriers, they can lead research, build products, and create change.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="barriers" class="section">
            <div class="container split-layout">
                <div>
                    <p class="eyebrow">Challenges</p>
                    <h2>Many women still face bias, stereotypes, and fewer opportunities in STEM.</h2>
                </div>
                <div class="list-panel">
                    <ul>
                        <li><strong>Limited representation:</strong> women are still less visible in STEM leadership and classrooms.</li>
                        <li><strong>Bias in education:</strong> stereotypes can discourage girls from choosing STEM subjects.</li>
                        <li><strong>Fewer mentors:</strong> lack of guidance can reduce confidence and participation.</li>
                        <li><strong>Unequal access:</strong> some students face fewer resources, role models, and support systems.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="impact" class="section section-soft">
            <div class="container">
                <div class="section-heading narrow">
                    <p class="eyebrow">What change looks like</p>
                    <h2>Equality in education means opportunity, encouragement, and belonging.</h2>
                </div>

                <div class="card-grid three-up">
                    <article class="impact-card">
                        <span class="impact-number">01</span>
                        <h3>Encourage early interest</h3>
                        <p>Teach girls that science and engineering are exciting, achievable, and worth exploring.</p>
                    </article>
                    <article class="impact-card">
                        <span class="impact-number">02</span>
                        <h3>Build supportive spaces</h3>
                        <p>Classrooms, labs, and communities should celebrate women in STEM and reduce exclusion.</p>
                    </article>
                    <article class="impact-card">
                        <span class="impact-number">03</span>
                        <h3>Invest in leadership</h3>
                        <p>Mentorship, scholarships, and visibility help women thrive through every stage of study.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="quote-section">
            <div class="container quote-box">
                <p>“When women are equally supported in STEM, every community gains more talent, more innovation, and more hope.”</p>
                <span>— A vision for a fairer future</span>
            </div>
        </section>

        <section id="act" class="section cta-section">
            <div class="container cta-wrap">
                <div>
                    <p class="eyebrow">Take action</p>
                    <h2>Everyone can help create a more equal STEM future.</h2>
                </div>
                <div class="cta-row end">
                    <a class="btn btn-primary" href="#">Support a student</a>
                    <a class="btn btn-secondary" href="#">Start a conversation</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-wrap">
            <p>STEM for All</p>
            <p>Building equality through education and opportunity.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
