@extends('public.layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Modern Blog Post Styling */
        .blog-post-hero {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 120px 0 60px;
            margin-bottom: 60px;
            margin-top: 80px;
        }
        
        .blog-post-hero h1 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 3rem;
            color: #1a202c;
            margin-bottom: 16px;
            line-height: 1.3;
        }
        
        .blog-post-hero .subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.125rem;
            color: #64748b;
            margin-bottom: 0;
        }
        
        .blog-post-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px 80px;
        }
        
        .blog-post-image {
            width: 100%;
            height: 400px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin-bottom: 32px;
        }
        
        .blog-post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .blog-post-meta {
            display: flex;
            align-items: center;
            gap: 24px;
            margin-bottom: 40px;
            padding-bottom: 24px;
            border-bottom: 1px solid #e2e8f0;
            flex-wrap: wrap;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            color: #64748b;
        }
        
        .meta-item i {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        
        .category-badge {
            background: rgba(46, 202, 106, 0.1);
            color: #2eca6a;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 6px 12px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(46, 202, 106, 0.2);
        }
        
        .blog-post-content {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.125rem;
            line-height: 1.8;
            color: #374151;
            margin-bottom: 60px;
        }
        
        .blog-post-content h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.75rem;
            color: #1a202c;
            margin: 40px 0 20px;
            line-height: 1.4;
        }
        
        .blog-post-content h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            color: #1a202c;
            margin: 32px 0 16px;
            line-height: 1.4;
        }
        
        .blog-post-content h4 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.25rem;
            color: #1a202c;
            margin: 24px 0 12px;
            line-height: 1.4;
        }
        
        .blog-post-content p {
            margin-bottom: 24px;
        }
        
        .blog-post-content ul, .blog-post-content ol {
            margin: 24px 0;
            padding-left: 24px;
        }
        
        .blog-post-content li {
            margin-bottom: 8px;
        }
        
        .blog-post-content blockquote {
            background: #f8fafc;
            border-left: 4px solid #2eca6a;
            padding: 24px;
            margin: 32px 0;
            border-radius: 0 8px 8px 0;
            font-style: italic;
            color: #4b5563;
        }
        
        .blog-post-content strong {
            font-weight: 600;
            color: #1a202c;
        }
        
        /* Comments Section */
        .comments-section {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 40px;
            margin-top: 60px;
        }
        
        .comments-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 32px;
        }
        
        .comments-header h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            color: #1a202c;
            margin: 0;
        }
        
        .comments-count {
            background: #f1f5f9;
            color: #64748b;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            padding: 4px 12px;
            border-radius: 12px;
        }
        
        .comment {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .comment:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .comment-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2eca6a, #22c55e);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            flex-shrink: 0;
        }
        
        .comment-content {
            flex-grow: 1;
        }
        
        .comment-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 8px;
        }
        
        .comment-author {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: #1a202c;
            margin: 0;
        }
        
        .comment-date {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
            color: #94a3b8;
        }
        
        .comment-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #4b5563;
            margin: 0;
        }
        
        /* Comment Form */
        .comment-form {
            margin-top: 32px;
            padding-top: 32px;
            border-top: 1px solid #f1f5f9;
        }
        
        .comment-form h4 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.125rem;
            color: #1a202c;
            margin-bottom: 20px;
        }
        
        .comment-input-group {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }
        
        .comment-input-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2eca6a, #22c55e);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            flex-shrink: 0;
        }
        
        .comment-input-wrapper {
            flex-grow: 1;
        }
        
        .comment-input {
            width: 100%;
            min-height: 100px;
            padding: 16px;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #1a202c;
            resize: vertical;
            transition: border-color 0.2s ease;
        }
        
        .comment-input:focus {
            outline: none;
            border-color: #2eca6a;
            box-shadow: 0 0 0 3px rgba(46, 202, 106, 0.1);
        }
        
        .comment-input::placeholder {
            color: #94a3b8;
        }
        
        .comment-submit {
            background: #2eca6a;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 12px;
        }
        
        .comment-submit:hover {
            background: #22c55e;
            transform: translateY(-1px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-post-hero {
                padding: 80px 0 40px;
                margin-bottom: 40px;
            }
            
            .blog-post-hero h1 {
                font-size: 2.25rem;
            }
            
            .blog-post-image {
                height: 300px;
                margin-bottom: 24px;
            }
            
            .blog-post-meta {
                gap: 16px;
                margin-bottom: 32px;
            }
            
            .blog-post-content {
                font-size: 1rem;
                margin-bottom: 40px;
            }
            
            .comments-section {
                padding: 24px;
                margin-top: 40px;
            }
            
            .comment-input-group {
                flex-direction: column;
                gap: 12px;
            }
            
            .comment-input-avatar {
                align-self: flex-start;
            }
        }
        
        @media (max-width: 576px) {
            .blog-post-hero h1 {
                font-size: 1.875rem;
            }
            
            .blog-post-image {
                height: 250px;
            }
            
            .blog-post-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
            
            .comments-section {
                padding: 20px;
            }
        }
    </style>

    <!-- Blog Post Hero Section -->
    <section class="blog-post-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h1>{{ $blog->title }}</h1>
                    <p class="subtitle">{{ $blog->excerpt }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Post Content -->
    <div class="blog-post-container">
        <!-- Featured Image -->
        <div class="blog-post-image">
            @if($blog->featured_image)
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" />
            @else
                <img src="{{ asset('scss/images/atsimg1.jpg') }}" alt="{{ $blog->title }}" />
            @endif
        </div>

        <!-- Metadata -->
        <div class="blog-post-meta">
            <div class="meta-item">
                <i class="fas fa-user"></i>
                <span>{{ $blog->author }}</span>
            </div>
            <div class="category-badge">{{ $blog->category }}</div>
            <div class="meta-item">
                <i class="fas fa-calendar"></i>
                <span>{{ $blog->formatted_published_date }}</span>
            </div>
            <div class="meta-item">
                <i class="fas fa-eye"></i>
                <span>{{ $blog->views }} views</span>
            </div>
        </div>

        <!-- Blog Content -->
        <article class="blog-post-content">
            {!! $blog->content !!}
        </article>

        <!-- Comments Section -->
        <div class="comments-section">
            <div class="comments-header">
                <h3>Comments</h3>
                <span class="comments-count">3</span>
            </div>

            <!-- Sample Comments -->
            <div class="comment">
                <div class="comment-avatar">JS</div>
                <div class="comment-content">
                    <div class="comment-header">
                        <h4 class="comment-author">John Smith</h4>
                        <span class="comment-date">2 hours ago</span>
                    </div>
                    <p class="comment-text">Excellent insights on the real estate market trends. The analysis of investment strategies is particularly valuable for someone like me who's just starting to explore property investment opportunities.</p>
                </div>
            </div>

            <div class="comment">
                <div class="comment-avatar">MJ</div>
                <div class="comment-content">
                    <div class="comment-header">
                        <h4 class="comment-author">Maria Johnson</h4>
                        <span class="comment-date">1 day ago</span>
                    </div>
                    <p class="comment-text">Great article! I especially appreciated the section on sustainable development. It's refreshing to see a real estate company focusing on environmental considerations.</p>
                </div>
            </div>

            <div class="comment">
                <div class="comment-avatar">RK</div>
                <div class="comment-content">
                    <div class="comment-header">
                        <h4 class="comment-author">Robert Kim</h4>
                        <span class="comment-date">3 days ago</span>
                    </div>
                    <p class="comment-text">The valuation methods explained here are very clear and practical. This will definitely help me make better investment decisions. Looking forward to more content like this!</p>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="comment-form">
                <h4>Leave a Comment</h4>
                <div class="comment-input-group">
                    <div class="comment-input-avatar">Y</div>
                    <div class="comment-input-wrapper">
                        <textarea class="comment-input" placeholder="Share your thoughts on this article..." rows="4"></textarea>
                        <button class="comment-submit">Post Comment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
