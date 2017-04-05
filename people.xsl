<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="artist">
  <html>
  <body>
    <h2>User Input</h2>
    <div class="">
        
        
      
      <xsl:for-each select="music">
          <h2>Artist:</h2>
        <p id="1">
          <xsl:value-of select="artist"/>
        </p>
      </xsl:for-each>

    </div>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>