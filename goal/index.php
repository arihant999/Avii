<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AVII Courses</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#011425;
    color:white;
    overflow-x:hidden;
}

/* BACKGROUND */

body::before{
    content:'';
    position:fixed;
    inset:0;
    background:
    radial-gradient(circle at top left, rgba(31,73,89,.35), transparent 40%),
    radial-gradient(circle at bottom right, rgba(92,124,137,.25), transparent 40%);
    z-index:-1;
}

/* BANNER */

.banner{
    width:100%;
    height:180px;
    overflow:hidden;
}

.banner img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* SECTION */

.section{
    padding:20px;
}

.section-title{
    font-size:14px;
    letter-spacing:2px;
    text-transform:uppercase;
    color:#7ab8cb;
    margin-bottom:15px;
}

/* GRID */

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:20px;
}

/* CARD */

.card{
    background:#1F4959;
    border-radius:16px;
    overflow:hidden;
    border:1px solid rgba(255,255,255,.08);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card img{
    width:100%;
    height:150px;
    object-fit:cover;
}

.card-body{
    padding:15px;
}

.card h3{
    font-size:18px;
    margin-bottom:8px;
}

.card p{
    font-size:13px;
    opacity:.7;
    line-height:1.5;
    margin-bottom:15px;
}

.card button{
    width:100%;
    border:none;
    background:white;
    color:black;
    padding:11px;
    border-radius:10px;
    font-weight:700;
    cursor:pointer;
}

/* STATS */

.stats{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:15px;
    padding:20px;
}

.stat{
    background:#1F4959;
    border-radius:14px;
    padding:20px;
    text-align:center;
}

.stat h2{
    color:#7ab8cb;
    margin-bottom:5px;
}

.stat p{
    font-size:13px;
    opacity:.7;
}

/* FOOTER */

.footer{
    text-align:center;
    padding:20px;
    font-size:13px;
    opacity:.6;
}

/* MOBILE */

@media(max-width:700px){

.stats{
    grid-template-columns:1fr;
}

.banner{
    height:150px;
}

}

</style>
</head>

<body>

<!-- TOP BANNER -->

<div class="banner">
    <img src="https://sdvbots.site/img/um.jpg">
</div>

<!-- COURSES -->

<div class="section">

    <div class="section-title">
        Explore
    </div>

    <div class="grid">

        <!-- OFFLINE -->

        <div class="card">

            <img src="https://sdvbots.site/img/um.jpg">

            <div class="card-body">

                <h3>Offline Batches</h3>

                <p>
                    Join offline classroom batches with expert teachers.
                </p>

                <button onclick="window.location.href='https://sdvbots.site/offline'">
                    Explore
                </button>

            </div>

        </div>

        <!-- COURSES -->

        <div class="card">

            <img src="https://sdvbots.site/img/um.jpg">

            <div class="card-body">

                <h3>Teachers Courses</h3>

                <p>
                    Browse premium teacher courses anytime anywhere.
                </p>

                <button onclick="window.location.href='https://sdvbots.site/goal2'">
                    Explore
                </button>

            </div>

        </div>

    </div>

</div>

<!-- STATS -->

<div class="stats">

    <div class="stat">
        <h2>1000+</h2>
        <p>Offline Batches</p>
    </div>

    <div class="stat">
        <h2>5000+</h2>
        <p>Courses</p>
    </div>

    <div class="stat">
        <h2>2000+</h2>
        <p>Students</p>
    </div>

</div>

<!-- FOOTER -->

<div class="footer">
    © 2025 AVII
</div>

</body>
</html>
