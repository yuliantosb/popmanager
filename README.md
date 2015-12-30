# Pop Manager V. 1.0
Easy media manager, easy and simply file manager using Bootstrap, PHP MySQL and JQuery AJAX.
this plugin is combined with Dropzone.js, Bootstrap Vertical Tab, and Image Picker,
Thanks for contribute my first project, I will glad if you not delete the credit, and also give me an advice.
I'm still beginner, please tell me if there are a bugs.
#Special Thanks to
<ul>
  <li><a href="http://www.dropzonejs.com/">Dropzone.js</a></li>
  <li><a href="https://github.com/dbtek/bootstrap-vertical-tabs">Bootstrap Vertical Tab</a></li>
  <li><a href="http://rvera.github.io/image-picker/">Image Picker</a></li>
</ul>
#Usage
<h2> Create folder on your localhost </h2>
please create the folder on your localhost, ex: popmanager, if you first time know abaout localhost then you must install XAMPP, and then move all these file into <code>C://xampp/htdocs/popmanager</code>
<h2> Add the database </h2>
create the database using phpmyadmin you can access via browser <code>localhost/phpmyadmin</code> and then use this query:
<br>
<code>create database `popmanager`;
<br>
use `popmanager`;
<br>
create table `images`
(
  `id` int auto_increment,
  `file_name` varchar(200),
  `alt` text,
  `size` int,
  primary key (`id`)
);
</code>
<h2>Access popmanager</h2>
Access this application use this link <code>localhost/popmanager</code><br>
and enjoy this Aplication.
