<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="#115c38">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- شريط التوب بار الفاخر -->
<div class="luxury-topbar">
    <div class="container">
        <div class="topbar-right">
            <i class="fas fa-calendar-alt"></i>
            <span class="current-date"><?php echo wp_date('l, d F Y'); ?></span>
        </div>
        <div class="topbar-center">
            <span class="gov-badge"><i class="fas fa-shield-alt"></i> المنصة الرسمية المعتمدة</span>
        </div>
        <div class="topbar-left">
            <div class="social-icons-top">
                <a href="<?php echo esc_url(get_theme_mod('alzaytoon_facebook', '#')); ?>" target="_blank" aria-label="فيسبوك"><i class="fab fa-facebook-f"></i></a>
                <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alzaytoon_whatsapp', '')); ?>" target="_blank" aria-label="واتساب"><i class="fab fa-whatsapp"></i></a>
                <a href="<?php echo esc_url(get_theme_mod('alzaytoon_telegram', '#')); ?>" target="_blank" aria-label="تليجرام"><i class="fab fa-telegram-plane"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- الهيدر الرئيسي الفاخر -->
<header class="luxury-header">
    <div class="container">
        <!-- الشعار والاسم -->
        <div class="logo-area">
            <div class="logo-icon-wrapper">
                <i class="fas fa-tree"></i>
                <div class="pulse-ring"></div>
            </div>
            <div class="logo-text">
                <h1>شبكة حي الزيتون</h1>
                <span>الإعلامية – الخدمية – الرقمية</span>
            </div>
        </div>
        
        <!-- أزرار الإجراءات السريعة (للشاشات الكبيرة) -->
        <div class="header-actions">
            <button class="action-btn help-btn" onclick="openGovModal('help')">
                <i class="fas fa-hand-holding-heart"></i>
                <div class="btn-text">
                    <strong>تقديم مناشدة</strong>
                    <small>الديوان الإلكتروني</small>
                </div>
            </button>
            <button class="action-btn lost-btn" onclick="openGovModal('lost')">
                <i class="fas fa-search-location"></i>
                <div class="btn-text">
                    <strong>الإبلاغ عن مفقود</strong>
                    <small>بوابة المفقودات</small>
                </div>
            </button>
        </div>
        
        <!-- زر القائمة للجوال (الهامبرغر الفاخر) -->
        <button class="mobile-menu-trigger" id="mobileMenuTrigger">
            <span class="menu-icon">
                <span></span><span></span><span></span>
            </span>
            <span class="menu-text">القائمة</span>
        </button>
    </div>
</header>

<!-- شريط التنقل الرئيسي (للكمبيوتر) والقائمة المنزلقة (للجوال) -->
<nav class="luxury-nav">
    <div class="container">
        <!-- القائمة العادية للكمبيوتر -->
        <div class="nav-desktop">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-menu-desktop',
                    'depth'          => 1,
                ) );
            } else {
                ?>
                <ul class="nav-menu-desktop">
                    <li><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('news'); ?>"><i class="far fa-newspaper"></i> أخبار الحي</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('events'); ?>"><i class="far fa-calendar-alt"></i> الفعاليات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('help'); ?>"><i class="fas fa-hand-holding-heart"></i> المناشدات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('person'); ?>"><i class="fas fa-user-tie"></i> شخصية الأسبوع</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('lost'); ?>"><i class="fas fa-search-location"></i> المفقودات</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
        
        <!-- زر الاتصال السريع (للشاشات الكبيرة) -->
        <a href="tel:<?php echo esc_attr(get_theme_mod('alzaytoon_phone', '')); ?>" class="nav-contact-phone">
            <i class="fas fa-phone-alt"></i> <span>اتصل بنا</span>
        </a>
    </div>
    
    <!-- القائمة الجانبية المنزلقة للجوال (Mobile Slide Menu) -->
    <div class="mobile-slide-menu" id="mobileSlideMenu">
        <div class="slide-menu-header">
            <div class="slide-logo">
                <i class="fas fa-tree"></i>
                <span>شبكة حي الزيتون</span>
            </div>
            <button class="close-menu-btn" id="closeMenuBtn"><i class="fas fa-times"></i></button>
        </div>
        <div class="slide-menu-body">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-nav-list',
                    'depth'          => 1,
                ) );
            } else {
                ?>
                <ul class="mobile-nav-list">
                    <li><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('news'); ?>"><i class="far fa-newspaper"></i> أخبار الحي</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('events'); ?>"><i class="far fa-calendar-alt"></i> الفعاليات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('help'); ?>"><i class="fas fa-hand-holding-heart"></i> المناشدات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('person'); ?>"><i class="fas fa-user-tie"></i> شخصية الأسبوع</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('lost'); ?>"><i class="fas fa-search-location"></i> المفقودات</a></li>
                </ul>
                <?php
            }
            ?>
            
            <!-- أزرار سريعة داخل القائمة المنزلقة -->
            <div class="slide-menu-actions">
                <button class="slide-action-btn help" onclick="openGovModal('help'); closeSlideMenu();">
                    <i class="fas fa-hand-holding-heart"></i> مناشدة جديدة
                </button>
                <button class="slide-action-btn lost" onclick="openGovModal('lost'); closeSlideMenu();">
                    <i class="fas fa-search-location"></i> إبلاغ عن مفقود
                </button>
                <button class="slide-action-btn news" onclick="openGovModal('news'); closeSlideMenu();">
                    <i class="fas fa-camera"></i> إرسال خبر
                </button>
            </div>
            
            <div class="slide-menu-social">
                <a href="<?php echo esc_url(get_theme_mod('alzaytoon_facebook', '#')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alzaytoon_whatsapp', '')); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="<?php echo esc_url(get_theme_mod('alzaytoon_telegram', '#')); ?>" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                <a href="tel:<?php echo esc_attr(get_theme_mod('alzaytoon_phone', '')); ?>"><i class="fas fa-phone-alt"></i></a>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
</nav>

<!-- الشريط الإخباري العاجل -->
<div class="luxury-ticker">
    <div class="container">
        <div class="ticker-badge">
            <i class="fas fa-bullhorn"></i>
            <span><?php echo esc_html(get_theme_mod('alzaytoon_ticker_title', 'تنويه رسمي عاجل')); ?></span>
        </div>
        <div class="ticker-text">
            <span id="typingTickerElement" class="typing-text-data"></span>
            <span class="typing-cursor">|</span>
        </div>
    </div>
</div>

<!-- جافاسكربت الهيدر التفاعلي -->
<script>
// قائمة الجوال المنزلقة
const mobileTrigger = document.getElementById('mobileMenuTrigger');
const slideMenu = document.getElementById('mobileSlideMenu');
const menuOverlay = document.getElementById('mobileMenuOverlay');
const closeMenuBtn = document.getElementById('closeMenuBtn');

function openSlideMenu() {
    slideMenu.classList.add('active');
    menuOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeSlideMenu() {
    slideMenu.classList.remove('active');
    menuOverlay.classList.remove('active');
    document.body.style.overflow = '';
}

if(mobileTrigger) mobileTrigger.addEventListener('click', openSlideMenu);
if(closeMenuBtn) closeMenuBtn.addEventListener('click', closeSlideMenu);
if(menuOverlay) menuOverlay.addEventListener('click', closeSlideMenu);

// إغلاق القائمة عند الضغط على رابط داخلي
document.querySelectorAll('.mobile-nav-list a, .slide-action-btn').forEach(link => {
    link.addEventListener('click', () => {
        setTimeout(closeSlideMenu, 150);
    });
});

// تأثير الهيدر عند التمرير
window.addEventListener('scroll', () => {
    const header = document.querySelector('.luxury-header');
    if(window.scrollY > 50) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});
</script>
