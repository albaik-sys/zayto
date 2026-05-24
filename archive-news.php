<?php get_header(); ?>

<style>
    /* تنسيقات حصرية لبطاقات الأخبار الفاخرة */
    .news-lux-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 25px; }
    .news-lux-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.02); transition: 0.3s; display: flex; flex-direction: column; }
    .news-lux-card:hover { transform: translateY(-6px); box-shadow: 0 15px 30px rgba(17,92,56,0.1); border-color: var(--primary); }
    
    .news-img-wrap { height: 220px; position: relative; overflow: hidden; border-bottom: 3px solid var(--gold); background: #f4f6f9; }
    .news-img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
    .news-lux-card:hover .news-img-wrap img { transform: scale(1.06); }
    .news-badge { position: absolute; top: 15px; right: 15px; background: rgba(17,92,56,0.9); color: #fff; padding: 5px 12px; font-size: 11px; font-weight: 800; border-radius: 4px; backdrop-filter: blur(4px); }
    
    .news-card-body { padding: 25px 20px; display: flex; flex-direction: column; flex: 1; }
    .news-lux-title { font-size: 17.5px; font-weight: 900; line-height: 1.5; margin-bottom: 12px; }
    .news-lux-title a { color: #111; text-decoration: none; transition: 0.2s; }
    .news-lux-card:hover .news-lux-title a { color: var(--primary); }
    
    .news-lux-excerpt { font-size: 14px; color: #666; line-height: 1.7; flex: 1; margin-bottom: 20px; font-weight: 600; }
    .news-lux-meta { display: flex; justify-content: space-between; border-top: 1px solid #f0f0f0; padding-top: 15px; font-size: 12.5px; color: #888; font-weight: 700; align-items: center; }
</style>

<div class="container main-content-wrap" style="margin-top:40px; margin-bottom:60px; min-height:60vh;">
    
    <div class="block-header-gov" style="margin-bottom:40px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px; background:linear-gradient(135deg, #115c38 0%, #1e7e4e 100%); border-bottom:3px solid var(--gold); padding:20px 25px; border-radius:6px;">
        <h2 style="color:#fff; font-size:21px;"><i class="far fa-newspaper" style="color:var(--gold); margin-left:10px; font-size:24px;"></i> المركز الإعلامي: أخبار حي الزيتون</h2>
        <button class="btn-royal-gold" onclick="openGovModal('news')" style="background:var(--gold); color:var(--primary); padding: 12px 25px; font-size: 15px; border:none; cursor:pointer; font-weight:900; border-radius:4px; box-shadow:0 4px 10px rgba(0,0,0,0.2);"><i class="fas fa-camera"></i> أرسل خبراً / تغطية</button>
    </div>
    
    <div class="news-lux-grid">
        <?php if(have_posts()) : while(have_posts()) : the_post(); $p_id = get_the_ID(); ?>
        
        <article class="news-lux-card">
            <div class="news-img-wrap">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail('medium_large'); } else { echo "<img src='https://picsum.photos/400/250?random=".$p_id."'>"; } ?>
                </a>
                <span class="news-badge"><i class="fas fa-bolt" style="color:var(--gold);"></i> خبر محلي</span>
            </div>
            
            <div class="news-card-body">
                <h3 class="news-lux-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="news-lux-excerpt">
                    <?php echo wp_trim_words(strip_tags(get_the_content()), 20, '...'); ?>
                </div>
                
                <div class="news-lux-meta">
                    <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('d M Y'); ?></span>
                    <span style="background:rgba(212,175,55,0.1); color:#b8962c; padding:4px 10px; border-radius:4px;"><i class="far fa-eye"></i> <?php echo alzaytoon_get_post_views($p_id); ?> قراءة</span>
                </div>
            </div>
        </article>

        <?php endwhile; else: ?>
            <div style="grid-column:1/-1; text-align:center; padding:60px 20px; background:#fff; border:1px dashed #ccc; border-radius:8px;">
                <i class="far fa-newspaper" style="font-size:55px; color:#ddd; margin-bottom:15px;"></i>
                <h3 style="color:#777;">لا توجد أخبار منشورة حالياً.</h3>
                <p style="color:#999; font-size:14px;">كن أول المراسلين وأرسل لنا تغطيتك للحي عبر الزر أعلاه.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
