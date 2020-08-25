<div class="jumbotron">
	<div class="container text-center">
		<h1>Laravel 5</h1>
		<p>Hello!</p>
		<p>I made this page to learn the Laravel framework. In the rest of this document, my learning steps are presented. I have linked the steps with some related tutorials. Therefore, if you follow them, you will find proper tutorials for the main functions. I hope it helps you to get familiar with the framework. Of course, I am a learner and if you find something wrong or wanted to add more explanation contact me.</p>
		<h2>1. Installation, Server Requirements and creating a new project</h2>
		<p>Everything about the installation and server requirements is explained in <a href = "https://laravel.com/docs/5.7/installation" target="_blank">this</a> link. However, by usnig <a href="https://github.com/GastonHeim/Laravel-Requirement-Checker" target="_blank"> this package</a>, you can check if your server is qualified.</p>
		<h2>2. Hello world</h2>
		<p>In the frontend section of "https://laravel.com/docs/5.7/", you can find perfect details about the first page. If you want to know where is the<b>"index"</b> file, you should go to public folder. But, if you want to make changes in the first page, then you should modify the welcome page ("resources/views/welcome.blade.php").</p>
		<h2>3. Folders and Files <b>Layout</b> (Blade Templates)</h2>
		<p>It is always good to struct your project. To make our project well organized we can add some sub folders for each part of the project. I believe <a href="https://www.1and1.com/cloud-community/learn/application/php/laravel-tutorial-introduction-to-blade-templates/" target="_blank">this page</a> excellently describes the layout arrangement of a laravel project. It makes it easy to modify all the pages design at once.</p>
		<h2>4. Stylesheet</h2>
		<p>If you are not familiar with javascript, Less and SASS, I recommend you to NOT follow the "Frontend Scaffolding" section in https://laravel.com/docs/5.5/. As first step, I used bootstarp 3 to style my pages. You should just add the the bootstarp CDN to the head file (includes/head.blade.php) and style your pages. If you are not familiar with bootsrap, you can use <a href="https://www.w3schools.com/bootstrap/default.asp" target="_blank">this link</a>.</p>
		<h2>5. Menu</h2>
		<p>It is possible to make the menu with HTML and bootstrap but, I think it is better to use some of Laravel magics! For example, you can make a dynamic navigation bar. <a href="https://github.com/lavary/laravel-menu" target="_blank">This page</a> covers what you need to make your Laravel menu. </p>
	</div>
</div>
