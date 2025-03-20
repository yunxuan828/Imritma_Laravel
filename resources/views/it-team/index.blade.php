@extends('layouts.app')

@section('title', 'Ritma Prestasi - IT Team Portal')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <h2 data-aos="fade-down" data-aos-duration="800">RITMA GROUP IT PORTAL</h2>
            <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Your one-stop access to all IT systems and services at Ritma. We provide technical support and solutions to enhance your productivity.</p>
            <a href="#it-systems" class="btn" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">Access IT Systems</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up">About IT Team</h2>
            </div>
            <div class="about-content">
                <div class="about-img" data-aos="fade-right" data-aos-duration="800">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="IT Team">
                </div>
                <div class="about-text" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <h3>Our Mission</h3>
                    <p>The IT Team at Ritma is dedicated to provide reliable, secure, and innovative technology solutions that support the company's business objectives and enhance operational efficiency.</p>
                    <p>We manage and maintain the company's IT infrastructure, develop and support business applications, ensure data security, and provide technical assistance to all departments.</p>
                    <p>Our team is committed to continuous improvement and staying updated with the latest technologies to deliver the best IT services to our internal customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- IT Systems Section -->
    <section id="it-systems" class="it-systems">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up">IT Systems</h2>
            </div>
            <div class="system-categories">
                <div class="system-card" data-aos="flip-left" data-aos-duration="800">
                    <div class="system-img">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="system-info">
                        <h3>IT Helpdesk</h3>
                        <p>Submit and track IT support tickets, access knowledge base articles, and get technical assistance for any IT-related issues.</p>
                        <a href="https://hesk.imritma.com/" class="btn">Access</a>
                    </div>
                </div>
                <div class="system-card" data-aos="flip-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="system-img">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="system-info">
                        <h3>IT Management System</h3>
                        <p>Track and manage company IT assets including hardware, software licenses, and equipment inventory.</p>
                        <a href="https://tech.imritma.com/public/" class="btn">Access</a>
                    </div>
                </div>
                <div class="system-card" data-aos="flip-left" data-aos-duration="800" data-aos-delay="400">
                    <div class="system-img">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div class="system-info">
                        <h3>E-Claim System</h3>
                        <p>Access employee information, leave management, payroll details, and other HR-related services.</p>
                        <a href="#" class="btn">Coming Soon</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up">Our IT Values</h2>
            </div>
            <div class="values-grid">
                <div class="value-card" data-aos="zoom-in" data-aos-duration="800">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Security First</h3>
                    <p>We prioritize the security and protection of company data and systems at all times.</p>
                </div>
                <div class="value-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Reliability</h3>
                    <p>We ensure our systems are stable, available, and perform consistently to support business operations.</p>
                </div>
                <div class="value-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We continuously explore and implement new technologies to improve efficiency and productivity.</p>
                </div>
                <div class="value-card" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>User Support</h3>
                    <p>We are committed to providing prompt, friendly, and effective support to all users.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- IT Services Section -->
    <section id="it-services" class="it-services">
        <div class="container">
            <h2 data-aos="fade-up">IT Services We Provide</h2>
            <p data-aos="fade-up" data-aos-delay="100">Our IT team offers a comprehensive range of services to support Ritma's technology needs and ensure smooth business operations.</p>
            <a href="#contact" class="btn" data-aos="fade-up" data-aos-delay="200">Request IT Service</a>
            
            <div class="services">
                <div class="service" data-aos="fade-up" data-aos-duration="800">
                    <div class="service-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h3>Technical Support</h3>
                    <p>Hardware and software troubleshooting, system maintenance, and user assistance.</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Network Management</h3>
                    <p>Setup and maintenance of network infrastructure, internet connectivity, and VPN access.</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data Management</h3>
                    <p>Database administration, data backup, recovery, and storage solutions.</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>IT Training</h3>
                    <p>User training on company systems, software applications, and security awareness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-up">Contact IT Support</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info" data-aos="fade-right" data-aos-duration="800">
                    <h3>Get IT Help</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <p><strong>Support Hours:</strong></p>
                                <p>Monday - Friday: 8:30 AM - 5:30 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="support-info">
                        <h4>For fastest support:</h4>
                        <p>Please use the Helpdesk System to submit tickets. For urgent issues, call the emergency support line.</p>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left" data-aos-duration="800">
                    <h3>IT Support Feedback</h3>
                    
                    @if(session('status') === 'success')
                    <div id="success-message" style="margin-bottom: 20px; padding: 10px; border-radius: 5px; background-color: #d4edda; color: #155724;">
                        Thank you for your feedback! Your submission has been received.
                    </div>
                    @elseif(session('status') === 'error')
                    <div id="error-message" style="margin-bottom: 20px; padding: 10px; border-radius: 5px; background-color: #f8d7da; color: #721c24;">
                        There was a problem submitting your feedback. Please try again.
                    </div>
                    @elseif(session('status') === 'invalid_email')
                    <div id="invalid-email-message" style="margin-bottom: 20px; padding: 10px; border-radius: 5px; background-color: #f8d7da; color: #721c24;">
                        Please enter a valid email address.
                    </div>
                    @endif
                    
                    <form action="{{ route('it-team.feedback') }}" method="POST" id="feedback-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
                            @error('name')
                                <div style="color: #721c24; margin-top: 5px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
                            @error('email')
                                <div style="color: #721c24; margin-top: 5px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" id="department" name="department" class="form-control" required value="{{ old('department') }}">
                            @error('department')
                                <div style="color: #721c24; margin-top: 5px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Your Feedback</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Please share your experience with our IT support service. What went well? What could be improved?" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div style="color: #721c24; margin-top: 5px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="suggestions">Suggestions for Improvement (Optional)</label>
                            <textarea id="suggestions" name="suggestions" class="form-control" placeholder="Do you have any suggestions on how we can improve our IT services?">{{ old('suggestions') }}</textarea>
                            @error('suggestions')
                                <div style="color: #721c24; margin-top: 5px;">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn">Submit Feedback</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Animation for typing effect on hero title
    document.addEventListener('DOMContentLoaded', function() {
        const heroTitle = document.querySelector('.hero h2');
        const originalTitle = heroTitle.textContent;
        heroTitle.textContent = '';
        
        function typeEffect(element, text, i = 0) {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                setTimeout(function() {
                    typeEffect(element, text, i + 1);
                }, 100);
            }
        }
        
        // Start typing effect after a short delay
        setTimeout(function() {
            typeEffect(heroTitle, originalTitle);
        }, 500);
    });

    // Add animation to system cards on hover with mouse movement
    const systemCards = document.querySelectorAll('.system-card');
    
    systemCards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left; // x position within the element
            const y = e.clientY - rect.top;  // y position within the element
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const deltaX = (x - centerX) / 20;
            const deltaY = (y - centerY) / 20;
            
            this.style.transform = `translateY(-15px) rotateX(${-deltaY}deg) rotateY(${deltaX}deg)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-15px) rotateX(0) rotateY(0)';
            this.style.transition = 'transform 0.5s ease';
        });
    });
</script>
@endsection 