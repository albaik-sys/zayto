<?php get_header(); ?>

<style>
    /* تنسيقات حصرية لبطاقات الشخصيات الفاخرة */
    .person-lux-card { display: flex; flex-direction: row; background: #fff; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; margin-bottom: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); transition: all 0.3s ease; }
    .person-lux-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(212,175,55,0.15); border-color: var(--gold); }
    .person-img-wrap { width: 300px; flex-shrink: 0; background: #f4f6f9; position: relative; border-left: 4px solid var(--gold); }
    .person-img-wrap img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; transition: transform 0.5s ease; }
    .person-lux-card:hover .person-img-wrap img { transform: scale(1.05); }
    .person-info-wrap { padding: 35px; flex: 1; display: flex; flex-direction: column; justify-content: center; }
    .person-lux-title { font-size: 22px; font-weight: 900; color: var(--primary); margin-bottom: 15px; }
    .person-lux-excerpt { font-size: 15px; color: #555; line-height: 1.8; margin-bottom: 25px; text-align: justify; font-weight: 600; }
    .person-lux-meta { display: flex; justify-content: space-between; align-items: center; border-top: 1px dashed #ddd; padding-top: 15px; }
    @media(max-width: 768px) {
        .person-lux-card { flex-direction: column; }
        .person-img-wrap { width: 100%; height: 280px; border-left: none; border-bottom: 4px solid var(--gold); }
        .person-info-wrap { padding: 25px; }
        .person-lux-title { font-size: 19px; }
    }
</style>

<div class="container main-content-wrap" style="margin-top:40px; margin-bottom:60px; min-height:60vh;">
    
    <div class="block-header-gov" style="margin-bottom:40px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px; background:linear-gradient(135deg, #115c38 0%, #0b3d25 100%); border-bottom:3px solid var(--gold); padding:20px 25px; border-radius:6px;">
        <h2 style="color:#fff; font-size:22px;"><i class="fas fa-award" style="color:var(--gold); margin-left:10px; font-size:26px;"></i> سجل الشرف: شخصيات حي الزيتون</h2>
        <button class="btn-royal-gold" onclick="openGovModal('person')" style="background:var(--gold); color:var(--primary); padding: 12px 25px; font-size: 15px; border:none; cursor:pointer; font-weight:900; border-radius:4px; box-shadow:0 4px 10px rgba(0,0,0,0.2);"><i class="fas fa-user-plus"></i> رشح شخصية للأسبوع</button>
    </div>
    
    <div class="person-articles-list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); $p_id = get_the_ID(); ?>
        
        <article class="person-lux-card">
            <div class="person-img-wrap">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail('large'); } else { echo "<img src='https://picsum.photos/600/600?random=".$p_id."'>"; } ?>
                </a>
            </div>
            
            <div class="person-info-wrap">
                <h3 class="person-lux-title">
                    <a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none;"><?php the_title(); ?></a>
                </h3>
                <div class="person-lux-excerpt">
                    <?php echo wp_trim_words(strip_tags(get_the_content()), 40, '...'); ?>
                </div>
                
                <div class="person-lux-meta">
                    <span style="font-size:13.5px; color:#888; font-weight:700;"><i class="far fa-calendar-check" style="color:var(--gold);"></i> تم النشر في: <?php echo get_the_date('d F Y'); ?></span>
                    <a href="<?php the_permalink(); ?>" style="background:rgba(212,175,55,0.1); color:#b8962c; padding:8px 20px; border-radius:4px; text-decoration:none; font-weight:800; transition:0.3s; font-size:14px;">اقرأ السيرة الكاملة &laquo;</a>
                </div>
            </div>
        </article>

        <?php endwhile; else: ?>
            <div style="text-align:center; padding:60px 20px; background:#fff; border:1px dashed #ccc; border-radius:8px;">
                <i class="fas fa-medal" style="font-size:50px; color:#ddd; margin-bottom:15px;"></i>
                <h3 style="color:#777;">لم يتم إدراج شخصيات بعد.</h3>
                <p style="color:#999; font-size:14px;">كن أول من يرشح شخصية مؤثرة في حي الزيتون عبر الزر أعلاه.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
