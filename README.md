# HTML/CSS/JavaScript Programming Exercises

**HTML/CSS/JavaScript Tutorials**
* http://htmldog.com
* https://www.w3schools.com/js/default.asp
* https://developer.mozilla.org/en-US/docs/Learn/JavaScript
* http://www.runoob.com/js/js-tutorial.html

**YouTube Tutorials for HTML/CSS/JavaScript**
* https://www.youtube.com/playlist?list=PLoYCgNOIyGAB_8_iq1cL8MVeun7cB6eNc
* https://www.youtube.com/playlist?list=PL-osiE80TeTucQUM10Ezv4S7SVoFozLMK

**HTML/CSS Reference**
* http://htmldog.com/references/

**JavaScript Reference**
* https://developer.mozilla.org/bm/docs/Web/JavaScript/Reference

**Essetial Library, Framework and Teamplates**
* https://getbootstrap.com
* http://jquery.com
---

## Common HTML Tags & Attributes

**&lt;link&gt;** commonly used to establish a link to a style sheet.<br>
**&lt;meta&gt;** commonly used to define a character set or keyword meta information.<br>
<br>
**&lt;div&gt;** tag defines a **division** or a section in an HTML document.<br>
**&lt;div id&gt;** attribute is used to uniquely identify an HTML element<br>
<br>
**&lt;p&gt;** tag defines a **paragraph** that contains text.<br>
**&lt;span&gt;** tag is used to **group inline-elements** in a document.<br>
<br>
**&lt;h1&gt;** to **&lt;h6&gt;** Headings varying in weight<br>
**&lt;ol&gt;** ordered list<br>
**&lt;ul&gt;** unordered list<br>
**&lt;li&gt;** list items inside &lt;ol&gt; or &lt;ul&gt; elements.<br>
<br>
**&lt;table&gt;** creates a table<br>
**&lt;tr&gt;** table row<br>
**&lt;th&gt;** table header<br>
**&lt;td&gt;** table cell<br>
<br>
**&lt;a&gt;** tag defines a “clickable” hyperlink to another webpage or other online content.<br>
**&lt;a href&gt;** (hypertext reference) attribute defines the link.<br>
<br>
**&lt;img&gt;** image tag with attributes, **src** and **alt**<br>
**&lt;img src&gt;** (source)– defines the image name, type and location.<br>
**&lt;img alt&gt;** (alternate) – defines a text description for the image.<br>
<br>
**&lt;br&gt;** inserts a single **line break**.<br>
**&lt;hr&gt;** horizontal rule tag is used to show a thematic break, by default renders as a simple horizontal line.<br>
**&lt;em&gt;** defines emphasised text and renders, by default as italic.<br>
**&lt;strong&gt;** defines important text and renders, by default as bold.<br>
---

## HTML Tag Usage
```html
<tagname>Element content</tagname>
<tagname attribute_name>Element content</tagname>
<tagname attribute_name="attribute_value">Element content</tagname>
```

## CSS Property Usage
```html
<style>
    selector { property1:value1; property2:value2;}

    selector1, selector2, selector3 {
        property1:value1;
        property2:value2;
        property3:value3;
    }
</style>
```
---

## jQuery Library Usage
```html
<script src="bower_components/jquery/jquery.js"></script>
<script>
    $(function() {
        $("#ID").METHOD();
    });
</script>
```
---

## JSON Syntax
```js
var obj = {
    "key1":"value1",
    "key2":["v1", "v2", "v3"],
    "key3":{"key":"value"}
};
```
* In JSON, **keys** must be **strings** and written with **double quotes**.
---

## Publish Website Online
#### 1. Buy a domina name
* https://www.godaddy.com/
* https://www.namecheap.com

#### 2. Rent a webhost
* https://www.hostgator.com/
* https://www.siteground.com

#### 3a. Upload your files to webhost (Windows/MacOS)
* https://cyberduck.io/

#### 3b. Use **ssh** to access your server and **scp** to copy files from local to remote (Linux/MacOS)
```sh
# Replace the following CAPITAL letters as appreciate
$ ssh -P PORT_NUMBER USERNAME@IP_ADDRESS                            # ex. ssh -P 2222 abc@123.123.1.1
$ scp -P PORT_NUMBER LOCAL_DIR USERNAME@IP_ADDRESS:ROMOTE_DIR       # ex. scp -P 2222 ./file abc@123.123.1.1:~/
```
---

## Install LAMP (Linux, Apache, MySQL, PHP)
#### Install Apache
```sh
$ sudo apt-get update
$ sudo apt-get install apache2
# Check Apache
# Open Browser with address http://localhost
```

#### Install PHP
```sh
$ sudo apt-get install php
$ sudo /etc/init.d/apache2 restart
# Check PHP
$ sudo vim /var/www/html/hello.php
# Open Browser with address http://localhost/hello.php
```

#### Install MySQL
```sh
$ sudo apt-get install mysql-server
# Check MySQL
$ mysql -u root -p
$ \q
```

#### Install phpMyAdmin
```sh
$ sudo apt-get install phpmyadmin
# Check phpMyAdmin
$ sudo vim /etc/php/7.0/apache2/php.ini
# uncomment extension=msql.so
# Add the following in the php.ini file
# Include /etc/phpmyadmin/apache.conf
$ sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
$ sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
$ sudo service apache2 restart
$ sudo /etc/init.d/apache2 restart
# Open Browser with address http://localhost/phpmyadmin/
```