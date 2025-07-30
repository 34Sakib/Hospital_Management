<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Doctors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* --- Favorite Doctors Screenshot Styles --- */
        .fav-title {
            margin-top: 0;
            margin-bottom: 40px;
            font-size: 2em;
            font-weight: 600;
            color: #222;
            letter-spacing: 0.5px;
        }
        .fav-doctor-cards {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 40px;
            margin-top: 0;
        }
        .fav-doctor-card {
            background: #e3f4fa;
            border-radius: 24px;
            box-shadow: 0 2px 16px rgba(44, 140, 153, 0.06);
            width: 320px;
            height: 340px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding: 32px 0 0 0;
        }
        .fav-doctor-img-bg {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 16px;
        }
        .fav-doctor-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            background: #fff;
        }
        .fav-doctor-name {
            color: #1ca7c9;
            font-weight: 700;
            font-size: 1.13em;
            margin-bottom: 4px;
            margin-top: 8px;
            text-align: center;
        }
        .fav-doctor-role {
            color: #888;
            font-size: 1em;
            text-align: center;
            margin-bottom: 0;
        }
        .fav-doctor-actions {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 64px;
            display: flex;
            gap: 18px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(44, 140, 153, 0.09);
            padding: 7px 20px;
            z-index: 2;
            align-items: center;
        }
        .fav-action-btn {
            background: #fff;
            border: none;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(44, 140, 153, 0.07);
            cursor: pointer;
            transition: background 0.18s;
            padding: 0;
        }
        .fav-action-btn:hover {
            background: #e3f4fa;
        }
        @media (max-width: 1100px) {
            .fav-doctor-cards {
                flex-direction: column;
                align-items: center;
                gap: 32px;
            }
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fafbfb;
            color: #222;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background: #fff;
            border-right: 1px solid #ececec;
            padding: 30px 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .logo {
            font-weight: bold;
            font-size: 1.3em;
            display: flex;
            align-items: center;
            letter-spacing: 0.5px;
        }
        .logo-circle {
            width: 32px;
            height: 32px;
            background: #13382e;
            border-radius: 50%;
            margin-right: 10px;
            display: inline-block;
        }
        .sidebar .logo {
            margin-left: 30px;
            margin-bottom: 40px;
        }
        .sidebar nav {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
            padding: 0 12px;
            box-sizing: border-box;
        }
        .sidebar nav a {
            text-decoration: none;
            color: #222;
            display: flex;
            align-items: center;
            font-size: 15px;
            padding: 10px 16px;
            border-radius: 8px;
            transition: background 0.2s, color 0.2s, font-weight 0.2s;
            width: 100%;
            box-sizing: border-box;
        }
        .sidebar nav a.active,
        .sidebar nav a:hover {
            color: #00796b;
            font-weight: bold;
            background: #eaf6f3;
        }
        .sidebar nav a .icon {
            margin-right: 10px;
            font-size: 16px;
        }
        .main {
            flex: 1;
            padding: 40px 40px 0 40px;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #ececec;
            padding: 0 40px;
        }
        .back-btn {
            background: #eaf6f3;
            border: none;
            border-radius: 8px;
            padding: 7px 18px;
            color: #00796b;
            font-size: 15px;
            cursor: pointer;
        }
        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e0e0e0;
        }
        .content {
            margin-top: 40px;
        }
        .content h2 {
            margin-bottom: 30px;
            font-size: 1.4em;
            font-weight: 600;
        }
        .favorite-cards {
            display: flex;
            gap: 48px;
            margin-top: 30px;
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        .doctor-card {
            background: #e8f7fa;
            border-radius: 24px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            padding: 38px 18px 24px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
            min-height: 420px;
            position: relative;
            transition: box-shadow 0.2s, transform 0.2s;
        }
        .doctor-card:hover {
            box-shadow: 0 6px 16px rgba(0,0,0,0.08);
            transform: translateY(-4px);
        }
        .doctor-img {
            width: 145px;
            height: 145px;
            border-radius: 50%;
            object-fit: cover;
            border: none;
            margin-bottom: 24px;
            background: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        }
        .doctor-name {
            color: #1ca7c9;
            font-weight: 700;
            font-size: 1.18em;
            margin-bottom: 6px;
            text-align: center;
        }
        .doctor-role {
            font-size: 1.03em;
            color: #444;
            margin-bottom: 18px;
            text-align: center;
        }
        .doctor-actions {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            justify-content: center;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 8px 18px;
        }
        .doctor-action-btn {
            background: none;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1ca7c9;
            font-size: 1.25em;
            cursor: pointer;
            transition: background 0.2s;
        }
        .doctor-action-btn:hover {
            background: #e8f7fa;
        }
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid #ececec;
            }
            .main {
                padding: 20px 10px;
            }
            .topbar {
                padding: 0 10px;
            }
            .favorite-cards {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
<div class="topbar">
    <div class="logo">
        <div class="logo-circle"></div>
        LOGO
    </div>
    <div style="display: flex; align-items: center; gap: 16px;">
        <a href="{{ route('home') }}" class="back-btn">&larr; Back</a>
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar" class="avatar">
    </div>
</div>

<div class="container">
    <aside class="sidebar">
        <nav>
            <a href="{{ route('profile') }}"><span class="icon">👤</span> Profile</a>
            <a href="{{ route('profile.appointments') }}"><span class="icon">📅</span> Appointments</a>
            <a href="{{ route('profile.favorite') }}" class="active"><span class="icon">❤️</span> Favorite Doctor</a>
            <a href="{{ route('profile.service-history') }}"><span class="icon">🕑</span> Service History</a>
        </nav>
    </aside>

    <div class="main">
        <div class="content">
            <h2 class="fav-title">Favorite Doctors</h2>
            <div class="fav-doctor-cards">
                <div class="fav-doctor-card">
                    <div class="fav-doctor-img-bg">
                        <img class="fav-doctor-img" src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small_2x/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg" alt="Dr. Emily Brown">
                    </div>
                    <div class="fav-doctor-name">Dr. Emily Brown</div>
                    <div class="fav-doctor-role">senior physiotherapist</div>
                </div>
                <div class="fav-doctor-card">
                    <div class="fav-doctor-img-bg">
                        <img class="fav-doctor-img" src="https://thumbs.dreamstime.com/b/female-doctor-23301058.jpg" alt="Dr. Emily Brown">
                    </div>
                    <div class="fav-doctor-actions">
                        <button class="fav-action-btn" title="Call">
                            <svg width="20" height="20" fill="#1ca7c9" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.19 21 3 13.81 3 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.24 1.01l-2.2 2.2z"></path></svg>
                        </button>
                        <button class="fav-action-btn" title="Chat">
                            <svg width="20" height="20" fill="#1ca7c9" viewBox="0 0 24 24"><path d="M12 3C6.48 3 2 6.97 2 12c0 1.61.48 3.13 1.36 4.46l-1.25 3.32a1 1 0 001.28 1.28l3.32-1.25A9.953 9.953 0 0012 21c5.52 0 10-3.97 10-9s-4.48-9-10-9zm-2 9h4v2h-4v-2zm0-4h8v2h-8V8z"></path></svg>
                        </button>
                        <button class="fav-action-btn" title="Video">
                            <svg width="20" height="20" fill="#1ca7c9" viewBox="0 0 24 24"><path d="M17 10.5V7c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2v-3.5l4 4v-11l-4 4z"></path></svg>
                        </button>
                    </div>
                    <div class="fav-doctor-name">Dr. Emily Brown</div>
                    <div class="fav-doctor-role">senior physiotherapist</div>
                </div>
                <div class="fav-doctor-card">
                    <div class="fav-doctor-img-bg">
                        <img class="fav-doctor-img" src="https://img.freepik.com/premium-photo/male-female-doctor-portrait-healthcare-medical-staff-concept-confident-doctor-portrait_1108314-405796.jpg" alt="Dr. Emily Brown">
                    </div>
                    <div class="fav-doctor-name">Dr. Emily Brown</div>
                    <div class="fav-doctor-role">senior physiotherapist</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
