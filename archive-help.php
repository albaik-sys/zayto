<?php get_header(); ?>
<div class="container main-content-wrap" style="margin-top:40px; margin-bottom:60px; min-height:60vh;">
    <div class="block-header-gov" style="margin-bottom:35px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px;">
        <h2><i class="fas fa-hand-holding-heart" style="color:var(--gold); margin-left:8px;"></i> ديوان المناشدات والمساعدات الرسمي</h2>
        <button class="btn-royal-gold" onclick="openGovModal('help')" style="padding: 10px 20px; font-size: 14px; border:none; cursor:pointer;"><i class="fas fa-plus"></i> تقديم مناشدة جديدة</button>
    </div>
    
    <div class="lost-articles-list-vertical-wrapper" style="display: flex; flex-direction: column; gap: 15px;">
        <?php if(have_posts()) : while(have_posts()) : the_post(); 
            $p_id = get_the_ID();
            $card_sender = get_post_meta($p_id, '_gov_sender_name', true);
            $card_phone = get_post_meta($p_id, '_gov_phone_address', true);
            $badge_status = get_post_meta($p_id, '_appeal_badge_status', true);
            
            $badge_class = 'badge-new'; $badge_txt = 'جديد'; $badge_ico = 'fas fa-star';
            if($badge_status == 'urgent') { $badge_class = 'badge-urgent'; $badge_txt = 'عاجلة'; $badge_ico = 'fas fa-exclamation-triangle'; }
            elseif($badge_status == 'necessary') { $badge_class = 'badge-necessary'; $badge_txt = 'ضرورية'; $badge_ico = 'fas fa-exclamation-circle'; }
            elseif($badge_status == 'following') { $badge_class = 'badge-following'; $badge_txt = 'قيد المتابعة'; $badge_ico = 'fas fa-sync'; }
        ?>
        <div class="lost-list-row-item-box" style="display: flex; align-items: center; justify-content: space-between; background: #fff; border: 1px solid #e2e8f0; border-right: 4px solid var(--primary); padding: 20px; border-radius: 6px; gap: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
            <div style="display: flex; flex-direction: column; gap: 12px; flex: 1;">
                <div style="display:flex; align-items:center; gap:12px; flex-wrap:wrap;">
                    <span class="appeal-gov-tag <?php echo $badge_class; ?>" style="margin:0; padding:5px 12px; font-size:11px; border-radius:3px; color:#fff; box-shadow:0 2px 5px rgba(0,0,0,0.1);"><i class="<?php echo $badge_ico; ?>"></i> <?php echo $badge_txt; ?></span>
                    <h3 style="font-size: 17px; font-weight: 800; margin: 0;"><a href="<?php the_permalink(); ?>" style="color:#1a1a1a; text-decoration:none;"><?php the_title(); ?></a></h3>
                </div>
                <div style="display: flex; align-items: center; flex-wrap: wrap; gap: 15px; font-size: 13.5px; color: #555; background: #f8fbf9; padding: 10px 15px; border-radius: 4px; border: 1px dashed rgba(17,92,56,0.15); width: fit-content;">
                    <?php if(!empty($card_sender)) : ?>
                        <span><i class="fas fa-user-tie" style="color:var(--primary);"></i> <strong>مقدم الطلب:</strong> <?php echo esc_html($card_sender); ?></span>
                    <?php endif; ?>
                    <?php if(!empty($card_phone)) : ?>
                        <span style="color:var(--primary); font-weight:800; font-family:sans-serif;"><i class="fas fa-phone-alt"></i> <?php echo esc_html($card_phone); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div style="display:flex; flex-direction:column; align-items:flex-end; justify-content:space-between; gap:15px;">
                <span style="font-size: 12.5px; color: #888; white-space: nowrap; font-weight:700;"><i class="far fa-calendar-check"></i> <?php echo get_the_date('d F Y'); ?></span>
                <a href="<?php the_permalink(); ?>" style="font-size:13px; background:rgba(17,92,56,0.08); color:var(--primary); padding:8px 18px; border-radius:4px; text-decoration:none; font-weight:800; transition:0.3s;">التفاصيل &laquo;</a>
            </div>
        </div>
        <?php endwhile; else: ?>
            <p style="text-align:center; padding:50px; background:#fff; border:1px solid #e0e0e0; border-radius:8px;">لا توجد مناشدات مدرجة حالياً في الديوان.</p>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
