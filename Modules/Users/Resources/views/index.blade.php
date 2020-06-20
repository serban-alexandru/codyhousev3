@extends('admin::layouts.master')
@section('content')

@include('users::layouts.users-nav')

<!-- 👇 Full Screen Modal -->
<div class="modal modal--animate-fade bg-contrast-higher bg-opacity-90% js-modal" id="modal-full-width">
  <div class="modal__content bg height-100% flex flex-column tabs js-tabs" role="alertdialog" aria-labelledby="modal-title" aria-describedby="modal-description">
    <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
      <!-- 👇 Tabs Navigation -->
      <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
        <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Tab 1</a></li>
        <li><a href="#tab1Panel2" class="tabs__control">Tab 2</a></li>
        <li><a href="#tab1Panel3" class="tabs__control">Tab 3</a></li>
        <li><a href="#tab1Panel4" class="tabs__control">Tab 4</a></li>
        <li><a href="#tab1Panel5" class="tabs__control">Tab 5</a></li>
      </ul>
      <!-- End Tabs Navigation -->

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
        <!-- 👇 Tab Panels -->
        <div class="js-tabs__panels">
            <section id="tab1Panel1" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 1</h1>
                <p>This is from <strong>Users/views/index.blade.php</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt reprehenderit voluptatibus expedita. Laboriosam maxime aut dolorem eum qui nemo! Ea!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati natus totam assumenda cumque numquam culpa officia, harum vel quibusdam recusandae, blanditiis non quae pariatur? Laborum, animi dolor tempora laboriosam minus nulla sit, hic molestias velit delectus sint aspernatur possimus soluta?</p>
              </div>
            </section>

            <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 2</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, nobis! Vitae quis minus accusantium qui atque? Officiis sunt exercitationem natus, minus sapiente debitis eum animi porro. Ut cupiditate amet expedita!</p>
              </div>
            </section>

            <section id="tab1Panel3" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 3</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, veritatis.</p>
              </div>
            </section>

            <section id="tab1Panel4" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 4</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, ipsa. Maiores sit totam dignissimos perferendis recusandae quis eligendi quos expedita consequatur, natus debitis, deserunt placeat tenetur odit voluptates, ad nihil cum ipsa quae est facere, voluptate sapiente tempora a officiis. Ipsa perspiciatis aut commodi enim expedita. Saepe at cupiditate quaerat explicabo distinctio quae enim, ab impedit! Sunt, omnis, sit magnam id exercitationem mollitia alias pariatur doloremque nulla. Totam quis, animi minus error molestias sit. Quidem, dolor, aspernatur. Voluptates, magni, provident?</p>
              </div>
            </section>

            <section id="tab1Panel5" class="padding-top-md js-tabs__panel">
              <div class="text-component">
                <h1 class="text-lg">Panel 5</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam modi nesciunt eum, dolores corrupti labore assumenda vel? Cupiditate fugit nihil, sunt nulla nisi blanditiis quidem, eos nesciunt. Quidem dolorem laudantium, ex fuga natus nisi error architecto saepe sapiente dolores assumenda.</p>
              </div>
            </section>
          </div>
        <!-- 👇 End Tab Panels -->
      </div><!-- /.text-component -->
    </div><!-- /.padding-y-sm -->

    <footer class="padding-y-sm padding-x-md bg shadow-md">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--subtle js-modal__close">Cancel</button>
        <button class="btn btn--primary">Save</button>
      </div>
    </footer>
  </div><!-- /.modal__content -->
</div>
<!-- Full Screen Modal End -->


<!-- Side bar -->
<section class="">
  <div class="container max-width-lg">
    <div class="grid gap-md@md">
      <aside class="sidebar sidebar--static@md col-3@md js-sidebar sidebar--right-on-mobile" data-static-class="sidebar--sticky-on-desktop z-index-1 bg-contrast-lowest" id="sidebar" aria-labelledby="sidebarTitle">
        <div class="sidebar__panel">
          <header class="sidebar__header z-index-2">
            <h1 class="text-md text-truncate" id="sidebarTitle">Sidebar title</h1>

            <button class="reset sidebar__close-btn js-sidebar__close-btn js-tab-focus">
              <svg class="icon" viewBox="0 0 16 16"><title>Close panel</title><g stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"><line x1="13.5" y1="2.5" x2="2.5" y2="13.5"></line><line x1="2.5" y1="2.5" x2="13.5" y2="13.5"></line></g></svg>
            </button>
          </header>

          <div class="position-relative z-index-1">
            <!-- start sidebar content -->
            <aside class="bg" style="width: 241px; height: 80vh;">
              <nav class="sidenav js-sidenav">
                <div class="sidenav__label">Main</div>

                <ul class="sidenav__list">
                  <li class="sidenav__item sidenav__item--expanded">
                    <a href="#0" class="sidenav__link" aria-current="page">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,7H2v7c0,0.6,0.4,1,1,1h10c0.6,0,1-0.4,1-1V7z"></path><rect y="1" width="16" height="4"></rect></g></svg>
                      <span class="sidenav__text">All Users</span>
                      <span class="sidenav__counter">28 <i class="sr-only">notifications</i></span>
                    </a>

                    <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus" aria-label="Toggle sub navigation">
                      <svg class="icon" viewBox="0 0 12 12"><polygon points="4 3 8 6 4 9 4 3"/></svg>
                    </button>

                    <ul class="sidenav__list">
                      <li class="sidenav__item">
                        <a href="#0" class="sidenav__link">
                          <span class="sidenav__text">Suspended</span>
                          <span class="sidenav__counter">4 <i class="sr-only">notifications</i></span>
                        </a>
                      </li>

                      <li class="sidenav__item">
                        <a href="#0" class="sidenav__link">
                          <span class="sidenav__text">Trash</span>
                          <span class="sidenav__counter">5 <i class="sr-only">notifications</i></span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Editors</span>

                      <span class="sidenav__counter">18 <i class="sr-only">notifications</i></span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Subcribers</span>

                      <span class="sidenav__counter">18 <i class="sr-only">notifications</i></span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M14,6.883V13H2V6.82L0,5.695V14c0,0.553,0.448,1,1,1h14c0.552,0,1-0.447,1-1V5.783L14,6.883z"></path><path d="M15,1H1C0.4,1,0,1.4,0,2v1.4l8,4.5l8-4.4V2C16,1.4,15.6,1,15,1z"></path></g></svg>
                      <span class="sidenav__text">Admin</span>

                      <span class="sidenav__counter">2 <i class="sr-only">notifications</i></span>
                    </a>
                  </li>
                </ul>

                <div class="sidenav__divider" role="presentation"></div>

                <div class="sidenav__label">Other</div>

                <ul class="sidenav__list">
                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><circle cx="6" cy="8" r="2"></circle><path d="M10,2H6C2.7,2,0,4.7,0,8s2.7,6,6,6h4c3.3,0,6-2.7,6-6S13.3,2,10,2z M10,12H6c-2.2,0-4-1.8-4-4s1.8-4,4-4h4 c2.2,0,4,1.8,4,4S12.2,12,10,12z"></path></g></svg>
                      <span class="sidenav__text">Settings</span>
                    </a>
                  </li>

                  <li class="sidenav__item">
                    <a href="#0" class="sidenav__link">
                      <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16"><g><path d="M12.25,8.231C11.163,9.323,9.659,10,8,10S4.837,9.323,3.75,8.231C1.5,9.646,0,12.145,0,15v1h16 v-1C16,12.145,14.5,9.646,12.25,8.231z"></path><circle cx="8" cy="4" r="4"></circle></g></svg>
                      <span class="sidenav__text">Account</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </aside>
            <!-- end sidebar content -->
          </div>
        </div>
      </aside>

      <main class="position-relative padding-top-md z-index-1 col-12@md">
        <!-- start main content -->
        <div class="int-table text-sm js-int-table">
          <div class="int-table__inner">
            <table class="int-table__table" aria-label="Interactive table example">
              <thead class="int-table__header js-int-table__header">
                <tr class="int-table__row">
                  <td class="int-table__cell">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </td>

                  <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                    <div class="flex items-center">
                      <span>ID</span>

                      <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                    </div>

                    <ul class="sr-only js-int-table__sort-list">
                      <li>
                        <input type="radio" name="sortingId" id="sortingIdNone" value="none" checked>
                        <label for="sortingIdNone">No sorting</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingId" id="sortingIdAsc" value="asc">
                        <label for="sortingIdAsc">Sort in ascending order</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingId" id="sortingIdDes" value="desc">
                        <label for="sortingIdDes">Sort in descending order</label>
                      </li>
                    </ul>
                  </th>

                  <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                    <div class="flex items-center">
                      <span>Username</span>

                      <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                    </div>

                    <ul class="sr-only js-int-table__sort-list">
                      <li>
                        <input type="radio" name="sortingName" id="sortingNameNone" value="none" checked>
                        <label for="sortingNameNone">No sorting</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingName" id="sortingNameAsc" value="asc">
                        <label for="sortingNameAsc">Sort in ascending order</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingName" id="sortingNameDes" value="desc">
                        <label for="sortingNameDes">Sort in descending order</label>
                      </li>
                    </ul>
                  </th>

                  <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                    <div class="flex items-center">
                      <span>Email</span>

                      <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                    </div>

                    <ul class="sr-only js-int-table__sort-list">
                      <li>
                        <input type="radio" name="sortingEmail" id="sortingEmailNone" value="none" checked>
                        <label for="sortingEmailNone">No sorting</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingEmail" id="sortingEmailAsc" value="asc">
                        <label for="sortingEmailAsc">Sort in ascending order</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingEmail" id="sortingEmailDes" value="desc">
                        <label for="sortingEmailDes">Sort in descending order</label>
                      </li>
                    </ul>
                  </th>

                  <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort" data-date-format="dd-mm-yyyy">
                    <div class="flex items-center">
                      <span>Date</span>

                      <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
                    </div>

                    <ul class="sr-only js-int-table__sort-list">
                      <li>
                        <input type="radio" name="sortingDate" id="sortingDateNone" value="none" checked>
                        <label for="sortingDateNone">No sorting</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingDate" id="sortingDateAsc" value="asc">
                        <label for="sortingDateAsc">Sort in ascending order</label>
                      </li>

                      <li>
                        <input type="radio" name="sortingDate" id="sortingDateDes" value="desc">
                        <label for="sortingDateDes">Sort in descending order</label>
                      </li>
                    </ul>
                  </th>

                  <th class="int-table__cell int-table__cell--th text-left"></th>
                  <th class="int-table__cell int-table__cell--th text-right">Action</th>
                </tr>
              </thead>

              <tbody class="int-table__body js-int-table__body">
                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">1</td>
                  <td class="int-table__cell"><a href="#0">Bryony Mcmillan</a></td>
                  <td class="int-table__cell">r.email@email.com</td>

                  <td class="int-table__cell">01/01/2021</td>
                  <td class="int-table__cell">Hungary</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">2</td>
                  <td class="int-table__cell"><a href="#0">Hetty Maxwell</a></td>
                  <td class="int-table__cell">f.email@email.com</td>
                  <td class="int-table__cell">11/10/2020</td>
                  <td class="int-table__cell">United Kingdom</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">3</td>
                  <td class="int-table__cell"><a href="#0">Honey Leblanc</a></td>
                  <td class="int-table__cell">v.email@email.com</td>
                  <td class="int-table__cell">17/09/2020</td>
                  <td class="int-table__cell">Maldives</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">4</td>
                  <td class="int-table__cell"><a href="#0">Maira Hodges</a></td>
                  <td class="int-table__cell">a.email@email.com</td>
                  <td class="int-table__cell">04/08/2020</td>
                  <td class="int-table__cell">Iceland</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">5</td>
                  <td class="int-table__cell"><a href="#0">Nigel Lang</a></td>
                  <td class="int-table__cell">g.email@email.com</td>
                  <td class="int-table__cell">03/07/2020</td>
                  <td class="int-table__cell">Italy</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">6</td>
                  <td class="int-table__cell"><a href="#0">Saif Acevedo</a></td>
                  <td class="int-table__cell">l.email@email.com</td>
                  <td class="int-table__cell">21/05/2020</td>
                  <td class="int-table__cell">Argentina</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">7</td>
                  <td class="int-table__cell"><a href="#0">Isaak O'Gallagher</a></td>
                  <td class="int-table__cell">b.email@email.com</td>
                  <td class="int-table__cell">11/04/2020</td>
                  <td class="int-table__cell">Maldives</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">8</td>
                  <td class="int-table__cell"><a href="#0">Lucille Arias</a></td>
                  <td class="int-table__cell">m.email@email.com</td>
                  <td class="int-table__cell">05/03/2020</td>
                  <td class="int-table__cell">Thailand</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">9</td>
                  <td class="int-table__cell"><a href="#0">Kendall Rankin</a></td>
                  <td class="int-table__cell">e.email@email.com</td>
                  <td class="int-table__cell">02/02/2020</td>
                  <td class="int-table__cell">Austria</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>

                <tr class="int-table__row">
                  <th class="int-table__cell" scope="row">
                    <div class="custom-checkbox int-table__checkbox">
                      <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row"/>
                      <div class="custom-checkbox__control" aria-hidden="true"></div>
                    </div>
                  </th>
                  <td class="int-table__cell">10</td>
                  <td class="int-table__cell"><a href="#0">Raihan Boone</a></td>
                  <td class="int-table__cell">c.email@email.com</td>
                  <td class="int-table__cell">01/01/2020</td>
                  <td class="int-table__cell">USA</td>
                  <td class="int-table__cell">
                    <button class="reset int-table__menu-btn margin-left-auto js-tab-focus" data-label="Edit row" aria-controls="menu-example">
                      <svg class="icon" viewBox="0 0 16 16"><circle cx="8" cy="7.5" r="1.5" /><circle cx="1.5" cy="7.5" r="1.5" /><circle cx="14.5" cy="7.5" r="1.5" /></svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <menu id="menu-example" class="menu js-menu">
          <li role="menuitem">
            <span class="menu__content js-menu__content">
              <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path></svg>
              <span>Edit</span>
            </span>
          </li>

          <li role="menuitem">
            <span class="menu__content js-menu__content">
              <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16"><path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z"></path><rect x="2" width="12" height="2"></rect></svg>
              <span>Copy</span>
            </span>
          </li>

          <li role="menuitem">
            <span class="menu__content js-menu__content">
              <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12"><path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path><path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path></svg>
              <span>Delete</span>
            </span>
          </li>
        </menu>
        <!-- end main content -->
      </main>
    </div>
  </div>
</section>

@endsection
