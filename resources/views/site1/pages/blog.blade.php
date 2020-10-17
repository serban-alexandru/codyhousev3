@extends('site1.layouts.app')
@section('content')

<article class="padding-bottom-lg">
  <div class="t-article-v2__hero">
    <div class="t-article-v2__cover" aria-hidden="true" style="background-image: url('{{ asset('assets/img/team-img-13.jpg') }}');"></div>

    <div class="t-article-v2__intro container max-width-adaptive-sm margin-bottom-lg">
      <div class="text-component text-center">
        <h1 class="text-xxxl">It was going to be a lonely trip back to the real world</h1>
        <p class="text-sm">By <a href="#0">Olivia Gribben</a></p>
      </div>

      <div class="t-article-v2__divider margin-top-lg" aria-hidden="true"><span></span></div>
    </div>
  </div>

  <div class="container max-width-adaptive-sm">
    <div class="line-height-xl v-space-sm">
      <div class="sticky-banner sticky-banner--bottom bg-contrast-higher bg-opacity-80% backdrop-blur-10 color-bg js-sticky-banner" data-target-in="#stickt-banner-target">
        <!--👇 sticky banner content -->
        <section class="">
          <div class="container max-width-md">
            <div class="margin-bottom-md">
            </div>
          
            <ul class="sharebar flex flex-wrap gap-xs justify-center">
              <li>
                <a class="sharebar__btn js-social-share" data-social="twitter" data-text="Hi there! https://codyhouse.co via @CodyWebHouse" data-hashtags="#nuggets, #dev" href="https://twitter.com/intent/tweet">
                  <svg class="icon" viewBox="0 0 32 32"><title>Share on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
                </a>
              </li>
            
              <li>
                <a class="sharebar__btn js-social-share" data-social="facebook" data-url="https://codyhouse.co" href="http://www.facebook.com/sharer.php">
                  <svg class="icon" viewBox="0 0 32 32"><title>Share on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
                </a>
              </li>
            
              <li>
                <a class="sharebar__btn js-social-share" data-social="pinterest" data-description="Description for my Pinterest share" data-media="https://codyhouse.co/app/assets/img/social-sharing-img-1.jpg" data-url="https://codyhouse.co" href="http://pinterest.com/pin/create/button">
                  <svg class="icon" viewBox="0 0 32 32"><title>Share on Pinterest</title><g><path d="M16,0C7.2,0,0,7.2,0,16c0,6.8,4.2,12.6,10.2,14.9c-0.1-1.3-0.3-3.2,0.1-4.6c0.3-1.2,1.9-8,1.9-8 s-0.5-1-0.5-2.4c0-2.2,1.3-3.9,2.9-3.9c1.4,0,2,1,2,2.3c0,1.4-0.9,3.4-1.3,5.3c-0.4,1.6,0.8,2.9,2.4,2.9c2.8,0,5-3,5-7.3 c0-3.8-2.8-6.5-6.7-6.5c-4.6,0-7.2,3.4-7.2,6.9c0,1.4,0.5,2.8,1.2,3.7c0.1,0.2,0.1,0.3,0.1,0.5c-0.1,0.5-0.4,1.6-0.4,1.8 C9.5,21.9,9.3,22,9,21.8c-2-0.9-3.2-3.9-3.2-6.2c0-5,3.7-9.7,10.6-9.7c5.6,0,9.9,4,9.9,9.2c0,5.5-3.5,10-8.3,10 c-1.6,0-3.1-0.8-3.7-1.8c0,0-0.8,3.1-1,3.8c-0.4,1.4-1.3,3.1-2,4.2c1.5,0.5,3.1,0.7,4.7,0.7c8.8,0,16-7.2,16-16C32,7.2,24.8,0,16,0z "></path></g></svg>
                </a>
              </li>
            
              <li>
                <a class="sharebar__btn js-social-share" data-social="linkedin" data-url="http://codyhouse.co" href="https://www.linkedin.com/shareArticle">
                  <svg class="icon" viewBox="0 0 32 32"><title>Share on Linkedin</title><g><path d="M29,1H3A2,2,0,0,0,1,3V29a2,2,0,0,0,2,2H29a2,2,0,0,0,2-2V3A2,2,0,0,0,29,1ZM9.887,26.594H5.374V12.25H9.887ZM7.63,10.281a2.625,2.625,0,1,1,2.633-2.625A2.624,2.624,0,0,1,7.63,10.281ZM26.621,26.594H22.2V19.656c0-1.687,0-3.75-2.35-3.75s-2.633,1.782-2.633,3.656v7.126H12.8V12.25h4.136v1.969h.094a4.7,4.7,0,0,1,4.231-2.344c4.513,0,5.359,3,5.359,6.844Z"></path></g></svg>
                </a>
              </li>
            
              <li>
                <a class="sharebar__btn js-social-share" data-social="mail" data-subject="Email Subject" data-body="Content of my email." href="mailto:">
                  <svg class="icon" viewBox="0 0 32 32"><title>Share by Email</title><g><path d="M28,3H4A3.957,3.957,0,0,0,0,7V25a3.957,3.957,0,0,0,4,4H28a3.957,3.957,0,0,0,4-4V7A3.957,3.957,0,0,0,28,3Zm.6,6.8-12,9a1,1,0,0,1-1.2,0l-12-9A1,1,0,0,1,4.6,8.2L16,16.75,27.4,8.2a1,1,0,1,1,1.2,1.6Z"></path></g></svg>
                </a>
              </li>
            </ul>
          </div>
        </section>
      </div>
      
      <section class="max-height-100vh bg-contrast-lower" id="stickt-banner-target">
        <div class="container max-width-sm min-height-100vh flex flex-center">
          <div class="text-component text-center">
            <h1>Sticky Banner</h1>
            <p>👇 The banner becomes visible when you scroll past this section.</p>
          </div>
        </div>
      </section>
      
      <div class="container max-width-sm padding-y-xl">
        <div class="text-component line-height-lg v-space-md">
          <h1>Lorem ipsum dolor sit</h1>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, harum.</p>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic at assumenda quibusdam officiis architecto aliquam reprehenderit enim voluptates, totam animi iusto illo incidunt nemo deserunt reiciendis maiores ex. Deserunt soluta, ad facilis ipsum consectetur aspernatur assumenda numquam ea adipisci architecto magnam, itaque culpa, in debitis nam voluptate repellendus. Nam.</p>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic at assumenda quibusdam officiis architecto aliquam reprehenderit enim voluptates, totam animi iusto illo incidunt nemo deserunt reiciendis maiores ex. Deserunt soluta, ad facilis ipsum consectetur aspernatur assumenda numquam ea adipisci architecto magnam, itaque culpa, in debitis nam voluptate repellendus. Nam.</p>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam ut voluptas iste perferendis aperiam amet, voluptatem quis quod incidunt, hic aliquid sunt ullam cupiditate atque adipisci eos at, provident quasi earum praesentium! Expedita, illo, quis voluptatum neque facilis cum veritatis officia unde distinctio ipsum repellendus. Ea quae accusantium fuga iste nihil assumenda corporis dolorum sunt consequuntur deleniti quasi expedita a voluptate nemo vel natus qui, sint repellat reiciendis? Consequuntur ut culpa odio ad. Fugiat totam repellat harum odio ullam blanditiis iste cum, ipsam qui, inventore optio corrupti ab assumenda? Sequi eaque voluptatem dolore enim aut possimus ullam vel laboriosam nihil magnam recusandae, voluptatum molestias totam quae autem labore cupiditate reiciendis optio, eos tempora aliquam maxime hic. Maiores, hic totam? Doloribus eligendi, mollitia cupiditate quaerat harum, recusandae eveniet beatae quis est nemo rerum! Ratione, odit laboriosam soluta minus nobis vero dignissimos iste, totam animi ipsam deserunt earum blanditiis excepturi id unde asperiores atque, facilis aut nihil. Dolore nam laudantium nisi esse, aliquam dolorum beatae earum. Asperiores sapiente praesentium magni distinctio atque id amet impedit sed unde minus possimus obcaecati, repellendus, commodi facilis excepturi repudiandae nam totam similique perspiciatis eligendi, maxime corporis eius! Voluptatum non itaque harum, repellat sapiente enim sint?</p>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi cumque error laudantium aperiam, beatae hic facere asperiores reprehenderit fugiat, illo ea. Magni, eaque? Ab, eos saepe cupiditate asperiores consequatur deleniti dolor aliquid veritatis enim magnam dolorum accusamus quos fuga iusto, unde aperiam itaque eligendi! Laboriosam deleniti expedita exercitationem quasi debitis saepe laudantium molestiae totam. Labore perferendis asperiores cupiditate consectetur excepturi dolorum nisi veritatis ratione, quas dolore explicabo molestiae dolor saepe eos id magni nemo ipsa fugit illo ab esse?</p>
      
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nisi cumque error laudantium aperiam, beatae hic facere asperiores reprehenderit fugiat, illo ea. Magni, eaque? Ab, eos saepe cupiditate asperiores consequatur deleniti dolor aliquid veritatis enim magnam dolorum accusamus quos fuga iusto, unde aperiam itaque eligendi! Laboriosam deleniti expedita exercitationem quasi debitis saepe laudantium molestiae totam. Labore perferendis asperiores cupiditate consectetur excepturi dolorum nisi veritatis ratione, quas dolore explicabo molestiae dolor saepe eos id magni nemo ipsa fugit illo ab esse?</p>
        </div>
      </div>
</article>

<section>

  <div class="container max-width-adaptive-sm">

    <div class="t-article-v2__divider margin-top-xl margin-bottom-lg" aria-hidden="true"><span></span></div>

    <div class="author author--featured">
      <a href="#0" class="author__img-wrapper">
        <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
      </a>
    
      <div class="author__content text-component">
        <h2>Hi! I'm Olivia Gribben</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
      </div>

      <ul class="flex gap-xs flex-wrap justify-center">
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
          </a>
        </li>
  
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
          </a>
        </li>
  
        <li>
          <a href="#0" class="author__social">
            <svg class="icon" viewBox="0 0 32 32"><title>Follow the author on Instagram</title><path d="M16,3.7c4,0,4.479.015,6.061.087a6.426,6.426,0,0,1,4.51,1.639,6.426,6.426,0,0,1,1.639,4.51C28.282,11.521,28.3,12,28.3,16s-.015,4.479-.087,6.061a6.426,6.426,0,0,1-1.639,4.51,6.425,6.425,0,0,1-4.51,1.639c-1.582.072-2.056.087-6.061.087s-4.479-.015-6.061-.087a6.426,6.426,0,0,1-4.51-1.639,6.425,6.425,0,0,1-1.639-4.51C3.718,20.479,3.7,20.005,3.7,16s.015-4.479.087-6.061a6.426,6.426,0,0,1,1.639-4.51A6.426,6.426,0,0,1,9.939,3.79C11.521,3.718,12,3.7,16,3.7M16,1c-4.073,0-4.584.017-6.185.09a8.974,8.974,0,0,0-6.3,2.427,8.971,8.971,0,0,0-2.427,6.3C1.017,11.416,1,11.927,1,16s.017,4.584.09,6.185a8.974,8.974,0,0,0,2.427,6.3,8.971,8.971,0,0,0,6.3,2.427c1.6.073,2.112.09,6.185.09s4.584-.017,6.185-.09a8.974,8.974,0,0,0,6.3-2.427,8.971,8.971,0,0,0,2.427-6.3c.073-1.6.09-2.112.09-6.185s-.017-4.584-.09-6.185a8.974,8.974,0,0,0-2.427-6.3,8.971,8.971,0,0,0-6.3-2.427C20.584,1.017,20.073,1,16,1Z"></path><path d="M16,8.3A7.7,7.7,0,1,0,23.7,16,7.7,7.7,0,0,0,16,8.3ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path><circle cx="24.007" cy="7.993" r="1.8"></circle></svg>
          </a>
        </li>
      </ul>
    </div>

    <div class="t-article-v2__divider margin-top-xl" aria-hidden="true"><span></span></div>

<!-- Begin Comments -->
    <section class="comments margin-top-xl margin-bottom-xxxxl">
      <div class="margin-bottom-lg">
        <div class="flex gap-sm flex-column flex-row@md justify-between items-center@md">
          <div>
            <h1 class="text-md">Comments</h1>
          </div>
        
          <form aria-label="Choose sorting option">
            <div class="flex flex-wrap gap-sm text-sm">
              <div class="position-relative">
                <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsPopular" checked>
                <label for="sortCommentsPopular">Popular</label>
              </div>
          
              <div class="position-relative">
                <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsNewest">
                <label for="sortCommentsNewest">Newest</label>
              </div>
            </div>
          </form>
        </div>
      </div>
    
      <ul class="margin-bottom-lg">
        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
      
            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
    
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit sit sed cupiditate vel, sapiente aspernatur, reiciendis repellat ad delectus quia ea ipsam minima in dignissimos commodi velit nemo voluptatibus quisquam.</p>
              </div>
      
              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>
    
                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
        
                  <button class="reset comments__label-btn js-tab-focus">Reply</button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
      
                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>
        </li>
    
        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
      
            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
              </div>
      
              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>
    
                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
        
                  <button class="reset comments__label-btn js-tab-focus">Reply</button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
      
                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>
    
          <details class="comments__details details js-details">
            <summary class="details__summary color-primary js-details__summary text-sm" role="button">
              <span class="flex items-center">
                <svg class="icon icon--xxs margin-right-xxs" aria-hidden="true" viewBox="0 0 12 12"><path d="M2.783.088A.5.5,0,0,0,2,.5v11a.5.5,0,0,0,.268.442A.49.49,0,0,0,2.5,12a.5.5,0,0,0,.283-.088l8-5.5a.5.5,0,0,0,0-.824Z"></path></svg>
                <span>View 2 replies</span>
              </span>
            </summary>
          
            <div class="details__content js-details__content">
              <ul>
                <li class="comments__comment">
                  <div class="flex items-start">
                    <a href="#0" class="comments__author-img">
                      <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
                    </a>
              
                    <div class="comments__content margin-top-xxxs">
                      <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                        <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                      </div>
              
                      <div class="margin-top-xs text-sm">
                        <div class="flex gap-xxs items-center">
                          <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                              <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                            </span>
                            
                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                          </button>
                
                          <span class="comments__inline-divider" aria-hidden="true"></span>
                
                          <button class="reset comments__label-btn js-tab-focus">Reply</button>
                
                          <span class="comments__inline-divider" aria-hidden="true"></span>
              
                          <time class="comments__time" aria-label="1 hour ago">1h</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
        
                <li class="comments__comment">
                  <div class="flex items-start">
                    <a href="#0" class="comments__author-img">
                      <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
                    </a>
              
                    <div class="comments__content margin-top-xxxs">
                      <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                        <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                      </div>
              
                      <div class="margin-top-xs text-sm">
                        <div class="flex gap-xxs items-center">
                          <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                              <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                            </span>
    
                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                          </button>
                
                          <span class="comments__inline-divider" aria-hidden="true"></span>
                
                          <button class="reset comments__label-btn js-tab-focus">Reply</button>
                
                          <span class="comments__inline-divider" aria-hidden="true"></span>
              
                          <time class="comments__time" aria-label="1 hour ago">1h</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </details>
        </li>
    
        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>
      
            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
              </div>
      
              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>
    
                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
        
                  <button class="reset comments__label-btn js-tab-focus">Reply</button>
        
                  <span class="comments__inline-divider" aria-hidden="true"></span>
      
                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    
      <form>
        <fieldset>
          <legend class="form-legend">Add a new comment</legend>
    
          <div class="margin-bottom-xs">
            <label class="sr-only" for="commentNewContent">Your comment</label>
            <textarea class="form-control width-100%" name="commentNewContent" id="commentNewContent"></textarea>
          </div>
    
          <div>
            <button class="btn btn--primary">Post comment</button>
          </div>
        </fieldset>
      </form>
    </section>
<!-- End Comments -->
  </div>
</section>
@endsection