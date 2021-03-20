@extends('templates.blog.site2.layouts.home')
@section('content')
<article class="padding-y-lg">
    <header class="container max-width-xs margin-bottom-lg">
      <div class="text-component text-center line-height-lg v-space-md margin-bottom-md">
        <h1>It was going to be a lonely trip back</h1>
        <p class="color-contrast-medium text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni harum rerum amet.</p>
      </div>
  
      <div class="flex justify-center">
        <div class="author author--meta">
          <a href="#0" class="author__img-wrapper">
            <img src="https://codyhouse.co/app/assets/img/author-img-1.jpg" alt="Author picture">
          </a>
  
          <div class="author__content text-component v-space-xxs">
            <h4 class="text-base"><a href="#0" rel="author">Olivia Gribben</a></h4>
            <p class="text-sm color-contrast-medium"><time>May 15</time></p>
          </div>
        </div>
      </div>
    </header>
  
    <figure class="container max-width-lg margin-bottom-lg">
      <img src="https://codyhouse.co/app/assets/img/article-img-1.jpg" alt="Image description">
    </figure>

    <div class="container max-width-xs margin-bottom-lg text-component text-center">
        <h1>Tags</h1>
            <button class="btn btn--basic">Tag 1</button>
            <button class="btn btn--basic">Tag 2</button>
    </div>

  </article>
@endsection
