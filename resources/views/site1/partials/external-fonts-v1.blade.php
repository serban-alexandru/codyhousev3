<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">

<!-- Load Primary Font -->
@if ($font_primary['status'] == 'google')
<link href="https://fonts.googleapis.com/css2?family={{ $font_primary['font-family'] }}:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@else
<style type="text/css">
{!! $font_primary['fontcss'] !!}
</style>
@endif

<!-- Load Secondary Fonts -->
@if ($font_secondary['status'] == 'google')
<link href="https://fonts.googleapis.com/css2?family={{ $font_secondary['font-family'] }}:wght@300;400;500;600;700&display=swap" rel="stylesheet">
@else
<style type="text/css">
{!! $font_secondary['fontcss'] !!}
</style>
@endif

<style type="text/css">
:root {
  --font-primary: "{{ $font_primary['font-family'] }}", serif;
  --font-secondary: "{{ $font_secondary['font-family'] }}", serif;
}
</style>