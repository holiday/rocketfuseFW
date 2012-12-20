<h1>RocketFuse Framework</h1>
<h2>About the Framework</h2>
<p>This framework is being developed and maintained by RocketFuse. The sole purpose is to create an MVC style architecture that is very lightweight, easy to install and 
solve many tedious tasks web developers encounter. Basically we were tired of heavy weight frameworks that have pages of documentation and little or no community 
support. Any components we decide to add later will be modular and you will be able to choose whether to install it or not. They will be readily available in the 'lib' folder. To use them simply drag and drop the modules into that folder. Modules can then be loaded dynamically by using the built in Loader class.</p>

<h2>Installation Instructions</h2>

<p>Clone the repository into your webserver (MAMP, XAMPP, etc), normally the 'htdocs' folder by running:</p>
<pre>
git clone https://github.com/holiday/rocketfuseFW.git
</pre>

<p>Make sure you add a <strong>virtual host</strong> for your domain. Do NOT use the default webserver domain (http://localhost/rocketfuseFW). Instead setup a virtual host that points to the framework's directory. A good tutorial can be found at <code>http://httpd.apache.org/docs/2.2/vhosts/examples.html</code>. Once your Virtual Host is setup, you should be able to access the framework from a url such as <code>http://myLocalSite.com/</code></p>

<p>Finally modify your <strong>hosts file</strong>. If your on a mac this file is <code>/etc/hosts</code>. If you are on a windows, your hosts file is <code>C:/Windows/system32/drivers/hosts</code>. Append the following (remember to change the domain to whatever you used in the VirtualHost)</p>

<pre>
127.0.0.1 www.myLocalSite.com
127.0.0.1 myLocalSite.com
</pre>

