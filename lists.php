<? include "niceurl.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>The Xapian Project : Mailing Lists</title>
<? include "styleandmeta.php"; ?>
</head>

<body>

<div id="Content">

<h1>Mailing Lists</h1>

<p>There are three mailing lists relating to Xapian:</p>
<ul>
<li> <tt><a href="http://lists.xapian.org/mailman/listinfo/xapian-discuss">xapian-discuss</a></tt> for general discussions about the Xapian project
[<a href="http://gmane.org/info.php?group=gmane.comp.search.xapian.general">Gmane</a>]
<li> <tt><a href="http://lists.xapian.org/mailman/listinfo/xapian-devel">xapian-devel</a></tt> for technical discussions about the development of Xapian 
[<a href="http://gmane.org/info.php?group=gmane.comp.search.xapian.devel">Gmane</a>]
<li> <tt><a href="http://lists.xapian.org/mailman/listinfo/xapian-commits">xapian-commits</a></tt> receives details of SVN commits (can be a <em>lot</em> of messages)
[<a href="http://gmane.org/info.php?group=gmane.comp.search.xapian.cvs">Gmane</a>]
<li> <tt><a href="http://lists.xapian.org/mailman/listinfo/xapian-tickets">xapian-tickets</a></tt> receives details of trac ticket changes (can be a <em>lot</em> of messages)
<!-- FIXME: need to subscribe tickets list to gmane...
[<a href="http://gmane.org/info.php?group=gmane.comp.search.xapian.cvs">Gmane</a>]
-->
</ul>

<p>The [Gmane] links take you to the Gmane news gateway which allows you to
read these lists with a newsreader, or browse the archives on the web.</p>
</p>

<p>Posts from non-subscribers currently require approval (we'd rather not
have to impose this restriction, but we also want to avoid relaying spam
to our subscribers).  So if you aren't subscribed, there's likely to be
a delay before your message is approved and relayed to the list.  Please
be patient and don't resend a message just because it doesn't appear right
away.
</p>

<p>
If you only want announcements, you can:
</p>

<ul>
<li> Follow <a href="http://identi.ca/xapian">@xapian on identi.ca</a>
(also gatewayed to <a href="http://twitter.com/xapian">twitter</a>)
<li> Join the <a href="http://identi.ca/group/xapian">!xapian identi.ca group</a>
<li> "Subscribe" to the
<a href="http://freecode.com/projects/xapian/">Xapian project on
Freecode</a> (release announcements only)
</ul>

<h2>Searching the lists</h2>

<form method="get" action="http://search.gmane.org/">
<p>
Search
<select name="group">
<option value="gmane.comp.search.xapian.general">xapian-discuss</option>
<option value="gmane.comp.search.xapian.devel">xapian-devel</option>
<option value="gmane.comp.search.xapian.*">all xapian</option>
</select>
list archives for <input type="text" name="query">
<input type="submit" value="Search">
</p>
</form>

</div>

<?php
include "cssnav.php";
?>

</body>
</html>
