<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Profile Card UI Design</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Boxicons CSS -->
    <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet"
    />
</head>
<style>
    /* Google Fonts - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f4f4f4;
    }
    .profile-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 370px;
        width: 100%;
        background: #fff;
        border-radius: 24px;
        padding: 25px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    .profile-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 36%;
        width: 100%;
        border-radius: 24px 24px 0 0;
        background-color: #4070f4;
    }
    .image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background-color: #4070f4;
        padding: 3px;
        margin-bottom: 10px;
    }
    .image .profile-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
    }
    .profile-card .text-data {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #333;
    }
    .text-data .name {
        font-size: 22px;
        font-weight: 500;
    }
    .text-data .job {
        font-size: 15px;
        font-weight: 400;
    }
    .profile-card .media-buttons {
        display: flex;
        align-items: center;
        margin-top: 15px;
    }
    .media-buttons .link {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
        height: 34px;
        width: 34px;
        border-radius: 50%;
        margin: 0 8px;
        background-color: #4070f4;
        text-decoration: none;
    }
    .profile-card .buttons {
        display: flex;
        align-items: center;
        margin-top: 25px;
    }
    .buttons .button {
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        border: none;
        border-radius: 24px;
        margin: 0 10px;
        padding: 8px 24px;
        background-color: #4070f4;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .buttons .button:hover {
        background-color: #0e4bf1;
    }
    .profile-card .analytics {
        display: flex;
        align-items: center;
        margin-top: 25px;
    }
    .analytics .data {
        display: flex;
        align-items: center;
        color: #333;
        padding: 0 20px;
        border-right: 2px solid #e7e7e7;
    }
    .data i {
        font-size: 18px;
        margin-right: 6px;
    }
    .data:last-child {
        border-right: none;
    }

</style>
<body>
<div class="profile-card">
    <div class="image">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjxivAs4UknzmDfLBXGMxQkayiZDhR2ftB4jcIV7LEnIEStiUyMygioZnbLXCAND-I_xWQpVp0jv-dv9NVNbuKn4sNpXYtLIJk2-IOdWQNpC2Ldapnljifu0pnQqAWU848Ja4lT9ugQex-nwECEh3a96GXwiRXlnGEE6FFF_tKm66IGe3fzmLaVIoNL/s1600/img_avatar.png" alt="" class="profile-img" />
    </div>

    <div class="text-data">
{{--        <span class="name">{{$post->full_name}}</span>--}}
{{--        <span class="job">{{$post->phone}} & {{$post->direction}}</span>--}}
    </div>
    <div class="media-buttons">
        <a href="https://t.me/Foreverconsult1" style="background: #4267b2" class="link">
            <i class="bx bxl-telegram"></i>
        </a>
        <a href="tel:+998993394408" style="background: #1da1f2" class="link">
            <i class="bx bxl-slack"></i>
        </a>
        <a href="instagram://user?username=foredu_uz" style="background: #e1306c" class="link">
            <i class="bx bxl-instagram"></i>
        </a>
    </div>

    <div class="buttons">
        Sizga tez orada aloqaga chiqamiz!
    </div>

</div>
</body>
</html>

