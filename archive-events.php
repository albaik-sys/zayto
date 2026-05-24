<?php get_header(); ?>

<style>
    /* تنسيقات حصرية لأجندة الفعاليات */
    .event-lux-row { display: flex; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; margin-bottom: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.03); overflow: hidden; transition: all 0.3s ease; }
    .event-lux-row:hover { transform: translateY(-4px); box-shadow: 0 12px 25px rgba(17,92,56,0.12); border-color: var(--primary); }
    
    .event-date-box { background: linear-gradient(135deg, #115c38 0%, #0b3d25 100%); color: #fff; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; min-width: 130px; border-left: 3px solid var(--gold); }
    .e-day { font-size: 38px; font-weight: 900; line-height: 1; margin-bottom: 5px; font-family: sans-serif; }
    .e-month { font-size: 16px; font-weight: 700; color: var(--gold); }
    
    .event-img-box { width: 260px; position: relative; background: #f4f6f9; flex-shrink: 0; }
    .event-img-box img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; }
    
    .event-content-box { padding: 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; }
    .event-title { font-size: 20px; font-weight: 900; color: #111; margin-bottom: 12px; line-height: 1.4; }
    .event-title a:hover { color: var(--primary); }
    
    .event-meta-strip { display: flex; gap: 15px; font-size: 13px; color: #555; margin-bottom: 15px; font-weight: 700; flex-wrap: wrap; }
    .event-meta-strip span { background: #f8fbf9; padding: 6px 14px; border-radius: 4px; border: 1px dashed #c3d9cd; display: flex; align-items: center; gap: 6px; }
    
    @media(max-width: 768px) {
        .event-lux-row { flex-direction: column; }
        .event-date-box { flex-direction: row; min-height: auto; padding: 15px; gap: 15px; border-left: none; border-bottom: 3px solid var(--gold); }
        .e-day { font-size: 28px; }
        .event-img-box { width: 100%; height: 220px; }
        .event-content-box { padding: 20px; }
    }
</style>

<div class="container main-content-wrap" style="margin-top:40px; margin-bottom:60px; min-height:60vh;">
    
    <div class="block-header-gov" style="margin-bottom:40px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px; background:linear-gradient(135deg, #115c38 0%, #1e7e4e 100%); border-bottom:3px solid var(--gold); padding:20px 25px; border-radius:6px;">
        <h2 style="color:#fff; font-size:20px;"><i class="far fa-calendar-alt" style="color:var(--gold); margin-left:10px; font-size:24px;"></i> الأجندة الرسمية: المناسبات والفعاليات</h2>
        <button class="btn-royal-gold" onclick="openGovModal('events')" style="background:var(--gold); color:var(--primary); padding: 12px 25px; font-size: 15px; border:none; cursor:pointer; font-weight:900; border-radius:4px; box-shadow:0 4px 10px rgba(0,0,0,0.2);"><i class="fas fa-bullhorn"></i> تسجيل فعالية / مبادرة</button>
    </div>
    
    <div class="events-agenda-list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); $p_id = get_the_ID(); ?>
        
        <article class="event-lux-row">
            <div class="event-date-box">
                <span class="e-day"><?php echo get_the_date('d'); ?></span>
                <span class="e-month"><?php echo get_the_date('F'); ?></span>
            </div>
            
            <div class="event-img-box">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail('medium_large'); } else { echo "<img src='https://picsum.photos/400/300?random=".$p_id."'>"; } ?>
                </a>
            </div>
            
            <div class="event-content-box">
                <div>
                    <h3 class="event-title">
                        <a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a>
                    </h3>
                    <div class="event-meta-strip">
                        <span><i class="fas fa-eye" style="color:var(--primary);"></i> <?php echo alzaytoon_get_post_views($p_id); ?> مهتم</span>
                        <span><i class="fas fa-clock" style="color:var(--primary);"></i> نُشر: <?php echo get_the_date('Y/m/d'); ?></span>
                    </div>
                    <p style="font-size:14px; color:#555; line-height:1.7; margin-bottom:20px; font-weight:600;"><?php echo wp_trim_words(strip_tags(get_the_content()), 30, '...'); ?></p>
                </div>
                
                <div style="text-align:left;">
                    <a href="<?php the_permalink(); ?>" style="font-size:13.5px; background:rgba(17,92,56,0.08); color:var(--primary); padding:10px 22px; border-radius:4px; text-decoration:none; font-weight:800; transition:0.3s;">تغطية وتفاصيل الفعالية &laquo;</a>
                </div>
            </div>
        </article>

        <?php endwhile; else: ?>
            <div style="text-align:center; padding:60px 20px; background:#fff; border:1px dashed #ccc; border-radius:8px;">
                <i class="far fa-calendar-times" style="font-size:55px; color:#ddd; margin-bottom:15px;"></i>
                <h3 style="color:#777;">لا توجد فعاليات أو مناسبات مجدولة حالياً.</h3>
                <p style="color:#999; font-size:14px;">بادر بتسجيل أول فعالية أو مبادرة مجتمعية للحي عبر الزر أعلاه.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
