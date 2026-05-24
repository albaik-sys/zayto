<?php get_header(); ?>
<div class="container main-content-wrap" style="margin-top:40px; margin-bottom:60px; min-height:60vh;">
    <div class="block-header-gov" style="margin-bottom:35px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px; background:linear-gradient(135deg, #d4af37 0%, #b8962c 100%); border-bottom:3px solid var(--primary);">
        <h2 style="color:#fff;"><i class="fas fa-search-location"></i> بوابة المفقودات والأمانات المركزية</h2>
        <button class="btn-royal-gold" onclick="openGovModal('lost')" style="background:var(--primary); padding: 10px 20px; font-size: 14px; border:none; cursor:pointer;"><i class="fas fa-plus"></i> الإبلاغ عن مفقود</button>
    </div>
    
    <div class="lost-articles-list-vertical-wrapper" style="display: flex; flex-direction: column; gap: 15px;">
        <?php if(have_posts()) : while(have_posts()) : the_post(); 
            $p_id = get_the_ID();
            $card_sender = get_post_meta($p_id, '_gov_sender_name', true);
            $card_phone = get_post_meta($p_id, '_gov_phone_address', true);
        ?>
        <div class="lost-list-row-item-box" style="display: flex; align-items: center; justify-content: space-between; background: #fff; border: 1px solid #e2e8f0; border-right: 4px solid var(--gold); padding: 20px; border-radius: 6px; gap: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
            <div style="display: flex; flex-direction: column; gap: 12px; flex: 1;">
                <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                    <span style="background:#e74c3c; color:#fff; padding:5px 12px; border-radius:3px; font-size:11px; font-weight:800; box-shadow:0 2px 5px rgba(231,76,60,0.2);"><i class="fas fa-search"></i> بلاغ أمانات</span>
                    <h3 style="font-size: 17px; font-weight: 800; margin: 0;"><a href="<?php the_permalink(); ?>" style="color:#1a1a1a; text-decoration:none;"><?php the_title(); ?></a></h3>
                </div>
                <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 15px; font-size: 13.5px; color: #555; background: rgba(212,175,55,0.05); padding: 10px 15px; border-radius: 4px; border: 1px dashed rgba(212,175,55,0.2); width: fit-content;">
                    <?php if(!empty($card_sender)) : ?>
                        <span><i class="fas fa-user-circle" style="color:#b8962c;"></i> <strong>صاحب البلاغ:</strong> <?php echo esc_html($card_sender); ?></span>
                    <?php endif; ?>
                    <?php if(!empty($card_phone)) : ?>
                        <span style="color:#b8962c; font-weight:800; font-family:sans-serif;"><i class="fas fa-phone-alt"></i> <?php echo esc_html($card_phone); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div style="display:flex; flex-direction:column; align-items:flex-end; justify-content:space-between; gap:15px;">
                <span style="font-size: 12.5px; color: #888; white-space: nowrap; font-weight:700;"><i class="far fa-calendar-check"></i> <?php echo get_the_date('d F Y'); ?></span>
                <a href="<?php the_permalink(); ?>" style="font-size:13px; background:rgba(212,175,55,0.1); color:#b8962c; padding:8px 18px; border-radius:4px; text-decoration:none; font-weight:800; transition:0.3s;">المزيد &laquo;</a>
            </div>
        </div>
        <?php endwhile; else: ?>
            <p style="text-align:center; padding:50px; background:#fff; border:1px solid #e0e0e0; border-radius:8px;">لا توجد بلاغات مفقودات مسجلة حالياً.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
