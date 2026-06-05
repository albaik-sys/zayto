<?php get_header(); ?>

<style>
    /* =========================================================================
       تنسيقات السلايدر المطور المصلحة لضبط الـ Layout ومنع التداخل البصري
    ========================================================================= */
    .royal-hero-slider {
        position: relative;
        height: 480px;
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 45px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        background: #000;
        direction: ltr; /* لضمان انزلاق عناصر التحكم بشكل صحيح */
    }
    .royal-hero-slider * {
        direction: rtl; /* إعادة النص للوضع الطبيعي بالداخل */
    }
    .hero-slide {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        z-index: 1;
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        transform: scale(1.02);
    }
    .hero-slide.active {
        opacity: 1;
        z-index: 2;
        transform: scale(1);
    }
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to left, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);
        z-index: 3;
    }
    .hero-content {
        position: relative;
        z-index: 5;
        max-width: 720px;
        padding: 80px 50px;
        color: #fff;
    }
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        padding: 6px 16px;
        border-radius: 100px;
        font-size: 12.5px;
        font-weight: 800;
        margin-bottom: 20px;
    }
    .hero-content h1 {
        font-size: 32px;
        line-height: 1.4;
        margin-bottom: 15px;
        font-weight: 900;
        text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }
    .hero-content p {
        font-size: 15.5px;
        line-height: 1.7;
        color: rgba(255,255,255,0.85);
        margin-bottom: 25px;
    }
    .slider-controls {
        position: absolute;
        bottom: 25px;
        left: 25px;
        z-index: 10;
        display: flex;
        gap: 10px;
        direction: ltr;
    }
    .slider-controls button {
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .slider-controls button:hover {
        background: var(--gold, #d4af37);
        color: #111;
        transform: scale(1.05);
    }

    /* =========================================================================
       تنسيقات لافتة إرسال المقالات وبلوك التفاعل السفلي المطور
    ========================================================================= */
    .interaction-banner-royal {
        background: linear-gradient(135deg, #0f5132 0%, #062416 100%);
        border-right: 5px solid var(--gold, #d4af37);
        border-radius: 14px;
        padding: 30px 35px;
        color: #fff;
        margin-bottom: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        box-shadow: 0 10px 30px rgba(15,81,50,0.12);
    }
    
    @media (max-width: 768px) {
        .royal-hero-slider { height: 400px; }
        .hero-content { padding: 40px 25px; }
        .hero-content h1 { font-size: 24px; }
        .hero-content p { font-size: 14px; }
        .interaction-banner-royal { padding: 25px; text-align: center; justify-content: center; }
    }
</style>

<div class="container home-layout official-container royal-layout gov-portal-wrapper">
    
    <section class="royal-hero-slider">
        <?php
        $slider_query = new WP_Query(array('post_type' => array('events', 'news'), 'posts_per_page' => 4, 'post_status' => 'publish'));
        $slide_index = 0;
        if ($slider_query->have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post();
            $slider_bg_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=1600';
            $active_class = ($slide_index == 0) ? 'active' : '';
        ?>
        <div class="hero-slide <?php echo $active_class; ?>" style="background-image:url('<?php echo esc_url($slider_bg_url); ?>');">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-badge">
                    <i class="fas fa-bolt" style="color:var(--gold);"></i> <?php echo (get_post_type() == 'events') ? 'تغطية مناسبات' : 'أخبار عاجلة'; ?>
                </span>
                <h1><?php the_title(); ?></h1>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <div class="hero-buttons">
                    <a href="<?php the_permalink(); ?>" class="hero-btn primary" style="background:linear-gradient(135deg, var(--gold), #f8dc7c); color:#111; padding:10px 24px; border-radius:8px; font-weight:bold; text-decoration:none; display:inline-flex; align-items:center; gap:8px;"><i class="fas fa-newspaper"></i> اقرأ التفاصيل</a>
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

    <div class="gov-main-grid-layout">
        
        <div class="gov-main-content-column">
            
            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="far fa-newspaper"></i> أحدث الأخبار والتغطيات المحلية</h2>
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
                                <span><i class="far fa-eye"></i> <?php echo alzaytoon_get_post_views(get_the_ID()); ?> قراءة</span>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>

            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="fas fa-hand-holding-heart"></i> ديوان المناشدات والمساعدات العامة</h2>
                    <div>
                        <button class="gov-action-btn-sm" style="background:#2ecc71;" onclick="openGovModal('help')"><i class="fas fa-bullhorn"></i> تقديم مناشدة عاجلة</button>
                    </div>
                </div>
                <div class="gov-list-wrapper">
                    <?php
                    $help_query = new WP_Query(array('post_type' => 'help', 'posts_per_page' => 4, 'post_status' => 'publish'));
                    if ($help_query->have_posts()) : while ($help_query->have_posts()) : $help_query->the_post();
                        $badge = get_post_meta(get_the_ID(), '_appeal_badge_status', true);
                        $sender = get_post_meta(get_the_ID(), '_gov_sender_name', true);
                        $badge_class = 'badge-new'; $badge_txt = 'جديد'; $badge_ico = 'fas fa-star';
                        if($badge == 'urgent') { $badge_class = 'badge-urgent'; $badge_txt = 'عاجلة'; $badge_ico = 'fas fa-exclamation-triangle'; }
                        elseif($badge == 'necessary') { $badge_class = 'badge-necessary'; $badge_txt = 'ضرورية'; $badge_ico = 'fas fa-exclamation-circle'; }
                        elseif($badge == 'following') { $badge_class = 'badge-following'; $badge_txt = 'قيد المتابعة'; $badge_ico = 'fas fa-sync'; }
                    ?>
                    <div class="gov-list-row-item border-gold">
                        <span class="appeal-gov-tag <?php echo $badge_class; ?>" style="margin:0; min-width:95px; text-align:center;"><i class="<?php echo $badge_ico; ?>"></i> <?php echo $badge_txt; ?></span>
                        <div class="gov-list-content">
                            <a href="<?php the_permalink(); ?>" class="gov-list-title"><?php the_title(); ?></a>
                            <div class="gov-list-details">
                                <?php if(!empty($sender)) : ?><span><i class="fas fa-user-tie" style="color:var(--primary);"></i> مقدم الطلب: <?php echo esc_html($sender); ?></span><?php endif; ?>
                            </div>
                        </div>
                        <span class="gov-list-date"><i class="far fa-calendar-check"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>

            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="far fa-calendar-alt"></i> الفعاليات والمناسبات المجتمعية الحالية</h2>
                    <a href="<?php echo get_post_type_archive_link('events'); ?>" class="gov-action-btn-sm" style="background:#f8fafc; color:var(--primary); border:1px solid #ccc; box-shadow:none;">أرشيف المناسبات &laquo;</a>
                </div>
                <div class="gov-home-news-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
                    <?php
                    $events_block_query = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 3, 'post_status' => 'publish'));
                    if ($events_block_query->have_posts()) : while ($events_block_query->have_posts()) : $events_block_query->the_post();
                    ?>
                    <article class="gov-h-news-card" style="border-top: 3px solid var(--gold);">
                        <div class="gov-h-news-img" style="height: 160px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : the_post_thumbnail('medium_large'); else : ?>
                                    <img src="https://picsum.photos/400/250?random=<?php echo get_the_ID(); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="gov-h-news-body" style="padding: 15px;">
                            <h4 style="font-size:15px; font-weight:800; line-height:1.5; margin:0 0 10px 0;"><a href="<?php the_permalink(); ?>" style="color:#111; text-decoration:none;"><?php the_title(); ?></a></h4>
                            <p style="font-size:12.5px; color:#666; margin:0 0 12px 0; line-height:1.6;"><?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?></p>
                            <div style="font-size:11.5px; color:#999; border-top:1px solid #f1f5f9; padding-top:8px;"><i class="far fa-clock"></i> موعد الفعالية: <?php echo get_the_date('d F Y'); ?></div>
                        </div>
                    </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>

            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="fas fa-search-location"></i> آخر بلاغات المفقودات والأمانات المركزية</h2>
                    <a href="<?php echo get_post_type_archive_link('lost'); ?>" class="gov-action-btn-sm" style="background:#f8fafc; color:var(--primary); border:1px solid #ccc; box-shadow:none;">بوابة المفقودات كاملة &laquo;</a>
                </div>
                <div class="lost-articles-list-vertical-wrapper" style="display: flex; flex-direction: column; gap: 12px;">
                    <?php 
                    $lost_query = new WP_Query(array('post_type' => 'lost', 'posts_per_page' => 3, 'post_status' => 'publish'));
                    if($lost_query->have_posts()) : while($lost_query->have_posts()) : $lost_query->the_post(); 
                        $p_id = get_the_ID();
                        $card_sender = get_post_meta($p_id, '_gov_sender_name', true);
                        $card_phone = get_post_meta($p_id, '_gov_phone_address', true);
                    ?>
                    <div class="lost-list-row-item-box" style="display: flex; align-items: center; justify-content: space-between; background: #fff; border: 1px solid #e2e8f0; border-right: 4px solid var(--gold); padding: 15px 20px; border-radius: 6px; gap: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.01);">
                        <div style="display: flex; flex-direction: column; gap: 6px; flex: 1;">
                            <h3 style="font-size: 15.5px; font-weight: 800; margin: 0;"><a href="<?php the_permalink(); ?>" style="color:#1a1a1a; text-decoration:none;"><?php the_title(); ?></a></h3>
                            <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 15px; font-size: 12.5px; color: #666;">
                                <?php if(!empty($card_sender)) : ?><span><i class="fas fa-user-circle" style="color:var(--primary);"></i> <strong>المعلن:</strong> <?php echo esc_html($card_sender); ?></span><?php endif; ?>
                                <?php if(!empty($card_phone)) : ?><span style="color:var(--primary); font-weight:700;"><i class="fas fa-phone-alt"></i> <?php echo esc_html($card_phone); ?></span><?php endif; ?>
                            </div>
                        </div>
                        <span class="gov-list-date"><i class="far fa-calendar-check"></i> اليوم: <?php echo get_the_date('l, d/m'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </section>

        </div>

        <div class="gov-sidebar-column">
            
            <div class="sidebar-widget-gov" style="border-top:4px solid var(--gold); text-align:center;">
                <h3 class="sidebar-widget-title" style="justify-content:center;"><i class="fas fa-award"></i> شخصية الأسبوع البارزة</h3>
                <?php
                $person_query = new WP_Query(array('post_type' => 'person', 'posts_per_page' => 1, 'post_status' => 'publish'));
                if ($person_query->have_posts()) : while ($person_query->have_posts()) : $person_query->the_post();
                if (has_post_thumbnail()) { the_post_thumbnail('medium', array('style'=>'width:110px;height:110px;border-radius:50%;margin:0 auto 15px;border:4px solid var(--gold);object-fit:cover;display:block; box-shadow:0 4px 10px rgba(0,0,0,0.1);')); }
                ?>
                <h4 style="color:var(--primary); font-weight:900; font-size:16px; margin-bottom:8px;"><a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a></h4>
                <p style="font-size:13px; color:#555; line-height:1.6; margin-bottom:15px; text-align:justify;"><?php echo wp_trim_words(get_the_content(), 22, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="gov-action-btn-sm" style="display:inline-block;">السيرة الكاملة &laquo;</a>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

            <div class="sidebar-widget-gov poll-wrapper-box">
                <h3 class="sidebar-widget-title"><i class="fas fa-poll-h"></i> استطلاع الرأي الرسمي</h3>
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
                <h3 class="sidebar-widget-title" style="color:#ef4444;"><i class="fas fa-phone-volume"></i> دليل الطوارئ والاتصال للحي</h3>
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
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-shield-alt" style="color:#3b82f6; margin-left:6px;"></i> الشرطة والنجدة</span>
                        <a href="tel:100" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#3b82f6;">100</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr style="border: none; border-top: 1px dashed #cbd5e1; margin: 50px 0 35px 0;">
    
    <section class="royal-interaction-footer-zone" style="margin-bottom: 30px;">
        <div class="interaction-banner-royal">
            <div style="max-width: 650px; text-align: right;">
                <span style="background: rgba(212,175,55,0.2); color: var(--gold); padding: 5px 12px; border-radius: 4px; font-size: 12px; font-weight: 900; display: inline-block; margin-bottom: 10px;"><i class="fas fa-bullhorn"></i> لجان التكافل والمشاركة الأهلية المفتوحة</span>
                <h3 style="font-size: 22px; font-weight: 900; margin: 0 0 8px 0; color: #fff;">صوتك مسموع وقضيتك تهمنا.. شاركنا الآن في بناء وتكافل الحي</h3>
                <p style="font-size: 14px; color: #cbd5e1; margin: 0; line-height: 1.6; font-weight: 600;">عبر بوابة الديوان الإلكترونية الموحدة، يمكنك الآن تقديم طلبات المناشدات، الإبلاغ الفوري عن المفقودات والأمانات، إرسال تغطية إخبارية من منطقتك، أو ترشيح شخصيات مؤثرة للتكريم المجتمعي.</p>
            </div>
            <div style="flex-shrink: 0;">
                <button class="gov-action-btn-sm" onclick="openGovModal('help')" style="background:var(--gold); color:#111; padding: 14px 28px; font-size: 14.5px; border-radius:8px; box-shadow:none;"><i class="fas fa-paper-plane"></i> أرسل طلبك / مقالك الآن</button>
            </div>
        </div>

        <div class="gov-eservices-row" style="margin-top: 0; margin-bottom: 20px;">
            <a href="javascript:void(0)" onclick="openGovModal('help')" class="eservice-btn c-help">
                <div class="eservice-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <span class="eservice-title">تقديم مناشدة</span>
                <span class="eservice-desc">إرسال طلبات المساعدة والدعم العاجل إلكترونياً</span>
            </a>
            <a href="javascript:void(0)" onclick="openGovModal('lost')" class="eservice-btn c-lost">
                <div class="eservice-icon"><i class="fas fa-search-location"></i></div>
                <span class="eservice-title">الإبلاغ عن مفقودات</span>
                <span class="eservice-desc">النظام المركزي لمتابعة المفقودات والأمانات بالحي</span>
            </a>
            <a href="javascript:void(0)" onclick="openGovModal('news')" class="eservice-btn c-news">
                <div class="eservice-icon"><i class="fas fa-camera"></i></div>
                <span class="eservice-title">إرسال خبر / تغطية</span>
                <span class="eservice-desc">شارك أحداث وأخبار منطقتك لنشرها بالمركز الإعلامي</span>
            </a>
            <a href="javascript:void(0)" onclick="openGovModal('person')" class="eservice-btn c-person">
                <div class="eservice-icon"><i class="fas fa-award"></i></div>
                <span class="eservice-title">ترشيح شخصية الأسبوع</span>
                <span class="eservice-desc">رشح النماذج المشرفة والمؤثرة من أبناء المجتمع</span>
            </a>
        </div>
    </section>

</div>

<script>
/* جافاسكربت تشغيل السلايدر v2 الحصري */
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
