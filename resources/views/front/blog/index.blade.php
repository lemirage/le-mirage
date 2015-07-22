@extends('front.template')

@section('main')

    <div class="row">

        <div class="col-lg-12">
            {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
            {!! Form::close() !!}
        </div>

    </div>
    <section class="content blog">
      <div class="container">
    <div class="row">


		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="blog_medium">

        @foreach($posts as $post)


<?php $date = explode('/',$post->created_at); ?>
        <article class="post">
          <div class="post_date">
            <span class="day">{!! $date[0] !!}</span>
            <span class="month">{!! $date[1] !!}</span>
          </div>
          <div class="post_content">
                <div class="post_meta">
                  	<h2>
          {{ $post->title }}
          </h2>
              <div class="metaInfo">
                <span><i class="fa fa-user"></i> By{{ $post->user->username }} {!!($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!} </span>
              </div>
            <p>{!! $post->summary !!}</p>
              {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
  <hr>
        </article>
        <hr>
        @endforeach

        <div class="col-lg-12 text-center">
            {!! $links !!}
        </div>

    </div>
    </div>

</div>

@stop
