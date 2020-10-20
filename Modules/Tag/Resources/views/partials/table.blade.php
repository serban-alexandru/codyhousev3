<div id="table-1" class="int-table text-sm js-int-table">
    <div class="int-table__inner">
      <table class="int-table__table" aria-label="Interactive table example">
        @if($tags->count() > 0)
        <thead class="int-table__header js-int-table__header">
          <tr class="int-table__row">
            <td class="int-table__cell">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows" />
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </td>



            <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
              <div class="flex items-center">
                <span>Tag Name</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                  <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                  <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
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
                <span>Tag Count</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                  <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                  <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
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
                <span>Category</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12">
                  <polygon class="arrow-up" points="6 0 10 5 2 5 6 0" />
                  <polygon class="arrow-down" points="6 12 2 7 10 7 6 12" /></svg>
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

            <th class="int-table__cell int-table__cell--th text-center">Image</th>
            <th class="int-table__cell int-table__cell--th text-left">Action</th>
          </tr>
        </thead>
        @endif

        <tbody class="int-table__body js-int-table__body">
        @foreach($tags as $key => $tag)
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" aria-label="Select this row" />
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell" aria-controls="modal-add-tag">
              <a href="#0">{{ $tag->name }}</a>
            </td>
            <td class="int-table__cell">0</td>
            <td class="int-table__cell">{{ $tag->category_name }}</td>
            <td class="int-table__cell text-center">
              @if($tag->getFirstMediaUrl('images') != '')
                <img src="{{ $tag->getFirstMediaUrl('images') }}" alt="Image of {{ $tag->name }}, " style="max-width: 50px; height: auto;" />
              @else
                None
              @endif
            </td>
            <td class="int-table__cell text-left">

              <menu class="menu-bar menu-bar--expanded@md js-menu-bar">
                <li class="menu-bar__item menu-bar__item--trigger js-menu-bar__trigger align-left" role="menuitem" aria-label="More options">
                  <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <circle cx="8" cy="7.5" r="1.5" />
                    <circle cx="1.5" cy="7.5" r="1.5" />
                    <circle cx="14.5" cy="7.5" r="1.5" /></svg>
                </li>

                <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                  <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 12 12">
                    <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
                  </svg>
                  <span class="menu-bar__label">Draft</span>
                </li>

                <li class="menu-bar__item menu-bar__item--hide" role="menuitem">
                  <svg class="icon menu-bar__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path d="M2,6v8c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V6H2z"></path>
                    <path d="M12,3V1c0-0.6-0.4-1-1-1H5C4.4,0,4,0.4,4,1v2H0v2h16V3H12z M10,3H6V2h4V3z"></path>
                  </svg>
                  <span class="menu-bar__label">Delete</span>
                </li>

              </menu>

            </td>
          </tr>
        @endforeach
        </tbody>

      </table>
    </div><!-- /.int-table__inner -->
  </div><!-- /.int-table text-sm js-int-table -->

  <menu id="menu-example" class="menu js-menu">
    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
          <path d="M10.121.293a1,1,0,0,0-1.414,0L1,8,0,12l4-1,7.707-7.707a1,1,0,0,0,0-1.414Z"></path>
        </svg>
        <span>Edit</span>
      </span>
    </li>

    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 16 16">
          <path d="M15,4H1C0.4,4,0,4.4,0,5v10c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M14,14H2V6h12V14z"></path>
          <rect x="2" width="12" height="2"></rect>
        </svg>
        <span>Copy</span>
      </span>
    </li>

    <li role="menuitem">
      <span class="menu__content js-menu__content">
        <svg class="icon menu__icon" aria-hidden="true" viewBox="0 0 12 12">
          <path d="M8.354,3.646a.5.5,0,0,0-.708,0L6,5.293,4.354,3.646a.5.5,0,0,0-.708.708L5.293,6,3.646,7.646a.5.5,0,0,0,.708.708L6,6.707,7.646,8.354a.5.5,0,1,0,.708-.708L6.707,6,8.354,4.354A.5.5,0,0,0,8.354,3.646Z"></path>
          <path d="M6,0a6,6,0,1,0,6,6A6.006,6.006,0,0,0,6,0ZM6,10a4,4,0,1,1,4-4A4,4,0,0,1,6,10Z"></path>
        </svg>
        <span>Delete</span>
      </span>
    </li>
  </menu>

  <div class="flex items-center justify-between padding-top-sm">
    <p class="text-sm">
      {{ $tags->count() }}
      {{ ($tags->count() < 2) ? 'result' : 'results' }}
    </p>

    @if($tags->count() > 0)
    <nav class="pagination text-sm" aria-label="Pagination">
      <ul class="pagination__list flex flex-wrap gap-xxxs">
        <li>
          <a
            href="{{ $tags->withQueryString()->previousPageUrl() }}"
            class="pagination__item
              {{ ($tags->currentPage() == 1) ? 'pagination__item--disabled' : '' }}
            "
          >
            <svg class="icon" viewBox="0 0 16 16">
              <title>Go to previous page</title>
              <g stroke-width="1.5" stroke="currentColor">
                <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,3.5 5,8 9.5,12.5 "></polyline>
              </g>
            </svg>
          </a>
        </li>

        <li>
          <span class="pagination__jumper flex items-center">
            <form action="{{ url()->current() }}" class="inline" method="get">
              <input aria-label="Page number" class="form-control" type="number" name="page" min="1" max="{{ $tags->lastPage() }}" value="{{ $tags->currentPage() }}">
            </form>
            <em>of {{ $tags->lastPage() }}</em>
          </span>
        </li>


        <li>
          <a
            href="{{ $tags->withQueryString()->nextPageUrl() }}"
            class="pagination__item
              {{ !$tags->hasMorePages() ? 'pagination__item--disabled' : '' }}
            "
          >
            <svg class="icon" viewBox="0 0 16 16">
              <title>Go to next page</title>
              <g stroke-width="1.5" stroke="currentColor">
                <polyline fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,3.5 11,8 6.5,12.5 "></polyline>
              </g>
            </svg>
          </a>
        </li>
      </ul>
    </nav>
    @endif
  </div><!-- /.flex items-center justify-between padding-top-sm -->