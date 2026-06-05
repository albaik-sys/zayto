<footer class="luxury-footer">
    <div class="container">
        
        <!-- الصف الأول: شبكة الروابط الرئيسية (4 أعمدة) -->
        <div class="footer-grid">
            
            <!-- العمود الأول: معلومات الموقع -->
            <div class="footer-col about-col">
                <div class="footer-logo">
                    <i class="fas fa-tree"></i>
                    <h3>شبكة حي الزيتون</h3>
                </div>
                <p class="footer-desc">
                    المنصة الرقمية الرسمية لأهالي حي الزيتون. ننشر الأخبار، نستقبل المناشدات، ونوثق الفعاليات والمبادرات المجتمعية بشفافية وموثوقية.
                </p>
                <div class="footer-social">
                    <a href="<?php echo esc_url(get_theme_mod('alzaytoon_facebook', '#')); ?>" target="_blank" aria-label="فيسبوك"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alzaytoon_whatsapp', '')); ?>" target="_blank" aria-label="واتساب"><i class="fab fa-whatsapp"></i></a>
                    <a href="<?php echo esc_url(get_theme_mod('alzaytoon_telegram', '#')); ?>" target="_blank" aria-label="تليجرام"><i class="fab fa-telegram-plane"></i></a>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('alzaytoon_phone', '')); ?>" aria-label="اتصال"><i class="fas fa-phone-alt"></i></a>
                </div>
            </div>
            
            <!-- العمود الثاني: روابط سريعة (أقسام الموقع) -->
            <div class="footer-col links-col">
                <h4><i class="fas fa-link"></i> روابط سريعة</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url(); ?>"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('news'); ?>"><i class="far fa-newspaper"></i> أخبار الحي</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('events'); ?>"><i class="far fa-calendar-alt"></i> الفعاليات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('help'); ?>"><i class="fas fa-hand-holding-heart"></i> المناشدات</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('person'); ?>"><i class="fas fa-user-tie"></i> شخصية الأسبوع</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('lost'); ?>"><i class="fas fa-search-location"></i> المفقودات</a></li>
                </ul>
            </div>
            
            <!-- العمود الثالث: صفحات خدمية مهمة -->
            <div class="footer-col services-col">
                <h4><i class="fas fa-cogs"></i> خدمات الديوان</h4>
                <ul class="footer-links">
                    <li><a href="javascript:void(0)" onclick="openGovModal('help')"><i class="fas fa-bullhorn"></i> تقديم مناشدة</a></li>
                    <li><a href="javascript:void(0)" onclick="openGovModal('lost')"><i class="fas fa-search-location"></i> الإبلاغ عن مفقود</a></li>
                    <li><a href="javascript:void(0)" onclick="openGovModal('news')"><i class="fas fa-camera"></i> إرسال خبر محلي</a></li>
                    <li><a href="javascript:void(0)" onclick="openGovModal('person')"><i class="fas fa-award"></i> ترشيح شخصية</a></li>
                    <li><a href="javascript:void(0)" onclick="openGovModal('events')"><i class="fas fa-calendar-plus"></i> تسجيل فعالية</a></li>
                </ul>
            </div>
            
            <!-- العمود الرابع: معلومات الاتصال + صفحات قانونية -->
            <div class="footer-col contact-col">
                <h4><i class="fas fa-address-card"></i> تواصل معنا</h4>
                <ul class="contact-info-list">
                    <li><i class="fas fa-phone-alt"></i> <a href="tel:<?php echo esc_attr(get_theme_mod('alzaytoon_phone', '')); ?>"><?php echo esc_html(get_theme_mod('alzaytoon_phone', 'رقم الهاتف')); ?></a></li>
                    <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alzaytoon_whatsapp', '')); ?>">واتساب الرسمي</a></li>
                    <li><i class="far fa-envelope"></i> <a href="mailto:info@zaytoon.com">info@zaytoon.com</a></li>
                </ul>
                
                <div class="legal-links">
                    <a href="#"><i class="fas fa-shield-alt"></i> سياسة الخصوصية</a>
                    <a href="#"><i class="fas fa-file-contract"></i> الشروط والأحكام</a>
                    <a href="<?php echo home_url('/contact'); ?>"><i class="fas fa-headset"></i> اتصل بنا</a>
                </div>
            </div>
        </div>
        
        <!-- الصف الثاني: حقوق الملكية والبنر السفلي -->
        <div class="footer-bottom">
            <div class="copyright">
                <p>جميع الحقوق محفوظة &copy; <?php echo date('Y'); ?> شبكة حي الزيتون الإعلامية – تصميم وتطوير <strong>م. خالد البيك</strong></p>
            </div>
            <div class="footer-badge">
                <span class="cert-badge"><i class="fas fa-check-circle"></i> منصة معتمدة رسمياً</span>
                <span class="version-badge">الإصدار 6.0</span>
            </div>
        </div>
        
    </div>
</footer>

<!-- الأزرار العائمة (واتساب وفيسبوك) كما هي -->
<div class="floating-social-anchor-box">
    <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('alzaytoon_whatsapp', '')); ?>" class="float-btn-item f-whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="<?php echo esc_url(get_theme_mod('alzaytoon_facebook', '#')); ?>" class="float-btn-item f-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
</div>

<!-- النافذة المنبثقة الموحدة (كما هي موجودة سابقاً - احتفظ بها) -->
<div id="govUnifiedModal" class="gov-modal-overlay">
    <div class="gov-modal-container">
        <span class="gov-modal-close-icon" onclick="closeGovModal()">&times;</span>
        <div class="gov-modal-title-header">
            <h3 id="modalDynamicTitle"><i class="fas fa-file-signature"></i> بوابة الديوان الإلكتروني للطلبات والمعاملات</h3>
        </div>
        <form id="govUnifiedForm" class="gov-form-wrapper" enctype="multipart/form-data">
            <div class="gov-form-row-grid">
                <div class="form-group-box">
                    <label id="lblNameField">الاسم الكامل أو اسم العضوية:</label>
                    <input type="text" name="appeal_name" placeholder="أدخل الاسم رباعي" class="gov-form-input">
                </div>
                <div class="form-group-box">
                    <label id="lblPhoneAddress">رقم الجوال / العنوان الحالي *:</label>
                    <input type="text" name="appeal_phone" placeholder="رقم الجوال أو مكان السكن" required class="gov-form-input">
                </div>
            </div>
            <div class="form-group-box">
                <label id="lblFormTitle">عنوان البلاغ أو المناشدة الرئيسي *:</label>
                <input type="text" name="appeal_title" placeholder="اكتب مسمى مختصر وواضح" required class="gov-form-input">
            </div>
            <div class="form-group-box">
                <label id="lblFormContent">تفاصيل أخرى وشرح كامل للموضوع *:</label>
                <textarea name="appeal_content" placeholder="اكتب الشرح المكتمل والتفاصيل الهامة هنا..." required class="gov-form-input" rows="4"></textarea>
            </div>
            <div class="form-group-box">
                <label id="lblEndDate">تاريخ انتهاء النشر / موعد الفعالية (إن وجد):</label>
                <input type="date" name="appeal_end" class="gov-form-input">
            </div>
            <div class="form-group-box">
                <label>إرفاق صورة داعمة واضحة للموضوع:</label>
                <label class="custom-gov-file-uploader">
                    <i class="fas fa-upload"></i> اضغط هنا لتحميل الصورة من جهازك
                    <input type="file" name="appeal_image" accept="image/*" style="display:none;">
                </label>
            </div>
            <div class="form-group-box" style="background:#f4f6f9; padding:15px; border-radius:4px; margin-top:10px;">
                <label style="color:var(--primary); font-weight:800;" id="captchaLabelTxt">نظام التحقق الأمني الرقمي العشوائي</label>
                <div style="display:flex; gap:15px; align-items:center; margin-top:5px;">
                    <span id="captchaMathOp" style="font-size:18px; font-weight:900; color:#111; background:#fff; padding:6px 15px; border:1px solid #ccc;">0 + 0 =</span>
                    <input type="number" name="captcha_input" placeholder="الإجابة?" required class="gov-form-input" style="width:120px; margin-bottom:0;">
                </div>
                <input type="hidden" name="captcha_correct" id="captchaCorrectValue">
            </div>
            <input type="hidden" name="form_type" id="hiddenFormType" value="help">
            <input type="hidden" name="action" value="submit_gov_form">
            <button type="submit" class="btn-royal-gold full-width-btn" id="govFormSubmitBtn" style="margin-top:20px; font-size:16px; font-weight:900;">إرسال المعاملة فوراً للأنظمة</button>
            <div id="govFormStatusResponse" class="gov-ajax-response-message"></div>
        </form>
    </div>
</div>

<script>
// دوال النافذة المنبثقة (موجودة مسبقاً، نحتفظ بها)
function openGovModal(type) {
    const modal = document.getElementById('govUnifiedModal');
    const hiddenType = document.getElementById('hiddenFormType');
    const dTitle = document.getElementById('modalDynamicTitle');
    const lblName = document.getElementById('lblNameField');
    const lblPhone = document.getElementById('lblPhoneAddress');
    const lblTitle = document.getElementById('lblFormTitle');
    const lblContent = document.getElementById('lblFormContent');
    const lblDate = document.getElementById('lblEndDate');
    
    hiddenType.value = type;
    
    const num1 = Math.floor(Math.random() * 9) + 1; const num2 = Math.floor(Math.random() * 9) + 1;
    document.getElementById('captchaMathOp').innerText = `${num1} + ${num2} =`;
    document.getElementById('captchaCorrectValue').value = num1 + num2;
    
    lblName.innerText = 'الاسم الكامل أو اسم العضوية:';
    lblDate.innerText = 'تاريخ انتهاء النشر / موعد الفعالية (إن وجد):';

    if (type === 'lost') {
        dTitle.innerHTML = '<i class="fas fa-search"></i> نظام الإبلاغ المركزي عن المفقودات وحمايتها';
        lblPhone.innerText = 'رقم جوال للتواصل / مكان الفقد والاتصال *'; lblTitle.innerText = 'ما الشيء المفقود؟ (عنوان البلاغ) *'; lblContent.innerText = 'تفاصيل أخرى، أوصاف المفقود ومكان العثور المتوقع *';
    } else if (type === 'person') {
        dTitle.innerHTML = '<i class="fas fa-award" style="color:#d4af37;"></i> بوابة ترشيح شخصية الأسبوع';
        lblPhone.innerText = 'رقم جوالك (للتواصل في حال تم اعتماد الترشيح) *'; lblTitle.innerText = 'الاسم الرباعي للشخصية المرشحة *'; lblContent.innerText = 'اكتب نبذة وافية عن الشخصية، إنجازاتها، ومساهماتها في حي الزيتون ولماذا تستحق التكريم *';
    } else if (type === 'events') {
        dTitle.innerHTML = '<i class="far fa-calendar-check" style="color:#2ecc71;"></i> بوابة تسجيل الفعاليات والمبادرات المجتمعية';
        lblName.innerText = 'الجهة المنظمة / اسم المبادرة:'; lblPhone.innerText = 'رقم جوال منسق الفعالية للتواصل *'; lblTitle.innerText = 'اسم الفعالية أو المبادرة *'; lblContent.innerText = 'تفاصيل الفعالية، أهدافها، والموقع المخصص لها *'; lblDate.innerText = 'تاريخ ووقت بدء الفعالية *';
    } else if (type === 'news') {
        dTitle.innerHTML = '<i class="far fa-newspaper" style="color:#2980b9;"></i> بوابة استقبال الأخبار والتغطيات المحلية';
        lblName.innerText = 'اسم المراسل / المواطن صاحب الخبر:'; lblPhone.innerText = 'رقم الجوال للتواصل (لن يتم نشره) *'; lblTitle.innerText = 'عنوان الخبر أو التغطية *'; lblContent.innerText = 'اكتب تفاصيل الحدث ومكانه بشكل كامل وواضح *'; lblDate.innerText = 'تاريخ وقوع الحدث:';
    } else {
        dTitle.innerHTML = '<i class="fas fa-file-signature"></i> بوابة الديوان الإلكتروني لتقديم طلبات المناشدات والدعم';
        lblPhone.innerText = 'رقم الجوال / العنوان السكني الحالي للحالة *'; lblTitle.innerText = 'موضوع وعنوان المناشدة الرئيسي والعاجل *'; lblContent.innerText = 'تفاصيل أخرى وشرح كامل ومستوفى للظروف والاستغاثة *';
    }
    modal.style.display = 'flex';
}

function closeGovModal() { document.getElementById('govUnifiedModal').style.display = 'none'; }
window.onclick = function(e) { if(e.target == document.getElementById('govUnifiedModal')) closeGovModal(); }

const govUnifiedForm = document.getElementById('govUnifiedForm');
if(govUnifiedForm) {
    govUnifiedForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('govFormSubmitBtn');
        const msg = document.getElementById('govFormStatusResponse');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> جاري معالجة الطلب...'; btn.disabled = true;
        fetch('<?php echo admin_url('admin-ajax.php'); ?>', { method: 'POST', body: new FormData(govUnifiedForm) })
        .then(res => res.json()).then(data => {
            btn.innerHTML = 'إرسال المعاملة فوراً للأنظمة'; btn.disabled = false; msg.innerText = data.data.message;
            if(data.success) { msg.style.color = '#115c38'; govUnifiedForm.reset(); setTimeout(() => { closeGovModal(); msg.innerText = ''; }, 3500); } 
            else { msg.style.color = '#e74c3c'; const num1 = Math.floor(Math.random() * 9) + 1; const num2 = Math.floor(Math.random() * 9) + 1; document.getElementById('captchaMathOp').innerText = `${num1} + ${num2} =`; document.getElementById('captchaCorrectValue').value = num1 + num2; }
        }).catch(() => { btn.innerHTML = 'إرسال المعاملة فوراً للأنظمة'; btn.disabled = false; msg.style.color = '#e74c3c'; msg.innerText = 'خطأ حمايتي سحابي.'; });
    });
}
</script>
<!-- ==============================================
     نافذة الترحيب التجريبية (تظهر مرة واحدة لكل زائر)
     ============================================== -->
<div id="welcomeDemoModal" class="welcome-modal-overlay">
    <div class="welcome-modal-container">
        <div class="welcome-modal-header">
            <div class="welcome-icon">
                <i class="fas fa-flask"></i>
            </div>
            <button class="welcome-close-btn" id="closeWelcomeModal">&times;</button>
        </div>
        <div class="welcome-modal-body">
            <h3>مرحباً بك في شبكة حي الزيتون 🌿</h3>
            <div class="welcome-badge">
                <i class="fas fa-vial"></i> بيئة تجريبية
            </div>
            <p>
                هذا الموقع في <strong>المرحلة التجريبية</strong>. جميع المناشدات، الأخبار، 
                الفعاليات، والبيانات المعروضة هي <strong>أمثلة اختبارية</strong> لأغراض التطوير والعرض فقط.
            </p>
            <p>
                نعتذر عن أي تقصير، ونعمل على تحسين المنصة لتقديم أفضل خدمة لأهالي حي الزيتون.
            </p>
            <div class="welcome-note">
                <i class="fas fa-info-circle"></i> لن تظهر هذه الرسالة مرة أخرى لك.
            </div>
        </div>
        <div class="welcome-modal-footer">
            <button class="welcome-btn" id="confirmWelcomeBtn">فهمت، شكراً لكم</button>
        </div>
    </div>
</div>

<script>
// نافذة الترحيب التجريبية - تظهر مرة واحدة لكل زائر
(function() {
    // التحقق إذا كان الزائر قد شاهد النافذة من قبل
    const hasSeenWelcome = localStorage.getItem('zaytoon_welcome_seen');
    
    if (!hasSeenWelcome) {
        // إظهار النافذة بعد 0.5 ثانية (تأثير لطيف)
        setTimeout(function() {
            const modal = document.getElementById('welcomeDemoModal');
            if (modal) {
                modal.classList.add('show');
                document.body.style.overflow = 'hidden'; // منع التمرير خلف النافذة
            }
        }, 500);
    }
    
    // دالة إغلاق النافذة
    function closeWelcomeModal() {
        const modal = document.getElementById('welcomeDemoModal');
        if (modal) {
            modal.classList.remove('show');
            document.body.style.overflow = ''; // إعادة التمرير
            // تخزين أن الزائر شاهد النافذة (لن تظهر مرة أخرى)
            localStorage.setItem('zaytoon_welcome_seen', 'true');
        }
    }
    
    // ربط أزرار الإغلاق
    const closeBtn = document.getElementById('closeWelcomeModal');
    const confirmBtn = document.getElementById('confirmWelcomeBtn');
    
    if (closeBtn) closeBtn.addEventListener('click', closeWelcomeModal);
    if (confirmBtn) confirmBtn.addEventListener('click', closeWelcomeModal);
    
    // إغلاق النافذة عند الضغط على الخلفية (الoverlay)
    const overlay = document.getElementById('welcomeDemoModal');
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeWelcomeModal();
            }
        });
    }
})();
</script>
<?php wp_footer(); ?>
</body>
</html>
