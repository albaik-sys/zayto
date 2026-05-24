<?php get_header(); ?>

<style>
    /* تنسيقات البوابة الحكومية الرسمية للرئيسية */
    .gov-portal-wrapper { margin-top: 30px; margin-bottom: 60px; }
    
    /* شريط الخدمات الإلكترونية السريعة */
    .gov-eservices-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; margin-bottom: 40px; }
    .eservice-btn { background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 25px 15px; text-align: center; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.02); display: flex; flex-direction: column; align-items: center; gap: 12px; border-bottom: 4px solid transparent; text-decoration: none; }
    .eservice-btn:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.06); }
    .eservice-btn.c-help { border-bottom-color: #2ecc71; }
    .eservice-btn.c-lost { border-bottom-color: #e74c3c; }
    .eservice-btn.c-news { border-bottom-color: #3498db; }
    .eservice-btn.c-person { border-bottom-color: var(--gold); }
    .eservice-icon { width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 26px; margin-bottom: 5px; transition: 0.3s; }
    .c-help .eservice-icon { background: rgba(46,204,113,0.1); color: #2ecc71; }
    .c-lost .eservice-icon { background: rgba(231,76,60,0.1); color: #e74c3c; }
    .c-news .eservice-icon { background: rgba(52,152,219,0.1); color: #3498db; }
    .c-person .eservice-icon { background: rgba(212,175,55,0.1); color: var(--gold); }
    .eservice-btn:hover .eservice-icon { transform: scale(1.1); color: #fff; }
    .c-help:hover .eservice-icon { background: #2ecc71; }
    .c-lost:hover .eservice-icon { background: #e74c3c; }
    .c-news:hover .eservice-icon { background: #3498db; }
    .c-person:hover .eservice-icon { background: var(--gold); }
    .eservice-title { font-size: 16px; font-weight: 900; color: #222; }
    .eservice-desc { font-size: 12px; color: #888; font-weight: 600; line-height: 1.5; }

    /* الترويسات الرسمية للأقسام مع أزرار الأكشن */
    .gov-section-header-v2 { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid var(--primary); padding-bottom: 15px; margin-bottom: 25px; flex-wrap: wrap; gap: 15px; position: relative; }
    .gov-section-header-v2::after { content: ""; position: absolute; bottom: -2px; right: 0; width: 100px; height: 2px; background: var(--gold); }
    .gov-section-title-v2 { font-size: 20px; font-weight: 900; color: var(--primary); display: flex; align-items: center; gap: 10px; margin: 0; }
    .gov-section-title-v2 i { color: var(--gold); font-size: 22px; }
    .gov-action-btn-sm { background: var(--primary); color: #fff; border: none; padding: 10px 20px; border-radius: 4px; font-size: 13.5px; font-weight: 800; cursor: pointer; transition: 0.3s; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 10px rgba(17,92,56,0.2); }
    .gov-action-btn-sm:hover { background: var(--gold); color: var(--primary); transform: translateY(-2px); box-shadow: 0 6px 15px rgba(212,175,55,0.3); }

    /* الهيكلية الرئيسية (عمودين) */
    .gov-main-grid-layout { display: grid; grid-template-columns: 2fr 1fr; gap: 35px; align-items: start; }

    /* بطاقات الأخبار المدمجة */
    .gov-home-news-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px; }
    .gov-h-news-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 6px; overflow: hidden; display: flex; flex-direction: column; transition: 0.3s; box-shadow: 0 2px 8px rgba(0,0,0,0.01); }
    .gov-h-news-card:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.05); border-color: var(--primary); }
    .gov-h-news-img { height: 170px; position: relative; border-bottom: 2px solid var(--gold); }
    .gov-h-news-img img { width: 100%; height: 100%; object-fit: cover; }
    .gov-h-news-body { padding: 18px; display: flex; flex-direction: column; flex: 1; }
    .gov-h-news-title { font-size: 15px; font-weight: 800; line-height: 1.5; margin-bottom: 12px; }
    .gov-h-news-title a { color: #111; text-decoration: none; }
    .gov-h-news-title a:hover { color: var(--primary); }
    .gov-h-news-meta { font-size: 12px; color: #888; display: flex; justify-content: space-between; border-top: 1px dashed #eee; padding-top: 12px; margin-top: auto; font-weight: 600; }

    /* القوائم الحكومية (مناشدات ومفقودات) */
    .gov-list-row-item { display: flex; align-items: center; padding: 18px; background: #fff; border: 1px solid #e2e8f0; border-radius: 6px; margin-bottom: 15px; transition: 0.3s; gap: 18px; border-right: 4px solid var(--primary); box-shadow: 0 2px 8px rgba(0,0,0,0.01); }
    .gov-list-row-item:hover { transform: translateX(-6px); box-shadow: 0 6px 15px rgba(0,0,0,0.04); }
    .gov-list-row-item.border-gold { border-right-color: var(--gold); }
    .gov-list-row-item.border-red { border-right-color: #e74c3c; }
    .gov-list-content { flex: 1; }
    .gov-list-title { font-size: 15.5px; font-weight: 800; color: #222; margin-bottom: 8px; display: block; text-decoration: none; line-height: 1.4; }
    .gov-list-title:hover { color: var(--primary); }
    .gov-list-details { font-size: 13px; color: #666; display: flex; gap: 15px; flex-wrap: wrap; font-weight: 600; }
    .gov-list-date { font-size: 12px; color: #999; white-space: nowrap; font-weight: 700; }

    /* السايدبار الملوكي */
    .sidebar-widget-gov { background: #fff; border: 1px solid #e2e8f0; border-radius: 6px; padding: 25px; margin-bottom: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); }
    .sidebar-widget-title { font-size: 17px; font-weight: 900; color: var(--primary); margin-bottom: 20px; display: flex; align-items: center; gap: 10px; border-bottom: 1px dashed #ddd; padding-bottom: 12px; }
    .sidebar-widget-title i { color: var(--gold); font-size: 20px; }

    /* استجابة الشاشات */
    @media(max-width: 992px) {
        .gov-main-grid-layout { grid-template-columns: 1fr; gap: 20px; }
        .gov-eservices-row { grid-template-columns: repeat(2, 1fr); }
    }
    @media(max-width: 600px) {
        .gov-home-news-grid { grid-template-columns: 1fr; }
        .gov-list-row-item { flex-direction: column; align-items: flex-start; gap: 10px; padding: 15px; }
        .gov-eservices-row { grid-template-columns: 1fr; }
    }
</style>

<div class="container gov-portal-wrapper">
    
    <div class="gov-eservices-row">
        <a href="javascript:void(0)" onclick="openGovModal('help')" class="eservice-btn c-help">
            <div class="eservice-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <span class="eservice-title">تقديم مناشدة طلب مساعدة</span>
            <span class="eservice-desc">بوابة الديوان الإلكتروني للطلبات</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('lost')" class="eservice-btn c-lost">
            <div class="eservice-icon"><i class="fas fa-search-location"></i></div>
            <span class="eservice-title">الإبلاغ عن المفقودات والأمانات</span>
            <span class="eservice-desc">النظام المركزي لحماية المفقودات</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('news')" class="eservice-btn c-news">
            <div class="eservice-icon"><i class="fas fa-camera"></i></div>
            <span class="eservice-title">أرسل خبراً أو تغطية</span>
            <span class="eservice-desc">شارك كصحفي محلي من قلب الحي</span>
        </a>
        <a href="javascript:void(0)" onclick="openGovModal('person')" class="eservice-btn c-person">
            <div class="eservice-icon"><i class="fas fa-award"></i></div>
            <span class="eservice-title">ترشيح شخصية الأسبوع</span>
            <span class="eservice-desc">رشح الرموز والقدوات من أبناء الحي</span>
        </a>
    </div>

    <div class="gov-main-grid-layout">
        
        <div class="gov-main-content-column">
            
            <section class="gov-home-section" style="margin-bottom: 50px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="far fa-newspaper"></i> المركز الإعلامي: أحدث الأخبار</h2>
                    <div>
                        <button class="gov-action-btn-sm" onclick="openGovModal('news')"><i class="fas fa-plus"></i> أرسل خبراً</button>
                        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="gov-action-btn-sm" style="background:#f4f6f9; color:var(--primary); border:1px solid #ccc; box-shadow:none; margin-right:5px;">المزيد &laquo;</a>
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
                    <h2 class="gov-section-title-v2"><i class="fas fa-hand-holding-heart"></i> ديوان المناشدات والمساعدات الحالية</h2>
                    <div>
                        <button class="gov-action-btn-sm" style="background:#2ecc71;" onclick="openGovModal('help')"><i class="fas fa-bullhorn"></i> تقديم مناشدة</button>
                        <a href="<?php echo get_post_type_archive_link('help'); ?>" class="gov-action-btn-sm" style="background:#f4f6f9; color:var(--primary); border:1px solid #ccc; box-shadow:none; margin-right:5px;">تصفح الكل &laquo;</a>
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
                        <span class="appeal-gov-tag <?php echo $badge_class; ?>" style="margin:0; min-width:90px; text-align:center;"><i class="<?php echo $badge_ico; ?>"></i> <?php echo $badge_txt; ?></span>
                        <div class="gov-list-content">
                            <a href="<?php the_permalink(); ?>" class="gov-list-title"><?php the_title(); ?></a>
                            <div class="gov-list-details">
                                <?php if(!empty($sender)) : ?><span><i class="fas fa-user-tie" style="color:var(--primary);"></i> <?php echo esc_html($sender); ?></span><?php endif; ?>
                                <span><i class="far fa-eye" style="color:var(--gold);"></i> <?php echo alzaytoon_get_post_views(get_the_ID()); ?> مهتم</span>
                            </div>
                        </div>
                        <span class="gov-list-date"><i class="far fa-calendar-check"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p style="text-align:center; padding:20px; color:#888;">لا توجد مناشدات حالياً.</p>
                    <?php endif; ?>
                </div>
            </section>

            <section class="gov-home-section" style="margin-bottom: 30px;">
                <div class="gov-section-header-v2">
                    <h2 class="gov-section-title-v2"><i class="fas fa-search-location"></i> سجل الإبلاغ عن المفقودات</h2>
                    <div>
                        <button class="gov-action-btn-sm" style="background:#e74c3c;" onclick="openGovModal('lost')"><i class="fas fa-search-plus"></i> إبلاغ عن مفقود</button>
                        <a href="<?php echo get_post_type_archive_link('lost'); ?>" class="gov-action-btn-sm" style="background:#f4f6f9; color:var(--primary); border:1px solid #ccc; box-shadow:none; margin-right:5px;">تصفح السجل &laquo;</a>
                    </div>
                </div>
                <div class="gov-list-wrapper">
                    <?php
                    $lost_query = new WP_Query(array('post_type' => 'lost', 'posts_per_page' => 3, 'post_status' => 'publish'));
                    if ($lost_query->have_posts()) : while ($lost_query->have_posts()) : $lost_query->the_post();
                        $phone = get_post_meta(get_the_ID(), '_gov_phone_address', true);
                    ?>
                    <div class="gov-list-row-item border-red">
                        <div class="gov-list-content">
                            <a href="<?php the_permalink(); ?>" class="gov-list-title"><?php the_title(); ?></a>
                            <div class="gov-list-details">
                                <span style="background:rgba(231,76,60,0.1); color:#e74c3c; padding:2px 8px; border-radius:3px; font-weight:800; font-family:sans-serif;"><i class="fas fa-phone-alt"></i> <?php echo esc_html($phone ? $phone : 'راجع التفاصيل'); ?></span>
                            </div>
                        </div>
                        <span class="gov-list-date"><i class="far fa-clock"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); else: ?>
                        <p style="text-align:center; padding:20px; color:#888;">لا توجد بلاغات مفقودات حالياً.</p>
                    <?php endif; ?>
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
                <h4 style="color:var(--primary); font-weight:900; font-size:17px; margin-bottom:8px;"><a href="<?php the_permalink(); ?>" style="text-decoration:none; color:inherit;"><?php the_title(); ?></a></h4>
                <p style="font-size:13.5px; color:#555; line-height:1.6; margin-bottom:15px;"><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" style="display:inline-block; font-size:13px; font-weight:800; color:#fff; background:var(--primary); padding:8px 20px; border-radius:4px; text-decoration:none;">السيرة الكاملة &laquo;</a>
                <?php endwhile; wp_reset_postdata(); endif; ?>
                
                <hr style="border:none; border-top:1px dashed #ddd; margin:20px 0;">
                <button class="gov-action-btn-sm" style="width:100%; justify-content:center; background:var(--gold); color:var(--primary);" onclick="openGovModal('person')"><i class="fas fa-user-plus"></i> رشح شخصية للأسبوع القادم</button>
            </div>

            <div class="sidebar-widget-gov">
                <h3 class="sidebar-widget-title"><i class="far fa-calendar-check"></i> أجندة الفعاليات القادمة</h3>
                <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:20px;">
                    <?php
                    $events_query = new WP_Query(array('post_type' => 'events', 'posts_per_page' => 3, 'post_status' => 'publish'));
                    if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post();
                    ?>
                    <div style="display:flex; gap:10px; align-items:center; border-bottom:1px solid #f5f5f5; padding-bottom:10px;">
                        <div style="background:var(--light); border:1px solid #e2e8f0; border-radius:4px; text-align:center; min-width:45px; padding:5px; color:var(--primary);">
                            <div style="font-size:16px; font-weight:900; font-family:sans-serif; line-height:1;"><?php echo get_the_date('d'); ?></div>
                            <div style="font-size:10px; font-weight:700; color:var(--gold);"><?php echo get_the_date('M'); ?></div>
                        </div>
                        <a href="<?php the_permalink(); ?>" style="font-size:13.5px; font-weight:700; color:#333; text-decoration:none; line-height:1.4;"><?php echo wp_trim_words(get_the_title(), 7, '...'); ?></a>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
                <button class="gov-action-btn-sm" style="width:100%; justify-content:center; background:#f4f6f9; color:var(--primary); border:1px dashed var(--primary); box-shadow:none;" onclick="openGovModal('events')"><i class="fas fa-bullhorn"></i> تسجيل فعالية / مبادرة</button>
            </div>

            <div class="sidebar-widget-gov poll-wrapper-box">
                <h3 class="sidebar-widget-title"><i class="fas fa-poll-h"></i> مركز اتخاذ القرار (استطلاع)</h3>
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
                <p id="pollAckMsg" class="poll-success-ack" style="display:none; text-align:center; color:var(--primary); font-weight:bold; font-size:13px; margin-top:10px; background:rgba(46,204,113,0.1); padding:8px; border-radius:4px;">تم تسجيل تصويتك المعتمد، شكراً لك.</p>
            </div>

            <div class="sidebar-widget-gov" style="border-top:4px solid #e74c3c;">
                <h3 class="sidebar-widget-title" style="color:#e74c3c; border-bottom-color:#f5b7b1;"><i class="fas fa-phone-volume" style="color:#e74c3c;"></i> دليل هواتف الطوارئ للحي</h3>
                <div style="display:flex; flex-direction:column; gap:10px;">
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid #f9f9f9;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-ambulance" style="color:#e74c3c; margin-left:6px;"></i> الإسعاف والطوارئ</span>
                        <a href="tel:101" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#e74c3c; background:rgba(231,76,60,0.08); padding:2px 8px; border-radius:3px; text-decoration:none;">101</a>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid #f9f9f9;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-fire-extinguisher" style="color:#e67e22; margin-left:6px;"></i> الدفاع المدني</span>
                        <a href="tel:102" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#e67e22; background:rgba(230,126,34,0.08); padding:2px 8px; border-radius:3px; text-decoration:none;">102</a>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid #f9f9f9;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-shield-alt" style="color:#2980b9; margin-left:6px;"></i> الشرطة والنجدة</span>
                        <a href="tel:100" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#2980b9; background:rgba(41,128,185,0.08); padding:2px 8px; border-radius:3px; text-decoration:none;">100</a>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0;">
                        <span style="font-size:13px; font-weight:700; color:#333;"><i class="fas fa-faucet" style="color:#27ae60; margin-left:6px;"></i> طوارئ البلدية</span>
                        <a href="tel:115" style="font-family:sans-serif !important; font-size:13px; font-weight:900; color:#27ae60; background:rgba(39,174,96,0.08); padding:2px 8px; border-radius:3px; text-decoration:none;">115</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
