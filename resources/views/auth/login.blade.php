@extends('layouts.app')

@section('title', 'Ritma Prestasi - IT Team Login')

@section('styles')
<style>
    .login-section {
        padding: 100px 0;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        min-height: calc(100vh - 250px);
        display: flex;
        align-items: center;
    }
    
    .login-container {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        padding: 40px;
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        position: relative;
        overflow: hidden;
        animation: fadeIn 0.8s ease-in-out;
    }
    
    .login-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    }
    
    .login-title {
        color: var(--primary-color);
        margin-bottom: 30px;
        font-size: 1.8rem;
    }
    
    .login-subtitle {
        margin-bottom: 30px;
        color: #666;
    }
    
    .login-info {
        margin-bottom: 30px;
        padding: 15px;
        background-color: rgba(44, 120, 115, 0.1);
        border-radius: 5px;
        text-align: left;
    }
    
    .login-info p {
        margin-bottom: 10px;
    }
    
    .login-info ul {
        padding-left: 20px;
        margin-bottom: 0;
    }
    
    .login-info li {
        list-style-type: disc;
        margin-bottom: 5px;
    }
    
    .ms-login-btn {
        display: inline-flex;
        align-items: center;
        background-color: #2F2F2F;
        color: white;
        padding: 12px 24px;
        border-radius: 5px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        text-decoration: none;
    }
    
    .ms-login-btn:hover {
        background-color: #0078D4;
        transform: translateY(-3px);
        box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
    }
    
    .ms-login-btn img {
        margin-right: 10px;
        height: 24px;
    }
    
    .error-message {
        color: #721c24;
        background-color: #f8d7da;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<section class="login-section">
    <div class="container">
        <div class="login-container" data-aos="fade-up" data-aos-duration="800">
            <h2 class="login-title">Ritma Group Portal Login</h2>
            
            @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
            @endif
            
            
            
            <a href="{{ route('microsoft.login') }}" class="ms-login-btn">
                <img src="{{ asset('ms-logo.png') }}" alt="Microsoft logo">
                Sign in with Microsoft
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Animation for login box
    document.addEventListener('DOMContentLoaded', function() {
        const loginContainer = document.querySelector('.login-container');
        loginContainer.style.opacity = '0';
        loginContainer.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            loginContainer.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            loginContainer.style.opacity = '1';
            loginContainer.style.transform = 'translateY(0)';
        }, 200);
    });
</script>
@endsection 