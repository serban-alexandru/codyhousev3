@if(request()->has('is_trashed'))
  <div class="margin-bottom-md">
    <form action="{{ route('posts.trash.empty') }}" method="post">
      @csrf
      <span class="btn btn--subtle" id="emptyTrash">Empty trash</span>
    </form>
  </div>
@endif
<div id="table-1" class="int-table text-sm js-int-table">
    <div class="int-table__inner"  id="site-table-container">
      <table class="int-table__table" aria-label="Interactive table example">
        <thead class="int-table__header js-int-table__header">
          <tr class="int-table__row">
            @if(!request()->has('is_trashed'))
              <td class="int-table__cell">
                <div class="custom-checkbox int-table__checkbox">
                  <input class="custom-checkbox__input js-int-table__select-all" id="checkboxDeleteAll" type="checkbox" aria-label="Select all rows">
                  <div class="custom-checkbox__control" aria-hidden="true"></div>
                </div>
              </td>
            @endif

            <th class="int-table__cell int-table__cell--th int-table__cell--sort js-int-table__cell--sort">
              <div class="flex items-center">
                <span>Post Title</span>

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
                <span>Username</span>

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
                <span>Date</span>

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
            @if(!request()->has('is_trashed'))
              <th class="int-table__cell int-table__cell--th text-left">Delete</th>
            @endif

            @if(!request()->has('is_trashed') && !request()->has('is_draft'))
              <th class="int-table__cell int-table__cell--th text-left">Draft</th>
            @endif

            @if(!request()->has('is_trashed') && request()->has('is_draft'))
              <th class="int-table__cell int-table__cell--th text-left">Publish</th>
            @endif

            @if(request()->has('is_trashed'))
              <th class="int-table__cell int-table__cell--th text-left">Restore</th>
            @endif

          </tr>
        </thead>

        <tbody class="int-table__body js-int-table__body">
          @foreach($posts as $post)
          <tr class="int-table__row">
            @if(!request()->has('is_trashed'))
              <th class="int-table__cell" scope="row">
                <div class="custom-checkbox int-table__checkbox">
                  <input value="{{ $post->id }}" class="custom-checkbox__input js-int-table__select-row checkbox-delete" type="checkbox" aria-label="Select this row">
                  <div class="custom-checkbox__control" aria-hidden="true"></div>
                </div>
              </th>
            @endif
            <td class="int-table__cell cursor-pointer" aria-controls="modal-edit-post" data-id="{{ $post->id }}">
              <a href="#0">
                {{ $post->title }}
              </a>
            </td>
            <td class="int-table__cell">{{ $post->username }}</td>
            <td class="int-table__cell">{{ $post->created_at->format('m/d/Y') }}</td>
            <td class="int-table__cell text-center">
              @if(is_null($post->thumbnail))
                <span class="author__img-wrapper bg-black bg-opacity-50%"></span>
              @else
                <img src="{{ asset('storage/posts/images') }}/{{ $post->thumbnail_medium }}" width="40" height="40" style="object-fit: cover; object-position: center;">
              @endif
            </td>
            
            @if(!$post->is_deleted)
              <td class="int-table__cell text-center">
                <form action="{{ route('posts.delete') }}" method="post">
                  @csrf
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                  <li class="menu-bar__item btn-delete" role="menuitem" aria-controls="modal-name-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <title>trash-simple</title>
                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" transform="translate(0.5 0.5)" fill="#828282" stroke="#828282"><polyline fill="none" stroke="#828282" stroke-miterlimit="10" points="20,9 20,23 4,23 4,9 "></polyline> <line fill="none" stroke="#828282" stroke-miterlimit="10" x1="1" y1="5" x2="23" y2="5"></line> <line fill="none" stroke-miterlimit="10" x1="12" y1="12" x2="12" y2="18"></line> <line fill="none" stroke-miterlimit="10" x1="8" y1="12" x2="8" y2="18"></line> <line fill="none" stroke-miterlimit="10" x1="16" y1="12" x2="16" y2="18"></line> <polyline fill="none" stroke="#828282" stroke-miterlimit="10" points="8,5 8,1 16,1 16,5 "></polyline></g></svg>
                  </li>
                </form>
              </td>
            @endif
            
            @if($post->is_published && !$post->is_deleted)
              <td>
                <a href="{{ route('posts.make-draft', ['id' => $post->id]) }}" class="btn">Draft</a>
              </td>
            @elseif(!$post->is_published && !$post->is_deleted)
              <td>
                <a href="{{ route('posts.publish', ['id' => $post->id]) }}" class="btn">Publish</a>
              </td>
            @elseif($post->is_deleted)
              <td>
                <a href="{{ route('posts.restore', ['id' => $post->id]) }}" class="btn">Restore</a>
              </td>
            @endif
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
    <p class="text-sm">{{ $posts->count() }} results</p>

    <nav class="pagination text-sm" aria-label="Pagination">
      <ul class="pagination__list flex flex-wrap gap-xxxs">
        <li>
          <a href="#0" class="pagination__item">
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
            <input aria-label="Page number" class="form-control" type="text" id="pageNumber" name="pageNumber" value="1">
            <em>of 50</em>
          </span>
        </li>

        <li>
          <a href="#0" class="pagination__item">
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
  </div><!-- /.flex items-center justify-between padding-top-sm -->


