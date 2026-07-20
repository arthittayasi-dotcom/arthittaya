@extends('layout')

@section('title', 'หน้าแรก')

@section('content')

<style>
    body{
        background:linear-gradient(180deg,#fff7fb,#fff0f6);
        font-family:'Kanit',sans-serif;
    }

    .hero{
        background:rgba(255,255,255,.65);
        backdrop-filter:blur(15px);
        border-radius:30px;
        position:relative;
        overflow:hidden;
        border:2px solid #ffe0eb;
    }

    .blob{
        position:absolute;
        border-radius:50%;
        filter:blur(30px);
        opacity:.45;
    }

    .blob1{
        width:220px;
        height:220px;
        background:#ffb3c6;
        top:-80px;
        left:-80px;
    }

    .blob2{
        width:180px;
        height:180px;
        background:#ffc8dd;
        bottom:-60px;
        right:-60px;
    }

    h1{
        color:#ff4d8d;
        font-weight:800;
    }

    .lead{
        color:#666;
    }

    .btn-pink{
        background:linear-gradient(45deg,#ff4d8d,#ff85a2);
        color:white;
        border:none;
        transition:.3s;
    }

    .btn-pink:hover{
        transform:translateY(-3px);
        box-shadow:0 12px 20px rgba(255,77,141,.3);
        color:white;
    }

    .btn-outline-pink{
        border:2px solid #ff85a2;
        color:#ff4d8d;
        transition:.3s;
    }

    .btn-outline-pink:hover{
        background:#ff85a2;
        color:white;
    }

    .feature-card{
        background:white;
        border:none;
        border-radius:25px;
        transition:.3s;
        overflow:hidden;
    }

    .feature-card:hover{
        transform:translateY(-8px);
        box-shadow:0 15px 35px rgba(255,175,204,.35);
    }

    .icon-box{
        width:90px;
        height:90px;
        margin:auto;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        background:linear-gradient(135deg,#ffd6e7,#ffafcc);
        font-size:40px;
    }

    .section-title{
        color:#ff4d8d;
        font-weight:bold;
    }

    footer{
        color:#999;
    }
</style>

<div class="container py-5">

    <div class="hero p-5 shadow-lg text-center">

        <div class="blob blob1"></div>
        <div class="blob blob2"></div>

        <span class="badge rounded-pill px-4 py-2 mb-3"
            style="background:#fff;color:#ff4d8d;font-size:15px;">
            🎀 Welcome to My Website
        </span>

        <h1 class="display-4 mb-3">
            ยินดีต้อนรับ 💖
        </h1>

        <p class="lead mx-auto mb-4" style="max-width:700px;">
            เว็บไซต์เล็ก ๆ สำหรับแบ่งปันบทความ ผลงาน และเรื่องราวต่าง ๆ
            ที่อยากแบ่งปันให้ทุกคนได้อ่าน หวังว่าจะชอบนะ 🌸
        </p>

        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ url('/blog') }}" class="btn btn-pink rounded-pill px-5 py-3">
                📖 อ่านบทความ
            </a>

            <a href="{{ url('/about') }}" class="btn btn-outline-pink rounded-pill px-5 py-3">
                👩 About Me
            </a>
        </div>

    </div>

</div>

<div class="container pb-5">

    <h2 class="text-center section-title mb-5">
        🌸 สิ่งที่คุณจะพบในเว็บไซต์นี้
    </h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card feature-card shadow h-100 p-4 text-center">
                <div class="icon-box mb-4">
                    📝
                </div>

                <h4>บทความ</h4>

                <p class="text-muted">
                    รวมบทความ ความรู้ เทคนิค และเรื่องราวต่าง ๆ
                    ที่น่าสนใจให้อ่านกันแบบเพลิน ๆ
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card shadow h-100 p-4 text-center">
                <div class="icon-box mb-4">
                    🎨
                </div>

                <h4>ผลงาน</h4>

                <p class="text-muted">
                    Portfolio และโปรเจกต์ต่าง ๆ
                    ที่ได้ลงมือทำ พร้อมแบ่งปันประสบการณ์
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card feature-card shadow h-100 p-4 text-center">
                <div class="icon-box mb-4">
                    💌
                </div>

                <h4>ติดต่อ</h4>

                <p class="text-muted">
                    หากต้องการพูดคุย สอบถาม
                    หรือร่วมงาน สามารถติดต่อได้เสมอ
                </p>
            </div>
        </div>

    </div>

</div>

<div class="container mb-5">

    <div class="card border-0 shadow-lg rounded-5 p-5 text-center"
        style="background:linear-gradient(135deg,#ffd6e7,#fff0f6);">

        <h2 style="color:#ff4d8d;">💖 ขอบคุณที่แวะมาเยี่ยมชม</h2>

        <p class="text-muted mt-3">
            ขอให้สนุกกับการอ่านบทความและรับชมผลงานของฉัน
            แล้วพบกันใหม่ 🌷
        </p>

        <div class="mt-3">
            <a href="{{ url('/blog') }}" class="btn btn-pink rounded-pill px-5 py-3">
                เริ่มต้นเลย 🚀
            </a>
        </div>

    </div>

</div>

<footer class="text-center py-4">
    © {{ date('Y') }} My Sweet Website 🌸
</footer>

@endsection