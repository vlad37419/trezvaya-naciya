<section class="infosection">
  <div class="container">
    <div class="whoshown">
      {$content}
    </div>
    <div class="infosection-accordion">
      <div class="infosection-accordion-title">
        Часто задаваемые вопросы
      </div>
      <div class="infosection-accordion-block">
        <div class='sidebar-1'>
          {foreach $id | resource : "faq_list" | fromJSON as $item}
          {if $item.answer != ''}
          <div class='sidebar-menu'>{$item.question}<div class='expand'></div>
          </div>
          <div class='sub-menu'>
            <div class="sub-text">
              {$item.answer}
            </div>
          </div>
          {else}
          <div class='sidebar-menu'>{$item.question}<div class='expand'></div>
          </div>
          {/if}
          {/foreach}
        </div>
      </div>
    </div>
  </div>
</section>

{'!AjaxForm'|snippet:[
'form' => 'form_wave',
'hooks' => 'validate_form, bx24, FormItSaveForm, email',
'emailSubject' => 'получить консультацию',
'emailTo' => 'doctor.zapoy@yandex.ru',
'emailFrom' => 'info@med-spb.pro',
'emailTpl' => 'email',
'validationErrorMessage' => 'В форме содержатся ошибки!',
'successMessage' => 'Сообщение успешно отправлено'
]}


<section class="weareinternet">
  <div class="container">
    <div class="weareinternet-title">
      Мы в интернете
    </div>
  </div>
  <div class="container weareinternet-container">
    <div class="weareinternet-wrap">
      <div class="weareinternet-block">
        <a href="#" class="weareinternet-border">
          <div class="weareinternet-logo">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo.svg" alt="">
          </div>
          <div class="weareinternet-grade">
            4,5
          </div>
          <div class="weareinternet-stars">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars.svg" alt="">
          </div>
          <div class="weareinternet-revievs">
            Отзывов: 45
          </div>
          <div class="weareinternet-absolute"></div>
        </a>
      </div>
      <div class="weareinternet-block">
        <a href="#" class="weareinternet-border">
          <div class="weareinternet-logo">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo2.svg" alt="">
          </div>
          <div class="weareinternet-grade">
            5
          </div>
          <div class="weareinternet-stars">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars2.svg" alt="">
          </div>
          <div class="weareinternet-revievs">
            Отзывов: 95
          </div>
          <div class="weareinternet-absolute"></div>
        </a>
      </div>
      <div class="weareinternet-block">
        <a href="#" class="weareinternet-border">
          <div class="weareinternet-logo">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo3.svg" alt="">
          </div>
          <div class="weareinternet-grade">
            5
          </div>
          <div class="weareinternet-stars">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars2.svg" alt="">
          </div>
          <div class="weareinternet-revievs">
            Отзывов: 111
          </div>
          <div class="weareinternet-absolute"></div>
        </a>
      </div>
      <div class="weareinternet-block">
        <a href="#" class="weareinternet-border">
          <div class="weareinternet-logo">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo4.png" alt="">
          </div>
          <div class="weareinternet-grade">
            4,8
          </div>
          <div class="weareinternet-stars">
            <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars.svg" alt="">
          </div>
          <div class="weareinternet-revievs">
            Отзывов: 33
          </div>
          <div class="weareinternet-absolute"></div>
        </a>
      </div>
    </div>
    <div class="weareinternet-slayder">
      <div class="slider weareinternet-sl">
        <div>
          <div class="slayder-block">
            <a href="#" class="weareinternet-border">
              <div class="weareinternet-logo">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo.svg" alt="">
              </div>
              <div class="weareinternet-grade">
                4,5
              </div>
              <div class="weareinternet-stars">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars.svg" alt="">
              </div>
              <div class="weareinternet-revievs">
                Отзывов: 45
              </div>
              <div class="weareinternet-absolute"></div>
            </a>
          </div>
        </div>
        <div>
          <div class="slayder-block">
            <a href="#" class="weareinternet-border">
              <div class="weareinternet-logo">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo2.svg" alt="">
              </div>
              <div class="weareinternet-grade">
                5
              </div>
              <div class="weareinternet-stars">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars2.svg" alt="">
              </div>
              <div class="weareinternet-revievs">
                Отзывов: 95
              </div>
              <div class="weareinternet-absolute"></div>
            </a>
          </div>
        </div>
        <div>
          <div class="slayder-block">
            <a href="#" class="weareinternet-border">
              <div class="weareinternet-logo">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo3.svg" alt="">
              </div>
              <div class="weareinternet-grade">
                5
              </div>
              <div class="weareinternet-stars">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars2.svg" alt="">
              </div>
              <div class="weareinternet-revievs">
                Отзывов: 111
              </div>
              <div class="weareinternet-absolute"></div>
            </a>
          </div>
        </div>
        <div>
          <div class="slayder-block">
            <a href="#" class="weareinternet-border">
              <div class="weareinternet-logo">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-logo4.png" alt="">
              </div>
              <div class="weareinternet-grade">
                4,8
              </div>
              <div class="weareinternet-stars">
                <img width="" height="" loading="lazy" src="/assets/images/weareinternet-stars.svg" alt="">
              </div>
              <div class="weareinternet-revievs">
                Отзывов: 33
              </div>
              <div class="weareinternet-absolute"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>