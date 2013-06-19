<h1>Index Controller</h1>
<p>Welcome to Drygia index controller.</p>

<h2>Download</h2>
<p>You can download Drygia from github.</p>
<blockquote>
<code>git clone git://github.com/FreKil/kmom07.git</code>
</blockquote>
<p>You can review its source directly on github: <a href='https://github.com/FreKil/kmom07'>https://github.com/FreKil/kmom07</a></p>

<h2>Installation</h2>
<p>First you have to make the data-directory writable. This is the place where Lydia needs
to be able to write and create files.</p>
<blockquote>
<code>cd kmom07/PHPMVC; chmod 777 site/data</code>
</blockquote>

<p>Second, Lydia has some modules that need to be initialised. You can do this through a
controller. Point your browser to the following link.</p>
<blockquote>
<a href='<?=create_url('modules/install')?>'>modules/install</a>
</blockquote>