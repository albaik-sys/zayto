<?php get_header(); ?>

<style>
    /* =============================== ROOT ================================= */
    :root{ --primary:#0f5132; --gold:#d4af37; --light:#f8fafc; --dark:#111827; }
    
    /* =============================== GENERAL ================================= */
    body{ background:#f4f7fb; }
    .gov-portal-wrapper{ margin-top:25px; margin-bottom:60px; }

    /* =============================== HERO SLIDER ================================= */
    .royal-hero-slider{ position:relative; height:600px; border-radius:28px; overflow:hidden; margin-bottom:45px; box-shadow:0 30px 80px rgba(0,0,0,0.18); direction: ltr; }
    .royal-hero-slider * { direction: rtl; }
    .hero-slide{ position:absolute; inset:0; background-size:cover; background-position:center; opacity:0; transition:1s ease; transform:scale(1.06); }
    .hero-slide.active{ opacity:1; z-index:2; transform:scale(1); }
    .hero-overlay{ position:absolute; inset:0; background: linear-gradient( to left, rgba(0,0,0,0.85), rgba(0,0,0,0.3) ); }
    .hero-content{ position:relative; z-index:5; max-width:760px; padding:100px 70px; color:#fff; }
    .hero-badge{ display:inline-flex; align-items:center; gap:10px; background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.2); backdrop-filter:blur(14px); padding:10px 20px; border-radius:100px; font-size:13px; font-weight:900; margin-bottom:25px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); }
    .hero-content h1{ font-size:52px; line-height:1.2; margin-bottom:20px; font-weight:900; text-shadow: 0 2px 10px rgba(0,0,0,0.3); }
    .hero-content p{ font-size:17px; line-height:1.8; color:rgba(255,255,255,0.9); margin-bottom:30px; }
    .hero-buttons{ display:flex; gap:15px; flex-wrap:wrap; }
    .hero-btn{ display:inline-flex; align-items:center; gap:10px; padding:14px 28px; border-radius:14px; text-decoration:none; font-weight:900; transition:0.35s; font-size:15px; }
    .hero-btn.primary{ background:linear-gradient(135deg,var(--gold),#f8dc7c); color:#111; box-shadow:0 15px 40px rgba(212,175,55,0.35); }
    .hero-btn.secondary{ background:rgba(255,255,255,0.1); color:#fff; border:1px solid rgba(255,255,255,0.15); backdrop-filter:blur(12px); }
    .hero-btn:hover{ transform:translateY(-5px); }
    .slider-controls{ position:absolute; bottom:30px; left:30px; z-index:20; display:flex; gap:12px; direction: ltr; }
    .slider-controls button{ width:50px; height:50px; border:none; border-radius:50%; background:rgba(255,255,255,0.15); color:#fff; font-size:18px; cursor:pointer; backdrop-filter:blur(10px); transition:0.3s; }
    .slider-controls button:hover{ background:var(--gold); color:#111; transform:scale(1.1); }

    /* =============================== SERVICES (GLASSMORPHISM) ================================= */
    .gov-eservices-row{ display:grid; grid-template-columns:repeat(4,1fr); gap:20px; margin-top:-90px; margin-bottom:50px; position:relative; z-index:50; }
    .eservice-btn{ background:rgba(255,255,255,0.85); backdrop-filter:blur(16px); border:1px solid rgba(255,255,255,0.6); border-radius:24px; padding:28px 18px; text-align:center; text-decoration:none; transition:0.35s; box-shadow:0 15px 40px rgba(0,0,0,0.06); }
    .eservice-btn:hover{ transform:translateY(-10px); background:#fff; border-color:var(--gold); box-shadow:0 20px 45px rgba(212,175,55,0.15); }
    .eservice-icon{ width:70px; height:70px; margin:auto auto 18px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:28px; color:#fff; transition:0.3s; }
    .c-help .eservice-icon{ background:linear-gradient(135deg, #22c55e, #16a34a); box-shadow:0 10px 20px rgba(34,197,94,0.3); }
    .c-lost .eservice-icon{ background:linear-gradient(135deg, #ef4444, #dc2626); box-shadow:0 10px 20px rgba(239,68,68,0.3); }
    .c-news .eservice-icon{ background:linear-gradient(135deg, #3b82f6, #2563eb); box-shadow:0 10px 20px rgba(59,130,246,0.3); }
    .c-person .eservice-icon{ background:linear-gradient(135deg, var(--gold), #b8962c); box-shadow:0 10px 20px rgba(212,175,55,0.3); }
    .eservice-btn:hover .eservice-icon{ transform:scale(1.1); }
    .eservice-title{ display:block; font-size:16px; font-weight:900; color:#111; margin-bottom:8px; }
    .eservice-desc{ font-size:13px; color:#666; line-height:1.6; }

    /* =============================== GOV LAYOUT & NEWS CARDS ================================= */
    .gov-main-grid-layout { display: grid; grid-template-columns: 2fr 1fr; gap: 35px; align-items: start; }
    .gov-section-header-v2 { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid var(--primary); padding-bottom: 15px; margin-bottom: 25px; flex-wrap: wrap; gap: 15px; position: relative; }
    .gov-section-header-v2::after { content: ""; position: absolute; bottom: -2px; right: 0; width: 100px; height: 2px; background: var(--gold); }
    .gov-section-title-v2 { font-size: 20px; font-weight: 900; color: var(--primary); display: flex; align-items: center; gap: 10px; margin: 0; }
    .gov-section-title-v2 i { color: var(--gold); font-size: 22px; }
    .gov-action-btn-sm { background: var(--primary); color: #fff; border: none; padding: 10px 20px; border-radius: 6px; font-size: 13.5px; font-weight: 800; cursor: pointer; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 10px rgba(15,81,50,0.2); text-decoration: none; }
    .gov-action-btn-sm:hover { background: var(--gold); color: var(--primary); transform: translateY(-2px); }

    .gov-home-news-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:25px; margin-bottom:40px; }
    .gov-h-news-card{ background:#fff; border-radius:20px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.04); transition:0.35s; border:1px solid #eef2f6; }
    .gov-h-news-card:hover{ transform:translateY(-8px); box-shadow:0 15px 40px rgba(15,81,50,0.08); border-color:var(--gold); }
    .gov-h-news-img{ height:220px; position:relative; }
    .gov-h-news-img img{ width:100%; height:100%; object-fit:cover; transition:transform 0.5s; }
    .gov-h-news-card:hover .gov-h-news-img img { transform:scale(1.05); }
    .gov-h-news-body{ padding:22px; display:flex; flex-direction:column; }
    .gov-h-news-title{ font-size:17px; font-weight:900; line-height:1.6; margin-bottom:15px; }
    .gov-h-news-title a{ color:#111; text-decoration:none; transition:0.2s; }
    .gov-h-news-title a:hover{ color:var(--primary); }
    .gov-h-news-meta{ display:flex; justify-content:space-between; font-size:12.5px; color:#888; border-top:1px dashed #eee; padding-top:12px; font-weight:600; }

    /* Lists and Sidebar */
    .gov-list-row-item { display: flex; align-items: center; padding: 18px; background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; margin-bottom: 15px; transition: 0.3s; gap: 18px; border-right: 4px solid var(--primary); box-shadow: 0 4px 15px rgba(0,0,0,0.02); }
    .gov-list-row-item:hover { transform: translateX(-6px); box-shadow: 0 8px 25px rgba(0,0,0,0.05); }
    .gov-list-row-item.border-gold { border-right-color: var(--gold); }
    .gov-list-row-item.border-red { border-right-color: #ef4444; }
    .gov-list-content { flex: 1; }
    .gov-list-title { font-size: 15.5px; font-weight: 800; color: #222; margin-bottom: 8px; display: block; text-decoration: none; line-height: 1.4; }
    .gov-list-title:hover { color: var(--primary); }
    .gov-list-details { font-size: 13px; color: #666; display: flex; gap: 15px; flex-wrap: wrap; font-weight: 600; }
    .gov-list-date { font-size: 12px; color: #999; white-space: nowrap; font-weight: 700; }
    .sidebar-widget-gov { background: #fff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 25px; margin-bottom: 30px; box-shadow: 0 6px 25px rgba(0,0,0,0.03); }
    .sidebar-widget-title { font-size: 17px; font-weight: 900; color: var(--primary); margin-bottom: 20px; display: flex; align-items: center; gap: 10px; border-bottom: 1px dashed #ddd; padding-bottom: 12px; }

    /* =============================== RESPONSIVE ================================= */
    @media(max-width:992px){
        .gov-eservices-row{ grid-template-columns:repeat(2,1fr); margin-top:20px; }
        .gov-main-grid-layout{ grid-template-columns:1fr; }
        .hero-content h1{ font-size:40px; }
    }
    @media(max-width:600px){
        .royal-hero-slider{ height:500px; border-radius:20px; }
        .hero-content{ padding:60px 25px; }
        .hero-content h1{ font-size:32px; }
        .hero-content p{ font-size:14.5px; }
        .gov-eservices-row{ grid-template-columns:1fr; }
        .gov-home-news-grid{ grid-template-columns:1fr; }
        .gov-list-row-item { flex-direction: column; align-items: flex-start; gap: 10px; padding: 15px; }
    }
</style>

<div class="container gov-portal-wrapper">
    
    <section class="royal-hero-slider">
        <?php
        $slider_query = new WP_Query(array('post_type' => array('events', 'news'), 'posts_per_page' => 4, 'post_status' => 'publish'));
        $slide_index = 0;
        if ($slider_query->have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post();
            $slider_bg_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600';
            $active_class = ($slide_index == 0) ? 'active' : '';
        ?>
        <div class="hero-slide <?php echo $active_class; ?>" style="background-image:url('<?php echo $slider_bg_url; ?>');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-badge">
                    <i class="fas fa-bolt"></i> <?php echo (get_post_type() == 'events') ? 'تغطية مناسبات' : 'أخبار عاجلة'; ?>
                </span>
                <h1><?php the_title(); ?></h1>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <div class="hero-buttons">
                    <a href="<?php the_permalink(); ?>" class="hero-btn primary"><i class="fas fa-newspaper"></i> اقرأ التفاصيل</a>
                </div>
            </div>
        </div>
        <?php $slide_index++; endwhile; wp_reset_postdata(); else: ?>
        <div class="hero-slide active" style="background-image:url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-badge"><i class="fas fa-bolt"></i> منصة إلكترونية حديثة</span>
                <h1>بوابة إعلامية ومجتمعية متكاملة</h1>
                <p>تابع الأخبار والمبادرات والمناشدات والمفقودات عبر واجهة احترافية حديثة.</p>
            </div>
        </div>
        <?php endif; ?>

        <div class="slider-controls">
            <button id="nextSlide"><i class="fas fa-chevron-right"></i></button>
            <button id="prevSlide"><i class="fas fa-chevron-left"></i></button>
        </div>
    </section>

    <div class="gov-eservices-row">
        <a href="javascript:void(0)" onclick="openGovModal('help')" class="eservice-btn c-help">
            <div class="eservice-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <span class="eservice-title">تقديم مناشدة</span>
            <span class="eservice-desc">إرسال طلبات المساعدة إلكترونياً</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('lost')" class="eservice-btn c-lost">
            <div class="eservice-icon"><i class="fas fa-search-location"></i></div>
            <span class="eservice-title">الإبلاغ عن مفقودات</span>
            <span class="eservice-desc">سجل مركزي للمفقودات والأمانات</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('news')" class="eservice-btn c-news">
            <div class="eservice-icon"><i class="fas fa-camera"></i></div>
            <span class="eservice-title">إرسال خبر</span>
            <span class="eservice-desc">شارك أخبار منطقتك بسرعة</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('person')" class="eservice-btn c-person">
            <div class="eservice-icon"><i class="fas fa-award"></i></div>
            <span class="eservice-title">شخصية الأسبوع</span>
            <span class="eservice-desc">رشح الشخصيات المميزة بالمجتمع</span>
        </a>
    </div>

    <div class="gov-main-grid-layout">
        
        <div class="gov-main-content-column">
            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="far fa-newspaper"></i> أحدث الأخبار والتغطيات</h2>
                    <div>
                        <button class="gov-action-btn-sm" onclick="openGovModal('news')"><i class="fas fa-plus"></i> أرسل خبراً</button>
                        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="gov-action-btn-sm" style="background:#f8fafc; color:var(--primary); border:1px solid #ccc; box-shadow:none; margin-right:5px;">المزيد &laquo;</a>
                    </div>
                </div>
                <div class="gov-home-news-grid">
                    <?php
                    $news_query = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 4, 'post_status' => 'publish'));
                    if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();
                    ?>
                    <article class="gov-h-news-card">
                        <div class="gov-h-news-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : the_post_thumbnail('medium_large'); else : ?>
                                    <img src="https://picsum.photos/400/250?random=<?php echo get_the_ID(); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="gov-h-news-body">
                            <h3 class="gov-h-news-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 12, '...'); ?></a></h3>
                            <div class="gov-h-news-meta">
                                <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d M Y'); ?></span>
                                <span><i class="far fa-eye"></i> <?php echo alzaytoon_get_post_views(get_the_ID()); ?></span>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>

            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="fas fa-hand-holding-heart"></i> ديوان المناشدات والمساعدات</h2>
                    <div>
                        <button class="gov-action-btn-sm" style="background:#2ecc71;" onclick="openGovModal('help')"><i class="fas fa-bullhorn"></i> تقديم مناشدة</button>
                    </div>
                </div>
                <div class="gov-list-wrapper">
                    <?php
                    $help_query = new WP_Query(array('post_type' => 'help', 'posts_per_page' => 3, 'post_status' => 'publish'));
                    if ($help_query->have_posts()) : while ($help_query->have_posts()) : $help_query->the_post();
                        $badge = get_post_meta(get_the_ID(), '_appeal_badge_status', true);
                        $sender = get_post_meta(get_the_ID(), '_gov_sender_name', true);
                        $badge_class = 'badge-new'; $badge_txt = 'جديد'; $badge_ico = 'fas fa-star';
                        if($badge == 'urgent') { $badge_class = 'badge-urgent'; $badge_txt = 'عاجلة'; $badge_ico = 'fas fa-exclamation-triangle'; }
                        elseif($badge == 'necessary') { $badge_class = 'badge-necessary'; $badge_txt = 'ضرورية'; $badge_ico = 'fas fa-exclamation-circle'; }
                        elseif($badge == 'following') { $badge_class = 'badge-following'; $badge_txt = 'قيد المتابعة'; $badge_ico = 'fas fa-sync'; }
                    ?>
                    <div class="gov-list-row-item border-gold">
                        <span class="appeal-gov-tag <?php echo $badge_class; ?>" style="margin:0; min-width:90px; text-align:center;"><i class="<?php echo $badge_ico; ?>"></i> <?php echo $badge_txt; ?></span>
                        <div class="gov-list-content">
                            <a href="<?php the_permalink(); ?>" class="gov-list-title"><?php the_title(); ?></a>
                            <div class="gov-list-details">
                                <?php if(!empty($sender)) : ?><span><i class="fas fa-user-tie" style="color:var(--primary);"></i> <?php echo esc_html($sender); ?></span><?php endif; ?>
                            </div>
                        </div>
                        <span class="gov-list-date"><i class="far fa-calendar-check"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>
        </div>

        <div class="gov-sidebar-column">
            
            <div class="sidebar-widget-gov" style="border-top:4px solid var(--gold); text-align:center;">
                <h3 class="sidebar-widget-title" style="justify-content:center;"><i class="fas fa-award"></i> شخصية الأسبوع</h3>
                <?php
                $person_query = new WP_Query(array('post_type' => 'person', 'posts_per_page' => 1, 'post_status' => 'publish'));
                if ($person_query->have_posts()) : while ($person_query->have_posts()) : $person_query->the_post();
                if (has_post_thumbnail()) { the_post_thumbnail('medium', array('style'=>'width:110px;height:110px;border-radius:50%;margin:0 auto 15px;border:4px solid var(--gold);object-fit:cover;display:block; box-shadow:0 4px 10px rgba(0,0,0,0.1);')); }
                ?>
                <h4 style="color:var(--primary); font-weight:900; font-size:17px; margin-bottom:8px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p style="font-size:13.5px; color:#555; line-height:1.6; margin-bottom:15px;"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="gov-action-btn-sm" style="display:inline-block;">السيرة الكاملة &laquo;</a>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

            <div class="sidebar-widget-gov poll-wrapper-box">
                <h3 class="sidebar-widget-title"><i class="fas fa-poll-h"></i> استطلاع الرأي</h3>
                <h4 style="font-size:14px; margin-bottom:15px; font-weight:800; line-height:1.6; color:#222;"><?php echo get_theme_mod('alzaytoon_poll_question', 'ما رأيك في مستوى الخدمات المقدمة في حي الزيتون مؤخراً؟'); ?></h4>
                <form id="royalPollForm">
                    <?php for($i=1; $i<=3; $i++) {
                        $opt_text = get_theme_mod('alzaytoon_poll_opt'.$i, 'الخيار ' . $i);
                        if(!empty($opt_text)) :
                    ?>
                    <label class="poll-label-radio" style="display:block; margin-bottom:12px; position:relative; padding-right:20px; cursor:pointer;">
                        <input type="radio" name="poll_vote_radio" value="<?php echo $i; ?>" style="position:absolute; right:0; top:4px; accent-color:var(--primary);">
                        <span class="radio-custom-txt" style="font-size:13px; font-weight:700; color:#444;"><?php echo esc_html($opt_text); ?></span>
                        <div class="poll-track-bg" style="width:100%; height:6px; background:#eee; margin-top:5px; border-radius:3px; overflow:hidden;"><div class="poll-fill-progress" id="barFill<?php echo $i; ?>" style="height:100%; background:var(--primary); width:0%; transition:width 1s;"></div></div>
                        <span class="poll-percentage-num" id="percentTxt<?php echo $i; ?>" style="position:absolute; left:0; top:0; font-size:11px; font-weight:900; color:var(--primary);"></span>
                    </label>
                    <?php endif; } ?>
                    <button type="button" class="gov-action-btn-sm" style="width:100%; justify-content:center; margin-top:10px;" onclick="triggerRoyalPollSubmit()"><i class="fas fa-check-circle"></i> اعتماد التصويت</button>
                </form>
                <p id="pollAckMsg" class="poll-success-ack" style="display:none; text-align:center; color:var(--primary); font-weight:bold; font-size:13px; margin-top:10px;">تم تسجيل تصويتك المعتمد، شكراً لك.</p>
            </div>

            <div class="sidebar-widget-gov" style="border-top:4px solid #ef4444;">
                <h3 class="sidebar-widget-title" style="color:#ef4444;"><i class="fas fa-phone-volume"></i> دليل الطوارئ</h3>
                <div style="display:flex; flex-direction:column; gap:10px;">
                    <div style="display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid #f9f9f9;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-ambulance" style="color:#ef4444; margin-left:6px;"></i> الإسعاف</span>
                        <a href="tel:101" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#ef4444;">101</a>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid #f9f9f9;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-fire-extinguisher" style="color:#e67e22; margin-left:6px;"></i> الدفاع المدني</span>
                        <a href="tel:102" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#e67e22;">102</a>
                    </div>
                    <div style="display:flex; justify-content:space-between; padding:8px 0;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-shield-alt" style="color:#3b82f6; margin-left:6px;"></i> الشرطة</span>
                        <a href="tel:100" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#3b82f6;">100</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
/* جافاسكربت تشغيل السلايدر V2 الخاص بالمهندس (تمت حمايته لتفادي الأخطاء) */
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.hero-slide');
    if(slides.length === 0) return;
    
    let currentSlide = 0;
    function showSlide(index){
        slides.forEach(slide => slide.classList.remove('active'));
        if(slides[index]) slides[index].classList.add('active');
    }
    
    const nextBtn = document.getElementById('nextSlide');
    const prevBtn = document.getElementById('prevSlide');
    
    if(nextBtn) {
        nextBtn.onclick = () => {
            currentSlide++;
            if(currentSlide >= slides.length) currentSlide = 0;
            showSlide(currentSlide);
        };
    }
    if(prevBtn) {
        prevBtn.onclick = () => {
            currentSlide--;
            if(currentSlide < 0) currentSlide = slides.length - 1;
            showSlide(currentSlide);
        };
    }
    if(slides.length > 1) {
        setInterval(() => {
            currentSlide++;
            if(currentSlide >= slides.length) currentSlide = 0;
            showSlide(currentSlide);
        }, 6000);
    }
});
</script>

<?php get_footer(); ?>
