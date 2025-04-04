<?php
// profile.php
$user = [
    'name' => 'Lê Văn Thắng',
    'email' => 'badaotulong123@gmail.com',
    'phone' => '0914 476 792',
    'address' => 'Tân Thành, Tân Phú, Hồ Chí Minh',
    'bio' => 'Tôi là một lập trình viên yêu thích công nghệ và khám phá những điều mới mẻ.',
    'avatar' => 'image/hinh1.png',
    'zalo' => 'https://zalo.me/0914476792',
    'telegram' => 'https://t.me/thangrai',
    'facebook' => 'https://facebook.com/Helloiamngocminh'
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?php echo $user['name']; ?></title>
    <!-- Bootstrap CSS tối ưu -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font Awesome cho icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <canvas id="particles"></canvas>
    <div class="container profile-container">
        <div class="profile-card">
            <div class="avatar-container">
                <div class="avatar-glow"></div>
                <img src="<?php echo $user['avatar']; ?>" alt="Avatar" class="avatar" loading="lazy">
            </div>
            <h2 class="name"><?php echo $user['name']; ?></h2>
            <p class="bio"><?php echo $user['bio']; ?></p>
            
            <div class="contact-list">
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><?php echo $user['email']; ?></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span><?php echo $user['phone']; ?></span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?php echo $user['address']; ?></span>
                </div>
            </div>

            <div class="social-buttons">
                <a href="<?php echo $user['facebook']; ?>" target="_blank" class="social-btn">
                    <img src="image/fb.png" alt="Facebook" loading="lazy">
                </a>
                <a href="<?php echo $user['zalo']; ?>" target="_blank" class="social-btn">
                    <img src="image/zalo.png" alt="Zalo" loading="lazy">
                </a>
                <a href="<?php echo $user['telegram']; ?>" target="_blank" class="social-btn">
                    <img src="image/tele.png" alt="Telegram" loading="lazy">
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS tối ưu -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <!-- Particle.js tối ưu -->
    <script src="script.js"></script>
</body>
</html>