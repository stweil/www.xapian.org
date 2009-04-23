<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<? include "version.php"; ?>
<head>
<title>The Xapian Project : Downloads</title>
<? include "styleandmeta.php"; ?>
</head>

<body>

<div id="Content">

<h1>Downloads</h1>

<? if (0) { ?>
<p>The <? echo $branch ?> branch features substantial improvements.
The <code>Xapian::Stem</code>, <code>Xapian::QueryParser</code>,
and <code>Xapian::TermGenerator</code> classes now all handle
Unicode text encoded as UTF-8, as do Omega and xapian-bindings.
The new <code>Xapian::TermGenerator</code>
class provides indexing functionality.  If you wish, you can
read a <a href="http://wiki.xapian.org/ReleaseOverview/">more
complete overview of the changes</a> in the 1.0 release.
</p>
<? } ?>

<p id="<? echo $branch ?>">The latest release is <B><? echo $version ?></B>:</p>

<ul>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-core-<? echo $version ?>.tar.gz">xapian-core</a>: the Xapian library itself
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-core/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-omega-<? echo $version ?>.tar.gz">omega</a>: Omega - an application built on Xapian, consisting of indexers and a CGI search frontend.
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-applications/omega/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/xapian-bindings-<? echo $version ?>.tar.gz">xapian-bindings</a>: SWIG and JNI bindings allowing Xapian to be used from various other programming languages
<a HREF="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/xapian-bindings/NEWS">[news]</a>
<li> <a HREF="http://oligarchy.co.uk/xapian/<? echo $version ?>/Search-Xapian-<? echo $version ?>.0.tar.gz">Search::Xapian</a>: Perl bindings
(<a HREF="http://search.cpan.org/~olly/Search-Xapian-<? echo $version ?>.0/">on CPAN</a>)
<a href="http://svn.xapian.org/*checkout*/tags/<? echo $version ?>/search-xapian/Changes">[news]</a>
(<a HREF="http://search.cpan.org/~olly/Search-Xapian-<? echo $version ?>.0/Changes">on CPAN</a>)
<? if (time() - strtotime($release_date) < 7*24*3600) {
// Show this warning for 7 days after the release
?>
<small>(CPAN mirrors may not update for a few days after a new release)</small>
<? } ?>
</ul>

<p>The wiki contains a <a href="http://wiki.xapian.org/ReleaseNotes">summary of bugs, patches, and workarounds</a>
relating to the latest release.
</p>

<h1 id="deb">Debian and Ubuntu packages</h1>

<p>
Packages of xapian-core, xapian-omega, and xapian-bindings are available from
the Debian and Ubuntu archives (starting with Debian etch and Ubuntu feisty).
For Debian stable, <a href="http://packages.debian.org/search?keywords=xapian&searchon=names&section=all&suite=etch-backports"
>backported versions of more recent packages</a> are also available for all
Debian's supported architectures, courtesy of
<a href="http://backports.org/">backports.org</a>.
</p>

<p>
However, packages aren't available for older Debian or Ubuntu releases, and
those which are available may not be fully up-to-date, so for your convenience
we provide backported packages from our own repository on xapian.org.  If
you're happy with the packages in the Debian or Ubuntu archive, you can ignore
the rest of this section.
</p>

<p>
Currently we supply packages for Debian oldstable (etch), stable (lenny), and
testing/unstable, and for Ubuntu dapper (6.06), hardy (8.04), and intrepid
(8.10).  The repository is signed with a GPG key.
The original key has now expired, so 1.0.7 and later are signed by a
<a href="/debian/archive_key.asc">new key</a> which has this fingerprint:
<p>

<p><code>2F40 2DEE 23BE C7AD C665  CA99 C953 695C 3E84 0A52</code></p>

<p>(Should you need to install a package signed by the
<a href="/debian/archive_key_1.0.1-1.0.5.asc">old key</a>, its fingerprint
was: <code>7E71 70B7 6A23 65C5 DB40  1AE8 52A4 ECB5 287B 9696</code>)</p>

<p>
You'll need to import the registry key so that apt can verify these signatures.
You can do that like so on Debian:
</p>

<blockquote><code><pre>
<span id="prompt">$</span> su -
<i>enter your root password</i>
<span id="prompt">#</span> wget -O- http://www.xapian.org/debian/archive_key.asc|apt-key add -
<span id="prompt">#</span> exit
</pre></code></blockquote>

<p>And on Ubuntu:</p>

<blockquote><code><pre>
<span id="prompt">$</span> wget -O- http://www.xapian.org/debian/archive_key.asc|sudo apt-key add -
<i>enter your root password</i>
</pre></code></blockquote>

<? /*
<p>If you're running Debian oldstable add the following to your sources.list:
</p>

<blockquote><code>
deb http://www.xapian.org/debian oldstable main<br>
deb-src http://www.xapian.org/debian oldstable main
</code></blockquote>
*/ ?>

<p>If you're running Debian stable (etch) add the following to your
sources.list:</p>

<blockquote><code>
deb http://www.xapian.org/debian stable main<br>
deb-src http://www.xapian.org/debian stable main
</code></blockquote>

<p>
If you're running Debian testing (and the packages haven't propagated in
Debian yet) or unstable (and the packages haven't yet been uploaded to
Debian), add the following to your sources.list:
</p>

<blockquote><code>
deb http://www.xapian.org/debian unstable main<br>
deb-src http://www.xapian.org/debian unstable main
</code></blockquote>

<p>
If you're running Ubuntu dapper, add the following:
</p>

<blockquote><code>
deb http://www.xapian.org/debian dapper main<br>
deb-src http://www.xapian.org/debian dapper main
</code></blockquote>

<p>
Ubuntu hardy has 1.0.5 packages, except for xapian-omega which is 1.0.4.
To get newer packages, add the following to your sources.list:
</p>

<blockquote><code>
deb http://www.xapian.org/debian hardy main<br>
deb-src http://www.xapian.org/debian hardy main
</code></blockquote>

<!--
based on 0.9.9 with some backported fixes from
The development version of Ubuntu (gutsy) has all the xapian packages which
should get regularly updated from those in Debian unstable, but if you're
impatient, add the following to your sources.list:
-->

<p>
Currently the Python, PHP, Ruby, Tcl, and Perl bindings are packaged for
Debian and Ubuntu.  The C# and Java bindings aren't yet packaged.
</p>

<p>
Binary packages are currently built for i386 and amd64.  If you're on another
architecture, you can build your own by adding the "deb-src" line above,
then for Debian:
</p>

<blockquote><pre>
<span id="prompt">$</span> su -
<i>enter your root password</i>
<span id="prompt">#</span> apt-get update
<span id="prompt">#</span> apt-get build-dep xapian-core
<span id="prompt">#</span> exit
<span id="prompt">$</span> fakeroot apt-get source -b xapian-core
<span id="prompt">$</span> su -
<i>enter your root password</i>
<span id="prompt">#</span> dpkg -i libxapian* xapian-doc* xapian-tools*
<span id="prompt">#</span> apt-get build-dep xapian-bindings xapian-omega
<span id="prompt">#</span> exit
<span id="prompt">$</span> fakeroot apt-get source -b xapian-bindings xapian-omega
<span id="prompt">$</span> su -
<i>enter your root password</i>
<span id="prompt">#</span> dpkg -i xapian-omega*.deb python-xapian*.deb
<span id="prompt">#</span> exit
</pre></blockquote>

<p>
Or for Ubuntu (Ubuntu doesn't have a root login by default, so you need to
use sudo):
</p>

<blockquote><pre>
<span id="prompt">$</span> sudo apt-get update
<i>enter your root password</i>
<span id="prompt">$</span> sudo apt-get install fakeroot
<span id="prompt">$</span> sudo apt-get build-dep xapian-core
<span id="prompt">$</span> fakeroot apt-get source -b xapian-core
<span id="prompt">$</span> sudo dpkg -i libxapian* xapian-doc* xapian-tools*
<span id="prompt">$</span> sudo apt-get build-dep xapian-bindings xapian-omega
<span id="prompt">$</span> fakeroot apt-get source -b xapian-bindings xapian-omega
<span id="prompt">$</span> sudo dpkg -i xapian-omega*.deb python-xapian*.deb
</pre></blockquote>

<h1 id="RPM">RPM packages</h1>

<h2 id="fedora">Fedora</h2>

<p>Fedora 7 and newer have RPM packages for Xapian in their default
repositories, though these may lag behind the latest releases a bit.</p>

<p>Fabrice Colin used to build RPM packages for Fedora Core 6 and Fedora 7
but these are no longer being updated for newer Xapian releases:</p>

<ul>

<li> <a href="/RPM/fc6/">Fedora Core 6</a> (1.0.1) - binary packages for x86-64 and source RPMs.

<li> <a href="/RPM/fc7/">Fedora 7</a> (1.0.4) - binary packages for i386, x86-64, and ppc, and source RPMs.</p>

</ul>

<!--
<p>If you have Fedora 7, copy <a href="/RPM/fc7/xapian.repo">xapian.repo</a>
into <code>/etc/yum/repos.d/</code> and then you can install the packages
using yum:</p>
<blockquote><pre>
<span id="prompt">$</span> su
<i>enter your root password</i>
<span id="prompt">#</span> cd /etc/yum/repos.d
<span id="prompt">#</span> wget http://www.xapian.org/RPM/fc7/xapian.repo
<span id="prompt">#</span> yum install xapian-omega xapian-bindings-csharp xapian-bindings-php xapian-bindings-python xapian-bindings-tcl8
</pre></blockquote>
-->


<h2 id="rhel">RedHat Enterprise Linux</h2>

<p>Tim Brody has built RPM packages for
<a href="/RPM/rhel4/">RedHat Enterprise Linux 4</a> and
<a href="/RPM/rhel5/">RedHat Enterprise Linux 5</a>
- there are binary packages for i386 and source RPMs.</p>

<p>If you have RHEL 5, copy <a href="/RPM/rhel5/xapian.repo">xapian.repo</a>
into <code>/etc/yum.repos.d/</code> and then you can install the packages
using yum:</p>
<blockquote><pre>
<span id="prompt">$</span> su
<i>enter your root password</i>
<span id="prompt">#</span> cd /etc/yum.repos.d
<span id="prompt">#</span> rm -f xapian.repo
<span id="prompt">#</span> wget http://www.xapian.org/RPM/rhel5/xapian.repo
<span id="prompt">#</span> yum install xapian-omega xapian-bindings-php xapian-bindings-python xapian-bindings-tcl8
</pre></blockquote>

<p>
For RHEL 4, use this <a href="/RPM/rhel4/xapian.repo">xapian.repo</a> instead
if you are using DAG's <code>yum</code>.  Otherwise
you can download the <a href="/RPM/rhel4/">individual packages</a> and install
them by hand.
</p>

<h2 id="srpm">Source RPMs</h2>

<p>
The source RPMs (the three files that end in ".src.rpm") are
not distribution specific - you can build binary RPMs from those
if binary packages aren't available for your architecture or
distribution like so:
</p>
<blockquote><pre>
<span id="prompt">$</span> rpmbuild --rebuild <i>PACKAGENAME</i>.src.rpm
</pre></blockquote>

<h2>Other RPM-based distributions</h2>

<p>These RPM-based distributions have their own RPM packages which might
be better tailored:
</p>

<ul>
<li><a href="http://www.altlinux.com/index.php?module=sisyphus&package=xapian-core">ALT Linux RPMs</a> of xapian-core only</li>
<li><a href="http://software.opensuse.org/download/server:/search/">SuSE RPMs</a> of xapian-core and omega
(and <a href="http://en.opensuse.org/Build_Service/User">instructions for use</a>)</li>
</ul>

<h1>Other Linux Distributions</h1>

<ul>
<li>Gentoo Portage has ebuilds for
<a HREF="http://gentoo-portage.com/dev-libs/xapian">xapian-core</a> and
<a HREF="http://gentoo-portage.com/dev-libs/xapian-bindings">xapian-bindings</a>
</li>
<li>FrugalWare Linux has packaged <a href="http://www.frugalware.org/packages/14387">xapian-core</a>.
</li>
<li>Zenwalk Linux has packaged <a href="http://zur.zenwalk.org/view/package/name/xapian-core">xapian-core</a>.</li>
<li>archlinux has packaged <a href="http://aur.archlinux.org/packages.php?ID=8701">xapian-core</a>, xapian-bindings (<a href="http://aur.archlinux.org/packages.php?ID=19033">Python</a> and <a href="http://aur.archlinux.org/packages.php?ID=14007">PHP</a>),
and <a href="http://aur.archlinux.org/packages.php?ID=21146">Perl Search::Xapian</a>.</li>
</ul>

<h1>FreeBSD Ports Collection</h1>

<p>The FreeBSD Ports Collection has
<a href="http://www.freshports.org/search.php?query=xapian">packages</a> for 
xapian-core, xapian-omega, xapian-bindings (Python and PHP), and Search::Xapian.</p>

<h1>NetBSD pkgsrc</h1>

<p>The NetBSD pkgsrc collection has 
<a href="http://pkgsrc.se/search.php?so=xapian">packages</a>
for xapian-core, xapian-omega, and Search::Xapian.</p>

<h1>Mac OS X</h1>

<p>The <a href="http://www.finkproject.org/">Fink project</a> has <a
href="http://pdb.finkproject.org/pdb/browse.php?summary=xapian">packages</a>
for xapian-core and omega.</p>

<h1>Cygwin</h1>

<p>
Packages for xapian-core, xapian-bindings, and Search::Xapian are available
from <a href="http://sourceware.org/cygwinports/">Cygwin Ports</a>.
Packages for Omega aren't there yet, but you can get
those from 
<a href="http://rurban.xarch.at/software/cygwin/contrib/xapian/">Reini Urban's site</a>.
</p>

<h1>Compiling on MS Windows with MSVC</h1>

<p>You can download <a
href="http://www.flax.co.uk/xapian_windows.shtml">windows binaries and
makefiles for compiling with MSVC</a>, maintained by Lemur Consulting, based on
original packages put together by Ulrik Petersen</p>

<p>
Alexandre Gauthier offers a <a href="http://www.raptorized.com/xapian-python-win32/">pre-built version of xapian-core and the Python bindings</a> for download.
</p>
</div>

<?php
include "cssnav.php";
?>

</body>
</html>
