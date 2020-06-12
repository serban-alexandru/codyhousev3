@extends('admin::layouts.master')
@section('content')
@include('admin::layouts.users-nav')


<section class="padding-y">
    <div class="container max-width-lg">
        <div class="text-component text-center margin-bottom-lg">
        </div>

        <div class="grid gap-lg@lg">

            <main class="position-relative z-index-1 col-12@md">
                <!-- start main content -->


                <div class="int-table text-sm js-int-table">
                    <div class="int-table__inner">
                        <table class="int-table__table" aria-label="Interactive table example">
                            <thead class="int-table__header js-int-table__header">
                                <tr class="int-table__row">
                                    <td class="int-table__cell">
                                        <div class="custom-checkbox int-table__checkbox">
                                            <input class="custom-checkbox__input js-int-table__select-all"
                                                type="checkbox" aria-label="Select all rows" />
                                            <div class="custom-checkbox__control" aria-hidden="true"></div>
                                        </div>
                                    </td>

                                    <th
                                        class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort display@md">
                                        <div class="flex items-center">
                                            <span>ID</span>

                                            <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon"
                                                aria-hidden="true" viewBox="0 0 12 12">
                                                <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                                <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
                                        </div>

                                        <ul class="sr-only js-int-table__sort-list">
                                            <li>
                                                <input type="radio" name="sortingId" id="sortingIdNone" value="none"
                                                    checked>
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

                                    <th
                                        class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
                                        <div class="flex items-center">
                                            <span>Name</span>

                                            <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon"
                                                aria-hidden="true" viewBox="0 0 12 12">
                                                <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                                <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
                                        </div>

                                        <ul class="sr-only js-int-table__sort-list">
                                            <li>
                                                <input type="radio" name="sortingName" id="sortingNameNone" value="none"
                                                    checked>
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

                                    <th
                                        class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort display@md">
                                        <div class="flex items-center">
                                            <span>Email</span>

                                            <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon"
                                                aria-hidden="true" viewBox="0 0 12 12">
                                                <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                                <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
                                        </div>

                                        <ul class="sr-only js-int-table__sort-list">
                                            <li>
                                                <input type="radio" name="sortingEmail" id="sortingEmailNone"
                                                    value="none" checked>
                                                <label for="sortingEmailNone">No sorting</label>
                                            </li>

                                            <li>
                                                <input type="radio" name="sortingEmail" id="sortingEmailAsc"
                                                    value="asc">
                                                <label for="sortingEmailAsc">Sort in ascending order</label>
                                            </li>

                                            <li>
                                                <input type="radio" name="sortingEmail" id="sortingEmailDes"
                                                    value="desc">
                                                <label for="sortingEmailDes">Sort in descending order</label>
                                            </li>
                                        </ul>
                                    </th>

                                    <th class="int-table__cell int-table__cell--th text-left display@md">
                                        Description
                                    </th>

                                    <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort display@md"
                                        data-date-format="dd-mm-yyyy">
                                        <div class="flex items-center">
                                            <span>Date</span>

                                            <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon"
                                                aria-hidden="true" viewBox="0 0 12 12">
                                                <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                                                <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
                                        </div>

                                        <ul class="sr-only js-int-table__sort-list">
                                            <li>
                                                <input type="radio" name="sortingDate" id="sortingDateNone" value="none"
                                                    checked>
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

                                    <th class="int-table__cell int-table__cell--th text-left display@md">Location</th>
                                    <th class="int-table__cell int-table__cell--th text-right display@md">Action</th>
                                </tr>
                            </thead>

                            <tbody class="int-table__body js-int-table__body">
                                @foreach ($users as $id => $user)
                                <tr class="int-table__row">
                                    <th class="int-table__cell" scope="row">
                                        <div class="custom-checkbox int-table__checkbox">
                                            <input class="custom-checkbox__input js-int-table__select-row"
                                                type="checkbox" aria-label="Select this row" />
                                            <div class="custom-checkbox__control" aria-hidden="true"></div>
                                        </div>
                                    </th>
                                    <td class="int-table__cell display@md">{{ $id + 1 }}</td>
                                    <td class="int-table__cell"><a href="#0">{{ $user->name }}</a></td>
                                    <td class="int-table__cell display@md">{{ $user->email }}</td>
                                    <td class="int-table__cell max-width-xxxxs display@md">
                                        {{ $user->description }}
                                    </td>
                                    <td class="int-table__cell display@md">{{ $user->date }}</td>
                                    <td class="int-table__cell display@md">{{ $user->country }}</td>
                                    <td class="int-table__cell display@md">
                                        <button class="reset int-table__menu-btn margin-left-auto js-tab-focus"
                                            data-label="Edit row" aria-controls="menu-example">
                                            <svg class="icon" viewBox="0 0 16 16">
                                                <circle cx="8" cy="7.5" r="1.5" />
                                                <circle cx="1.5" cy="7.5" r="1.5" />
                                                <circle cx="14.5" cy="7.5" r="1.5" /></svg>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <menu id="menu-example" class="menu js-menu">
                    <li role="menuitem">
                        <span class="menu__content js-menu__content">
                            <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
                                <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z">
                                </path>
                            </svg>
                            <span>Edit</span>
                        </span>
                    </li>

                    <li role="menuitem">
                        <span class="menu__content js-menu__content">
                            <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16">
                                <path
                                    d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z">
                                </path>
                                <rect x="2" width="12" height="2"></rect>
                            </svg>
                            <span>Copy</span>
                        </span>
                    </li>

                    <li role="menuitem">
                        <span class="menu__content js-menu__content">
                            <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
                                <path
                                    d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z">
                                </path>
                                <path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z">
                                </path>
                            </svg>
                            <span>Delete</span>
                        </span>
                    </li>
                </menu>
                <!-- end main content -->
            </main>

            @include('admin::partials.sidebar')
        </div>
    </div>
</section>


<div class="modal modal--animate-fade bg-contrast-higher bg-opacity-90% js-modal z-index-0"
    id="modal-full-width">
    <div class="modal__content bg height-100% flex flex-column" role="alertdialog"
        aria-labelledby="modal-title" aria-describedby="modal-description">
        <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center modal-header-responsive">

            <ul class="tabs tabs-nav tabs-style__codyhouse margin-left-lg@md">
                <li class="tab-item">
                    <a class="tab-link active" aria-controls="tab" href="#base-panel">
                        Base
                    </a>
                </li>
                <li class="tab-item">
                    <a class="tab-link" aria-controls="tab" href="#seo-panel">
                        SEO
                    </a>
                </li>
                <li class="tab-item">
                    <a class="tab-link" aria-controls="tab" href="#settings-panel">
                        Settings
                    </a>
                </li>
            </ul>

            <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus margin-left-auto">
                <svg class="icon" viewBox="0 0 20 20">
                    <title>Close modal window</title>
                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                        <line x1="3" y1="3" x2="17" y2="17" />
                        <line x1="17" y1="3" x2="3" y2="17" />
                    </g>
                </svg>
            </button>
        </header>

        <section class="tab-content">
            <div class="padding-y-sm padding-x-md flex-grow overflow-auto">
                <div class="tab-panel text-component v-space-md line-height-lg" id="base-panel">
                    dgdfgdfgfdg
                </div>
                <div class="tab-panel text-component v-space-md line-height-lg" id="seo-panel">
                    {{-- Will be filled with AJAX response data --}}
                </div>
                <div class="tab-panel text-component v-space-md line-height-lg" id="settings-panel">
                    {{-- Will be filled with AJAX response data --}}
                </div>
            </div>

        </section>

        <footer class="padding-y-sm padding-x-md bg shadow-md">
            <div class="flex justify-end gap-xs">
                <button class="btn btn--subtle js-modal__close">Cancel</button>
                <button class="btn btn--primary">Trash</button>
                <button class="btn btn--primary">Save</button>
                <button class="btn btn--primary">Publish</button>
            </div>
        </footer>
    </div>

</div>

<div class="modal modal--search modal--animate-fade flex flex-center padding-md js-modal"
    id="modal-search">
    <div class="modal__content width-100% max-width-sm" role="alertdialog"
        aria-labelledby="modal-search-title" aria-describedby="">
        <form class="full-screen-search">
            <label for="search-input-x" id="modal-search-title" class="sr-only">Search</label>
            <input class="reset full-screen-search__input" type="search" name="search-input-x"
                id="search-input-x" placeholder="Search...">
            <button class="reset full-screen-search__btn">
                <svg class="icon" viewBox="0 0 24 24">
                    <title>Search</title>
                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-miterlimit="10">
                        <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                        <circle cx="10" cy="10" r="8"></circle>
                    </g>
                </svg>
            </button>
        </form>
    </div>

    <button class="reset modal__close-btn modal__close-btn--outer  js-modal__close js-tab-focus">
        <svg class="icon icon--sm" viewBox="0 0 24 24">
            <title>Close modal window</title>
            <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                <line x1="3" y1="3" x2="21" y2="21" />
                <line x1="21" y1="3" x2="3" y2="21" />
            </g>
        </svg>
    </button>
</div>
@endsection