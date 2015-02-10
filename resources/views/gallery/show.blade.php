@extends('layout.main')

@section('head')
<style>
	body
	{
background-color: #333;
	}

</style>
@endsection

@section('content')
<div id="gallery" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?
  $i = 0;
  foreach($gallery as $pic)
	{?>
    <li data-target="#gallery" data-slide-to="0" <? if($i < 1 ) { ?> class="active" <? } ?>></li>
	<? $i++;
	} ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<? $i = 0; 
	foreach($gallery as $pic)
	{?>
    <div class="item <? if($i < 1 ) { ?>active<? } ?>">
      <img src="<? print $pic['filepath']; ?>">
      <div class="carousel-caption">
		<h3><? print $pic['title']; ?> </h3>
		<p><? print $pic['caption']; ?> </p>
      </div>
    </div>
	<? $i++;
	} ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#gallery" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#gallery" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection