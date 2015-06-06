<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
	  xmlns:html="http://www.w3.org/TR/REC-html40"
	  xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
	  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>XML Sitemap</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		body {
		   color: #545353;
		   font-family: Helvetica, Arial, sans-serif;
		   font-size: 1em;	   
		}
		table {
		   border: none;
		   border-collapse: collapse;
		}
		#sitemap tr:nth-child(odd) {
			background-color: #eee;
		}
		#sitemap tbody tr:hover {
		   background-color: #ccc;
		}
		#sitemap tbody tr:hover td, #sitemap tbody tr:hover td a {
		   color: #000;
		}
		#content {
		   margin: 0 auto;
		   width: 1000px;
		}
		a {
		   color: #000;
		   text-decoration: none;
		}
		a:visited {
		   color: #777;
		}
		a:hover {
		   text-decoration: underline;
		}
		td {
		   font-size: 11px;
		}
		th {
		   text-align: left;
		   padding-right: 30px;
		   font-size: 0.95em;
		}
		thead th {
		   border-bottom: 1px solid #333333;
		   cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="content">
		<h1>Website Sitemap</h1>
		<p>This is an XML Sitemap, meant for consumption by search engines.<br/>
		You can find more information about XML sitemaps on <a href="http://sitemaps.org">sitemaps.org</a>.</p>					
		<xsl:if test="count(sitemap:sitemapindex/sitemap:sitemap) &gt; 0">
		<p class="expl">This XML Sitemap Index file contains <xsl:value-of select="count(sitemap:sitemapindex/sitemap:sitemap)"/> sitemaps.</p>
		<table id="sitemap" cellpadding="3">
			<thead>
				<tr>
					<th width="75%">Sitemap</th>
					<th width="25%">Last Modified</th>
				</tr>
			</thead>
			<tbody>
				<xsl:for-each select="sitemap:sitemapindex/sitemap:sitemap">
				<xsl:variable name="sitemapURL">
				<xsl:value-of select="sitemap:loc"/>
				</xsl:variable>
				<tr>
					<td><a href="{$sitemapURL}"><xsl:value-of select="sitemap:loc"/></a></td>
					<td><xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/></td>
				</tr>
				</xsl:for-each>
			</tbody>
		</table>
		
		</xsl:if><xsl:if test="count(sitemap:sitemapindex/sitemap:sitemap) &lt; 1">
		<p class="expl">This sitemap contains <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> links.</p>			
		
		<table id="sitemap" cellpadding="3">
			<thead>
				<tr>
					<th width="80%">URL</th>
					<th title="Change Frequency" width="5%">Ch. Freq.</th>
					<th title="Last Modification Time" width="10%">Last Mod.</th>
				</tr>
			</thead>
			<tbody>
				<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
				<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
				<xsl:for-each select="sitemap:urlset/sitemap:url">
				<tr>
					<td>
						<xsl:variable name="itemURL">
						<xsl:value-of select="sitemap:loc"/>
						</xsl:variable>
						<a href="{$itemURL}">
							<xsl:value-of select="sitemap:loc"/>
						</a>
					</td>
					<td><xsl:value-of select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/></td>
					<td><xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/></td>
				</tr>
				</xsl:for-each>
			</tbody>
		</table>
		
	</xsl:if>
	</div>					
</body>
</html>
</xsl:template>
</xsl:stylesheet>