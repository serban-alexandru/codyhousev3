## Creating dynamically loaded content

### 1. Create sidebar links

To create a link for dynamically loaded content, add `site-load-content` class on the `sidenav__list`.

eg.

```html
<ul class="sidenav__list site-load-content">
    <li class="sidenav__item">
        <a href="{{ url('admin/article/create') }}" class="sidenav__link">
            <svg
                class="icon sidenav__icon"
                aria-hidden="true"
                viewBox="0 0 16 16"
            >
                <g>
                    <path
                        d="M12.25,8.231C11.163,9.323,9.659,10,8,10S4.837,9.323,3.75,8.231C1.5,9.646,0,12.145,0,15v1h16 v-1C16,12.145,14.5,9.646,12.25,8.231z"
                    ></path>
                    <circle cx="8" cy="4" r="4"></circle>
                </g>
            </svg>
            <span class="sidenav__text">Sidebar form</span>
        </a>
    </li>
</ul>
```

### 2. Set up web route

Don't forget to setup the web route for the link on the sidebar.

eg.

```php
Route::get('article/create', 'ArticleController@create');
```

### 3. Call view on the controller

eg.

```php
public function create()
{
    return view('article::create');
}
```

This view calls the blade from `Modules/Article/resources/views/create.blade.php`.
