<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <title>Book Library</title>
      </head>
      <body>
        <h1>Product List</h1>
        <table border="1">
          <tr>
            <th>Product</th>
            <th>Price</th>
          </tr>
          <xsl:for-each select="products/product">
            <tr class="table-row">
              <td><xsl:value-of select="name" /></td>
              <td><xsl:value-of select="price" /></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>

