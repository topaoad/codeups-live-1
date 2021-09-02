<?php get_header(); ?>

<div class="l-mv p-sub-mv js-sub-mv">
  <picture class="p-sub-mv__img">
    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/common/contactpage_pc.jpg" media="(min-width: 768px)" />
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contactpage_sp.jpg" alt="">
  </picture>
  <div class="p-sub-mv__block">
    <h2 class="p-sub-mv__title">CONTACT</h2>
    <span class="p-sub-mv__subtitle">お問い合わせ</span>
  </div>
</div>

<section class="l-sub-contact p-sub-contact">
  <div class="l-inner">
    <div class="p-sub-contact__textBox">
      <p class="p-sub-contact__text">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</p>
    </div>
    <div class="p-sub-contact__contents">
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お問い合わせ種別</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-radio">
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>制作依頼</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>採用</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>IR</span>
          </label>
          <label>
            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>その他</span>
          </label>
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">会社名・団体名</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お名前</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="text">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">メールアドレス</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="email">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">電話番号</p>
        </div>
        <div class="p-sub-contact__item p-contact-text">
          <input class="p-contact-text__text" type="tel">
        </div>
      </div>
      <div class="p-sub-contact__content">
        <div class="p-sub-contact__head">
          <p class="p-sub-contact__title">お問い合わせ内容</p>
          <span class="p-sub-contact__required">必須</span>
        </div>
        <div class="p-sub-contact__item p-contact-textarea">
          <textarea class="p-contact-textarea__text"></textarea>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>