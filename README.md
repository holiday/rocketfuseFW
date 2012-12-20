Rocketfuse Framework 0.1

<h2>About the Framework</h2>
<p>This framework is being developed and maintained by RocketFuse. The sole purpose is to create an MVC style architecture that is very lightweight, easy to install and 
solve many tedious tasks web developers encounter. Basically we were tired of heavy weight frameworks that have pages of documentation and little or no community 
support. Any components we decide to add later will be modular and you will be able to choose whether to install it or not. They will be readily available in the 'lib' folder. To use them simply drag and drop the modules into that folder. Modules can then be loaded dynamically by using the built in Loader class.</p>

<h2>Installation Instructions</h2>
<ul>
	<li>
		<p>Clone the repository into your webserver (MAMP, XAMPP), normally the 'htdocs' folder by running:</p>
		<pre>
			git clone https://github.com/holiday/rocketfuseFW.git
		</pre>
	</li>

	<li>
		<p>Make sure you add a virtual host for your domain. Do NOT use the default webserver domain (http://localhost/mysite). Instead setup a virtual host that points to the framework's directory.</p>
	
		<p><b>*Note if you are using MAMP, this can be done from the MAMP interface, google it.</b></p>
	<pre>
		NameVirtualHost *:80
		<VirtualHost *:80>
		DocumentRoot "C:/xampp/htdocs/rocketfuseFW" #directory of the framework
		ServerName www.myLocalSite.com #whatever sitename you want to simulate locally
		</VirtualHost>
	</pre>
	<p>Finally modify your hosts file for the 'ServerName' you chose in the VirtualHost. If your on a mac this file is '/etc/hosts'. If you are on a windows, your hosts file is 'C:/Windows/system32/drivers/hosts'.</p>

	<pre>
		127.0.0.1 www.myLocalSite.com
		127.0.0.1 myLocalSite.com
	</pre>

	</li>
</ul>

