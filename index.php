<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Courses</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#011425;
    color:white;
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

/* CARDS */

.cards{
    padding:20px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.card{
    background:#1F4959;
    border-radius:14px;
    overflow:hidden;
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
    margin:0;
    font-size:18px;
}

.card p{
    font-size:13px;
    opacity:.7;
    margin:10px 0;
}

.card button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
    background:white;
    color:black;
    font-weight:bold;
    cursor:pointer;
}

/* STATS */

.stats{
    display:flex;
    justify-content:center;
    gap:20px;
    padding:20px;
}

.stat{
    background:#1F4959;
    padding:15px;
    border-radius:10px;
    text-align:center;
    min-width:90px;
}

.stat h2{
    margin:0;
    color:#7ab8cb;
}

.stat p{
    margin:5px 0 0;
    font-size:12px;
}

</style>
</head>

<body>

<!-- BANNER -->

<div class="banner">
    <img src="https://sdvbots.site/img/um.jpg">
</div>

<!-- CARDS -->

<div class="cards">

    <div class="card"
         onclick="window.open('/offline','_blank')">

        <img src="https://sdvbots.site/img/um.jpg">

        <div class="card-body">

            <h3>Offline Batches</h3>

            <p>
                Join offline classroom batches.
            </p>

            <button>
                Explore
            </button>

        </div>

    </div>

    <div class="card"
         onclick="window.open('/goal','_blank')">

        <img src="https://sdvbots.site/img/um.jpg">

        <div class="card-body">

            <h3>Teachers Courses</h3>

            <p>
                Browse thousands of courses.
            </p>

            <button>
                Explore
            </button>

        </div>

    </div>

</div>

<!-- STATS -->

<div class="stats">

    <div class="stat">
        <h2>1000+</h2>
        <p>Batches</p>
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

</body>
</html>
