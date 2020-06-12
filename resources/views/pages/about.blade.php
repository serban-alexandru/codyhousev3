@extends('layouts.app')
@section('content')
<section class="padding-y-xxl position-relative z-index-1">
  <div class="container max-width-adaptive-lg position-relative z-index-2">
    <div class="text-sm opacity-60% margin-bottom-xxs">About Us</div>

    <button class="btn btn--primary" aria-controls="modal-full-width">Show modal window</button>

<div class="modal modal--animate-fade bg-contrast-higher bg-opacity-90% js-modal" id="modal-full-width">
  <div class="modal__content bg height-100% flex flex-column" role="alertdialog" aria-labelledby="modal-title" aria-describedby="modal-description">
    <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
      <h4 class="text-truncate" id="modal-title">Modal title</h4>

      <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus">
        <svg class="icon" viewBox="0 0 20 20">
          <title>Close modal window</title>
          <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
            <line x1="3" y1="3" x2="17" y2="17" />
            <line x1="17" y1="3" x2="3" y2="17" />
          </g>
        </svg>
      </button>
    </header>

    <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
      <div class="text-component v-space-md line-height-lg">
        <p id="modal-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae culpa, inventore alias ab atque similique quod ea reprehenderit.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet accusantium provident nulla minus velit, voluptas voluptatem in libero hic quaerat saepe quae, labore, qui illo eum ullam ea. Repudiandae excepturi aut earum ipsa vitae modi, non eos hic? Atque fugit ullam est ab nam numquam id pariatur, esse voluptates, ipsa aperiam consequatur laboriosam perspiciatis. Nemo culpa reprehenderit tenetur alias dolor veritatis ducimus, numquam ipsa incidunt harum dolorem quod perspiciatis autem quis soluta, nobis assumenda aliquam perferendis ut commodi inventore sunt.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt eaque, veniam voluptatibus tempore iusto fugiat magnam aliquid maiores cum! Alias debitis facere delectus! Nulla minus unde placeat neque nam quibusdam consequatur et! Eligendi, architecto quo atque ut sint, eaque id facere dignissimos error sed tempore. Ex nam possimus dolorem numquam at, dolore a itaque voluptas veritatis eaque temporibus ipsam nemo animi esse reprehenderit odio sint delectus sequi ullam aliquid qui praesentium nesciunt repudiandae. Ipsa architecto sunt repellendus error dolorem.</p>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, aperiam. Doloribus nam perferendis earum at, modi ullam dolor voluptas quos? Autem explicabo, ab rerum mollitia, fugiat ipsam eligendi non eius ullam neque, atque at labore quisquam tempora id harum dolorum nisi quia molestias nam molestiae placeat laboriosam ipsa dolore. Veniam dicta temporibus sed cupiditate asperiores sunt labore minima velit id facere, delectus, mollitia ratione provident fugiat nulla distinctio in odit error tenetur eum! Est dolorum veritatis repudiandae excepturi iste adipisci at accusamus mollitia odit accusantium delectus deleniti recusandae consequuntur sunt dolores voluptatum dolor tempore modi consequatur numquam voluptates beatae non, optio hic. Similique sequi voluptas autem suscipit corrupti officia voluptatum sapiente, aliquam est odio praesentium. Doloribus fugit dolores voluptatum ad.</p>
      </div>
    </div>

    <footer class="padding-y-sm padding-x-md bg shadow-md">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--subtle js-modal__close">Cancel</button>
        <button class="btn btn--primary">Install</button>
      </div>
    </footer>
  </div>

</div>

    <div class="text-component margin-bottom-sm">
      <h1>Curate Content That Matters to You</h1>
      <p>We know what it's like to come to a site and be overwhelmed with content that's largely unrelevant to you. With curateship, you'll select only the type of content you want to see and track.
      </p>
    </div>

  </div>

  <figure class="bg-decoration-v2 z-index-1" aria-hidden="true">
    <svg class="bg-decoration-v2__svg color-contrast-higher opacity-10%" viewBox="0 0 1920 450" fill="none">
      <g stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round">
        <path d="M1449 94.9993V3L1354 48.9995L1259 3V94.9993L1354 140.999L1449 94.9993Z" />
        <path d="M1639 94.9993V3L1544 48.9995L1449 3V94.9993L1544 140.999L1639 94.9993Z" />
        <path d="M1354 49.0002V141" />
        <path d="M1544 49.0002V141" />
        <path d="M1449 94.9995L1544 140.999L1449 186.999L1354 140.999L1449 94.9995Z" />
        <path d="M1544 141V232.999L1449 278.999L1354 232.999V141" />
        <path d="M1449 187V279" />
        <path d="M1544 264L1639 310L1544 355.999L1449 310L1544 264Z" />
        <path d="M1639 310V402L1544 447.999L1449 402V310" />
        <path d="M1544 356.001V448" />
        <path d="M1639 94.9995L1734 140.999L1639 186.999L1544 140.999L1639 94.9995Z" />
        <path d="M1734 141V232.999L1639 278.999L1544 232.999V141" />
        <path d="M1639 187V279" />
      </g>
    </svg>
  </figure>
</section>
@endsection