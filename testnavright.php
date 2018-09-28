<html>
<head>
		<title></title>
		<style>


html,
body {
  width: 100%;
  height: 100%;
}




body {
	font-family: "Times New Roman", Times,serif;
  background: #f2f2f2;
}
ul>li>a>i{
	 word-spacing: 100px;

}

ul {
  margin-left: 0px;
  
  margin-top: 20%;
}
ul:after
{
  margin-top:20%;
}

.list-item {
  background: #66a3ff;
  background-image: url('2.png');
  color: black;
  text-align: center;
  height: 2.5em;
  width: 8em;
  vertical-align: middle;
  line-height: 2.5em;
  border-bottom: 1px solid #060606;
  position: relative;
  display: block;
  text-decoration: none;
  box-shadow: -2em 1.5em 0 #e1e1e1;
  transition: all .25s linear;
}
.list-item:hover {
  background: #ff6e42;
  background-image: url('7.jpg');
  color: #fffcfb;
  -webkit-transform: translate(0.9em, -0.9em);
          transform: translate(0.9em, -0.9em);
  transition: all .25s linear;
  box-shadow: -2em 2em 0 #e1e1e1;
}
.list-item:before, .list-item:after {
  content: '';
  position: absolute;
  transition: all .25s linear;
  width: .5em;
}
.list-item:after {
  height: 4em;
  background: #181818;
   
  bottom: -2.25em;
  left: 1.5em;
  -webkit-transform: rotate(90deg) skew(0, 45deg);
          transform: rotate(90deg) skew(0, 45deg);
}
.list-item:before {
  height: 2.5em;
  background: #121212;
  
  top: .25em;
  left: -.5em;
  -webkit-transform: skewY(-45deg);
          transform: skewY(-45deg);
}
.list-item:hover:before {
  background-image: url('7.jpg');

  }
.list-item:hover:after {
  background-image: url('7.jpg');

  }

		</style>



<?php include('nav2.html');?>
<body>

<ul>
  <li>
    <a class='list-item' href=''>
     <i style=" word-spacing: 10px;
"> Attendence<i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-th-large'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-bar-chart'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-tasks'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-bell'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-archive'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-comment'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-sitemap'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-thumbs-up'></i>
    </a>
  </li>
  <li>
    <a class='list-item' href=''>
      <i class='icon-tumblr'></i>
    </a>
  </li>
</ul>
