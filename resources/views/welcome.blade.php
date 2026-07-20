<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>ยินดีต้อนรับ | Arthittaya</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/lucide@latest"></script>
<style>
body{font-family:'Inter','Kanit',sans-serif;background:linear-gradient(135deg,#fff7fb,#ffe5f2,#ffd6eb,#ffc8e5);overflow-x:hidden;cursor:none}
.glass,.glass-card{background:rgba(255,255,255,.45);backdrop-filter:blur(16px);border:1px solid rgba(255,255,255,.6)}
.glass-card{transition:.35s}.glass-card:hover{transform:translateY(-6px);box-shadow:0 15px 35px rgba(255,105,180,.2)}
.bow{position:fixed;font-size:42px;opacity:.3;pointer-events:none;animation:f 6s ease-in-out infinite}
.b1{top:20px;left:30px}.b2{top:80px;right:40px;animation-delay:2s}.b3{bottom:40px;left:15%;animation-delay:1s}
@keyframes f{50%{transform:translateY(-18px) rotate(8deg)}}
.flower{position:fixed;top:-30px;pointer-events:none;animation:fall linear infinite}
@keyframes fall{to{transform:translateY(110vh) translateX(60px) rotate(360deg)}}
#heart{position:fixed;pointer-events:none;transform:translate(-50%,-50%);font-size:22px;z-index:9999}
</style></head>

    <body class="min-h-screen flex flex-col text-pink-800">
        <div class="bow b1">🎀</div><div class="bow b2">🎀</div><div class="bow b3">🎀</div>
        <header class="max-w-6xl w-full mx-auto p-6 flex justify-between items-center">
        <a href="/" class="font-black text-2xl bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent">🎀 ARTHITTAYA.SI</a>
        <nav class="glass rounded-full px-4 py-2 flex gap-4"><a href="/welcome" class="font-bold text-pink-600">หน้าแรก</a><a href="/blog">บทความ</a><a href="/about">เกี่ยวกับฉัน</a></nav>
        </header>
        <main class="flex-grow max-w-5xl mx-auto p-6 flex flex-col items-center justify-center">
<span class="glass rounded-full px-4 py-2 mb-8">🌸 Laravel 12 & Tailwind</span>
<h1 class="text-5xl font-black text-center">ยินดีต้อนรับสู่<br><span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent">พื้นที่สร้างสรรค์ของกะเต๋ว</span></h1>
<p class="text-center mt-6 max-w-2xl">ยินดีต้อนรับเข้าสู่พื้นที่สรุปแนวคิด ประสบการณ์ และแบ่งปันเรื่องราวเกี่ยวกับการพัฒนาเว็บไซต์ด้วย Laravel และ Tailwind CSS</p>
<div class="flex gap-4 mt-8"><a href="/blog" class="bg-pink-500 text-white px-6 py-3 rounded-xl">อ่านบทความ</a><a href="/about" class="glass px-6 py-3 rounded-xl">เกี่ยวกับฉัน</a></div>
<div class="grid md:grid-cols-3 gap-6 w-full mt-16">
<div class="glass-card p-6 rounded-2xl"><h3>📚 บทความ</h3><p>เทคนิคและสรุปการเขียนโค้ด</p></div>
<div class="glass-card p-6 rounded-2xl"><h3>💻 โปรเจกต์</h3><p>Laravel 12 และ Tailwind CSS</p></div>
<div class="glass-card p-6 rounded-2xl"><h3>✨ ไลฟ์สไตล์</h3><p>แรงบันดาลใจและการเรียนรู้</p></div>
</div>
</main>
<footer class="text-center p-6 text-pink-500">© 2026 Arthittaya</footer>
<div id="heart">💖</div>
<script>
lucide.createIcons();
const h=document.getElementById('heart');
document.addEventListener('mousemove',e=>{h.style.left=e.clientX+'px';h.style.top=e.clientY+'px';});
for(let i=0;i<30;i++){let f=document.createElement('div');f.className='flower';f.textContent='🌸';f.style.left=Math.random()*100+'vw';f.style.animationDuration=(5+Math.random()*5)+'s';f.style.animationDelay=Math.random()*5+'s';f.style.fontSize=(14+Math.random()*18)+'px';document.body.appendChild(f);}
</script></body></html>