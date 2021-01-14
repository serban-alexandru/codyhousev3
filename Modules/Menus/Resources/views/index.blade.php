@extends('admin::layouts.master')
  
@section('content')
    <section>
        <div class="container max-width-lg margin-top-xs">
            <div class="grid gap-md@md">
            {!! Menu::render() !!}
            </div>
        </div>
    </section>
@endsection

@push('module-scripts')
    {!! Menu::scripts() !!}
@endpush  
