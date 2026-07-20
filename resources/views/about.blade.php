<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>เกี่ยวกับฉัน | Arthittaya</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
<style>
body{font-family:'Inter','Kanit',sans-serif;background:linear-gradient(135deg,#fff5fa,#ffe3f2,#ffd4ea,#ffc6e4);overflow-x:hidden;cursor:none}
.glass{background:rgba(255,255,255,.45);backdrop-filter:blur(15px);border:1px solid rgba(255,255,255,.6);box-shadow:0 10px 30px rgba(255,105,180,.18)}
.bow{position:fixed;font-size:42px;opacity:.3;animation:f 6s ease-in-out infinite;pointer-events:none}
.b1{top:25px;left:30px}.b2{top:70px;right:35px;animation-delay:2s}.b3{bottom:35px;left:15%;animation-delay:1s}
@keyframes f{50%{transform:translateY(-20px) rotate(8deg)}}
.flower{position:fixed;top:-40px;pointer-events:none;animation:fall linear infinite}
@keyframes fall{to{transform:translateY(110vh) translateX(80px) rotate(360deg)}}
#heart{position:fixed;transform:translate(-50%,-50%);pointer-events:none;font-size:22px;z-index:9999}
</style>
</head>
<body class="min-h-screen flex flex-col text-pink-700">
<div class="bow b1">🎀</div><div class="bow b2">🎀</div><div class="bow b3">🎀</div>
<header class="max-w-6xl w-full mx-auto p-6 flex justify-between">
<a href="/" class="font-bold text-2xl bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent">🎀 Arthittaya.SI</a>
<nav class="glass rounded-full px-6 py-2 flex gap-6"><a href="/welcome">หน้าแรก</a><a href="/blog">บทความ</a><a href="/about" class="font-bold text-pink-600">เกี่ยวกับฉัน</a></nav>
</header>
<main class="flex-grow flex items-center justify-center p-6">
<div class="glass rounded-3xl p-10 max-w-3xl w-full">
<div class="flex flex-col md:flex-row gap-8 items-center">
<div class="w-40 h-40 rounded-3xl bg-gradient-to-br from-pink-400 to-rose-500 flex items-center justify-center text-5xl text-white font-bold">TF</div>
<div>
<h1 class="text-4xl font-bold text-pink-600">กะเต๋ว(GT)
</h1>
<p class="text-pink-500">Web Developer & Creator</p>
<p class="mt-4">สวัสดีค่ะหนูชื่อก๋วยเตี๋ยว กะเต๋ว ยินดีต้อนรับสู่เว็บไซต์ของหนูค่ะ หนูมีความสนใจทางด้านกราฟฟิก เขียนเว็บและการวิเคราะห์ระบบค่ะ</p>
<div class="flex flex-wrap gap-2 mt-5">
<span class="glass rounded-full px-3 py-1">💻 HTML/CSS</span>
<span class="glass rounded-full px-3 py-1">⚡ JavaScript</span>
<span class="glass rounded-full px-3 py-1">🐘 PHP</span>
<span class="glass rounded-full px-3 py-1">🔥 Photoshop</span>
</div></div></div>
<hr class="my-8 border-pink-200">
<div class="grid md:grid-cols-2 gap-5">
<div class="glass rounded-2xl p-5"><h3 class="font-bold text-pink-600">🎀 เป้าหมายของฉัน</h3><p>สร้างเว็บไซต์ที่สวย ใช้งานง่าย และมีประสิทธิภาพ</p></div>
<div class="glass rounded-2xl p-5"><h3 class="font-bold text-pink-600">💌 ช่องทางการติดต่อ</h3><p>ติดตามผลงานและบทความได้จากเว็บไซต์นี้</p></div>
</div>
</div></main>
<footer class="text-center p-6 text-pink-500">© 2026 Arthittaya</footer>
<div id="heart">💖</div>
<script>
const h=document.getElementById('heart');
document.addEventListener('mousemove',e=>{h.style.left=e.clientX+'px';h.style.top=e.clientY+'px';});
for(let i=0;i<30;i++){let f=document.createElement('div');f.className='flower';f.textContent='🌸';f.style.left=Math.random()*100+'vw';f.style.animationDuration=(5+Math.random()*5)+'s';f.style.animationDelay=Math.random()*5+'s';f.style.fontSize=(14+Math.random()*18)+'px';document.body.appendChild(f);}
</script>
</body></html>