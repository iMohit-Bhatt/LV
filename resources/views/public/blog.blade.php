@extends('public.layouts.master')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Modern Blog Styling */
        .blog-hero {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 120px 0 60px;
            margin-bottom: 60px;
            margin-top: 80px;
        }
        
        .blog-hero h1 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 3.5rem;
            color: #1a202c;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .blog-hero .subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.25rem;
            color: #64748b;
            margin-bottom: 0;
        }
        
        .blog-grid {
            padding: 0 0 80px;
        }
        
        .blog-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .blog-card-image {
            position: relative;
            height: 240px;
            overflow: hidden;
        }
        
        .blog-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .blog-card:hover .blog-card-image img {
            transform: scale(1.05);
        }
        
        .blog-card-category {
            position: absolute;
            top: 16px;
            left: 16px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: #1a202c;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 6px 12px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .blog-card-content {
            padding: 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .blog-card-title {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.25rem;
            line-height: 1.4;
            color: #1a202c;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .blog-card-title:hover {
            color: #2eca6a;
        }
        
        .blog-card-excerpt {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #64748b;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex-grow: 1;
        }
        
        .blog-card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
        }
        
        .blog-card-date {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            color: #94a3b8;
        }
        
        .blog-card-views {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.875rem;
            color: #94a3b8;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .blog-card-views i {
            font-size: 0.75rem;
        }
        
        /* Pagination Styling */
        .pagination-section {
            margin-top: 60px;
        }
        
        .pagination-info {
            text-align: center;
            margin-bottom: 32px;
        }
        
        .pagination-info p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 0.95rem;
            color: #64748b;
            margin: 0;
        }
        
        .pagination-a .pagination {
            justify-content: center;
            gap: 8px;
        }
        
        .pagination-a .page-link {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.95rem;
            color: #64748b;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 16px;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        
        .pagination-a .page-link:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            color: #1a202c;
        }
        
        .pagination-a .page-item.active .page-link {
            background: #2eca6a;
            border-color: #2eca6a;
            color: #ffffff;
        }
        
        .pagination-a .page-item.disabled .page-link {
            background: #f1f5f9;
            border-color: #e2e8f0;
            color: #cbd5e1;
            cursor: not-allowed;
        }
        
        .pagination-a .page-link i {
            font-size: 0.875rem;
        }
        
        /* Empty State */
        .blog-empty {
            text-align: center;
            padding: 80px 20px;
        }
        
        .blog-empty h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .blog-empty p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #64748b;
            margin: 0;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-hero {
                padding: 60px 0 40px;
                margin-bottom: 40px;
            }
            
            .blog-hero h1 {
                font-size: 2.5rem;
            }
            
            .blog-hero .subtitle {
                font-size: 1.125rem;
            }
            
            .blog-grid {
                padding: 0 0 60px;
            }
            
            .blog-card-image {
                height: 200px;
            }
            
            .blog-card-content {
                padding: 20px;
            }
            
            .blog-card-title {
                font-size: 1.125rem;
            }
        }
        
        @media (max-width: 576px) {
            .blog-hero h1 {
                font-size: 2rem;
            }
            
            .blog-card-image {
                height: 180px;
            }
            
            .blog-card-content {
                padding: 16px;
            }
            
            .blog-card-title {
                font-size: 1rem;
            }
        }
    </style>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Insights & Analysis</h1>
                    <p class="subtitle">Expert perspectives on real estate investment, market trends, and property insights</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="blog-grid">
        <div class="container">
            @if($blogs->count() > 0)
                <div class="row g-4">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12">
                            <article class="blog-card">
                                <div class="blog-card-image">
                                    @if($blog->featured_image)
                                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" />
                                    @else
                                        <img src="{{ asset('scss/images/atsimg1.jpg') }}" alt="{{ $blog->title }}" />
                                    @endif
                                    <div class="blog-card-category">{{ $blog->category }}</div>
                                </div>
                                <div class="blog-card-content">
                                    <h2 class="blog-card-title">
                                        <a href="{{ route('public.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h2>
                                    @if($blog->excerpt)
                                        <p class="blog-card-excerpt">{{ $blog->excerpt }}</p>
                                    @endif
                                    <div class="blog-card-meta">
                                        <span class="blog-card-date">{{ $blog->formatted_published_date }}</span>
                                        <span class="blog-card-views">
                                            <i class="fas fa-eye"></i>
                                            {{ $blog->views }} views
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                @if($blogs->hasPages())
                    <div class="pagination-section">
                        <div class="pagination-info">
                            <p>Showing {{ $blogs->firstItem() ?? 0 }} to {{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() }} articles</p>
                        </div>
                        <nav class="pagination-a">
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">
                                            <i class="fas fa-chevron-left"></i>
                                        </span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                        <li class="page-item active">
                                            <span class="page-link">{{ $page }}</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                    <li class="page-item next">
                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @endif
            @else
                <div class="blog-empty">
                    <h3>No articles found</h3>
                    <p>Check back soon for new insights and analysis</p>
                </div>
            @endif
        </div>
    </section>
@endsection
