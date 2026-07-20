<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เกี่ยวกับฉัน | Arthittaya</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Inter','Kanit',sans-serif;
background:linear-gradient(135deg,#fff5fa,#ffe7f3,#ffd9ee,#ffcbe7);
overflow-x:hidden;
cursor:none;
position:relative;
min-height:100vh;
}

.glass{
background:rgba(255,255,255,.35);
backdrop-filter:blur(15px);
-webkit-backdrop-filter:blur(15px);
border:1px solid rgba(255,255,255,.5);
box-shadow:0 10px 40px rgba(255,105,180,.15);
transition:.3s;
}

.glass:hover{
transform:translateY(-6px);
box-shadow:0 20px 50px rgba(255,105,180,.2);
}

.floating-bow{
position:fixed;
font-size:48px;
pointer-events:none;
opacity:.35;
animation:float 6s ease-in-out infinite;
z-index:0;
}

.bow1{
top:30px;
left:30px;
}

.bow2{
top:120px;
right:60px;
animation-delay:2s;
}

.bow3{
bottom:70px;
left:15%;
animation-delay:1s;
}

.bow4{
bottom:40px;
right:100px;
animation-delay:3s;
}

@keyframes float{

0%,100%{
transform:translateY(0px) rotate(-8deg);
}

50%{
transform:translateY(-25px) rotate(8deg);
}

}

.flower{

position:fixed;

top:-50px;

pointer-events:none;

animation:fall linear infinite;

opacity:.8;

z-index:0;

}

@keyframes fall{

0%{
transform:translateY(-50px) rotate(0deg);
}

100%{
transform:translateY(110vh) translateX(80px) rotate(360deg);
}

}

#heartCursor{

position:fixed;

left:0;

top:0;

font-size:22px;

pointer-events:none;

transform:translate(-50%,-50%);

z-index:99999;

transition:.03s linear;

filter:drop-shadow(0 0 8px hotpink);

}

.profile-avatar{

background:linear-gradient(135deg,#ff8dc7,#ff6fb5,#ff4f9f);

box-shadow:0 15px 40px rgba(255,105,180,.35);

border:4px solid white;

transition:.3s;

}

.profile-avatar:hover{

transform:scale(1.05) rotate(-5deg);

}

.badge{

background:#fff;

color:#ec4899;

border:1px solid #f9a8d4;

transition:.3s;

}

.badge:hover{

transform:translateY(-3px);

background:#ffe4ef;

}

</style>

</head>

<body class="text-pink-700 min-h-screen flex flex-col justify-between selection:bg-pink-400 selection:text-white">

<div class="floating-bow bow1">🎀</div>
<div class="floating-bow bow2">🎀</div>
<div class="floating-bow bow3">🎀</div>
<div class="floating-bow bow4">🎀</div>

<header class="w-full max-w-6xl mx-auto px-6 py-5 flex justify-between items-center z-10">

<a href="/" class="text-2xl font-bold bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 bg-clip-text text-transparent">
🎀 ARTHITTAYA.SI
</a>

<nav class="flex items-center gap-6 glass px-6 py-3 rounded-full">

<a href="/welcome" class="hover:text-pink-500 transition">หน้าแรก</a>

<a href="/blog" class="hover:text-pink-500 transition">บทความ</a>

<a href="/about" class="text-pink-600 font-bold">
เกี่ยวกับฉัน
</a>

</nav>

</header>

<main class="w-full max-w-3xl mx-auto px-6 py-12 flex-grow flex items-center">

<div class="glass rounded-[35px] p-10 w-full relative overflow-hidden">

<div class="absolute -top-10 -right-10 w-40 h-40 bg-pink-300 rounded-full blur-3xl opacity-30"></div>

<div class="flex flex-col md:flex-row gap-8 items-center">

<div class="profile-avatar w-40 h-40 rounded-[35px] flex items-center justify-center text-white text-5xl font-black">

TF

</div>

<div>

<h1 class="text-5xl font-black bg-gradient-to-r from-pink-500 to-rose-500 bg-clip-text text-transparent">

กะเต๋ว (GT)

</h1>

<p class="text-pink-500 font-semibold mt-2">

Web Developer & Creator

</p>

<p class="mt-5 text-pink-800 leading-8">

สวัสดีค่ะหนูชื่อก๋วยเตี๋ยว กะเต๋ว
ยินดีต้อนรับสู่เว็บไซต์ของหนูค่ะ
หนูมีความสนใจด้านกราฟิก
การพัฒนาเว็บไซต์
และการวิเคราะห์ระบบ

</p>

<div class="flex flex-wrap gap-3 mt-6">

<span class="badge px-4 py-2 rounded-full font-semibold">
💻 HTML / CSS
</span>

<span class="badge px-4 py-2 rounded-full font-semibold">
⚡ JavaScript
</span>

<span class="badge px-4 py-2 rounded-full font-semibold">
🐘 PHP
</span>

<span class="badge px-4 py-2 rounded-full font-semibold">
🔥 Laravel 12
</span>

</div>

</div>

</div>

<hr class="my-10 border-pink-200">

<div class="grid md:grid-cols-2 gap-6">
<div class="glass p-6 rounded-3xl">

<h3 class="text-pink-600 font-bold text-xl mb-3 flex items-center gap-2">
🎀 เป้าหมายของฉัน
</h3>

<p class="text-pink-700 leading-7">
สร้างสรรค์เว็บไซต์และเว็บแอปพลิเคชันที่มีประสิทธิภาพ
สวยงาม ใช้งานง่าย และมอบประสบการณ์ที่ดีที่สุดให้ผู้ใช้งาน
</p>

</div>

<div class="glass p-6 rounded-3xl">

<h3 class="text-pink-600 font-bold text-xl mb-3 flex items-center gap-2">
💌 ช่องทางการติดต่อ
</h3>

<p class="text-pink-700 leading-7">
สามารถเข้ามาพูดคุย
แลกเปลี่ยนความคิดเห็น
หรือติดตามผลงานต่าง ๆ
ผ่านหน้าแรกหรือบทความได้เลยค่ะ
</p>

</div>

</div>

</div>

</main>

<footer class="w-full text-center py-8 text-pink-500">

🌸 Made with 🤍 by Arthittaya 🌸

</footer>

<div id="heartCursor">💖</div>

<script>

const cursor=document.getElementById("heartCursor");

document.addEventListener("mousemove",e=>{

cursor.style.left=e.clientX+"px";

cursor.style.top=e.clientY+"px";

});

for(let i=0;i<35;i++){

let flower=document.createElement("div");

flower.innerHTML="🌸";

flower.className="flower";

flower.style.left=Math.random()*100+"vw";

flower.style.animationDuration=(5+Math.random()*6)+"s";

flower.style.animationDelay=Math.random()*5+"s";

flower.style.fontSize=(16+Math.random()*18)+"px";

document.body.appendChild(flower);

}

</script>

</body>

</html>