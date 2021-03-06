<!DOCTYPE html>
<html>
<head>
	<title>Goodreads | {{$book->name}}</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="/images/goodreads-icon.png">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: -10px;" id="navbar">
	  <div class="container">
		<div class="col-sm-9">
				<div class="navbar-header">
		      <a href="{{url('/')}}"><img src="/images/logo.png"></a>
		    </div>
		      <ul class="nav navbar-nav ">
		        <li><a href="{{url('/')}}">Home</a></li>
		        <li><a href="#">My Books</a></li>
		      </ul> 
	      	<form class="navbar-form navbar-left" action="{{url('/search-result')}}" method="POST" >
	      	{{csrf_field()}}
		        <div class="form-group">
		          <input type="text" class="form-control" name="search" placeholder="Search books">
		        </div>
		       {{--  <a href="{{url('/search-result')}}" class="btn"> 
		        	<i class="fa fa-search" aria-hidden="true"></i>
		        </a> --}}
		        <button type="submit" class="btn btn-default" style="background-color: #F4F1EA">Search</button>
	     	</form>
			</div>
			<div class="col-sm-3">
	  		<ul class="nav navbar-nav">
		        <li><a href="#"><img src="/images/friend.svg"></a></li>
		        <li><a href="{{url('/profile/'.Auth::user()->id)}}"><img src="/{{Auth::user()->photo}}" class="profile"></a></li>
		        <li><a href="{{url('/logout')}}" class="btn btn-default" style="margin-top: 10px;background-color: #F4F1EA; ">Log out</a></li>
		      </ul>
	     </div>
	  </div>   
	</nav>
	<section id="show_book">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-8">
					<div class="col-md-12">
						<div class="col-md-4">
							<img height="220" width="150" src="/{{$book->icon}}" alt="">
						</div>
						<div class="col-md-8">
							<div class="row book_name">
								<p class="">{{$book->name}}</p>
								<span>by</span> <a href="{{url('author/'.$book->author_id)}}">{{$book->author}}</a>
							</div>
							<div class="row book_description">
								<p>{{$book->description}}</p>
							</div>
							<hr>
							<div class="row info_table">
								<table>
									<tr>
										<td>Orginal Title</td>
										<td>{{$book->name}}</td>
									</tr>
									<tr>
										<td>ISBN</td>
										<td>{{$book->isbn}}</td>
									</tr>
									<tr>
										<td>Edition Language</td>
										<td>{{$book->language}}</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="page-header">
						<h4>About {{$book->author}}</h4>
					</div>
					<div class="row">
						Authors information will be located in there 
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-2">
						<span class="span-l">&copy 2016 Goodreads Inc</span>
					</div>
					<div class="col-md-8">
						<ul>
							<li>
								<a href="#">about us</a>
							</li>
							<li>
								<a href="#">advertise</a>
							</li>
							<li>
								<a href="#">author program</a>
							</li>
							<li>
								<a href="#">jobs</a>
							</li>
							<li>
								<a href="#">api</a>
							</li>
							<li>
								<a href="#">our blog</a>
							</li>
							<li>
								<a href="#">authors & advertisers blog</a>
							</li>
							<li>
								<a href="#">terms</a>
							</li>
							<li>
								<a href="#">privacy</a>
							</li>
							<li>
								<a href="#">help</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<span>switch to:</span>
						<a href="#">mobile version</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>