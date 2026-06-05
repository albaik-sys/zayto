<?php get_header(); ?>

<style>
    /* ==============================================
       الأنماط المدمجة للصفحة الرئيسية الخرافية
    ============================================== */
    .hero-news-master {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 25px;
        margin-bottom: 45px;
    }
    
    /* السلايدر الرئيسي */
    .main-slider-area {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        height: 480px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    .slider-container {
        position: relative;
        height: 100%;
    }
    .slider-slide {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 0.8s ease;
    }
    .slider-slide.active {
        opacity: 1;
        z-index: 1;
    }
    .slider-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.3));
        z-index: 2;
    }
    .slider-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 40px;
        color: #fff;
        z-index: 3;
    }
    .slider-badge {
        display: inline-block;
        background: #d4af37;
        padding: 5px 15px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 800;
        margin-bottom: 15px;
    }
    .slider-content h2 {
        font-size: 32px;
        font-weight: 900;
        margin-bottom: 12px;
    }
    .slider-content p {
        font-size: 15px;
        opacity: 0.9;
        margin-bottom: 20px;
        max-width: 80%;
    }
    .slider-btn {
        background: #d4af37;
        color: #115c38;
        padding: 10px 25px;
        border-radius: 30px;
        font-weight: 800;
        text-decoration: none;
        display: inline-block;
    }
    .slider-dots {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 10;
        display: flex;
        gap: 10px;
    }
    .slider-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
    }
    .slider-dot.active {
        background: #d4af37;
        width: 25px;
        border-radius: 10px;
    }
    
    /* الشريط الجانبي للأخبار السريعة */
    .quick-news-sidebar {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border: 1px solid #eee;
    }
    .quick-news-header {
        background: #115c38;
        color: #fff;
        padding: 15px 20px;
        font-weight: 800;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .quick-news-list {
        padding: 10px 0;
    }
    .quick-news-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: 0.3s;
    }
    .quick-news-item:hover {
        background: #f9f9f9;
        transform: translateX(-5px);
    }
    .quick-news-img {
        width: 65px;
        height: 55px;
        border-radius: 8px;
        object-fit: cover;
    }
    .quick-news-title {
        flex: 1;
        font-size: 13px;
        font-weight: 700;
        color: #222;
        text-decoration: none;
    }
    .quick-news-title:hover {
        color: #115c38;
    }
    
    /* أزرار الخدمات السريعة */
    .services-5grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 15px;
        margin: 40px 0;
    }
    .service-card {
        background: #fff;
        padding: 25px 15px;
        text-align: center;
        border-radius: 16px;
        cursor: pointer;
        transition: 0.3s;
        border: 1px solid #e2e8f0;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
    }
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(17,92,56,0.1);
        border-color: #d4af37;
    }
    .service-icon {
        width: 60px;
        height: 60px;
        background: #f0f5f2;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        font-size: 26px;
    }
    .service-card.help .service-icon { color: #2ecc71; }
    .service-card.lost .service-icon { color: #e74c3c; }
    .service-card.news .service-icon { color: #3498db; }
    .service-card.person .service-icon { color: #d4af37; }
    .service-card.events .service-icon { color: #f39c12; }
    .service-title {
        font-weight: 800;
        font-size: 14px;
        margin-bottom: 5px;
    }
    .service-desc {
        font-size: 11px;
        color: #888;
    }
    
    /* شبكة المحتوى الرئيسية */
    .home-main-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
        margin: 45px 0;
    }
    
    /* أخبار رئيسية مع سلايدر داخلي */
    .featured-news-area {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #eee;
    }
    .section-head {
        background: #115c38;
        color: #fff;
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .section-head h3 {
        margin: 0;
        font-size: 18px;
    }
    .section-head i {
        color: #d4af37;
        margin-left: 8px;
    }
    .news-feature-slider {
        position: relative;
        height: 320px;
        overflow: hidden;
    }
    .feature-slide {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: 0.5s;
    }
    .feature-slide.active {
        opacity: 1;
    }
    .feature-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    }
    .feature-content {
        position: absolute;
        bottom: 0;
        padding: 25px;
        color: #fff;
    }
    .feature-content h4 {
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 8px;
    }
    .news-list-grid {
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .news-list-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
    }
    .news-list-img {
        width: 80px;
        height: 60px;
        border-radius: 10px;
        object-fit: cover;
    }
    .news-list-info {
        flex: 1;
    }
    .news-list-title {
        font-size: 14px;
        font-weight: 800;
        margin-bottom: 5px;
    }
    .news-list-title a {
        color: #222;
        text-decoration: none;
    }
    .news-list-title a:hover {
        color: #115c38;
    }
    .news-list-date {
        font-size: 11px;
        color: #999;
    }
    
    /* بطاقات المناشدات والمفقودات في السايدبار */
    .appeals-list-compact {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #eee;
        margin-bottom: 25px;
    }
    .appeal-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 20px;
        border-bottom: 1px solid #f5f5f5;
    }
    .appeal-badge {
        font-size: 10px;
        padding: 3px 10px;
        border-radius: 20px;
        font-weight: 800;
        margin-left: 12px;
    }
    .badge-urgent { background: #e74c3c; color: #fff; }
    .badge-necessary { background: #e67e22; color: #fff; }
    .badge-following { background: #3498db; color: #fff; }
    .badge-new { background: #2ecc71; color: #fff; }
    .appeal-title {
        flex: 1;
        font-size: 13px;
        font-weight: 700;
        color: #333;
        text-decoration: none;
    }
    .appeal-date {
        font-size: 11px;
        color: #aaa;
    }
    
    /* شخصية الأسبوع */
    .person-widget {
        background: linear-gradient(135deg, #115c38 0%, #0b3d25 100%);
        border-radius: 20px;
        padding: 25px;
        text-align: center;
        margin-bottom: 25px;
    }
    .person-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 3px solid #d4af37;
        margin: 0 auto 15px;
        object-fit: cover;
    }
    .person-name {
        color: #d4af37;
        font-size: 18px;
        font-weight: 900;
        margin-bottom: 8px;
    }
    .person-bio {
        color: #ddd;
        font-size: 13px;
        margin-bottom: 15px;
    }
    
    /* استطلاع الرأي */
    .poll-widget {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        border: 1px solid #eee;
        margin-bottom: 25px;
    }
    .poll-question {
        font-size: 15px;
        font-weight: 800;
        margin-bottom: 20px;
        text-align: center;
    }
    .poll-option {
        margin-bottom: 15px;
    }
    .poll-option label {
        font-weight: 700;
        font-size: 13px;
        display: block;
        margin-bottom: 5px;
    }
    .poll-bar {
        height: 8px;
        background: #eee;
        border-radius: 10px;
        overflow: hidden;
    }
    .poll-fill {
        height: 100%;
        background: #115c38;
        width: 0%;
        transition: width 0.8s;
    }
    
    /* دليل الطوارئ */
    .emergency-widget {
        background: #fff;
        border-radius: 20px;
        padding: 20px;
        border: 1px solid #eee;
        border-top: 4px solid #e74c3c;
    }
    .emergency-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid #f5f5f5;
    }
    .emergency-number {
        font-family: monospace;
        font-weight: 900;
        font-size: 16px;
    }
    
    /* شبكة الأقسام السفلية (أخبار مقسمة) */
    .bottom-sections {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin: 50px 0;
    }
    .bottom-section-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid #eee;
    }
    .bottom-section-header {
        background: #115c38;
        color: #fff;
        padding: 12px 20px;
        font-weight: 800;
    }
    .bottom-section-list {
        padding: 15px;
    }
    .bottom-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    .bottom-item:last-child {
        border-bottom: none;
    }
    .bottom-item-icon {
        width: 8px;
        height: 8px;
        background: #d4af37;
        border-radius: 50%;
    }
    .bottom-item-title {
        flex: 1;
        font-size: 13px;
        font-weight: 700;
        color: #333;
        text-decoration: none;
    }
    
    @media(max-width: 992px) {
        .hero-news-master { grid-template-columns: 1fr; }
        .services-5grid { grid-template-columns: repeat(3, 1fr); }
        .home-main-grid { grid-template-columns: 1fr; }
        .bottom-sections { grid-template-columns: 1fr; }
    }
    @media(max-width: 600px) {
        .services-5grid { grid-template-columns: repeat(2, 1fr); }
    }
</style>

<div class="container gov-portal-wrapper">
    
    <!-- ==================== القسم الأول: السلايدر + أخبار جانبية ==================== -->
    <div class="hero-news-master">
        
        <!-- السلايدر الرئيسي -->
        <div class="main-slider-area">
            <div class="slider-container" id="heroSlider">
                <?php
                $slider_posts = new WP_Query(array(
                    'post_type' => array('news', 'events'),
                    'posts_per_page' => 5,
                    'post_status' => 'publish'
                ));
                $slide_index = 0;
                if($slider_posts->have_posts()) :
                    while($slider_posts->have_posts()) : $slider_posts->the_post();
                    $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : 'https://picsum.photos/1200/600?random=' . get_the_ID();
                    $active_class = ($slide_index == 0) ? 'active' : '';
                ?>
                <div class="slider-slide <?php echo $active_class; ?>" style="background-image: url('<?php echo $img_url; ?>');">
                    <div class="slider-overlay"></div>
                    <div class="slider-content">
                        <span class="slider-badge">
                            <?php echo (get_post_type() == 'events') ? '<i class="fas fa-calendar-alt"></i> فعالية' : '<i class="fas fa-newspaper"></i> خبر عاجل'; ?>
                        </span>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="slider-btn">اقرأ التفاصيل <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <?php $slide_index++; endwhile; wp_reset_postdata(); ?>
                <div class="slider-dots" id="sliderDots"></div>
                <?php else: ?>
                <div class="slider-slide active" style="background-image: url('https://picsum.photos/1200/600');">
                    <div class="slider-overlay"></div>
                    <div class="slider-content">
                        <span class="slider-badge"><i class="fas fa-bolt"></i> منصة جديدة</span>
                        <h2>شبكة حي الزيتون</h2>
                        <p>المنصة الرسمية لأخبار ومناشدات وخدمات حي الزيتون</p>
                        <a href="#" class="slider-btn">اكتشف المزيد</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- الشريط الجانبي: أحدث الأخبار المصغرة -->
        <div class="quick-news-sidebar">
            <div class="quick-news-header">
                <span><i class="fas fa-bolt" style="color:#d4af37;"></i> أحدث الأخبار العاجلة</span>
                <a href="<?php echo get_post_type_archive_link('news'); ?>" style="color:#fff; font-size:12px;">المزيد <i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="quick-news-list">
                <?php
                $quick_news = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 5, 'post_status' => 'publish'));
                if($quick_news->have_posts()) :
                    while($quick_news->have_posts()) : $quick_news->the_post();
                ?>
                <div class="quick-news-item">
                    <?php if(has_post_thumbnail()) : ?>
                        <img class="quick-news-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
                    <?php else : ?>
                        <img class="quick-news-img" src="https://picsum.photos/65/55?random=<?php echo get_the_ID(); ?>" alt="">
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="quick-news-title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
                    <small style="font-size:10px; color:#aaa;"><?php echo get_the_date('d/m'); ?></small>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
    
    <!-- ==================== أزرار الخدمات السريعة (5 أقسام) ==================== -->
    <div class="services-5grid">
        <div class="service-card help" onclick="openGovModal('help')">
            <div class="service-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <div class="service-title">مناشدة</div>
            <div class="service-desc">تقديم طلب مساعدة</div>
        </div>
        <div class="service-card lost" onclick="openGovModal('lost')">
            <div class="service-icon"><i class="fas fa-search-location"></i></div>
            <div class="service-title">مفقودات</div>
            <div class="service-desc">الإبلاغ عن مفقود</div>
        </div>
        <div class="service-card news" onclick="openGovModal('news')">
            <div class="service-icon"><i class="fas fa-camera"></i></div>
            <div class="service-title">أرسل خبراً</div>
            <div class="service-desc">تغطية محلية</div>
        </div>
        <div class="service-card person" onclick="openGovModal('person')">
            <div class="service-icon"><i class="fas fa-award"></i></div>
            <div class="service-title">شخصية الأسبوع</div>
            <div class="service-desc">ترشيح قدوة</div>
        </div>
        <div class="service-card events" onclick="openGovModal('events')">
            <div class="service-icon"><i class="fas fa-calendar-alt"></i></div>
            <div class="service-title">فعالية</div>
            <div class="service-desc">تسجيل مبادرة</div>
        </div>
    </div>
    
    <!-- ==================== القسم الرئيسي: عمودين (أخبار رئيسية + سايدبار) ==================== -->
    <div class="home-main-grid">
        
        <!-- العمود الأيمن: أخبار مميزة مع سلايدر داخلي + قائمة أخبار -->
        <div class="featured-news-area">
            <div class="section-head">
                <h3><i class="far fa-newspaper"></i> أخر المستجدات والأخبار</h3>
                <button class="gov-action-btn-sm" onclick="openGovModal('news')" style="background:#d4af37; color:#115c38; padding:5px 12px; font-size:12px;"><i class="fas fa-plus"></i> أرسل خبراً</button>
            </div>
            
            <!-- سلايدر الأخبار المصغر داخل القسم -->
            <div class="news-feature-slider" id="featureSlider">
                <?php
                $feature_news = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 4, 'post_status' => 'publish'));
                $f_index = 0;
                if($feature_news->have_posts()) :
                    while($feature_news->have_posts()) : $feature_news->the_post();
                    $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : 'https://picsum.photos/800/400?random=' . get_the_ID();
                    $f_active = ($f_index == 0) ? 'active' : '';
                ?>
                <div class="feature-slide <?php echo $f_active; ?>" style="background-image: url('<?php echo $img_url; ?>');">
                    <div class="feature-overlay"></div>
                    <div class="feature-content">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?></p>
                    </div>
                </div>
                <?php $f_index++; endwhile; wp_reset_postdata(); endif; ?>
            </div>
            
            <!-- قائمة الأخبار الإضافية -->
            <div class="news-list-grid">
                <?php
                $more_news = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 4, 'offset' => 4, 'post_status' => 'publish'));
                if($more_news->have_posts()) :
                    while($more_news->have_posts()) : $more_news->the_post();
                ?>
                <div class="news-list-item">
                    <?php if(has_post_thumbnail()) : ?>
                        <img class="news-list-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
                    <?php else : ?>
                        <img class="news-list-img" src="https://picsum.photos/80/60?random=<?php echo get_the_ID(); ?>" alt="">
                    <?php endif; ?>
                    <div class="news-list-info">
                        <div class="news-list-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a></div>
                        <div class="news-list-date"><i class="far fa-clock"></i> <?php echo get_the_date('d F Y'); ?> | <i class="far fa-eye"></i> <?php echo alzaytoon_get_post_views(get_the_ID()); ?></div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
        
        <!-- العمود الأيسر: سايدبار شامل -->
        <div>
            
            <!-- المناشدات -->
            <div class="appeals-list-compact">
                <div class="section-head" style="background:#115c38; border-radius:0;">
                    <h3><i class="fas fa-hand-holding-heart"></i> المناشدات العاجلة</h3>
                    <button class="gov-action-btn-sm" onclick="openGovModal('help')" style="background:#d4af37; color:#115c38; padding:5px 12px;"><i class="fas fa-plus"></i> مناشدة</button>
                </div>
                <div>
                    <?php
                    $appeals = new WP_Query(array('post_type' => 'help', 'posts_per_page' => 5, 'post_status' => 'publish'));
                    if($appeals->have_posts()) :
                        while($appeals->have_posts()) : $appeals->the_post();
                        $badge = get_post_meta(get_the_ID(), '_appeal_badge_status', true);
                        $badge_class = 'badge-new'; $badge_txt = 'جديد';
                        if($badge == 'urgent') { $badge_class = 'badge-urgent'; $badge_txt = 'عاجلة'; }
                        elseif($badge == 'necessary') { $badge_class = 'badge-necessary'; $badge_txt = 'ضرورية'; }
                        elseif($badge == 'following') { $badge_class = 'badge-following'; $badge_txt = 'متابعة'; }
                    ?>
                    <div class="appeal-item">
                        <span class="appeal-badge <?php echo $badge_class; ?>"><?php echo $badge_txt; ?></span>
                        <a href="<?php the_permalink(); ?>" class="appeal-title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
                        <span class="appeal-date"><?php echo get_the_date('d/m'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
            
            <!-- المفقودات -->
            <div class="appeals-list-compact">
                <div class="section-head" style="background:#115c38;">
                    <h3><i class="fas fa-search-location"></i> المفقودات</h3>
                    <button class="gov-action-btn-sm" onclick="openGovModal('lost')" style="background:#d4af37; color:#115c38; padding:5px 12px;"><i class="fas fa-plus"></i> إبلاغ</button>
                </div>
                <div>
                    <?php
                    $losts = new WP_Query(array('post_type' => 'lost', 'posts_per_page' => 4, 'post_status' => 'publish'));
                    if($losts->have_posts()) :
                        while($losts->have_posts()) : $losts->the_post();
                    ?>
                    <div class="appeal-item">
                        <span class="appeal-badge" style="background:#e74c3c; color:#fff;">مفقود</span>
                        <a href="<?php the_permalink(); ?>" class="appeal-title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
                        <span class="appeal-date"><?php echo get_the_date('d/m'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
            
            <!-- شخصية الأسبوع -->
            <div class="person-widget">
                <?php
                $person = new WP_Query(array('post_type' => 'person', 'posts_per_page' => 1, 'post_status' => 'publish'));
                if($person->have_posts()) :
                    while($person->have_posts()) : $person->the_post();
                    if(has_post_thumbnail()) {
                        echo '<img class="person-img" src="' . get_the_post_thumbnail_url(get_the_ID(), 'medium') . '" alt="">';
                    } else {
                        echo '<img class="person-img" src="https://picsum.photos/100/100?random=' . get_the_ID() . '" alt="">';
                    }
                ?>
                <div class="person-name"><?php the_title(); ?></div>
                <div class="person-bio"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></div>
                <a href="<?php the_permalink(); ?>" style="color:#d4af37; font-weight:800; font-size:13px;">السيرة الكاملة <i class="fas fa-arrow-left"></i></a>
                <?php endwhile; wp_reset_postdata(); endif; ?>
                <hr style="margin: 15px 0; border-color: rgba(255,255,255,0.2);">
                <button onclick="openGovModal('person')" style="background:#d4af37; color:#115c38; border:none; padding:8px 15px; border-radius:25px; font-weight:800; width:100%; cursor:pointer;"><i class="fas fa-user-plus"></i> رشح شخصية الأسبوع</button>
            </div>
            
            <!-- الفعاليات القادمة -->
            <div class="appeals-list-compact">
                <div class="section-head" style="background:#115c38;">
                    <h3><i class="far fa-calendar-alt"></i> الفعاليات القادمة</h3>
                    <button class="gov-action-btn-sm" onclick="openGovModal('events')" style="background:#d4af37; color:#115c38; padding:5px 12px;"><i class="fas fa-plus"></i> تسجيل</button>
                </div>
                <div>
                    <?php
                    $events = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 4, 'post_status' => 'publish'));
                    if($events->have_posts()) :
                        while($events->have_posts()) : $events->the_post();
                    ?>
                    <div class="appeal-item">
                        <span class="appeal-badge" style="background:#f39c12; color:#fff;">فعالية</span>
                        <a href="<?php the_permalink(); ?>" class="appeal-title"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
                        <span class="appeal-date"><?php echo get_the_date('d/m'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
            
            <!-- استطلاع الرأي -->
            <div class="poll-widget">
                <div class="poll-question"><?php echo get_theme_mod('alzaytoon_poll_question', 'ما رأيك في مستوى الخدمات المقدمة في حي الزيتون مؤخراً؟'); ?></div>
                <form id="royalPollFormSidebar">
                    <?php for($i=1; $i<=3; $i++) {
                        $opt_text = get_theme_mod('alzaytoon_poll_opt'.$i, 'خيار ' . $i);
                        if(!empty($opt_text)) :
                    ?>
                    <div class="poll-option">
                        <label>
                            <input type="radio" name="poll_vote_radio" value="<?php echo $i; ?>"> <?php echo esc_html($opt_text); ?>
                        </label>
                        <div class="poll-bar"><div class="poll-fill" id="barFillSide<?php echo $i; ?>"></div></div>
                        <span class="poll-percent" id="percentSide<?php echo $i; ?>" style="font-size:11px; color:#115c38;"></span>
                    </div>
                    <?php endif; } ?>
                    <button type="button" class="gov-action-btn-sm" style="width:100%; justify-content:center; margin-top:10px;" onclick="submitSidebarPoll()"><i class="fas fa-check-circle"></i> اعتماد التصويت</button>
                </form>
                <p id="pollAckMsgSidebar" style="display:none; text-align:center; color:#115c38; font-size:12px; margin-top:10px;">تم تسجيل تصويتك، شكراً لك.</p>
            </div>
            
            <!-- دليل الطوارئ -->
            <div class="emergency-widget">
                <h4 style="margin-bottom:15px; color:#e74c3c;"><i class="fas fa-phone-volume"></i> دليل الطوارئ للحي</h4>
                <div class="emergency-item"><span><i class="fas fa-ambulance"></i> الإسعاف</span><a href="tel:101" class="emergency-number" style="color:#e74c3c;">101</a></div>
                <div class="emergency-item"><span><i class="fas fa-fire-extinguisher"></i> الدفاع المدني</span><a href="tel:102" class="emergency-number" style="color:#e67e22;">102</a></div>
                <div class="emergency-item"><span><i class="fas fa-shield-alt"></i> الشرطة</span><a href="tel:100" class="emergency-number" style="color:#3498db;">100</a></div>
                <div class="emergency-item"><span><i class="fas fa-faucet"></i> طوارئ المياه</span><a href="tel:115" class="emergency-number" style="color:#27ae60;">115</a></div>
            </div>
        </div>
    </div>
    
    <!-- ==================== الأقسام السفلية: أخبار مقسمة (3 أعمدة) ==================== -->
    <div class="bottom-sections">
        
        <div class="bottom-section-card">
            <div class="bottom-section-header"><i class="fas fa-laptop-code"></i> نبض التكنولوجيا</div>
            <div class="bottom-section-list">
                <?php
                $tech_news = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 4, 'post_status' => 'publish'));
                if($tech_news->have_posts()) :
                    while($tech_news->have_posts()) : $tech_news->the_post();
                ?>
                <div class="bottom-item">
                    <div class="bottom-item-icon"></div>
                    <a href="<?php the_permalink(); ?>" class="bottom-item-title"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a>
                    <small><?php echo get_the_date('d/m'); ?></small>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
        
        <div class="bottom-section-card">
            <div class="bottom-section-header"><i class="fas fa-feather-alt"></i> شؤون محلية</div>
            <div class="bottom-section-list">
                <?php
                $local_news = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 4, 'post_status' => 'publish'));
                if($local_news->have_posts()) :
                    while($local_news->have_posts()) : $local_news->the_post();
                ?>
                <div class="bottom-item">
                    <div class="bottom-item-icon"></div>
                    <a href="<?php the_permalink(); ?>" class="bottom-item-title"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a>
                    <small><?php echo get_the_date('d/m'); ?></small>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
        
        <div class="bottom-section-card">
            <div class="bottom-section-header"><i class="fas fa-medal"></i> شخصيات وأثر</div>
            <div class="bottom-section-list">
                <?php
                $persons = new WP_Query(array('post_type' => 'person', 'posts_per_page' => 4, 'post_status' => 'publish'));
                if($persons->have_posts()) :
                    while($persons->have_posts()) : $persons->the_post();
                ?>
                <div class="bottom-item">
                    <div class="bottom-item-icon"></div>
                    <a href="<?php the_permalink(); ?>" class="bottom-item-title"><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></a>
                    <small><?php echo get_the_date('d/m'); ?></small>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </div>
    
    <!-- بنر إعلاني فاخر -->
    <div class="home-bottom-adv-banner">
        <h3 class="adv-banner-title"><i class="fas fa-star"></i> مساحة إعلانية مخصصة لشركات ومحلات حي الزيتون</h3>
        <p class="adv-banner-desc">لرعاية وتطوير الأنشطة الخيرية والخدمية داخل الحي، يرجى التواصل مع إدارة الشبكة عبر بوابة اتصل بنا الرسمية أو عبر رقم الواتساب المعتمد.</p>
    </div>
</div>

<!-- جافاسكربت السلايدرز والاستطلاع -->
<script>
// السلايدر الرئيسي
(function() {
    const slides = document.querySelectorAll('#heroSlider .slider-slide');
    if(slides.length > 1) {
        let current = 0;
        const dotsContainer = document.getElementById('sliderDots');
        if(dotsContainer) {
            slides.forEach((_, i) => {
                const dot = document.createElement('div');
                dot.classList.add('slider-dot');
                if(i === 0) dot.classList.add('active');
                dot.addEventListener('click', () => {
                    slides.forEach(s => s.classList.remove('active'));
                    slides[i].classList.add('active');
                    document.querySelectorAll('.slider-dot').forEach(d => d.classList.remove('active'));
                    dot.classList.add('active');
                    current = i;
                });
                dotsContainer.appendChild(dot);
            });
        }
        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
            const dots = document.querySelectorAll('.slider-dot');
            dots.forEach((d, i) => d.classList.toggle('active', i === current));
        }, 6000);
    }
})();

// السلايدر الداخلي للأخبار المميزة
(function() {
    const featureSlides = document.querySelectorAll('#featureSlider .feature-slide');
    if(featureSlides.length > 1) {
        let fCurrent = 0;
        setInterval(() => {
            featureSlides[fCurrent].classList.remove('active');
            fCurrent = (fCurrent + 1) % featureSlides.length;
            featureSlides[fCurrent].classList.add('active');
        }, 5000);
    }
})();

// استطلاع الرأي في السايدبار
function submitSidebarPoll() {
    const radios = document.querySelectorAll('#royalPollFormSidebar input[name="poll_vote_radio"]');
    let checked = false;
    radios.forEach(r => { if(r.checked) checked = true; });
    if(!checked) { alert('الرجاء اختيار إجابة قبل التصويت'); return; }
    // عرض أشرطة تقدم وهمية
    document.getElementById('barFillSide1').style.width = '60%';
    document.getElementById('percentSide1').innerText = '60%';
    document.getElementById('barFillSide2').style.width = '25%';
    document.getElementById('percentSide2').innerText = '25%';
    document.getElementById('barFillSide3').style.width = '15%';
    document.getElementById('percentSide3').innerText = '15%';
    document.getElementById('pollAckMsgSidebar').style.display = 'block';
    setTimeout(() => { document.getElementById('pollAckMsgSidebar').style.display = 'none'; }, 3000);
}
</script>

<?php get_footer(); ?>
