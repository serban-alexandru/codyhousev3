<form action="{{ url('admin/users') }}" method="GET">
  <input type="hidden" name="limit" value="{{$limit ?? ''}}">
  <input type="hidden" name="sort" value="{{$sort ?? ''}}">
  <input type="hidden" name="order" value="{{$order ?? ''}}">

  <input class="form-control width-100%" type="reset search" name="q" value="{{ $q ?? '' }}" id="megasite-search" placeholder="Search..." aria-label="Search">
</form>